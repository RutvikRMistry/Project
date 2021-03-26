<?php

namespace App\Http\Controllers\Backend\Admin\Frontdesk\HotelConfigure;

use App\Model\CouponMaster;
use App\Model\PaidService;
use App\Model\RoomType;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Image;
use Session;

class CouponMasterController extends Controller
{
    /**
     * @var CouponMaster
     */
    private $couponMaster;
    /**
     * @var RoomType
     */
    private $roomType;
    /**
     * @var PaidService
     */
    private $paidService;

    public  function __construct(CouponMaster $couponMaster,RoomType $roomType,PaidService $paidService
    )
    {
        $this->couponMaster = $couponMaster;
        $this->roomType = $roomType;
        $this->paidService = $paidService;
    }

    public function index(){
        $couponMasters = $this->couponMaster->get();
        return view('backend.admin.frontdesk.hotel_configure.coupon_master.index',compact('couponMasters'));
    }
    public function create(){
        $room_types = $this->roomType->where('status',1)->get();
        $paid_services = $this->paidService->where('status',1)->get();
        return view('backend.admin.frontdesk.hotel_configure.coupon_master.create',compact('room_types','paid_services'));
    }

    public function store(Request $request){
        /*$this->validate($request,[
            'code'=>'required|max:191|unique:coupon_masters',
            'offer_title'=>'required|max:191',
            'period_start_time'=>'required|date|after_or_equal:today',
            'period_end_time'=>'required|date|after_or_equal:period_start_time',
            'type'=>'required',
            'min_amount'=>'required|numeric|min:0',
            'max_amount'=>'required|numeric|min:0',
            'value'=>'required|numeric|min:0',
            'limit_per_user'=>'required|integer|min:0',
            'limit_per_coupon'=>'required|integer|min:0',
            'room_type'=>'required',
        ]);*/
        $couponMaster = new $this->couponMaster;
        $couponMaster->offer_title = $request->offer_title;
        $couponMaster->description = $request->description;

        if($request->hasfile('image')){
					
					$file = $request->file('image');
					$extension = $file->getClientOriginalExtension();
					$filename = time(). '.' .$extension;
					$file->move('uploads/',$filename);
					$couponMaster->image = $filename;
				}
        $couponMaster->period_start_time = $request->period_start_time;
        $couponMaster->period_end_time = $request->period_end_time;
        $couponMaster->code = $request->code;
        $couponMaster->type = $request->type;
        $couponMaster->value = $request->value;
        $couponMaster->min_amount = $request->min_amount;
        $couponMaster->max_amount = $request->max_amount;
        $couponMaster->limit_per_user = $request->limit_per_user;
        $couponMaster->limit_per_coupon = $request->limit_per_coupon;
        $couponMaster->status = $request->has('status')?1:0;
        $couponMaster->save();
        $couponMaster->roomType()->attach($request->room_type);
        if($request->has('paid_service'))
        $couponMaster->paidService()->attach($request->paid_service);
		Session::flash('msg','Save successful');
        return redirect()->route('backend.admin.frontdesk.hotel_configure.coupon');
    }
    public function edit($id){
        $couponMaster = $this->couponMaster->findOrFail($id);
        $room_types = $this->roomType->where('status',1)->get();
        $paid_services = $this->paidService->where('status',1)->get();
        return view('backend.admin.frontdesk.hotel_configure.coupon_master.edit',compact('couponMaster','room_types','paid_services'));
    }
    public function update(Request $request,$id){
        /*$this->validate($request,[
            'code'=>'required|max:191|unique:coupon_masters,code,'.$id,
            'offer_title'=>'required|max:191',
            'period_start_time'=>'required|date|after_or_equal:today',
            'period_end_time'=>'required|date|after_or_equal:period_start_time',
            'type'=>'required',
            'min_amount'=>'required|numeric|min:0',
            'max_amount'=>'required|numeric|min:0',
            'value'=>'required|numeric|min:0',
            'limit_per_user'=>'required|integer|min:0',
            'limit_per_coupon'=>'required|integer|min:0',
            'room_type'=>'required',
        ]);*/
        $couponMaster =$this->couponMaster->findOrFail($id);
        $couponMaster->offer_title = $request->offer_title;
        $couponMaster->description = $request->description;

        if($request->hasfile('image')){
					
					$file = $request->file('image');
					$extension = $file->getClientOriginalExtension();
					$filename = time(). '.' .$extension;
					$file->move('uploads/',$filename);
					$couponMaster->image = $filename;
				}
        $couponMaster->period_start_time = $request->period_start_time;
        $couponMaster->period_end_time = $request->period_end_time;
        $couponMaster->code = $request->code;
        $couponMaster->type = $request->type;
        $couponMaster->value = $request->value;
        $couponMaster->min_amount = $request->min_amount;
        $couponMaster->max_amount = $request->max_amount;
        $couponMaster->limit_per_user = $request->limit_per_user;
        $couponMaster->limit_per_coupon = $request->limit_per_coupon;
        $couponMaster->status = $request->has('status')?1:0;
        $couponMaster->save();
        $couponMaster->roomType()->sync($request->room_type);
        if($request->has('paid_service')){
            $couponMaster->paidService()->sync($request->paid_service);
        }else{
            $couponMaster->paidService()->sync([]);
        }
		Session::flash('msg','Update successful');
        return redirect()->route('backend.admin.frontdesk.hotel_configure.coupon');
    }
    public function delete($id){
        $this->couponMaster->findOrFail($id)->delete();
		Session::flash('errmsg','Delete successful');
        return redirect()->back();
    }
}
