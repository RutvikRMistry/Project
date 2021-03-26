<?php
namespace App\Http\Controllers\Backend\Admin\Pos;

use Illuminate\Http\Request;

use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Input;
use File;
use App\Http\Controllers\Controller;
class SellController extends Controller
{
    public function index(){
		 return view('backend.admin.pos.sell.index');
	}	
	
	public function add(){
		 return view('backend.admin.pos.sell.add');
	}
	
	public function view(){
		return view('backend.admin.pos.sell.view');
	}
	
	public function payment(){
		return view('backend.admin.pos.sell.payment');
	}
	
	public function editPayment(){
		return view('backend.admin.pos.sell.edit_payment');
	}
	
	public function posList(){
		return view('backend.admin.pos.sell.pos_list');
	}
	
	public function pos(){
		return view('backend.admin.pos.sell.pos');
	}
	
	
	
}
