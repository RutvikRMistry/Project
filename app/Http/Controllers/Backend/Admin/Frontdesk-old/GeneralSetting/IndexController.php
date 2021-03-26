<?php
namespace App\Http\Controllers\Backend\Admin\Frontdesk\GeneralSetting;

use App\Model\Frontdesk\CodeManager;
use App\Model\Frontdesk\GeneralSetting;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Session;

class IndexController extends Controller
{
    public function index(){
        $setting_data = GeneralSetting::first();
        return view('backend.admin.frontdesk.general_setting.index',compact('setting_data'));
    }
	
    public function generalSettingUpdate(Request $request){
		$rules = array(
            'title'=>'required|string',
            'address'=>'required',
            'email'=>'email',
            'phone'=>'required|integer',
            'color'=>'required',
            'cur'=>'required',
            'cur_sym'=>'required',
            'check_in_time'=>'required',
            'check_out_time'=>'required'
            
        );
		 $this->validate( $request , $rules);
        $general_setting = GeneralSetting::first();
		$general_setting->title = $request->title;
        $general_setting->name = $request->name;
        $general_setting->address = $request->address;
        $general_setting->email = $request->email;
        $general_setting->phone = $request->phone;
        $general_setting->color = $request->color;
        $general_setting->cur = $request->cur;
        $general_setting->cur_sym = $request->cur_sym;
        $general_setting->check_in_time = $request->check_in_time;
        $general_setting->check_out_time = $request->check_out_time;
        $general_setting->en = $request->has('en')?1:0;
        $general_setting->mn = $request->has('mn')?1:0;
		$general_setting->save();
		Session::flash('msg','Update Successful');
		return redirect()->back();
    }

    public function emailSetting(){
        return view('backend.admin.setting.email_setting');
    }
    public function emailSettingUpdate(Request $request){
        $email_template = GeneralSetting::first();
        $email_template->sender_email = $request->sender_email;
        $email_template->email_message = $request->email_message;
        $email_template->save();
		Session::flash('msg','Update Successful');
        return redirect()->back();
    }
    public function smsSetting(){
        return view('backend.admin.frontdesk.general_setting.sms_setting');
    }
    public function smsSettingUpdate(Request $request){
		$this->validate($request,[
            'sms_api'=>'required'
            
        ]);
        $email_template = GeneralSetting::first();
        $email_template->sms_api = $request->sms_api;
        $email_template->save();
		Session::flash('msg','Update Successful');
        return redirect()->back();
    }
    public function logoAndFavicon(){
        return view('backend.admin.frontdesk.general_setting.logo_and_favicon');
    }
    public function logoAndFaviconUpdate(Request $request){
        $rules = array(
            'logo'=>'image|mimes:png',
            'favicon'=>'image|mimes:png'
        );
		 $this->validate( $request , $rules);
        if($request->hasFile('logo')){
            $site_logo_image = $request->file('logo');
            $site_logo_image_ext = $site_logo_image->getClientOriginalExtension();
            $site_logo_image->move('assets','logo.'.$site_logo_image_ext);
        }
        if($request->hasFile('favicon')){
            $site_favicon_image = $request->file('favicon');
            $site_favicon_image_ext = $site_favicon_image->getClientOriginalExtension();
            $site_favicon_image->move('assets','favicon.'.$site_favicon_image_ext);
        }
		Session::flash('msg','Update Successful');
        return redirect()->back();
    }
    public function codeSetting(){
        $codes = CodeManager::all();
        return view('backend.admin.setting.code_setting',compact('codes'));
    }
    public function codeSettingUpdate(Request $request,$name){
        if($codes = CodeManager::where('name',$name)->first()){
            $codes->prefix = $request->prefix;
            $codes->divider = $request->divider;
            $codes->from = $request->from;
            $codes->auto_generate =1;
            $codes->save();
			Session::flash('msg','Update Successful');
            return redirect()->back();
        }
        return abort(404);
    }
}
