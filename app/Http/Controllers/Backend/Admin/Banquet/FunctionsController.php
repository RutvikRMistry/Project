<?php
namespace App\Http\Controllers\Backend\Admin\Banquet;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Input;
use File;
use App\Http\Controllers\Controller;
class FunctionsController extends Controller
{
    public function events(){		
		return view('backend.admin.banquet.functions.events');
	}
	
	public function createEvent(){
		return view('backend.admin.banquet.functions.create_event');
	}
	
	public function editEvent(){
		return view('backend.admin.banquet.functions.edit_event');
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
