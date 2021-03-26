<?php
namespace App\Http\Controllers\Backend\Admin\Pos\Settings;

use Illuminate\Http\Request;
use App\Model\POS\Category;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Input;
use File;
use App\Http\Controllers\Controller;
use Session;
use DB;
class CategoriesController extends Controller
{
    public function index(){
		$category = DB::connection('mysql_banquet_pos')->table('categories')->where('deleted_at','=',NULL)->get();
		 return view('backend.admin.pos.settings.categories',compact(
			'category'
		 ));
	}	
	
	public function add(){
		$category = DB::connection('mysql_banquet_pos')->table('categories')->get()->first();
		 return view('backend.admin.pos.settings.add_category',compact(
			'category'
		 ));
	}
	
	
	public function create(Request $request){
		
		$rules = array(
			'name' => 'required',
			'short_code'=>'required'
		);
		$this->validate($request,$rules);
		 $input = $request->only('name', 'short_code','parent_id','business_id','created_by');
		 $category = Category::create($input);
		 Session::flash('msg','Added Successfully');
		 return redirect()->route('backend.admin.pos.setting.category');
	}
	
	public function edit(Request $request,$id){
		$category = DB::connection('mysql_banquet_pos')->table('categories')->get()->where('id',$id)->first();
		 return view('backend.admin.pos.settings.edit_category',compact(
			'category'
		 ));
	}
	public function update(Request $request,$id){
		 $rules = array(
			'name' => 'required',
			'short_code'=>'required'
		);
		$this->validate($request,$rules);
		 $input = $request->only('name', 'short_code','parent_id','business_id','created_by');
		 $category = Category::where('id',$id)->update($input);
		 Session::flash('msg','Added Successfully');
		 return redirect()->route('backend.admin.pos.setting.category');
	}
	public function delete($id){
		 $table = Category::findorfail($id);
		 $table->delete();
		 Session::flash('errmsg','Deleted Successfully');
		 return redirect()->back();
	}
}
