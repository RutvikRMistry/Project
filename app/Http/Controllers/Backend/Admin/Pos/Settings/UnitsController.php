<?php
namespace App\Http\Controllers\Backend\Admin\Pos\Settings;

use Illuminate\Http\Request;

use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Input;
use File;
use App\Http\Controllers\Controller;
use DB;
use Session;
use App\Model\POS\Unit;
class UnitsController extends Controller
{
	
	protected $unit;
	public function __construct(Unit $unit)
    {
      
		$this->unit = $unit;
    }
	
	
    public function index(){
		$unit = DB::connection('mysql_banquet_pos')->table('units')->where('deleted_at','=',NULL)->get();
		 return view('backend.admin.pos.settings.units',compact(
			'unit'
		 ));
	}	
	
	public function add(){	
		$unit = DB::connection('mysql_banquet_pos')->table('units')->get()->first();
		return view('backend.admin.pos.settings.add_unit',compact(
		
			'unit'
		));
	}
	
	public function create(Request $request){
			$rules = array(
			'actual_name'=>'required',
			'short_name'=>'required',
			'allow_decimal'=>'required'
			);
			$this->validate($request,$rules);
			 $input = $request->only(['actual_name', 'short_name', 'allow_decimal','business_id','created_by']);
            //$input['business_id'] = $request->session()->get('user.business_id');
            //$input['created_by'] = $request->session()->get('user.id');

            $unit = Unit::create($input);
		Session::flash('msg','Added Successfully');
		return redirect()->route('backend.admin.pos.setting.unit');
	}
	
	public function edit($id){	
		$unit = DB::connection('mysql_banquet_pos')->table('units')->get()->where('id',$id)->first();	
		return view('backend.admin.pos.settings.edit_unit',compact(
			'unit'
		));
	}
	public function update(Request $request,$id){	
	$rules = array(
			'actual_name'=>'required',
			'short_name'=>'required',
			'allow_decimal'=>'required'
			);
			$this->validate($request,$rules);
			$i = $request->only(['actual_name', 'short_name', 'allow_decimal','business_id','created_by']);
			Unit::where('id', $id)->update($i);
		Session::flash('msg','Updated Successfully');
		return redirect()->route('backend.admin.pos.setting.unit');
	}
	public function delete($id){
		$table =  Unit::findOrFail($id);
        $table->delete();
		Session::flash('errmsg','Deleted Successfully');
		return redirect()->back();
	}
	
}
