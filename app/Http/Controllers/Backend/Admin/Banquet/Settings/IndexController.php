<?php
namespace App\Http\Controllers\Backend\Admin\Banquet\Settings;

use Illuminate\Http\Request;
use App\Model\Banquet\Setting;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Input;
use File;
use DB;
use Session;
use App\Http\Controllers\Controller;
class IndexController extends Controller
{
    public function index(){
		$user_id = 17;
		$currency = DB::connection('mysql_banquet')->table('currencies')->get();
		$Setting = DB::connection('mysql_banquet')->table('settings')->get()->where('user_id',$user_id)->first();
		 return view('backend.admin.banquet.settings.index',compact(
			'currency',
			'Setting',
		 ));
	}

	public function updateIndex($id,Request $request){
		 $rules = array(
            'site_logo' => 'nullable|mimes:jpeg,jpg,png',
            'pdf_logo' => 'nullable|mimes:jpeg,jpg,png',
            'site_name' => 'required',
            'site_email' => 'required|email',
            'currency' => 'required',
            'currency_position' => 'required',
            'date_format' => 'required',
            'time_format' => 'required'
        );
		 
		$this->validate($request,$rules);
		if ($request->hasFile('site_logo_file') != "") {
                $file = $request->file('site_logo_file');
                $filename = $file->getClientOriginalName();
                $extension = $file->getClientOriginalExtension();
                $picture = Str::slug(substr($filename, 0, strrpos($filename, "."))) . '_' . time() . '.' . $extension;

                $destinationPath = public_path() . '/uploads/site/';
                $file->move($destinationPath, $picture);
                $request->merge(['site_logo' => $picture]);
            }
            if ($request->hasFile('pdf_logo_file') != "") {
                $file = $request->file('pdf_logo_file');
                $filename = $file->getClientOriginalName();
                $extension = $file->getClientOriginalExtension();
                $picture = Str::slug(substr($filename, 0, strrpos($filename, "."))) . '_' . time() . '.' . $extension;

                $destinationPath = public_path() . '/uploads/site/';
                $file->move($destinationPath, $picture);
                $request->merge(['pdf_logo' => $picture]);
            }
		Setting::where('id',$id)->update($request->except('_token'));
		Session::flash('msg','Updated Successfully');
		return redirect()->back();
	}
	
}
