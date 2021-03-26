<?php
namespace App\Http\Controllers\Backend\Admin\Pos;

use Illuminate\Http\Request;

use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Input;
use File;
use App\Http\Controllers\Controller;
class StockAdjustmentsController extends Controller
{
    public function index(){
		 return view('backend.admin.pos.stock_adjustments.index');
	}	
	
	public function add(){
		 return view('backend.admin.pos.stock_adjustments.add');
	}		
	
	public function view(){
		 return view('backend.admin.pos.stock_adjustments.view');
	}
	
}
