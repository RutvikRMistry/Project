<?php
namespace App\Http\Controllers\Backend\Admin\Pos;

use Illuminate\Http\Request;

use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Input;
use File;
use App\Http\Controllers\Controller;
class StockTransferController extends Controller
{
    public function listStocks(){
		 return view('backend.admin.pos.stock_transfer.list_stocks');
	}	
	
	public function addStock(){
		 return view('backend.admin.pos.stock_transfer.add_stock');
	}		
	
	public function view(){
		 return view('backend.admin.pos.sell_returns.view');
	}
	
}
