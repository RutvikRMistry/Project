<?php
namespace App\Http\Controllers\Backend\Admin\Frontdesk\HotelConfigure;

use App\Http\Helper\MimeCheckRules;
use App\Model\Frontdesk\PaidService;
use App\Model\Frontdesk\Room;
use App\Model\Frontdesk\RoomType;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Image;
use Session;

class PaidServiceController extends Controller
{
    /**
     * @var Room
     */
    private $room;
    /**
     * @var RoomType
     */
    private $roomType;
    /**
     * @var PaidService
     */
    private $paidService;

    public  function __construct(PaidService $paidService,Room $room,RoomType $roomType)
    {
        $this->room = $room;
        $this->roomType = $roomType;
        $this->paidService = $paidService;
    }

    public function index(){
        $paid_services = $this->paidService->get();
        return view('backend.admin.frontdesk.hotel_configure.paid_service.index',compact('paid_services'));
    }
	
    public function create(){
        $room_types = $this->roomType->where('status',1)->get();
        return view('backend.admin.frontdesk.hotel_configure.paid_service.create',compact('room_types'));
    }

    public function store(Request $request){
        $rules = array(
            'title'=>'required|max:191|unique:paid_services',
            'price'=>'required|numeric'
        );
		$this->validate( $request , $rules);
        $paidService = new $this->paidService;
        $paidService->icon = $request->icon;
        $paidService->title = $request->title;
        $paidService->price = $request->price;
        $paidService->status = $request->has('status') == 'on' ? '1' : '0';
        $paidService->save();
		Session::flash('msg','Save successful');
        return redirect()->route('backend.admin.frontdesk.hotel_configure.paid_service');
    }
    public function edit($id){
        $paidService = $this->paidService->findOrFail($id);
        $room_types = $this->roomType->where('status',1)->get();
        return view('backend.admin.frontdesk.hotel_configure.paid_service.edit',compact('paidService','room_types'));
    }
    public function update(Request $request,$id){
        $rules = array(
            'title'=>'required|max:191',
            'price'=>'required|numeric'
        );
		$this->validate( $request , $rules);
        $paidService =  $this->paidService->findOrFail($id);
        $paidService->icon = $request->icon;
        $paidService->title = $request->title;
        $paidService->price = $request->price;
        $paidService->status = $request->has('status') == 'on' ? '1' : '0';
        $paidService->save();
		Session::flash('msg','Update successful');
        return redirect()->route('backend.admin.frontdesk.hotel_configure.paid_service');
    }
    public function delete($id){
        $this->paidService->findOrFail($id)->delete();
		Session::flash('errmsg','Delete successful');
        return redirect()->back();
    }
}
