<?php
namespace App\Http\Controllers\Backend\Admin\Banquet\Sales;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Input;
use File;
use App\Http\Controllers\Controller;
class QuotationsController extends Controller
{
    public function index(){		
		return view('backend.admin.banquet.sales.quotations');
	}
	
	public function editEvent(){
		return view('backend.admin.banquet.sales.edit_event');		
	}
	
	
}
