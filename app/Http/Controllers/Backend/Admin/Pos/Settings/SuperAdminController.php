<?php
namespace App\Http\Controllers\Backend\Admin\Pos;

use Illuminate\Http\Request;

use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Input;
use File;
use App\Http\Controllers\Controller;
class SuperAdminController extends Controller
{
    public function package(){
		 return view('backend.admin.pos.settings.package');
	}	
	
	
	
}
