<?php
namespace App\Http\Controllers\Backend\Admin\Pos\Settings;

use Illuminate\Http\Request;
use App\Model\POS\Brands;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Input;
use File;
use App\Http\Controllers\Controller;
use Session;
use DB;
class BrandsController extends Controller
{
	protected $brands;
	public function __construct(Brands $brands)
    {
      
		$this->brands = $brands;
    }
    public function index(){
		$brand = DB::connection('mysql_banquet_pos')->table('brands')->where('deleted_at','=',NULL)->get();
		//echo '<pre>';
		//print_r($brand);
		 return view('backend.admin.pos.settings.brands',compact(
			'brand'
		 ));
	}	
	
	public function add(){
		$brand = DB::connection('mysql_banquet_pos')->table('brands')->get()->first();
		$user = DB::connection('mysql_banquet_pos')->table('users')->get()->first();
		 return view('backend.admin.pos.settings.add_brand',compact(
				'brand',
				'user'
		 ));
	}
	
	
	public function store(Request $request){
		
		$rules = array(
			'name' =>'required|min:3',
			'description'=>'nullable'
		);
		$this->validate( $request , $rules);
		$input = $request->only(['name', 'description', 'business_id','created_by']);
		 $brand = Brands::create($input);
		Session::flash('msg','Added Successfully');
		 return redirect()->route('backend.admin.pos.setting.brand');
	}
	
	public function edit($id){
		$brand = DB::connection('mysql_banquet_pos')->table('brands')->get()->where('id',$id)->first();
		$user = DB::connection('mysql_banquet_pos')->table('users')->get()->first();
		 return view('backend.admin.pos.settings.edit_brand',compact(
			'brand',
			'user'
		 ));
	}	
	
	public function update(Request $request,$id){
		$rules = array(
			'name' =>'required|min:3',
			'description'=>'nullable'
		);
		$this->validate( $request , $rules);
		$input = $request->only(['name', 'description']);		
		Brands::where('id', $id)->update($input);
		Session::flash('msg','Updated Successfuly');
		return redirect()->route('backend.admin.pos.setting.brand');
	}
	
	public function delete($id){
		$table =  Brands::findOrFail($id);
		//$table =  $this->brands->findOrFail($id);
        $table->delete();
		Session::flash('errmsg','Deleted Successfully');
		return redirect()->back();
	}
}
