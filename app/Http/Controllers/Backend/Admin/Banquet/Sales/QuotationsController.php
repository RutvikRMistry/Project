<?php
namespace App\Http\Controllers\Backend\Admin\Banquet\Sales;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Input;
use File;
use DB;
use Session;
use App\Http\Controllers\Controller;
use App\Model\Banquet\Bookingdetail;
class QuotationsController extends Controller
{
    public function index(){
		$book = Bookingdetail::join('sales_teams AS mm', 'bookingdetails.sales_team_id', '=', 'mm.id' )
		->leftJoin('owners AS sr', 'bookingdetails.sales_person_id', '=', 'sr.id')
		
		->select(
			'bookingdetails.id',
			'bookingdetails.booking_name',
			'bookingdetails.event_name',
			'bookingdetails.event_type',
			'bookingdetails.from_date',
			'bookingdetails.to_date',
			'bookingdetails.client_phone',
			'bookingdetails.event_status',
			'mm.team_leader as sale',
			'sr.name as per'
			
		)
		->get();
		return view('backend.admin.banquet.sales.quotations',compact(
			'book'
		));
	}
	
	public function editEvent(Request $request, $id){
		$user_id = 17;
		// $id = Bookingdetail::find($id);
		$sale = DB::connection('mysql_banquet')->table('sales_teams')->get()->where('user_id',$user_id);
		$book = DB::connection('mysql_banquet')->table('bookingdetails')->get()->where('id',$id)->first();
		
		return view('backend.admin.banquet.functions.edit_event',compact(
			'book','sale'
		));
	}

	public function deleteEvent($id){
		$table = Bookingdetail::findorfail($id);
		$table->delete();
		Session::flash('errmsg','Deleted Successfully');
		return redirect()->back();
	}
	
	
}
