<?php
namespace App\Http\Controllers\Backend\Admin\Frontdesk\WebsiteSetting;


use App\Model\Frontdesk\BlogCategory;
use App\Model\Frontdesk\BlogPost;
use App\Model\Frontdesk\WebSetting;
use Illuminate\Http\Request;

use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Input;
use File;
use App\Http\Controllers\Controller;
use DB;
use Redirect;
use Session;
//use Image;

class PostController extends Controller
{
    public function category()
    {
        $data['page_title'] = 'Blog Category';
        $data['events'] = BlogCategory::latest()->get();
        return view('backend.admin.frontdesk.blog.category',$data);
    }
	
	 public function createCategory(Request $request)
    {
        $input = $request->all();	
			
		if(!empty($input)){
			$rules = array(
			'name' => 'required'
			);
			$this->validate( $request , $rules);
			
			$data = array();
			$data['name'] = $input ['name'];
			$data['status'] = $input ['status'];
			
			$category = DB::table('categories')->insert($data);
			
			$name = $input['name'];
			$status = $input['status'];
			Session::flash('msg',"Added Successfully");
			return Redirect()->route('backend.admin.frontdesk.website_setting.blog.category');
		}
        return view('backend.admin.frontdesk.blog.add_category');
    }
	
    public function UpdateCategory($id, Request $request)
    {
		
		$input=$request->all();
		//print_r($request->Input());
		if(!empty($input)){
			$rules = array(
			'name' => 'required'
			);
			$this->validate( $request , $rules);
			
			$data = array();
			$data['name'] = $input ['name'];
			$data['status'] = $input ['status'];
			
			//$category = DB::table('categories')->get()->where('id', $id)->update($data);
			BlogCategory::where('id', $id)->update($data);
			$name = $input['name'];
			$status = $input['status'];
			Session::flash('msg',"Added Successfully");
			return Redirect()->route('backend.admin.frontdesk.website_setting.blog.category');
			
		}
		
		$category = $category = DB::table('categories')->get()->where('id', $id)->first();
        return view('backend.admin.frontdesk.blog.edit_category',['category'=>$category]);
    }
	
	public function DeleteCategory($id,Request $request){
		BlogCategory::where('id', $id)->delete();
		Session::flash('errmsg','Delete Successfully');
        return redirect()->route('backend.admin.frontdesk.website_setting.blog.category');
		
	}

    public function index(Request $request)
    {
       $input=$request->all();
		if(!empty($input)){
			$rules = array(
			'title_1' => 'required',
			'title_2' => 'required'
			);
			$this->validate( $request , $rules);
			$data = array();
			$data['blog_blog_section_title_1'] = $input['title_1'];
			$data['blog_blog_section_title_2'] = $input['title_2'];
			
			$websetting = DB::table('web_settings')->update($data);
			//WebSetting::update($data);
			$blog_blog_section_title_1 = $input['title_1'];
			$blog_blog_section_title_2 = $input['title_2'];
			Session::flash('msg',"update Successfully");
			//return redirect()->route('backend.admin.frontdesk.website_setting.blog');
			//return view('backend.admin.frontdesk.website_settings.home.facility');
			return view('backend.admin.frontdesk.blog.index');
		
		}
		$blog = DB::table('posts')->select(array('posts.*', 'categories.name'))->join('categories','categories.id','=','posts.cat_id')->get();
		
		return view('backend.admin.frontdesk.blog.index',['blog'=>$blog]);
    }

    public function create()
    {
        $data['page_title'] = 'Add Blog';
        $data['category'] = BlogCategory::whereStatus(1)->get();
		return view('backend.admin.frontdesk.blog.add', $data);
    }

    public function store(Request $request)
    {
       $input=$request->all();
	    $rules = array(
            'title' => 'required',
            'cat_id' => 'required',
            'details' => 'required',
            'image' => 'nullable | mimes:jpeg,jpg,png | max:1000'
        ,
            [
                'title.required' => 'Post Title Must not be empty',
                'cat_id.required' => 'Category Must be selected',
                'details.required' => 'Post Details  must not be empty',
            ]
        );
		$this->validate( $request , $rules);
        $in = Input::except('_token');
         if($request->hasFile('image')){
            $image = $request->file('image');
            $filename = ''.time().'.jpg';
            $location = 'uploads/' . $filename;
            //Image::make($image)->resize(700,350)->save($location);
            $path = 'uploads/';
            @unlink($path.$data->image);
            $in['image'] = $filename;
        }

		$in['title'] = $request->title;
		

        $in['status'] =  $request->status == 'on' ? '1' : '0';
        $res = BlogPost::create($in);
        Session::flash('msg','Saved Successfully');
		return redirect()->route('backend.admin.frontdesk.website_setting.blog');

    }

    public function edit($id,Request $request)
    {
		
		$blog = DB::table('posts')->get()->where('id',$id)->first();
		return view('backend.admin.frontdesk.blog.edit',['blog'=>$blog]);

	}
    public function updatePost($id,Request $request)
    {
		$input = $request->all();
		
		if(!empty($input)){

	   $data['page_title'] = 'Edit Blog';
        $data['post'] = BlogPost::findOrFail($id);
        $data['category'] = BlogCategory::whereStatus(1)->get();        
		$data = BlogPost::find($request->id);
     $rules = array(
            'title' => 'required',
            'cat_id' => 'required',
            'details' => 'required',
            'image' => 'nullable | mimes:jpeg,jpg,png | max:1000'
        ,
            [
                'title.required' => 'Post Title Must not be empty',
                'cat_id.required' => 'Category Must be selected',
                'details.required' => 'Post Details  must not be empty',
            ]
        );
		$this->validate( $request , $rules);
        $in = Input::except('_token');
        if($request->hasFile('image')){
            $image = $request->file('image');
            $filename = ''.time().'.jpg';
            $location = 'uploads/' . $filename;
            //Image::make($image)->resize(700,350)->save($location);
            $path = 'uploads/';
            @unlink($path.$data->image);
            $in['image'] = $filename;
        }
		
		$ln['title'] = $request->title;
        $in['status'] =  $request->status == 'on' ? '1' : '0';
        $res = $data->fill($in)->save();
		Session::flash('msg','Updated Sucessfully');
		return redirect()->Route('backend.admin.frontdesk.website_setting.blog');
		}
		$blog = DB::table('posts')->get()->where('id',$id)->first();
		return view('backend.admin.frontdesk.blog.edit',['blog'=>$blog]);
		
    }

    public function destroy($id,Request $request)
    { 
	
	
	
	//$request->validate([
        //    'id' => 'required'
        //]);
        $data = BlogPost::findOrFail($request->id);
        $path = 'assets/backend/image/blog/post/';
        @unlink($path.$data->image);
        @unlink($path.$data->thumb);
        $res =  $data->delete();
		Session::flash('errmsg','Deleted Successfully');
        if ($res) {
            $notification = array('message' => 'Post Delete Successfully!', 'alert-type' => 'success');
            return back()->with($notification);
        } else {
            $notification = array('message' => 'Problem With Deleting Post!', 'alert-type' => 'error');
            return back()->with($notification);
        }
       
    }
}
