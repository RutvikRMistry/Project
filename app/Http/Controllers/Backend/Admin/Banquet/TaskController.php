<?php
namespace App\Http\Controllers\Backend\Admin\Banquet;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Input;
use File;
use App\Http\Controllers\Controller;
use App\Model\Banquet\Meeting;
use App\Model\Banquet\Call;
use DB;
use Session;
class TaskController extends Controller
{
    public function todoList(){		
		$user_id = 17;
		$sales_team = DB::connection('mysql_banquet')->table('sales_teams')->get()->where('user_id',$user_id);
		return view('backend.admin.banquet.task.todo');
	}
	public function todostore(){

	}

	public function meeting(){

		$user_id = 17;
		$meeting = DB::connection('mysql_banquet')->table('meetings')->get()->where('user_id',$user_id);
		return view('backend.admin.banquet.task.meeting',compact(
			'meeting'
		));
	}	
	
	public function createMeeting(){
		return view('backend.admin.banquet.task.create_meeting');
	}	

	public function viewMeeting($id){

		$meeting = Meeting::findorfail($id);
		return view('backend.admin.banquet.task.view_meeting',compact(
			'meeting'));
	}

	public function storeMeeting(Request $request){

		$rules=array(
			'meeting_subject'=>'required',
			'company_attendees'=>'required',
			'responsible_id'=>'required',
			'staff_attendees'=>'required',
			'starting_date'=>'required',
			'ending_date'=>'required',
			'meeting_description'=>'required',
			// 'all_day'=>'required',
			// 'privacy'=>'required',
			// 'show_time_as'=>'required'
			
		);

		$this->validate($request,$rules);
		$request->merge(['user_id'=> 17]);
		$request->merge(['attendees'=> 17]);
		Meeting::create($request->all());
		session::flash('msg','Added Succsesfullly');
		return redirect()->route('backend.admin.banquet.task.meeting');


	}

	public function deleteMeeting($id){

		$call = Meeting::findorfail($id);
		$call->delete();
		Session::flash('errmsg','Deleted Successfully');
		return redirect()->back();

	}

	public function editMeeting($id){

		$user_id = 17;
		$meeting = DB::connection('mysql_banquet')->table('meetings')->get()->where('id',$id)->first();
		return view('backend.admin.banquet.task.edit_meeting',compact(
			'meeting'));

	}

	public function updateMeeting(Request $request,$id){

		$rules=array(
			'meeting_subject'=>'required',
			'company_attendees'=>'required',
			'responsible_id'=>'required',
			'staff_attendees'=>'required',
			'starting_date'=>'required',
			'ending_date'=>'required',
			'meeting_description'=>'required',
			// 'all_day'=>'required',
			// 'privacy'=>'required',
			// 'show_time_as'=>'required'
			
		);

		$this->validate($request,$rules);
		$request->merge(['user_id'=> 17]);
		$request->merge(['attendees'=> 17]);
		Meeting::where('id',$id)->update($request->except('_token'));
		session::flash('msg','updated Succsesfullly');
		return redirect()->route('backend.admin.banquet.task.meeting');


	}
	
	
	public function calls(){
		$user_id = 17;
		$call = DB::connection('mysql_banquet')->table('calls')->get()->where('user_id',$user_id);
		return view('backend.admin.banquet.task.call.calls',compact(
			'call'
		));
	}
	
	public function newCall(){
		return view('backend.admin.banquet.task.new_call');
	}

	public function storeCall(Request $request){
		$rule=array(
			'company_name'=>'required',
			'resp_staff_id'=>'required',
			'call_summary'=>'required',
			'duration'=>'required',
			'date'=>'required'

		);
		$request->merge(['user_id'=> 17]);
		$request->merge(['company_id'=> 1]);
		$this->validate($request,$rule);
		Call::create($request->all());
		session::flash('msg','Added Succesesfully');
		return redirect()->route('backend.admin.banquet.task.call');
	}
	
	public function viewCall($id){
		$call = Call::findorfail($id);
		return view('backend.admin.banquet.task.call.view_call',compact(
			'call'
		));
	}

	public function deleteCall($id){

		$call = Call::findorfail($id);
		$call->delete();
		Session::flash('errmsg','Deleted Successfully');
		return redirect()->back();

	}
	
	public function editCall($id){

		$user_id = 17;
		$call = DB::connection('mysql_banquet')->table('calls')->get()->where('id',$id)->first();
		return view('backend.admin.banquet.task.call.edit_call',compact(
			'call'));

	}

	public function updateCall(Request $request,$id){

		$rule=array(
			'company_name'=>'required',
			'resp_staff_id'=>'required',
			'call_summary'=>'required',
			'duration'=>'required',
			'date'=>'required'

		);
		$request->merge(['user_id'=> 17]);
		$request->merge(['company_id'=> 1]);
		$this->validate($request,$rule);
		Call::where('id',$id)->update($request->except('_token'));
		session::flash('msg','updated Succesesfully');
		return redirect()->route('backend.admin.banquet.task.call');

	}

	
}
