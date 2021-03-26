<?php
namespace App\Http\Controllers\Backend\Admin\Frontdesk\WebsiteSetting;

use App\Http\Helper\MimeCheckRules;
use App\Model\Frontdesk\WebSetting as WS;
use App\Model\Frontdesk\WebSetting\WebGalleryCategory;
use App\Model\Frontdesk\WebSetting\WebFaq;
use App\Model\Frontdesk\WebSetting\WebOurClientFeedback;
use App\Model\Frontdesk\WebSetting\WebOurTeam;
use App\Model\Frontdesk\WebSetting\WebFacility;
use App\Model\Frontdesk\WebSetting\WebCounterSection;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Image;
use DB;
use Session;
use Redirect;
use Validator;
use Illuminate\Support\Facades\Input;
class IndexController extends Controller
{
    private $faq;
    /**
     * @var WebOurTeam
     */
    private $ourTeam;
    /**
     * @var WS\WebGalleryCategory
     */
    private $galleryCategory;
    /**
     * @var WS\WebGallery
     */
    private $gallery;
    /**
     * @var WS\WebCounterSection
     */
    private $counterSection;
    /**
     * @var WS\WebOurClientFeedback
     */
    private $testimonial;
    /**
     * @var WS\WebSocial
     */
    private $social;
    /**
     * @var WS\WebFacility
     */
    private $facility;

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
	
	
	public function home(Request $request){
			
			$input = $request->all();
			if(!empty($input)){
				$rules= array(
					'title_1' => 'required|string',
					'title_2' => 'required',
					'title_3' => 'required'
				
				);
				$this->validate( $request , $rules);
			
				$data = array();
				$data['home_banner_section_title_1'] = $input['title_1'];
				$data['home_banner_section_title_2'] = $input['title_2'];
				$data['home_banner_section_title_3'] = $input['title_3'];
				
				$web = DB::table('web_settings')->update($data);
				
				$home_banner_section_title_1 = $input['title_1'];
				$home_banner_section_title_2 = $input['title_2'];
				$home_banner_section_title_3 = $input['title_3'];
				Session::flash('msg', "Updated successfully.");
				return redirect()->route('backend.admin.frontdesk.website_setting.home');

			
			}	
		return view('backend.admin.frontdesk.website_settings.home');
	}
	
	public function contact(Request $request){
		
		$input = $request->all();
		if(!empty($input)){
			$rules = array(
			'title_1' => 'required',
			'title_2' => 'required',
			'phone' => 'required',
			'email_web' => 'required',
			'address' => 'required',
			'map' => 'required'
			);
			$this->validate( $request , $rules);
		$ws = WS::first();
        $ws->contact_all_section_title_1 = $request->title_1;
        $ws->contact_all_section_title_2 = $request->title_2;
        $ws->contact_all_section_phone = $request->phone;
        $ws->contact_all_section_email_web = $request->email_web;
        $ws->contact_all_section_address = $request->address;
        $ws->contact_all_section_map = $request->map;
        $ws->save();
		Session::flash('msg','Update successful');
        return redirect()->back();
		}
		return view('backend.admin.frontdesk.website_settings.contact');
	}
	
	public function footer(Request $request){
		
		$input = $request->all();
		if(!empty($input)){
			$rules = array(
			'footer_content' => 'required'
			);
			$this->validate( $request , $rules);
				$data = array();
				$data['general_general_section_footer_content'] = $input['footer_content'];
				
				
				$web = DB::table('web_settings')->update($data);
				
				$general_general_section_footer_content = $input['footer_content'];
				
				Session::flash('msg', "Updated successfully.");
				return redirect()->back();
		}
		
		return view('backend.admin.frontdesk.website_settings.footer');		
	}
	
	public function fbComment(Request $request){
		
		$input = $request->all();
			if(!empty($input)){
			$rules = array(
			'fb_comment_script' => 'required'
			);
			$this->validate( $request , $rules);
				$data = array();
				$data['general_general_section_fb_comment_script'] = $input['fb_comment_script'];
				
				
				$web = DB::table('web_settings')->update($data);
				
				$general_general_section_fb_comment_script = $input['fb_comment_script'];
				
				Session::flash('msg', "Updated successfully.");
				return redirect()->back();
			}
		return view('backend.admin.frontdesk.website_settings.fb_comment');
	}
	
	public function loginBackground(){
		return view('backend.admin.frontdesk.website_settings.login_bg');
	}
	
	public function about(){
		
		$team = DB::table('web_our_teams')->get();
			
		return view('backend.admin.frontdesk.website_settings.home.about',['team'=>$team]);		
	}
	public function aboutUpdate(Request $request){
		$team = DB::table('web_our_teams')->get();
		$input = $request->all();
		
			if(!empty($input)){
				$rules= array(
					'title' => 'required|string',
					'short_details' => 'required',
					'long_details' => 'required',
					'title_1' => 'required|string',
					'title_2' => 'required'
				
				);
				$this->validate( $request , $rules);
				$data = array();
				$data['home_about_section_title'] = $input['title'];
				$data['home_about_section_short_details'] = $input['short_details'];
				$data['home_about_section_long_details'] = $input['long_details'];
				$data['home_team_section_title_1'] = $input['title_1'];
				$data['home_team_section_title_2'] = $input['title_2'];
				
				$websetting = DB::table('web_settings')->update($data);
				
				$home_about_section_title = $input['title'];
				$home_about_section_short_details = $input['short_details'];
				$home_about_section_long_details = $input['long_details'];
				$home_team_section_title_1 = $input['title_1'];
				$home_team_section_title_2 = $input['title_2'];
				
				Session::flash('msg', "Updated successfully.");
				return redirect()->route('backend.admin.frontdesk.website_setting.home.about');
				//return view('backend.admin.frontdesk.website_settings.home.about',['team'=>$team]);
				//return view('backend.admin.frontdesk.website_settings.home.about');	
			}
		
		
	}
	
	public function ourRoom(Request $request){
		
		$input = $request->all();
		
		//print_r($request->input());
		if (!empty($input)){
			$rules= array(
					'title' => 'required|string',
					'title_sub' => 'required'
					
				
				);
				$this->validate( $request , $rules);
			$data = array();
			$data['home_room_section_title'] = $input['title'];
			$data['home_room_section_title_sub'] = $input['title_sub'];
			
			$websetting = DB::table('web_settings')->update($data);
			
			$home_room_section_title = $input['title'];
			$home_room_section_title_sub = $input['title_sub'];
			Session::flash('msg', "Updated successfully.");
			return redirect()->route('backend.admin.frontdesk.website_setting.home.our_room');
			//return view('backend.admin.frontdesk.website_settings.home.our_room');
		}
		
		
		return view('backend.admin.frontdesk.website_settings.home.our_room');		
	}
	
	public function service(Request $request){
		
		$input = $request->all();
		//print_r($request->input());
		if (!empty($input)){
			$rules= array(
					'title' => 'required|string',
					'sub_title' => 'required'
					
				);
				$this->validate( $request , $rules);
			
			$data = array();
			$data['home_service_section_title'] = $input['title'];
			$data['home_service_section_sub_title'] = $input['sub_title'];
			
			$websetting = DB::table('web_settings')->update($data);
			
			$home_service_section_title = $input['title'];
			$home_service_section_sub_title = $input['sub_title'];
			Session::flash('msg', "Updated successfully.");
			return redirect()->route('backend.admin.frontdesk.website_setting.home.service');
			//return view('backend.admin.frontdesk.website_settings.home.service');
		}
		
		return view('backend.admin.frontdesk.website_settings.home.service');		
	}
	
	public function testimonial(Request $request){
		$clientfeed = DB::table('web_our_client_feedbacks')->get();	
		$input = $request->all();
		
		//print_r($request->input());
		if (!empty($input)){
			
			$rules= array(
					'title_1' => 'required|string',
					'title_2' => 'required'
					
				);
				$this->validate( $request , $rules);
			
			$data = array();
			$data['home_testimonial_section_title_1'] = $input['title_1'];
			$data['home_testimonial_section_title_2'] = $input['title_2'];
			
			$websetting = DB::table('web_settings')->update($data);
			
			$home_testimonial_section_title_1 = $input['title_1'];
			$home_testimonial_section_title_2 = $input['title_2'];
			Session::flash('msg', "Updated successfully.");
			return redirect()->route('backend.admin.frontdesk.website_setting.home.testimonial');
			//return view('backend.admin.frontdesk.website_settings.home.testimonial');
		}
		
		return view('backend.admin.frontdesk.website_settings.home.testimonial',['clientfeed'=>$clientfeed]);		
	}
	
	public function addTestimonial(Request $request){ 
		
		$input = $request->all();
		

			if(!empty($input)){
				//echo '<pre>';
						//print_r($_FILES);
						//die;
			$rules = array(
			'name' => 'required',
			'title' => 'required',
			'feed' => 'required',
			'image' => 'required|image|mimes:jpeg,png,jpg'
			);
			$this->validate( $request , $rules);
				
				$data = array();
				
				$data['name'] = $input['name'];
				$data['title'] = $input['title'];
				$data['feed'] = $input['feed'];
				//$data['image'] = $input['image'];
				if($request->hasfile('image')){
					
					$file = $request->file('image');
					$extension = $file->getClientOriginalExtension();
					$filename = time(). '.' .$extension;
					$file->move('uploads/',$filename);
					$data['image'] = $filename;
				}
				
				$clientfeed = DB::table('web_our_client_feedbacks')->insert($data);
				
				$name = $input['name'];
				$title = $input['title'];
				$feed = $input['feed'];
				$image = $input['image'];
				
				Session::flash('msg', "Your feedback has been Recorded successfully.");
				$clientfeed = DB::table('web_our_client_feedbacks')->get();
				return redirect()->route('backend.admin.frontdesk.website_setting.home.testimonial');
			}
		
		return view('backend.admin.frontdesk.website_settings.home.add_testimonial');		
	}
	
	
	
	
	
	public function editTestimonial($id,Request $request){ 
		
			$input = $request->all();
			if(!empty($input)){
				$rules = array(
				
					'name' => 'required',
					'title' => 'required',
					'feed' => 'required',
					'image' => 'nullable|image|mimes:jpeg,png,jpg'
				);
					$this->validate( $request , $rules);
			
				$data = array();
				
				$data['name'] = $input['name'];
				$data['title'] = $input['title'];
				$data['feed'] = $input['feed'];
				//$data['image'] = $input['image'];
				if($request->hasfile('image')){
					
					$file = $request->file('image');
					$extension = $file->getClientOriginalExtension();
					$filename = time(). '.' .$extension;
					$file->move('uploads/',$filename);
					$data['image'] = $filename;
				}
				
				
				///$clientfeed = DB::table('web_our_client_feedbacks')->get()->where('id', $id)->first()->update($data);
				WebOurClientFeedback::where('id', $id)->update($data);
				$name = $input['name'];
				$title = $input['title'];
				$feed = $input['feed'];
				//$image = $input['image'];
				
				Session::flash('msg', "Your feedback has been Updated successfully.");
				//$clientfeed = DB::table('web_our_client_feedbacks')->get();
				return redirect()->route('backend.admin.frontdesk.website_setting.home.testimonial');
			}
			$clientfeed = DB::table('web_our_client_feedbacks')->get()->where('id', $id)->first();
			return view('backend.admin.frontdesk.website_settings.home.edit_testimonial',['clientfeed'=>$clientfeed]);
	
	}
	public function deleteTestimonial($id){
        $table= $this->testimonial->findOrFail($id);
           $table->delete();
		  Session::flash('errmsg',"Deleted Successfully");
        return redirect()->back();
    }
	
	public function video(Request $request){
		
		$input= $request->all();
		if(!empty($input)){
			$rules = array(
				
					'title' => 'required',
					'sub_title' => 'required',
					'video_link' => 'required'
				);
					$this->validate( $request , $rules);
			
			$data =array();
			$data['home_video_section_title'] = $input['title'];
			$data['home_video_section_sub_title'] = $input['sub_title'];
			$data['home_video_section_video_link'] = $input['video_link'];
			
			$websetting = DB::table('web_settings')->update($data);
			
			$home_video_section_title = $input['title'];
			$home_video_section_sub_title = $input['sub_title'];
			$home_video_section_video_link = $input['video_link'];
			
			
			Session::flash('msg', "Updated successfully.");
			//return view('backend.admin.frontdesk.website_settings.home.video');
			return redirect()->route('backend.admin.frontdesk.website_setting.home.video');
		}
		return view('backend.admin.frontdesk.website_settings.home.video');		
	}
	
	public function ourFacility(Request $request){
		$input=$request->all();
		if(!empty($input)){
			$rules = array(
				
					'title_1' => 'required',
					'title_2' => 'required'
					
				);
					$this->validate( $request , $rules);
					
			$data = array();
			$data['home_facility_section_title_1'] = $input['title_1'];
			$data['home_facility_section_title_2'] = $input['title_2'];
			
			$websetting = DB::table('web_settings')->update($data);
			
			$home_facility_section_title_1 = $input['title_1'];
			$home_facility_section_title_1 = $input['title_2'];
			Session::flash('msg',"update Successfully");
			return redirect()->route('backend.admin.frontdesk.website_setting.home.facility');
		
		}
		
		$facility = DB::table('web_facilities')->get();
		return view('backend.admin.frontdesk.website_settings.home.facility',['facility'=>$facility]);		
	}
	
	public function addFacility(Request $request){
		
		$input = $request->all();
		
		if(!empty($input)){
			$rules = array(
				
					'name' => 'required',
					'image' => 'required|image|mimes:jpeg,png,jpg'
				);
					$this->validate( $request , $rules);
			
			$data = array();
			$data['name'] = $input['name'];
			//$data['image'] = $input['image'];
				if($request->hasfile('image')){
						
						$file = $request->file('image');
						$extension = $file->getClientOriginalExtension();
						$filename = time(). '.' .$extension;
						$file->move('uploads/',$filename);
						$data['image'] = $filename;
					}
					
				$facility = DB::table('web_facilities')->insert($data);
				
				$name = $input['name'];
				$image = $input['image'];
				
				Session::flash('msg', "Inserted Successfully");
				return redirect()->route('backend.admin.frontdesk.website_setting.home.facility');
			
			
		}
		
		return view('backend.admin.frontdesk.website_settings.home.add_facility');		
	}
	
	
	
	public function editFacility($id, Request $request){
		
		$input = $request->all();
		if(!empty($input)){
		$rules = array(
				
					'name' => 'required',
					'image' => 'nullable|image|mimes:jpeg,png,jpg'
				);
					$this->validate( $request , $rules);
			$data = array();
			$data['name'] = $input['name'];
			//$data['image'] = $input['image'];
			if($request->hasfile('image')){
					
					$file = $request->file('image');
					$extension = $file->getClientOriginalExtension();
					$filename = time(). '.' .$extension;
					$file->move('uploads/',$filename);
					$data['image'] = $filename;
				}
				
				
				//$facility = DB::table('web_facilities')->insert($data);
				WebFacility::where('id', $id)->update($data);
				$name = $input['name'];
				//$image = $input['image'];
				
				Session::flash('msg', "Updated Successfully");
				return redirect()->route('backend.admin.frontdesk.website_setting.home.facility');
			
			
		}
		
		$facility = DB::table('web_facilities')->get()->where('id', $id)->first();
		return view('backend.admin.frontdesk.website_settings.home.edit_facility',['facility'=>$facility]);
	}
	
	
	public function deleteFacility($id){
        $table= $this->facility->findOrFail($id);
           $table->delete();
		  Session::flash('errmsg',"Deleted Successfully");
        return redirect()->back();
	}
	
	
	
	public function counter(){
		
		$web_counter = DB::table('web_counter_sections')->get();
		return view('backend.admin.frontdesk.website_settings.home.counter',['web_counter'=>$web_counter]);	

		
	}
	
	public function addCounter(Request $request){
		
		
		$input =$request->all();
		if(!empty($input)){
			$rules = array(
				
					'name' => 'required',
					'number' => 'required|numeric'
				);
					$this->validate( $request , $rules);
			
			$data = array();
			$data['name'] = $input['name'];
			$data['number'] = $input['number'];
			$web_counter = DB::table('web_counter_sections')->insert($data);
			
			$name = $input['name'];
			$number = $input['number'];
			Session::flash('msg',"inserted successfully");
			$web_counter = DB::table('web_counter_sections')->get();
			Session::flash('msg', "Recorded Successfully");
			//return view('backend.admin.frontdesk.website_settings.home.counter',['web_counter'=>$web_counter]);
			return redirect()->route('backend.admin.frontdesk.website_setting.home.counter');
		}
		
		
		$web_counter = DB::table('web_counter_sections')->get();
		return view('backend.admin.frontdesk.website_settings.home.add_counter',['web_counter'=>$web_counter] );				
	}
	
	
	public function editCounter($id,Request $request){
		
		$input =$request->all();
		if(!empty($input)){
			$rules = array(
				
					'name' => 'required',
					'number' => 'required|numeric'
				);
					$this->validate( $request , $rules);
			
			
			$data = array();
			$data['name'] = $input['name'];
			$data['number'] = $input['number'];
			
			WebCounterSection::where('id', $id)->update($data);
			//$counter = DB::table('web_counter_sections')->get()->where('id', $id)->first()->update($data);
			$name = $input['name'];
			$number = $input['number'];
			Session::flash('msg',"Updated successfully");
			return redirect()->route('backend.admin.frontdesk.website_setting.home.counter');
		}
		$counter = DB::table('web_counter_sections')->get()->where('id', $id)->first();
		return view('backend.admin.frontdesk.website_settings.home.edit_counter',['counter'=>$counter]);
		
	}
	
	
	public function deleteCounter($id){
        $table= $this->counterSection->findOrFail($id);
           $table->delete();
		  Session::flash('errmsg',"Deleted Successfully");
        return redirect()->back();
	}
	
	
	public function team(Request $request){
		//echo '<pre>';		
		$input = $request->all();
		if(!empty($input)){
			//print_r($request->hasfile('banner_image'));
			//print_r($_FILES);
			//die;
			
			
			$rules = array(
            'title_1'=>'required',
            'title_2'=>'required',
			'banner_image'=>'required|image|mimes:jpeg,png,jpg'
        
           
        );
		 $this->validate( $request , $rules);
			$data = array();
			$data['name'] = $input['title_1'];
			$data['title'] = $input['title_2'];
			if($request->hasfile('banner_image')){
					
					$file = $request->file('banner_image');
					$extension = $file->getClientOriginalExtension();
					$filename = time(). '.' .$extension;
					$file->move('uploads/',$filename);
					$data['image'] = $filename;
					
				}
				
			
			
			$data['fb'] = $input['fb_link'];
			$data['tw'] = $input['tw_link'];
			$data['lin'] = $input['ln_link'];
			$data['gp'] = $input['gp_link'];
			
			$web_team=DB::table('web_our_teams')->insert($data);
			
			$name = $input['title_1'];
			$title = $input['title_2'];
			$image = $input['banner_image'];
			$fb = $input['fb_link'];
			$tw = $input['tw_link'];
			$lin = $input['ln_link'];
			$gp = $input['gp_link'];
			Session::flash('msg',"Team Added Successfully");
			return redirect()->route('backend.admin.frontdesk.website_setting.home.about');
		}
		return view('backend.admin.frontdesk.website_settings.home.team');			
	}	
	
	
	
	
	public function editTeam($id, Request $request){
		
		$input = $request->all();
		if(!empty($input)){
			//print_r($request->hasfile('banner_image'));
			//print_r($_FILES);
			//die;
			$rules = array(
            'title_1'=>'required',
            'title_2'=>'required',
			'banner_image'=>'nullable|image|mimes:jpeg,png,jpg'
        
           
        );
		 $this->validate( $request , $rules);
			$data = array();
			$data['name'] = $input['title_1'];
			$data['title'] = $input['title_2'];
			//$data['image'] = $input['banner_image'];
			if($request->hasfile('banner_image')){
					
					$file = $request->file('banner_image');
					$extension = $file->getClientOriginalExtension();
					$filename = time(). '.' .$extension;
					$file->move('uploads/',$filename);
					$data['image'] = $filename;
					
				}
				
			
			
			$data['fb'] = $input['fb_link'];
			$data['tw'] = $input['tw_link'];
			$data['lin'] = $input['ln_link'];
			$data['gp'] = $input['gp_link'];
			
			//$web_team = DB::table('web_our_teams')->get()->where->('id',$id)->update($data);
			WebOurTeam::where('id', $id)->update($data);
			
			$name = $input['title_1'];
			$title = $input['title_2'];
			//$image = $input['banner_image'];
			$fb = $input['fb_link'];
			$tw = $input['tw_link'];
			$lin = $input['ln_link'];
			$gp = $input['gp_link'];
			Session::flash('msg',"Team Updated Successfully");
			return redirect()->route('backend.admin.frontdesk.website_setting.home.about');
		}
		
		$team = DB::table('web_our_teams')->get()->where('id',$id)->first();
		return view('backend.admin.frontdesk.website_settings.home.edit_team',['team'=>$team]);
	}
	
	 public function deleteTeam($id){
        $table= $this->ourTeam->findOrFail($id);
           $table->delete();
		  Session::flash('errmsg',"Team Deleted Successfully");
        return redirect()->back();
    }
	
	
    public function sectionEdit($page,$section){
        $view = 'backend.admin.web_settings.'.str_replace('-','_',$page).'.'.str_replace('-','_',$section);
        if(view()->exists($view)){
            return view($view,compact('page','section'));
        }
        abort(404);
    }
	
    public function sectionUpdate(Request $request,$page,$section){
        if($this->getSectionMethod($page,$section)){
            $method = '_'.str_replace('-','_',$page).'_'.str_replace('-','_',$section);

           return $this->$method($request);
        }
        $data = $request->all();
        unset($data['_token']);
        foreach ($data as $key=>$value){
            $field_name = str_replace('-','_',$page).'_'.str_replace('-','_',$section).'_'.$key;
            if(is_array($value)){
                if(array_key_exists('png',$value)){
                  $ext = 'png';
                }elseif (array_key_exists('jpg',$value)){
                    $ext = 'jpg';
                }
                $image_path = 'assets/frontend/img/'.str_replace('-','_',$page).'/'.str_replace('-','_',$section).'/';
                $name = $key.'.'.$ext;
                $this->validate($request,[
                    $key.'.'.$ext=>[
                        function($attribute, $value, $fail) use ($request,$key,$ext) {
                            if(!in_array($request[$key][$ext]->getClientOriginalExtension(), [$ext])) {
                                return $fail('Only '.$ext.' files are allowed');
                            }
                        },'max:2048'
                    ],
                ]);
                Image::make($request[$key][$ext])->save($image_path.$name);
            }else{
                $gs = WS::first();
                $gs->$field_name = $value;
                $gs->save();
            }
        }
        return redirect()->back()->with('success','Update successful');
    }
	
    private function getSectionMethod($page,$section,$request=null){
        $method = '_'.str_replace('-','_',$page).'_'.str_replace('-','_',$section);
        if (method_exists($this,$method)){
            return true;
        }
          return false;
    }

    /**
     * contact
     */
    private function contact_all_section(Request $request){

        $height = '100%';
        $width = '100%';

        $iframe = preg_replace('/height="(.*?)"/i', 'height="' . $height .'"', $request->map);
        $iframe = preg_replace('/width="(.*?)"/i', 'width="' . $width .'"', $iframe);
        
    }
    /**
     * Faq area
     */
    public function faqStore(Request $request){
        
		$faq = new $this->faq;
        $faq->question = $request->question;
        $faq->answer = $request->answer;
        $faq->save();
        return redirect()->back()->with('success','Successful save');
    }
	
    public function faqUpdate(Request $request,$id){
        $faq =  $this->faq->findOrFail($id);
        $faq->question = $request->question;
        $faq->answer = $request->answer;
        $faq->save();
        return redirect()->back()->with('success','Successful updated');
    }
	
    public function faqDelete($id){
        $this->faq->findOrFail($id)->delete();
        return redirect()->back()->with('success','Successful delete');
    }
	
    /**
     * Facility area
     */
    public function facilityStore(Request $request){
        $this->validate($request,[
            'image'=>[new MimeCheckRules(['jpg','png'])]
        ]);
        $facility = new $this->facility;
        $facility->name = $request->name;
        if($request->has('image')){
            $path = 'assets/frontend/img/home/facility_section/';
            $facility->image = 'facility_'.time().'.'.$request->image->getClientOriginalExtension();
            Image::make($request->image)->resize(270,357)->save($path.$facility->image);
        }
        $facility->save();
        return redirect()->back()->with('success','Successful save');
    }
	
    public function facilityUpdate(Request $request,$id){
        $this->validate($request,[
            'image'=>[new MimeCheckRules(['jpg','png'])]
        ]);
        $facility =  $this->facility->findOrFail($id);
        $facility->name = $request->name;
        if($request->has('image')){
            $path = 'assets/frontend/img/home/facility_section/';
            @unlink($path.$facility->image);
            $facility->image = 'facility_'.time().'.'.$request->image->getClientOriginalExtension();
            Image::make($request->image)->resize(270,357)->save($path.$facility->image);
        }
        $facility->save();
        return redirect()->back()->with('success','Successful updated');
    }
	
    public function facilityDelete($id){
        $facility=  $this->facility->findOrFail($id);

             $path = 'assets/frontend/img/home/facility_section/';
            @unlink($path.$facility->image);
        $facility->delete();
        return redirect()->back()->with('success','Successful delete');
    }

    /**
     * Home Team area
     */
    public function teamStore(Request $request){
        $this->validate($request,[
            'image'=>[new MimeCheckRules(['jpg','png'])]
        ]);
        $table = new $this->ourTeam;
        $table->name = $request->name;
        $table->title = $request->title;
        $table->fb = $request->fb;
        $table->tw = $request->tw;
        $table->lin = $request->lin;
        $table->gp = $request->gp;
        if($request->has('image')){
            $path = 'assets/frontend/img/home/team_section/';
            $table->image = 'team_'.time().'.'.$request->image->getClientOriginalExtension();
            Image::make($request->image)->save($path.$table->image);
        }
        $table->save();
        return redirect()->back()->with('success','Successful save');
    }
	
    public function teamUpdate(Request $request,$id){

        $this->validate($request,[
            'image'=>[new MimeCheckRules(['jpg','png'])]
        ]);
        $table =  $this->ourTeam->findOrFail($id);
        $table->name = $request->name;
        $table->title = $request->title;
        $table->fb = $request->fb;
        $table->tw = $request->tw;
        $table->lin = $request->lin;
        $table->gp = $request->gp;
        if($request->has('image')){
            $path = 'assets/frontend/img/home/team_section/';
            @unlink($path.$table->image);
            $table->image = 'team_'.time().'.'.$request->image->getClientOriginalExtension();
            Image::make($request->image)->save($path.$table->image);
        }
        $table->save();
        return redirect()->back()->with('success','Successful updated');
    }
	
    
    /**
     * Gallery Category area
     
    public function galleryCategory(){
		
		
		return view('backend.admin.frontdesk.website_setting.gallery-category');
	}
	
	*/
	
	
	
	public function galleryCategoryStore(Request $request){
        
		$input = $request->all();
		if(!empty($input)){
			
			$data = array();
			$data['name'] = $input['name'];
			
			$category = DB::table('web_gallery_categories')->insert($data);
			
			$name = $input['name'];
			Session::flash('msg',"your data saved successfully");
			return redirect()->route('backend.admin.frontdesk.website_setting.gallery-category');
		}
		
		return view('backend.admin.frontdesk.website_settings.gallery-category-add');
    }
	
    public function galleryCategoryUpdate(Request $request,$id){

        $table =  $this->galleryCategory->findOrFail($id);
        $table->name = $request->name;
        $table->save();
        return redirect()->back()->with('success','Successful updated');
    }
	
    public function galleryCategoryDelete($id){
         $this->galleryCategory->findOrFail($id)->delete();
        return redirect()->back()->with('success','Successful delete');
    }
	

    /**
     * Gallery Category area
     */
    public function galleryStore(Request $request){
        $this->validate($request,[
            'category_id'=>'required|integer',
            'image'=>[new MimeCheckRules(['jpg','png'])]
        ]);
        $table = new $this->gallery;
        if($request->has('image')){
            $path = 'assets/frontend/img/gallery/gallery_section/';
            $table->image = 'gallery_'.time().'.'.$request->image->getClientOriginalExtension();
            Image::make($request->image)->save($path.$table->image);
        }
        $table->category_id = $request->category_id;
        $table->type = $request->type;
        $table->link = $request->link;
        $table->save();
        return redirect()->back()->with('success','Successful save');
    }
    public function galleryUpdate(Request $request,$id){
        $this->validate($request,[
            'category_id'=>'required|integer',
            'image'=>[new MimeCheckRules(['jpg','png'])]
        ]);
        $table =  $this->gallery->findOrFail($id);
        if($request->has('image')){
            $path = 'assets/frontend/img/gallery/gallery_section/';
            @unlink($path.$table->image);
            $table->image = 'gallery_'.time().'.'.$request->image->getClientOriginalExtension();
            Image::make($request->image)->save($path.$table->image);
        }
        $table->category_id = $request->category_id;
        $table->type = $request->type;
        $table->link = $request->link;
        $table->save();
        return redirect()->back()->with('success','Successful updated');
    }
    public function galleryDelete($id){
        $table= $this->gallery->findOrFail($id);
        $path = 'assets/frontend/img/gallery/gallery_section/';
        @unlink($path.$table->image);

        $table->delete();
        return redirect()->back()->with('success','Successful delete');
    }
    
    
    
   
    /**
     * testimonial Category area
     */
    public function testimonialStore (Request $request){
        $this->validate($request,[
            'image'=>[new MimeCheckRules(['jpg'])]
        ]);
        $table = new $this->testimonial;
        $table->name = $request->name;
        $table->title = $request->title;
        $table->feed = $request->feed;
        if($request->has('image')){
            $path = 'assets/frontend/img/testimonial/testimonial_section/';
            $table->image = 'testimonial_'.time().'.'.$request->image->getClientOriginalExtension();
            Image::make($request->image)->save($path.$table->image);
        }
        $table->save();
        return redirect()->back()->with('success','Successful save');
    }
    public function testimonialUpdate(Request $request,$id){
        $this->validate($request,[
            'image'=>[new MimeCheckRules(['jpg'])]
        ]);
        $table =  $this->testimonial->findOrFail($id);
        $table->name = $request->name;
        $table->title = $request->title;
        $table->feed = $request->feed;
        if($request->has('image')){
            $path = 'assets/frontend/img/testimonial/testimonial_section/';
            @unlink($path.$table->image);
            $table->image = 'testimonial_'.time().'.'.$request->image->getClientOriginalExtension();
            Image::make($request->image)->save($path.$table->image);
        }
        $table->save();
        return redirect()->back()->with('success','Successful updated');
    }
    public function testimonialDelete($id){
        $table =  $this->testimonial->findOrFail($id);
        $path = 'assets/frontend/img/testimonial/testimonial_section/';
             @unlink($path.$table->image);
        $table->delete();
        return redirect()->back()->with('success','Successful delete');
    }

    /**
     * Social area
     */
    public function socialStore (Request $request){
        $this->validate($request,[
            'icon'=>'nullable|string',
            'link'=>'nullable|string',
        ]);
        $table = new $this->social;
        $table->name = $request->name;
        $table->icon = $request->icon;
        $table->link = $request->link;
        $table->status = $request->status;
        $table->color = $request->color;
        $table->save();
        return redirect()->back()->with('success','Successful save');
    }
    public function socialUpdate(Request $request,$id){
        $this->validate($request,[
            'icon'=>'nullable|string',
            'link'=>'nullable|string',
        ]);
        $table =  $this->social->findOrFail($id);
        $table->name = $request->name;
        $table->icon = $request->icon;
        $table->link = $request->link;
        $table->status = $request->status;
        $table->color = $request->color;
        $table->save();
        return redirect()->back()->with('success','Successful updated');
    }
    public function socialDelete($id){
        $this->social->findOrFail($id)->delete();
        return redirect()->back()->with('success','Successful delete');
    }
}
