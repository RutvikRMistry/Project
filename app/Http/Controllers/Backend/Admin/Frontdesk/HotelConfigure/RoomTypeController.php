<?php

namespace App\Http\Controllers\Backend\Admin\Frontdesk\HotelConfigure;

use App\Http\Helper\MimeCheckRules;
use App\Model\Frontdesk\Amenity;
use App\Model\Frontdesk\RegularPrice;
use App\Model\Frontdesk\RoomType;
use App\Model\Frontdesk\RoomTypeImage;
use App\Model\Frontdesk\SpecialPrice;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Image;
use Session;
use DB;
class RoomTypeController extends Controller
{
    /**
     * @var RoomType
     */
    private $roomType;
    /**
     * @var Amenity
     */
    private $amenity;
    /**
     * @var RoomTypeImage
     */
    private $roomTypeImage;
    /**
     * @var RegularPrice
     */
    private $regularPrice;
    /**
     * @var SpecialPrice
     */
    private $specialPrice;

    public  function __construct(RoomType $roomType,Amenity $amenity,RoomTypeImage $roomTypeImage,RegularPrice $regularPrice,SpecialPrice $specialPrice)
    {
        $this->roomType = $roomType;
        $this->amenity = $amenity;
        $this->roomTypeImage = $roomTypeImage;
        $this->regularPrice = $regularPrice;
        $this->specialPrice = $specialPrice;
    }

    public function index(){
        $roomTypes = $this->roomType->get();
        return view('backend.admin.frontdesk.hotel_configure.room_type.index',compact('roomTypes'));
    }
    public function create(){
        $amenities = $this->amenity->where('status',1)->get();
        return view('backend.admin.frontdesk.hotel_configure.room_type.create',compact('amenities'));
    }

    public function store(Request $request){
        $request['slug'] = str_slug($request->title);
       $rules = array(
            'title'=>'required|max:191|unique:room_types',
            'slug'=>'required|max:191|unique:room_types',
            'short_code'=>'required|max:191|unique:room_types',
            'higher_capacity'=>'required|integer|min:1',
            'kids_capacity'=>'required|integer|min:0',
            'base_price'=>'required|numeric|min:0',
            'amenities'=>'nullable'
        );
			$this->validate( $request , $rules);
        $roomType= new $this->roomType;
        $roomType->title = $request->title;
        $roomType->slug = $request->slug;
        $roomType->short_code = $request->short_code;
        $roomType->description = $request->description;
        $roomType->higher_capacity = $request->higher_capacity;
        $roomType->kids_capacity = $request->kids_capacity;
        $roomType->base_price = $request->base_price;
        $roomType->status = $request->has('status')?1:0;
        $roomType->save();
		if($request->has('amenities')){
            $roomType->amenity()->attach($request->amenities);
        }
        
		Session::flash('msg','Save successful');
        return redirect()->route('backend.admin.frontdesk.hotel_configure.room_type');
    }

    public function view($id){
        $roomType = $this->roomType->with('roomTypeImage')->findOrFail($id);
        return view('backend.admin.frontdesk.hotel_configure.room_type.view',compact('roomType'));
    }
    public function edit($id){
        $roomType = $this->roomType->findOrFail($id);
        $amenities = $this->amenity->where('status',1)->get();
        return view('backend.admin.frontdesk.hotel_configure.room_type.edit',compact('roomType','amenities'));
    }
    public function update(Request $request,$id){
        $request['slug'] = str_slug($request->title);

        $rules = array(
            'title'=>'required|max:191',
            'slug'=>'required|max:191',
            'short_code'=>'required|max:191',
            'higher_capacity'=>'required|integer|min:1',
            'kids_capacity'=>'required|integer|min:0',
            'base_price'=>'required|numeric|min:0',
            'amenities'=>'nullable'
        );
			$this->validate( $request , $rules);
        $roomType = $this->roomType->findOrFail($id);
        $roomType->title = $request->title;
        $roomType->slug = $request->slug;
        $roomType->short_code = $request->short_code;
        $roomType->description = $request->description;
        $roomType->higher_capacity = $request->higher_capacity;
        $roomType->kids_capacity = $request->kids_capacity;
        $roomType->base_price = $request->base_price;
        $roomType->status = $request->has('status') == 'on' ? '1' : '0';
        $roomType->save();
        if($request->has('amenities')){
            $roomType->amenity()
            ->sync($request->amenities);
        }else{
            $roomType->amenity()
                ->sync([]);
        }
		Session::flash('msg','Update successful');
        return redirect()->route('backend.admin.frontdesk.hotel_configure.room_type');
    }
    public function delete($id){
        $this->roomType->findOrFail($id)->delete();
		Session::flash('errmsg','Delete successful');
        return redirect()->back();
    }

    /**
     *Upload image
     */
	 
	 
    public function uploadImage(Request $request){
        $rules = array(
            'room_type'=>'required|integer',
            'image'=>['required','max:2048','image']
        );
		$this->validate( $request , $rules);
        if(($featured_image =$this->roomTypeImage->where('featured',1)->where('room_type_id', $request->room_type)->first()) && $request->has('featured')){
            $featured_image->featured = 0;
            $featured_image->save();
        }
        $roomTypeImage = new $this->roomTypeImage;
        $roomTypeImage->room_type_id = $request->room_type;
        if($request->hasfile('image')){
					
					$file = $request->file('image');
					$extension = $file->getClientOriginalExtension();
					$filename = time(). '.' .$extension;
					$file->move('uploads/',$filename);
				}
		$roomTypeImage->image = $filename;
        $roomTypeImage->featured = $request->has('featured') == 'on' ? '1' : '0';
        $roomTypeImage->save();
		Session::flash('msg','Image Saved successful');
        return redirect()->back();
    }
	
	
	
    public function deleteImage (Request $request){
        $room_type_img = $this->roomTypeImage->findOrFail($request->id);
        //$path = 'assets/backend/image/room_type_image/';
        //$path_th = 'assets/backend/image/room_type_image_th/';
        //@unlink($path.$room_type_img->image);
        //@unlink($path_th.$room_type_img->image);
        $room_type_img->delete();
		Session::flash('errmsg','Image Delete successful');
        return redirect()->back();

    }
    public function setAsFeatured($room_type_id,$id){
        if($featured_image =$this->roomTypeImage->where('featured',1)->where('room_type_id', $room_type_id)->first()){
            $featured_image->featured = 0;
            $featured_image->save();
        }
        $roomTypeImage = $this->roomTypeImage->findOrFail($id);
        $roomTypeImage->featured = 1;
        $roomTypeImage->save();
		Session::flash('msg','Image Upload as feature successful');
        return redirect()->back();
    }

    public function regularPriceUpdate(Request $request,$id){
		$input= $request->all();
		if(!empty($input)){
			$rules= array(
            'day'=>'required'
        );
		$this->validate( $request , $rules);
       
        $roomType = $this->roomType->findOrFail($id);
        if(!$regularPrice =$roomType->regularPrice){
            $regularPrice = new $this->regularPrice;
			if(!empty($request->id)){
			$specialPrice->id =$request->id;
		}
            $regularPrice->room_type_id = $id;
        }
        foreach ($request->day as $key=>$value){
            $rules1 = array(
                'day.1.amount'=>'required|numeric|min:0'
            ,[
                'day.1.amount.required'=>days_arr()[$key].' amount is required',
                'day.1.amount.min'=>days_arr()[$key].' amount must be at last 0',
                'day.1.amount.numeric'=>days_arr()[$key].' amount must be numeric',
            ]);
			$this->validate( $request , $rules1);
            $regularPrice['day_'.$key] =$value['amount']?$value['type']:'ADD';

            $regularPrice['day_'.$key.'_amount'] =$value['amount'];
        }
        $regularPrice->save();
		Session::flash('msg','Update successful');
        return redirect()->back();
    }
    
	$regularPrice = DB::table('regular_prices')->get()->where('room_type_id' ,$id)->first();
	$roomtype = DB::table('room_types')->get()->where('id' ,$id)->first();
		return view('backend.admin.frontdesk.hotel_configure.room_type.regular_price',compact('roomtype','regularPrice'));
	}
    public function specialPriceUpdate(Request $request,$id){
		$input = $request->all();
		if(!empty($input)){
        $rules = array(
            'day'=>'required',
            'title'=>'required',
            'start_time'=>'required|date|after_or_equal:today',
            'end_time'=>'required|date|after_or_equal:period_start_time',
        );
		$this->validate( $request , $rules);
		
		$roomType = $this->roomType->findOrFail($id);
        $specialPrice = new $this->specialPrice;
		if(!empty($request->id)){
			$specialPrice->id =$request->id;
		}
        $specialPrice->room_type_id = $id;
        $specialPrice->title =$request->title;
        $specialPrice->start_time =$request->start_time;
        $specialPrice->end_time =$request->end_time;
        foreach ($request->day as $key=>$value){
            $rules1 = array(
                'day.1.amount'=>'required|numeric|min:0'
            ,[
                'day.1.amount.required'=>days_arr()[$key].' amount is required',
                'day.1.amount.min'=>days_arr()[$key].' amount must be at least 0',
                'day.1.amount.numeric'=>days_arr()[$key].' amount must be numeric',
            ]);
			$this->validate( $request , $rules1);
            $specialPrice['day_'.$key] =$value['amount']?$value['type']:'ADD';

            $specialPrice['day_'.$key.'_amount'] =$value['amount'];
        }
        $specialPrice->save();
		Session::flash('msg','Update successful');
        return redirect()->back();
    }
	
	$specialPrice = DB::table('special_prices')->get()->where('room_type_id' ,$id)->first();
	$roomtype = DB::table('room_types')->get()->where('id' ,$id)->first();
	return view('backend.admin.frontdesk.hotel_configure.room_type.special_price',compact('roomtype','specialPrice'));
}
	
	
}
