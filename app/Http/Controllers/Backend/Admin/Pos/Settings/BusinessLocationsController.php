<?php
namespace App\Http\Controllers\Backend\Admin\Pos\Settings;

use Illuminate\Http\Request;
use App\Model\Pos\BusinessLocation;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Input;
use File;
use App\Http\Controllers\Controller;
use DB;
use Session;
use App\Model\POS\InvoiceLayout;
use App\Model\POS\InvoiceScheme;
use App\Utils\Util;
use App\Utils\ModuleUtil;

class BusinessLocationsController extends Controller
{
	//protected $commonUtil;
	public function __construct(Util $commonUtil, ModuleUtil $moduleUtil,BusinessLocation $business)
    {
        $this->commonUtil = $commonUtil;
        $this->moduleUtil = $moduleUtil;
		$this->business = $business;
    }
	
    public function index(){
		
		
		$location = DB::connection('mysql_banquet_pos')->table('business_locations')->get();
		 return view('backend.admin.pos.settings.business_locations',compact(
		 'location'
		 ));
	}	
	
	public function add(){
		
		 //if (!auth()->user()->can('business_settings.access')) {
            //return view('unauthorize');abort(403, 'Unauthorized action.'/* test */);
        //}
		//echo '<pre>';
		//print_r('user.business_id');
		//die;
        $business_id = request()->session()->get('user.business_id');
		
		 $invoice_layouts = InvoiceLayout::where('business_id', $business_id)
                            ->get()
                            ->pluck('name', 'id');
							//echo $this->name;
							//die;
        $invoice_schemes = InvoiceScheme::where('business_id', $business_id)
                            ->get()
                            ->pluck('name', 'id');
		$loc = DB::connection('mysql_banquet_pos')->table('business_locations')->get()->first();
		 return view('backend.admin.pos.settings.add_business_location',compact(
		 'invoice_layouts',
		 'invoice_schemes',
		 'loc'
		 ));
	}	
	
	
	public function create(Request $request){
		
			
				$rules=array(
					'name'=>'required',
					'city'=>'required',
					'zip_code'=>'required|numeric',
					'state'=>'required',
					'country'=>'required',
					'mobile'=>'required|min:6',
					'email'=>'required|email',
					'invoice_scheme_id'=>'required|numeric',
					'invoice_layout_id'=>'required|numeric'
				
				);
			$this->validate( $request , $rules);
			
			$input = $request->only(['name', 'landmark', 'city', 'state', 'country', 'zip_code', 'invoice_scheme_id',
                'invoice_layout_id', 'mobile', 'alternate_number', 'email', 'website', 'custom_field1', 'custom_field2', 'custom_field3', 'custom_field4', 'location_id','business_id']);

           // $input['business_id'] = $business_id;

            //Update reference count
           // $ref_count = $this->commonUtil->setAndGetReferenceCount('business_location');

            if (empty($input['location_id'])) {
                $input['location_id'] = $this->commonUtil->generateReferenceNumber('business_location', $ref_count);
            }

            $location = BusinessLocation::create($input);
			Session::flash('msg','Added Successfully');
			return redirect()->route('backend.admin.pos.setting.business_location');
			
			
		
	}
	
	public function edit(Request $request,$id){
		$business_id = request()->session()->get('user.business_id');
		$invoice_layouts = InvoiceLayout::where('business_id', $business_id)
                            ->get()
                            ->pluck('name', 'id');
							//echo $this->name;
							//die;
        $invoice_schemes = InvoiceScheme::where('business_id', $business_id)
                            ->get()
                            ->pluck('name', 'id');
		$loc = DB::connection('mysql_banquet_pos')->table('business_locations')->get()->where('id' , $id)->first();
		 return view('backend.admin.pos.settings.edit_business_location',compact(
		    'loc',
			'invoice_layouts',
			'invoice_schemes'
		 ));
	}
	
	
	public function update(Request $request, $id){
		$rules=array(
					'name'=>'required',
					'city'=>'required',
					'zip_code'=>'required|numeric',
					'state'=>'required',
					'country'=>'required',
					'mobile'=>'required|min:6',
					'email'=>'required|email',
					'invoice_scheme_id'=>'required|numeric',
					'invoice_layout_id'=>'required|numeric'
				
				);
			$this->validate( $request , $rules);
			 $input = $request->only(['name', 'landmark', 'city', 'state', 'country', 'zip_code', 'invoice_scheme_id',
                'invoice_layout_id', 'mobile', 'alternate_number', 'email', 'website', 'custom_field1', 'custom_field2', 'custom_field3', 'custom_field4', 'business_id']);
            
            //$business_id = $request->session()->get('user.business_id');

            BusinessLocation::where('id', $id)
                            ->update($input);
		//where('business_id', $business_id)   this is after work on after ::
		Session::flash('msg','Updated Successfully');
		 return redirect()->route('backend.admin.pos.setting.business_location');
	}
	
	
	public function settings($id){
		
			$loc = DB::connection('mysql_banquet_pos')->table('business_locations')->get()->where('id', $id)->first();
		 return view('backend.admin.pos.settings.business_location_settings',compact(
			'loc'
		 ));
	}
	
	public function updateSettings($id,Request $request){
		$input = $request->only(['print_receipt_on_invoice', 'receipt_printer_type', 'invoice_layout_id', 'invoice_scheme_id',]);
            BusinessLocation::where('id', $id)
                            ->update($input);
		
		Session::flash('msg','Updated Successfully');
		 return redirect()->back();
	}
	
	public function delete($id){
		$table =  $this->business->findOrFail($id);
        $table->delete();
		Session::flash('errmsg','Updated Successfully');
		 return redirect()->back();
	}
	
}
