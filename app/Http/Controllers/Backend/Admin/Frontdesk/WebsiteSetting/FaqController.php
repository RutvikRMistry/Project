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
class FaqController extends Controller
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
	
	public function index(Request $request){		
		
		$input= $request->all();
		if(!empty($input)){
			$rules = array(
			'title_1' => 'required',
			'title_2' => 'required'			
			);
			$this->validate( $request , $rules);
			
			$data = array();
			$data['faq_faq_section_title_1'] = $input['title_1'];
			$data['faq_faq_section_title_2'] = $input['title_2'];
			$web_settings = DB::table('web_settings')->update($data);
			
			$faq_faq_section_title_1 = $input['title_1'];
			$faq_faq_section_title_2 = $input['title_2'];
			Session::flash('msg','Updated Successfully');
			return redirect()->route('backend.admin.frontdesk.website_setting.faq');
			
		}
		
		$faq = DB::table('web_faqs')->get();
		return view('backend.admin.frontdesk.website_settings.faq.index',['faq'=>$faq]);
	}
	
	public function create(){
		return view('backend.admin.frontdesk.website_settings.faq.create');
	}
	
    public function faqStore(Request $request){
		$rules = array(
			'question' => 'required',
			'answer' => 'required'			
			);
			$this->validate( $request , $rules);
        
		$faq = new $this->faq;
        $faq->question = $request->question;
        $faq->answer = $request->answer;
        $faq->save();
		Session::flash('msg','Successful save');
        return redirect()->Route('backend.admin.frontdesk.website_setting.faq');
		
    }
	
	public function Update($id, Request $request){
		$faq = DB::table('web_faqs')->get()->where('id',$id)->first();
		return view('backend.admin.frontdesk.website_settings.faq.edit',['faq'=>$faq]);
	}
	
	public function faqUpdate(Request $request,$id){
		$rules = array(
			'question' => 'required',
			'answer' => 'required'			
			);
			$this->validate( $request , $rules);
        $faq =  $this->faq->findOrFail($id);
        $faq->question = $request->question;
        $faq->answer = $request->answer;
        $faq->save();
        Session::flash('msg','Successful updated');
		return redirect()->Route('backend.admin.frontdesk.website_setting.faq');
	}
	
	public function faqDelete($id){
        $this->faq->findOrFail($id)->delete();
        Session::flash('errmsg','Successful delete');
		return redirect()->route('backend.admin.frontdesk.website_setting.faq');
    }
    
}
