<?php
namespace App\Http\Controllers\Backend\Admin\Pos\Settings;

use Illuminate\Http\Request;
use App\Model\POS\Printer;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Input;
use File;
use App\Http\Controllers\Controller;
use DB;
use Session;
class ReceiptPrintersController extends Controller
{
    public function index(){
		$printer = DB::connection('mysql_banquet_pos')->table('printers')->get();
		 return view('backend.admin.pos.settings.receipt_printers',compact(
			'printer'
		 ));
	}	
	
	public function add(){
		$printer = DB::connection('mysql_banquet_pos')->table('categories')->get()->first();
		 return view('backend.admin.pos.settings.add_receipt_printer',compact(
			'printer'
		 ));
	}
	
	public function store(Request $request){
		
		$rules = array(
			'name' => 'required',
			'connection_type' => 'required',
			'capability_profile' => 'required',
			'char_per_line' => 'required',
			'ip_address' => 'nullable',
			'port' => 'required',
		
		);
		$this->validate($request,$rules);
		$input = $request->only(['name', 'connection_type', 'business_id','capability_profile','char_per_line','ip_address','port','created_by']);
		 $brand = Printer::create($input);
		Session::flash('msg','Added Successfully');
		return redirect()->route('backend.admin.pos.setting.receipt_printer');
	}
	
	public function edit($id){
		$printer = DB::connection('mysql_banquet_pos')->table('printers')->get()->where('id',$id)->first();
		 return view('backend.admin.pos.settings.edit_reciept_printer',compact(
			'printer'
		 ));
	}
	
	public function update(Request $request,$id){
		$rules = array(
			'name' => 'required',
			'connection_type' => 'required',
			'capability_profile' => 'required',
			'char_per_line' => 'required',
			'ip_address' => 'nullable',
			'port' => 'required',
		
		);
		$this->validate($request,$rules);
		$input = $request->only(['name', 'connection_type', 'business_id','capability_profile','char_per_line','ip_address','port','created_by']);
		 $brand = Printer::where('id',$id)->update($input);
		Session::flash('msg','Updated Successfully');
		return redirect()->route('backend.admin.pos.setting.receipt_printer');
	}
	
	public function delete($id){
		$table = Printer::findorfail($id);
		$table->delete();
		Session::flash('errmsg','Deleted Successfully');
		 return redirect()->back();
}

}
