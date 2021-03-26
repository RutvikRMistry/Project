<?php
namespace App\Http\Controllers\Backend\Admin\Banquet\Settings;

use Illuminate\Http\Request;
use App\Model\Banquet\Option;
use App\Model\Banquet\CateringServiceType;
use App\Model\Banquet\EventType;
use App\Model\Banquet\EventDepositType;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Input;
use File;
use DB;
use Session;
use App\Http\Controllers\Controller;
class OptionsController extends Controller
{
    public function index(){
		$user_id = 17;
		$option = DB::connection('mysql_banquet')->table('options')->get()->where('user_id',$user_id);
		 return view('backend.admin.banquet.settings.options.index',compact(
			'option'
		 ));
	}	
	
	public function addOption(){
		 return view('backend.admin.banquet.settings.options.add_option');
	}
	public function storeOption(Request $request){
	$rules = array(
		
			'category' =>'required',
			'title' =>'required',
			'value' =>'required'
	);
	$this->validate($request ,$rules);
	$request->merge(['user_id' => 17]);
        Option::create($request->all());
		Session::flash('msg','Added Successfully');
		return redirect()->route('backend.admin.banquet.sttings.option');
	}
	
	public function editOption($id){
		$user_id = 17;
		$option = DB::connection('mysql_banquet')->table('options')->get()->where('id',$id)->first();
		return view('backend.admin.banquet.settings.options.edit_option',compact(
		'option'
		));
	}
	
	public function updateOption($id,Request $request){
		$rules = array(
		
			'category' =>'required',
			'title' =>'required',
			'value' =>'required'
	);
	$this->validate($request ,$rules);
	Option::where('id',$id)->update($request->except('_token'));
		Session::flash('msg','Updated Successfully');
		return redirect()->route('backend.admin.banquet.sttings.option');

	}
	
	public function deleteOption($id){
		$option = Option::findorfail($id);
		$option->delete();
		Session::flash('errmsg','Deleted Successfully');
		return redirect()->back();
	}
	public function caterers(){
			$user_id = 17;
			$cat = DB::connection('mysql_banquet')->table('catering_service_type')->get()->where('user_id',$user_id);
		 return view('backend.admin.banquet.settings.options.caterers',compact(
			'cat'
		 ));
	}
	
	public function addCaterer(){
		 return view('backend.admin.banquet.settings.options.add_caterer');
	}
	public function storeCaterer(Request $request){
	$rules = array(
		'name' => 'required',
		'counters' => 'required',
	
	);
	$this->validate($request , $rules);
	$request->merge(['user_id' => 17]);
	CateringServiceType::create($request->except('_token'));
	Session::flash('msg','Added Successfully');
	return redirect()->route('backend.admin.banquet.sttings.option.caterer');
	}
	public function editCaterer($id){
		$cat = DB::connection('mysql_banquet')->table('catering_service_type')->get()->where('id',$id)->first();
		return view('backend.admin.banquet.settings.options.edit_caterer',compact(
			'cat'
		));
	}
	public function updateCaterer(Request $request,$id){
		$rules = array(
		'name' => 'required',
		'counters' => 'required',
	
	);
	$this->validate($request , $rules);
	CateringServiceType::where('id',$id)->update($request->except('_token'));
	Session::flash('msg','Updated Successfully');
	return redirect()->route('backend.admin.banquet.sttings.option.caterer');
	
	}
	public function deleteCaterer($id){
		$table = CateringServiceType::findorfail($id);
		$table->delete();
		Session::flash('errmsg','Deleted Successfully');
		return redirect()->back();
	
	}
	public function events(){
		$user_id=17;
		$event = DB::connection('mysql_banquet')->table('type_event')->get()->where('user_id',$user_id);
		 return view('backend.admin.banquet.settings.options.events',compact(
			'event'
		 ));
	}
	
	public function addEvent(){
		 return view('backend.admin.banquet.settings.options.add_event');
	}
	
	public function storeEvent(Request $request){
		$rules = array(
			'name' => 'required'
		);
		$this->validate($request,$rules);
		$request->merge(['user_id' => 17]);
		EventType::create($request->except('_token'));
		Session::flash('msg','Added Successfully');
		return redirect()->route('backend.admin.banquet.sttings.option.event');
	}
	public function editEvent($id){
		$user_id=17;
		$event = DB::connection('mysql_banquet')->table('type_event')->get()->where('id',$id)->first();
		 return view('backend.admin.banquet.settings.options.edit_event',compact(
			'event'
		 ));
	}
	public function updateEvent(Request $request,$id){
		$rules = array(
			'name' => 'required'
		);
		$this->validate($request,$rules);
		$request->merge(['user_id' => 17]);
		EventType::where('id',$id)->update($request->except('_token'));
		Session::flash('msg','Updated Successfully');
		return redirect()->route('backend.admin.banquet.sttings.option.event');
	}
	public function deleteEvent($id){
		$table = EventType::findorfail($id);
		$table->delete();
		Session::flash('errmsg','Deleted Successfully');
		return redirect()->back();
		
	}
	public function deposits(){
		$user_id=17;
		$deposit = DB::connection('mysql_banquet')->table('deposittypes')->get()->where('user_id',$user_id);
		 return view('backend.admin.banquet.settings.options.deposits',compact(
			'deposit'
		 ));
	}
	
	public function addDeposit(){
		
		 return view('backend.admin.banquet.settings.options.add_deposit');
	}

	public function storeDeposit(Request $request){
		$rules = array(
		'name' => 'required',
		); 
		$this->validate($request , $rules);
		$request->merge(['user_id' => 17]);
		EventDepositType::create($request->except('_token'));
		Session::flash('msg','Added Successfully');
		return redirect()->route('backend.admin.banquet.sttings.option.deposit');
	}
	
	public function editDeposit($id){
		$deposit = DB::connection('mysql_banquet')->table('deposittypes')->get()->where('id',$id)->first();
		 return view('backend.admin.banquet.settings.options.edit_deposit',compact(
			'deposit'
		 ));
	}
	public function updateDeposit(Request $request,$id){
		$rules = array(
		'name' => 'required',
		); 
		$this->validate($request , $rules);
		$request->merge(['user_id' => 17]);
		EventDepositType::where('id',$id)->update($request->except('_token'));
		Session::flash('msg','Updated Successfully');
		return redirect()->route('backend.admin.banquet.sttings.option.deposit');
	}
	public function deleteDeposit($id){
		$table = EventDepositType::findorfail($id);
		$table->delete();
		Session::flash('errmsg','Deleted Successfully');
		return redirect()->back();
	}
	
}
