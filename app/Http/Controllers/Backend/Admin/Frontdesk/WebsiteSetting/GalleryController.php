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
use DB;
use Session;
use Redirect;
use Illuminate\Validation\Rule;




class GalleryController extends Controller
{
   
    /**
     * @var WS\WebGalleryCategory
     */
    private $galleryCategory;
    /**
     * @var WS\WebGallery
     */
    private $gallery;
    
    public function __construct(
                                WebGalleryCategory $galleryCategory,
                                WS\WebGallery $gallery)
    {
        
        $this->galleryCategory = $galleryCategory;
        $this->gallery = $gallery;
       
    }
	
	public function index(Request $request){
		
		$input= $request->all();
		if(!empty($input)){
			$rules= array(
					'title_1' => 'required|string',
					'title_2' => 'required|string',
				);
				$this->validate( $request , $rules);
			
			$data = array();
			$data['gallery_gallery_section_title_1'] = $input['title_1'];
			$data['gallery_gallery_section_title_2'] = $input['title_2'];
			
			$web_settings = DB::table('web_settings')->update($data);
			
			$gallery_gallery_section_title_1 = $input['title_1'];
			$gallery_gallery_section_title_2 = $input['title_2'];
			Session::flash('msg', "Updated Successful");
			return redirect()->route('backend.admin.frontdesk.website_setting.gallery');
			//$gallery = DB::table('web_galleries')->get();
			//return view('backend.admin.frontdesk.website_settings.gallery.index',['gallery'=>$gallery]);
		}
		$gallery = DB::table('web_galleries')->get();
		$category = DB::table('web_gallery_categories')->get();
		return view('backend.admin.frontdesk.website_settings.gallery.index',compact('gallery','category'));
	}
	
	public function create(){
		$category = DB::table('web_gallery_categories')->get();
		$gallery = DB::table('web_galleries')->get();
		return view('backend.admin.frontdesk.website_settings.gallery.add_gallery',compact('gallery','category'));
	}	
	
	public function galleryCategory(){
		
		$category = DB::table('web_gallery_categories')->get();
		return view('backend.admin.frontdesk.website_settings.gallery.category',['category'=>$category]);
	}
	
	public function galleryCategoryAdd(){
		return view('backend.admin.frontdesk.website_settings.gallery.add_category');
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
    private function _contact_all_section(Request $request){

        $height = '100%';
        $width = '100%';

        $iframe = preg_replace('/height="(.*?)"/i', 'height="' . $height .'"', $request->map);
        $iframe = preg_replace('/width="(.*?)"/i', 'width="' . $width .'"', $iframe);
        $ws = WS::first();
        $ws->contact_all_section_title_1 = $request->title_1;
        $ws->contact_all_section_title_2 = $request->title_2;
        $ws->contact_all_section_phone = $request->phone;
        $ws->contact_all_section_email_web = $request->email_web;
        $ws->contact_all_section_address = $request->address;
        $ws->contact_all_section_map =$iframe;
        $ws->save();
        return redirect()->back()->with('success','Update successful');
    }
    
	
    /**
     * Gallery Category area
     */
    public function galleryCategoryStore(Request $request){
		
		$rules= array(
					'name' => 'required|string',
				);
				$this->validate( $request , $rules);
        $table = new $this->galleryCategory;
        $table->name = $request->name;
        $table->save();
		Session::flash('msg','Added Successfully');
		return redirect()->route('backend.admin.frontdesk.website_setting.gallery.category');
	}
	
    public function galleryCategoryUpdate(Request $request,$id){
		
		$input=$request->all();
		
		if(!empty($input)){
			
			$rules= array(
					'name' => 'required|string',
				);
				$this->validate( $request , $rules);
        $table =  $this->galleryCategory->findOrFail($id);
        $table->name = $request->name;
        $table->save();
		Session::flash('msg',"Your Record Successful Updated");
        return redirect()->route('backend.admin.frontdesk.website_setting.gallery.category');
		}
		//
		$category = DB::table('web_gallery_categories')->get()->where('id',$id)->first();
		return view('backend.admin.Frontdesk.Website_Settings.gallery.edit_category',['category'=>$category]);
	}
	
    public function galleryCategoryDelete($id){
         $this->galleryCategory->findOrFail($id)->delete();
		 Session::flash('errmsg','Successful delete');
        return redirect()->back();
    }
	

    /**
     * Gallery Category area
     */
    public function galleryStore(Request $request){
		
		$input = $request->all();
		
		if(!empty($input)){
			$rules= array(
					'category_id'=> 'required',
					'link' => 'required|string',
					'type' => 'required|string',
					'image' => 'required|image|mimes:jpeg,png,jpg'
				);
				$this->validate( $request , $rules);
			
			
			$data = array();
			if($request->hasfile('image')){
					
					$file = $request->file('image');
					$extension = $file->getClientOriginalExtension();
					$filename = time(). '.' .$extension;
					$file->move('uploads/',$filename);
					$data['image'] = $filename;
				}
			
			$data['category_id'] = $input['category_id'];
			$data['link'] = $input['link'];
			$data['type'] = $input['type'];
			
			$gallery = DB::table('web_galleries')->insert($data);
			
			$image = $input['image'];
			$category_id = $input['category_id'];
			$link = $input['link'];
			$type = $input['type'];
			
			Session::flash('msg',"Saved Successful");
			$gallery = DB::table('web_galleries')->get();
			return redirect()->route('backend.admin.frontdesk.website_setting.gallery');
			
			
		}
	
		return view('backend.admin.frontdesk.website_settings.gallery.add_gallery');
	
    }
    public function galleryUpdate(Request $request,$id){
        
		$input= $request->all();
			if(!empty($input)){
			$rules= array(
					'category_id'=> 'required',
					'link' => 'required|string',
					'type' => 'required|string',
					'image' => 'nullable|image|mimes:jpeg,png,jpg'
				);
				$this->validate( $request , $rules);
        $table =  $this->gallery->findOrFail($id);
        if($request->hasfile('image')){
					
					$file = $request->file('image');
					$extension = $file->getClientOriginalExtension();
					$filename = time(). '.' .$extension;
					$file->move('uploads/',$filename);
					$table->image = $filename;
				}
		
        $table->category_id = $request->category_id;
        $table->type = $request->type;
        $table->link = $request->link;
		//$table->timestamps();
        $table->save();
		Session::flash('msg',"Updated Successfully");
        return redirect()->route('backend.admin.frontdesk.website_setting.gallery');
		}
		$gallery = DB::table('web_galleries')->get()->where('id', $id)->first();
		return view('backend.admin.frontdesk.website_settings.gallery.edit_gallery',['gallery'=>$gallery]);
    }
    public function galleryDelete($id){
        $table= $this->gallery->findOrFail($id);
        //$path = 'assets/frontend/img/gallery/gallery_section/';
        //@unlink($path.$table->image);

        $table->delete();
		Session::flash('errmsg','Successful delete');
        return redirect()->back();
    }
    /**
     * Counter Category area
     */
    public function counterStore (Request $request){
        $this->validate($request,[
            'number'=>'nullable|numeric',
        ]);
        $table = new $this->counterSection;
        $table->name = $request->name;
        $table->number = $request->number?$request->number:0;
        $table->save();
        return redirect()->back()->with('success','Successful save');
    }
    public function counterUpdate(Request $request,$id){
        $this->validate($request,[
            'number'=>'nullable|numeric',
        ]);
        $table =  $this->counterSection->findOrFail($id);
        $table->name = $request->name;
        $table->number = $request->number?$request->number:0;
        $table->save();
        return redirect()->back()->with('success','Successful updated');
    }
    public function counterDelete($id){
        $this->counterSection->findOrFail($id)->delete();
		Session::flash('errmsg','Successful delete');
        return redirect()->back();
    }    
}
