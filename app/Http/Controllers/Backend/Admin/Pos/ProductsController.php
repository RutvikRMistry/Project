<?php
namespace App\Http\Controllers\Backend\Admin\Pos;
use App\Model\POS\Product;
use App\Model\POS\Brands;
use App\Model\POS\Category;
use App\Model\POS\Unit;
use App\Model\POS\TaxRate;
use App\Model\POS\VariationTemplate;
use App\Model\POS\ProductVariation;
use App\Model\POS\VariationValueTemplate;
use App\Model\POS\Variation;
use App\Model\POS\Business;
use App\Model\POS\PurchaseLine;
use App\Model\POS\VariationLocationDetails;
use App\Model\POS\BusinessLocation;
use Illuminate\Http\Request;

use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Input;
use File;
use DB;
use Session;
use App\Http\Controllers\Controller;
use App\Utils\ProductUtil;
use App\Utils\ModuleUtil;
class ProductsController extends Controller
{
	
	
	 protected $productUtil;

    private $barcode_types;
	
	/**
     * Constructor
     *
     * @param ProductUtils $product
     * @return void
     */
    public function __construct(ProductUtil $productUtil, ModuleUtil $moduleUtil,Product $product)
    {
        $this->productUtil = $productUtil;
        $this->moduleUtil = $moduleUtil;
        $this->product = $product;

        //barcode types
        $this->barcode_types = $this->productUtil->barcode_types();
    }
	
	
    public function index(){
		//print_r( $this->barcode_types);
		//die;
		//$products = DB::connection('mysql_banquet_pos')->table('products')->get();
		//$business_id = request()->session();
		//echo '<pre>';
		//print_r($business_id);die;
		$business_id = 1;
		$products = Product::leftJoin('brands', 'products.brand_id', '=', 'brands.id')
                ->leftJoin('units', 'products.unit_id', '=', 'units.id')
                ->leftJoin('categories as c1', 'products.category_id', '=', 'c1.id')
                ->leftJoin('categories as c2', 'products.sub_category_id', '=', 'c2.id')
                ->leftJoin('tax_rates', 'products.tax', '=', 'tax_rates.id')
                ->where('products.business_id', $business_id)
                ->where('products.type', '!=', 'modifier')
                ->select(
                    'products.id',
                    'products.name as product',
                    'products.type',
                    'c1.name as category',
                    'c2.name as sub_category',
                    'units.actual_name as unit',
                    'brands.name as brand',
                    'tax_rates.name as tax',
                    'products.sku',
                    'products.alert_quantity',
                   
                )->get();
				//echo '<pre>';
				//print_r($products);
				//die();
				
			
		 return view('backend.admin.pos.products.index',compact(
		 'products'
		 ));
	}	
	
	public function addProduct(){
		
		$business_id = 1;
		 $units = Unit::where('business_id', $business_id)->get();
		 $barcode_types = $this->barcode_types;
        $barcode_default =  $this->productUtil->barcode_default();
		//echo '<pre>';
		//print_r($barcode_types);
		//die;
		 return view('backend.admin.pos.products.add_product',compact(
		 'units',
		 'barcode_types',
		 'barcode_default'
		 ));
	}	
	
	public function storeProduct(Request $request){
		$rules = array(
			'name' => 'required',
			'unit_id' => 'required',
			'sku' => 'required',
			'type' => 'required',
			'alert_quantity' => 'required|numeric',
			'weight' => 'required|numeric',
			'image' => 'required|image|mimes:jpeg,png,jpg|max:1524',
		
		);
		$this->validate($request ,$rules);
		  $business_id = 1;
		  $created_by = 1;
            $product_details = $request->only(['name', 'brand_id', 'unit_id', 'category_id', 'tax', 'type', 'barcode_type', 'sku', 'alert_quantity', 'weight', 'product_custom_field1', 'product_custom_field2', 'product_custom_field3', 'product_custom_field4']);
            $product_details['business_id'] = $business_id;
            $product_details['created_by'] = $created_by;
            $product_details['tax_type'] = 'exclusive';
			$product_details['enable_stock'] = $request->has('enable_stock') == 'on' ? '1' : '0';
			$product_details['enable_sr_no'] = $request->has('enable_sr_no') == 'on' ? '1' : '0';

            if (!empty($request->input('sub_category_id'))) {
                $product_details['sub_category_id'] = $request->input('sub_category_id') ;
            }

            if (empty($product_details['sku'])) {
                $product_details['sku'] = ' ';
            }

            $expiry_enabled = $request->session()->get('business.enable_product_expiry');
            if (!empty($request->input('expiry_period_type')) && !empty($request->input('expiry_period')) && !empty($expiry_enabled) && ($product_details['enable_stock'] == 1)) {
                $product_details['expiry_period_type'] = $request->input('expiry_period_type');
                $product_details['expiry_period'] = $this->productUtil->num_uf($request->input('expiry_period'));
            }
            //upload document
            if ($request->hasFile('image') && $request->file('image')->isValid()) {
                if ($request->image->getSize() <= config('constants.image_size_limit')) {
                    $new_file_name = time() . '_' . $request->image->getClientOriginalName();
                    $image_path = config('constants.product_img_path');
                    $path = $request->image->storeAs($image_path, $new_file_name);
                    if ($path) {
                        $product_details['image'] = $new_file_name;
                    }
                }
            }
			$product = Product::create($product_details);
			
			 if (empty(trim($request->input('sku')))) {
                $sku = $this->productUtil->generateProductSku($product->id);
                $product->sku = $sku;
                $product->save();
            }
			 if ($product->type == 'single') {
                $this->productUtil->createSingleProductVariation($product->id, $product->sku, $request->input('single_dpp'), $request->input('single_dpp_inc_tax'), $request->input('profit_percent'), $request->input('single_dsp'), $request->input('single_dsp_inc_tax'));
            } elseif ($product->type == 'variable') {
                if (!empty($request->input('product_variation'))) {
                    $input_variations = $request->input('product_variation');
                    $this->productUtil->createVariableProductVariations($product->id, $input_variations);
                }
            }

            //Add product racks details.
            $product_racks = $request->get('product_racks', null);
            if (!empty($product_racks)) {
                $this->productUtil->addRackDetails($business_id, $product->id, $product_racks);
            }
		Session::flash('msg','Added Successfully');
		return redirect()->route('backend.admin.pos.product.index');
	}
	
	public function editProduct($id){
		$business_id = 1;
		 $units = Unit::where('business_id', $business_id)->get();
		 $barcode_types = $this->barcode_types;
        $barcode_default =  $this->productUtil->barcode_default();
		$product = product::where('business_id', $business_id)->where('id',$id)->get()->first();
		 return view('backend.admin.pos.products.edit_product',compact(
			'units',
			'barcode_default',
			'barcode_types',
			'product'
		 ));
	}
	public function updateProduct(Request $request,$id){
		$rules = array(
			'name' => 'required',
			'unit_id' => 'required',
			'sku' => 'required',
			'type' => 'required',
			'alert_quantity' => 'required|numeric',
			'weight' => 'required|numeric',
			'image' => 'nullable|image|mimes:jpeg,png,jpg|max:1524',
		
		);
		$this->validate($request ,$rules);
		
		$business_id = 1;
		  $created_by = 1;
            $product_details = $request->only(['name', 'brand_id', 'unit_id', 'category_id', 'tax', 'type', 'barcode_type', 'sku', 'alert_quantity', 'weight', 'product_custom_field1', 'product_custom_field2', 'product_custom_field3', 'product_custom_field4']);
            $product_details['business_id'] = $business_id;
            $product_details['created_by'] = $created_by;
            $product_details['tax_type'] = 'exclusive';
			$product_details['enable_stock'] = $request->has('enable_stock') == 'on' ? '1' : '0';
			$product_details['enable_sr_no'] = $request->has('enable_sr_no') == 'on' ? '1' : '0';

            if (!empty($request->input('sub_category_id'))) {
                $product_details['sub_category_id'] = $request->input('sub_category_id') ;
            }

            if (empty($product_details['sku'])) {
                $product_details['sku'] = ' ';
            }

            $expiry_enabled = $request->session()->get('business.enable_product_expiry');
            if (!empty($request->input('expiry_period_type')) && !empty($request->input('expiry_period')) && !empty($expiry_enabled) && ($product_details['enable_stock'] == 1)) {
                $product_details['expiry_period_type'] = $request->input('expiry_period_type');
                $product_details['expiry_period'] = $this->productUtil->num_uf($request->input('expiry_period'));
            }
            //upload document
            if ($request->hasFile('image') && $request->file('image')->isValid()) {
                if ($request->image->getSize() <= config('constants.image_size_limit')) {
                    $new_file_name = time() . '_' . $request->image->getClientOriginalName();
                    $image_path = config('constants.product_img_path');
                    $path = $request->image->storeAs($image_path, $new_file_name);
                    if ($path) {
                        $product_details['image'] = $new_file_name;
                    }
                }
            }
			$product = Product::where('id',$id)->update($product_details);
			
			 if (empty(trim($request->input('sku')))) {
                $sku = $this->productUtil->generateProductSku($product->id);
                $product->sku = $sku;
                $product->save();
            }
            

		Session::flash('msg','Updated Successfully');
		return redirect()->route('backend.admin.pos.product.index');
		
		
		
	}
	
	public function deleteProduct($id){
		$table = Product::findorfail($id);
		$table->delete();
		Session::flash('errmsg','Deleted Successfully');
		return redirect()->back();
		 
	}
	
	public function viewProduct($id){
		$business_id = 1;
		$pro = product::where('business_id', $business_id)->where('id',$id)->get()->first();
		 return view('backend.admin.pos.products.view_product',compact(
		 'pro'
		 ));
	}
	
	public function printLabel(){
		 return view('backend.admin.pos.products.print_label');
	}	
	
	
	
	public function variations(){
		$business_id = 1;

		$variations= DB::connection('mysql_banquet_pos')->table('variation_templates as v')
			->leftjoin ('variation_value_templates as vvt','vvt.variation_template_id','=','v.id')
			->select('v.id','v.name as v_name','vvt.name','vvt.variation_template_id', DB::raw('GROUP_CONCAT(DISTINCT vvt.name SEPARATOR ", ") AS value') )
			->groupBy('vvt.variation_template_id')
			->get();
		//echo '<pre>';
		//print_r($variations);
		//die;
		return view('backend.admin.pos.products.variations',compact(
			'variations'
		 ));
	}
	
	public function addVariation(){
		 return view('backend.admin.pos.products.add_variation');
	}
	
	public function storeVariation(Request $request){
		
		$rules = array(
		
			'name' => 'required',
			'variation_values.*' => 'required '
		);
		$this->validate($request , $rules);
		
		
		$input = $request->only(['name']);
		$business_id = 1;
            $input['business_id'] = $business_id;
            $variation = VariationTemplate::create($input);
           // echo '<pre>';
		//print_r($request->input());
		//die; 
            //craete variation values
            if (!empty($request->input('variation_values'))) {
                $values = $request->input('variation_values');
                $data = [];
                foreach ($values as $value) {
                    if (!empty($value)) {
                        $data[] = [ 'name' => $value];
                    }
                }
                $variation->values()->createMany($data);
				Session::flash('msg','Added Successfully');
				return redirect()->route('backend.admin.pos.product.variation');
            }
	}
	
	public function editVariation($id){
		$business_id = 1;
            $variation = VariationTemplate::where('business_id', $business_id)
                            ->with(['values'])->find($id);
		 return view('backend.admin.pos.products.edit_variation',compact(
		 'variation'
		 ));
	}
	
	public function updateVariation(Request $request,$id){
		$rules = array(
		
			'name' => 'required',
			'variation_values.*' => 'required '
		);
		$this->validate($request , $rules);
		 $input = $request->only(['name']);
                $business_id = 1;

                $variation = VariationTemplate::where('business_id', $business_id)->findOrFail($id);
                $variation->name = $input['name'];
				
                $variation->save();
                
                //update variation
                if (!empty($request->input('variation_values'))) {
                    $values = $request->input('variation_values');
                    $data = [];
                    foreach ($values as $value) {
                        if (!empty($value)) {
                            $data[] = new VariationValueTemplate([ 'name' => $value]);
                        }
                    }
                    $variation->values()->delete();
                    $variation->values()->saveMany($data);
                }
		Session::flash('msg','Updated Successfully');
		return redirect()->route('backend.admin.pos.product.variation');
	}
	public function deleteVariation($id){
	$del = VariationTemplate::findorfail($id);
	$del->delete();
	Session::flash('errmsg','Deleted Successfully');
	return redirect()->back();
	}
	
	
	
	
	public function importProducts(){
		 return view('backend.admin.pos.products.import_products');
	}
	
	public function importOpening(){
		 return view('backend.admin.pos.products.import_opening');
	}	

	public function addOpeningStock(){
		 return view('backend.admin.pos.products.add_opening_stock');
	}	
}
