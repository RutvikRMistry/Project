<?php
namespace App\Http\Controllers\Backend\Admin\Banquet\Sales;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Input;
use App\Model\Banquet\Lead;
use File;
use App\Http\Controllers\Controller;
use DB;
use Session;
class SalesController extends Controller
{
    public function leads(){
		
		$user_id = 17;
		$leads = DB::connection('mysql_banquet')->table('leads')->get()->where('user_id',$user_id);
		return view('backend.admin.banquet.sales.leads.index',compact(
			'leads'
		));
	}
	
	public function createLead(){
		return view('backend.admin.banquet.sales.leads.create_lead');
	}

	public function storeLead(Request $request){
		$rules = array(
			'company_name' =>'required',
			'email' =>'required',
			'mobile' => 'required',
			'client_name' =>'required',
			'country_id' =>'required',
			'state_id' =>'required',
			'city_id' =>'required',
			'lead_source' =>'required',
			'sales_team_id' =>'required',
			'sales_person_id' =>'required',
			'priority' =>'required',
			'event_name' =>'required',
			'event_type' =>'required',
			'expected_guests_veg' =>'required',
			'budget' =>'required',
			'start_date' =>'required',
			'end_date' =>'required'	
		);
		$this->validate($request ,$rules);
		//
		// dd($request->all());
		$request->merge(['user_id' => 17]);
		$request->merge(['event_manager' => '1']);

		Lead::create($request->all());
		Session::flash('msg','Added Successfully');
		return redirect()->route('backend.admin.banquet.sales.lead');
	}

	public function deleteLead($id){
		$leads = Lead::findorfail($id);
		$leads->delete();
		Session::flash('errmsg','Deleted Successfully');
		return redirect()->back();
	}
	
	public function editLead(){

		$user_id = 17;
		$leads = DB::connection('mysql_banquet')->table('leads')->get()->where('user_id',$user_id);
		return view('backend.admin.banquet.sales.leads.edit_lead',compact(
			'leads'
		));
	}

	public function updateLead($id,Request $request){

		$rules = array(
			'company_name' =>'required',
			'email' =>'required',
			'mobile' => 'required',
			'client_name' =>'required',
			'country_id' =>'required',
			'state_id' =>'required',
			'city_id' =>'required',
			'lead_source' =>'required',
			'sales_team_id' =>'required',
			'sales_person_id' =>'required',
			'priority' =>'required',
			'event_name' =>'required',
			'event_type' =>'required',
			'expected_guests_veg' =>'required',
			'budget' =>'required',
			'start_date' =>'required',
			'end_date' =>'required'	
		);
		$this->validate($request ,$rules);
		//
		// dd($request->all());
		$request->merge(['user_id' => 17]);
		$request->merge(['event_manager' => '1']);

		Lead::where('id',$id)->update($request->except('_token'));
		Session::flash('msg','Added Successfully');
		return redirect()->route('backend.admin.banquet.sales.lead');

	}
	
	public function leadDetail(){

		return view('backend.admin.banquet.sales.leads.view_lead');
	}
	
	public function leadCall(){
		return view('backend.admin.banquet.sales.leads.lead_call');
	}
	
	public function createLeadCall(){
		return view('backend.admin.banquet.sales.leads.create_call');
	}
	
	public function createEvent(){
		return view('backend.admin.banquet.sales.leads.create_event');
	}

		
	
}
