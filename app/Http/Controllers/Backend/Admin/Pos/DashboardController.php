<?php
namespace App\Http\Controllers\Backend\Admin\Pos;

use Illuminate\Http\Request;

use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Input;
use File;
use App\Http\Controllers\Controller;
class DashboardController extends Controller
{
    public function index(){
		 return view('backend.admin.pos.dashboard');
	}	
	
}
