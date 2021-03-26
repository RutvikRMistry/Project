<?php
namespace App\Http\Controllers\Backend\Admin\Pos\Settings;

use Illuminate\Http\Request;

use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Input;
use File;
use App\Http\Controllers\Controller;
use DB;
use Session;
use App\Model\POS\TaxRate;
use App\Model\POS\GroupSubTax;
use App\Utils\TaxUtil;
class TaxRatesController extends Controller
{
	
	 public function __construct(TaxUtil $taxUtil,TaxRate $taxrate)
    {
        $this->taxUtil = $taxUtil;
        $this->taxrate = $taxrate;
    }
	
	
    public function index(){
		
		$tax = DB::connection('mysql_banquet_pos')->table('tax_rates')->where('deleted_at','=',NULL)->get();
		 return view('backend.admin.pos.settings.tax_rates',compact(
			'tax'
		 ));
	}	
	
	public function add(){
		$tax = DB::connection('mysql_banquet_pos')->table('tax_rates')->get()->first();
		 return view('backend.admin.pos.settings.add_tax_rate',compact(
			'tax'
		 ));
	}
	
	
	public function create(Request $request){
		
		$rules = array(
				'name' => 'required',
				'amount' =>'required|numeric'
		);
		$this->validate($request,$rules);
		 $input = $request->only(['name', 'amount','business_id','created_by',]);
            //$input['business_id'] = $request->session()->get('user.business_id');
            //$input['created_by'] = $request->session()->get('user.id');
            //$input['amount'] = $this->taxUtil->num_uf($input['amount']);

            $tax_rate = TaxRate::create($input);
		
		Session::flash('msg','Added Successfully');
		 return redirect()->route('backend.admin.pos.setting.tax_rate');
	}		
	
	public function edit($id){
		$tax = DB::connection('mysql_banquet_pos')->table('tax_rates')->get()->where('id' , $id)->first();
		 return view('backend.admin.pos.settings.edit_tax_rate',compact(
			'tax'
		 ));
	}
	public function update(Request $request,$id){
		$rules = array(
				'name' => 'required',
				'amount' =>'required|numeric'
		);
		$this->validate($request,$rules);
		 $input = $request->only(['name', 'amount','business_id','created_by',]);
		TaxRate::where('id', $id)
                            ->update($input);
		Session::flash('msg','Updated Successfully');
		 return redirect()->route('backend.admin.pos.setting.tax_rate');
	}
	public function delete($id){
		$table =  $this->taxrate->findOrFail($id);
        $table->delete();
		Session::flash('errmsg','Deleted Successfully');
		 return redirect()->back();
	}
	public function addMultiple(){
		 return view('backend.admin.pos.settings.add_tax_rate_multiple');
	}
	
	public function createMultiple(){
		Session::flash('msg1','Added Successfully');
		 return redirect()->route('backend.admin.pos.setting.tax_rate');
	}
	
	//public function editMultiple($id){
		
	//	 view('backend.admin.pos.settings.editMultiple'
	//}	
	
	//public function updateMultiple(Request $request,$id){
	//	Session::flash('msg','Updated Successfully');
	//	 return redirect()->route('backend.admin.pos.setting.tax_rate');
	//}
	
	public function deleteMultiple($id){
		Session::flash('errmsg','Deleted Successfully');
		 return redirect()->route('backend.admin.pos.setting.tax_rate');
	}
	
}
