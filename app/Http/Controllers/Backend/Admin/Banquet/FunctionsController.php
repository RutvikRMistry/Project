<?php
namespace App\Http\Controllers\Backend\Admin\Banquet;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Input;
use File;
use App\Model\Banquet\Bookingdetail;
use App\Model\Banquet\EventTime;
use App\Model\Banquet\Eventdetail;
use App\Http\Controllers\Controller;
use DB;
use Session;
class FunctionsController extends Controller
{
    public function events(){	
		$user_id = 17;
		$book = Bookingdetail::join('sales_teams AS mm', 'bookingdetails.sales_team_id', '=', 'mm.id' )
		
		->select(
			'bookingdetails.id',
			'bookingdetails.booking_name',
			'bookingdetails.event_name',
			'bookingdetails.event_type',
			'bookingdetails.from_date',
			'bookingdetails.client_phone',
			'bookingdetails.event_status',
			'mm.salesteam as sale',
			
		)
		->get();
		return view('backend.admin.banquet.functions.events',compact(
			'book'
		));
	}
	
	public function createEvent(){
		$user_id = 17;
		// $state = DB::connection('mysql_banquet')->table('states')->get()->where('country_id',$country_id)->first();
		$book = DB::connection('mysql_banquet')->table('bookingdetails')->get()->where('user_id',$user_id)->first();
		$sale = DB::connection('mysql_banquet')->table('sales_teams')->get()->where('user_id',$user_id);
		// $city = DB::connection('mysql_banquet')->table('cities')->get()->where('id',$id)->first();	
		return view('backend.admin.banquet.functions.create_event',compact(
			'book','sale'
		));
		
	}

	public function storeEvent(Request $request){
		
		$rules = array(
			'booking_name' => 'required',
			'client_email' => 'required',
			'client_phone' => 'required',
			'client_company' => 'required',
			'country_id' => 'required',
			'state_id' => 'required',
			// 'city_id' => 'required',
			'event_type' => 'required',
			'event_status' => 'required',
			'event_manager' => 'required',
			'owner_id' => 'required',
			'expected_guests_veg' => 'required',
			// 'owner_' => 'required'
		);
		$this->validate($request,$rules);
		$request->merge(['user_id' => 17]);
		$request->merge(['sales_person_id'=>1]);
		Bookingdetail::create($request->all());
		EventTime::create($request->all());
		Session::flash('msg','Created Successfully');	
		return redirect()->route('backend.admin.banquet.functions.event');
	}

	public function deleteEvent($id){
		$table = Bookingdetail::findorfail($id);
		$table->delete();
		Session::flash('errmsg','Deleted Successfully');
		return redirect()->back();
	}
	
	public function Eventedit($id){
		$user_id = 17;
		// $id = Bookingdetail::find($id);
		$sale = DB::connection('mysql_banquet')->table('sales_teams')->get()->where('user_id',$user_id);
		$book = DB::connection('mysql_banquet')->table('bookingdetails')->get()->where('id',$id)->first();
		
		return view('backend.admin.banquet.functions.edit_event',compact(
			'book','sale'
		));
	}

	public function updateEvent(Request $request,$id){
		$rules = array(
			'booking_name' => 'required',
			'client_email' => 'required',
			'client_phone' => 'required',
			'client_company' => 'required',
			'country_id' => 'required',
			'state_id' => 'required',
			// 'city_id' => 'required',
			'event_type' => 'required',
			'event_status' => 'required',
			'event_manager' => 'required',
			// 'owner_id' => 'required',
			'expected_guests_veg' => 'required',
			// 'owner_' => 'required'
		);
		$this->validate($request,$rules);
		$request->merge(['user_id' => 17]);
		$request->merge(['sales_person_id'=>1]);
		Bookingdetail::where('id',$id)->update($request->except('_token'));
		// EventTime::where('id',$id)->update($request->except('_token'));
		Session::flash('msg','updated Successfully');
		return redirect()->route('backend.admin.banquet.functions.event');
	}
	
	public function viewEvent(){
		return view('backend.admin.banquet.functions.view_event');
	}
	
	public function calendar(){		
		return view('backend.admin.banquet.functions.calendar');
	}
	
	public function tickets(){		
		return view('backend.admin.banquet.functions.tickets');
	}
	
	public function sellTicket(){
		return view('backend.admin.banquet.functions.sell_ticket');
	}
	
	public function newBooking(){
		return view('backend.admin.banquet.functions.new_booking');
	}
	
	
}
