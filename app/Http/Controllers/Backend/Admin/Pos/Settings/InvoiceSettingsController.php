<?php
namespace App\Http\Controllers\Backend\Admin\Pos\Settings;

use Illuminate\Http\Request;
use App\Model\POS\InvoiceScheme;
use App\Model\POS\InvoiceLayout;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Input;
use File;
use App\Http\Controllers\Controller;
class InvoiceSettingsController extends Controller
{
    public function index(){
		
		
		$invoice_layouts = InvoiceLayout::get();
		 return view('backend.admin.pos.settings.invoices',compact(
			'invoice_layouts',
		 ));
	}	
	
	public function add(){
		 return view('backend.admin.pos.settings.add_invoice');
	}
	
	
	
}
