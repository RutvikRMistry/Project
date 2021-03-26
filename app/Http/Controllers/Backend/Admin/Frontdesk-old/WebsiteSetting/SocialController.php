<?php
namespace App\Http\Controllers\Backend\Admin\Frontdesk\WebsiteSetting;

use App\Http\Helper\MimeCheckRules;
use App\Model\Frontdesk\WebSetting as WS;
use App\Model\Frontdesk\WebSetting\WebGalleryCategory;
use App\Model\Frontdesk\WebSetting\WebFaq;
use App\Model\Frontdesk\WebSetting\WebOurTeam;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Image;
use Session;
use Redirect;
use DB;

class SocialController extends Controller
{
   
    public function __construct(WebFaq $faq,
                                WebOurTeam $ourTeam,
                                WebGalleryCategory $galleryCategory,
                                WS\WebGallery $gallery,
                                WS\WebCounterSection $counterSection,
                                WS\WebOurClientFeedback $testimonial,
                                WS\WebSocial $social,WS\WebFacility $facility)
    {
			$this->faq = $faq;
        $this->ourTeam = $ourTeam;
        $this->galleryCategory = $galleryCategory;
        $this->gallery = $gallery;
        $this->counterSection = $counterSection;
        $this->testimonial = $testimonial;
        $this->social = $social;
        $this->facility = $facility;
    }
	
	public function index(){
		
		$social = DB::table('web_socials')->get();
		return view('backend.admin.frontdesk.website_settings.social.index',['social'=>$social]);
	}
	
	public function create(Request $request){
		
		$input = $request->all();
		if(!empty($input)){
		$rules = array(
			'name'=>'required|string',
            'icon'=>'nullable|string',
            'link'=>'required|string',
            'color'=>'required|string',
			);
			$this->validate( $request , $rules);
		
        $table = new $this->social;
        $table->name = $request->name;
        $table->icon = $request->icon;
        $table->link = $request->link;
        $table->status = $request->status;
        $table->color = $request->color;
        $table->save();
		Session::flash('msg','Successful save');
        return redirect()->route('backend.admin.frontdesk.website_setting.social');
		}
		
		return view('backend.admin.frontdesk.website_settings.social.create');
	}
	
	public function update($id,Request $request){
		
		$input = $request->all();
		if(!empty($input)){
			$rules = array(
			'name'=>'required|string',
            'icon'=>'nullable|string',
            'link'=>'required|string',
            'color'=>'required|string',
			);
			$this->validate( $request , $rules);
        $table =  $this->social->findOrFail($id);
        $table->name = $request->name;
        $table->icon = $request->icon;
        $table->link = $request->link;
        $table->status = $request->status;
        $table->color = $request->color;
        $table->save();
		Session::flash('msg','Successful updated');
        return redirect()->route('backend.admin.frontdesk.website_setting.social');
			
		}
		
		$social = DB::table('web_socials')->get()->where('id',$id)->first();
		return view('backend.admin.frontdesk.website_settings.social.edit',['social'=>$social]);
	}
	
    public function delete($id){
		
		 $this->social->findOrFail($id)->delete();
        Session::flash('errmsg','Successful delete');
		return redirect()->back();
		
	}
    
}
