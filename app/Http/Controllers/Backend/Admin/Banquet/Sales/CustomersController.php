<?php
namespace App\Http\Controllers\Backend\Admin\Banquet\Sales;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Input;
use File;
use App\Http\Controllers\Controller;
class CustomersController extends Controller
{
    public function index(){		
		return view('backend.admin.banquet.sales.customers');
	}
	
	public function createCustomer(){		
		return view('backend.admin.banquet.sales.create_customer');
	}
	
	public function viewCustomer(){		
		return view('backend.admin.banquet.sales.view_customer');
	}
	
	
}
