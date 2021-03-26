<?php
namespace App\Http\Controllers\Backend\Admin\Banquet;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Input;
use File;
use App\Http\Controllers\Controller;
class ReportsController extends Controller
{   
	public function eventReport(){
		return view('backend.admin.banquet.reports.events');
	}
	
	public function leadReport(){
		return view('backend.admin.banquet.reports.leads');
	}
	
	public function salesReport(){
		return view('backend.admin.banquet.reports.sales');
	}
	
	public function contractorReport(){
		return view('backend.admin.banquet.reports.contractors');
	}
	
	public function forecastedReport(){
		return view('backend.admin.banquet.reports.forecasted');
	}
		
	public function reservationReport(){
		return view('backend.admin.banquet.reports.reservations');
	}
	
	public function paymentLog(){
		return view('backend.admin.banquet.reports.payment_logs');
	}
	
}
