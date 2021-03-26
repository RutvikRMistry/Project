<?php
namespace App\Http\Controllers\Backend\Admin\Banquet\Settings;

use Illuminate\Http\Request;

use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Input;
use File;
use App\Http\Controllers\Controller;
class SubscriptionPlanController extends Controller
{
    public function index(){
		 return view('backend.admin.banquet.settings.subscription_plan');
	}	
	
}
