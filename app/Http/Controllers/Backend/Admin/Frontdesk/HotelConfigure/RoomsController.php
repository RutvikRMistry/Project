<?php
namespace App\Http\Controllers\Backend\Admin\Frontdesk\HotelConfigure;

use App\Http\Helper\MimeCheckRules;
use App\Model\Frontdesk\Floor;
use App\Model\Frontdesk\Room;
use App\Model\Frontdesk\RoomType;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Image;
use Session;
use Redirect;

class RoomsController extends Controller
{
    /**
     * @var Room
     */
    private $room;
    /**
     * @var Floor
     */
    private $floor;
    /**
     * @var RoomType
     */
    private $roomType;

    public  function __construct(Room $room,Floor $floor,RoomType $roomType)
    {
        $this->room = $room;
        $this->floor = $floor;
        $this->roomType = $roomType;
    }

    public function index(){
        $rooms = $this->room->paginate(15);
        return view('backend.admin.frontdesk.hotel_configure.rooms.index',compact('rooms'));
    }
	
    public function create(){
        $floors = $this->floor->where('status',1)->get();
        $room_types = $this->roomType->where('status',1)->get();
        return view('backend.admin.frontdesk.hotel_configure.rooms.create',compact('floors','room_types'));
    }

    public function store(Request $request){
        $rules = array(
			'number'=>'required|integer|unique:rooms',
            'room_type'=>'required|integer',
            'floor'=>'required|integer'
            
           
        );
		$this->validate( $request , $rules);
        $room = new $this->room;
        $room->room_type_id = $request->room_type;
        $room->floor_id = $request->floor;
        $room->number = $request->number;
        if($request->hasfile('image')){
					
					$file = $request->file('image');
					$extension = $file->getClientOriginalExtension();
					$filename = time(). '.' .$extension;
					$file->move('uploads/',$filename);
					$guests->image = $filename;
				}
		
        $room->status = $request->has('status') == 'on' ? '1' : '0';
		$room->save();
		Session::flash('msg','Room Added Successfully');
        return redirect()->route('backend.admin.frontdesk.hotel_configure.rooms');
    }
    public function edit($id){
        $room = $this->room->findOrFail($id);
        $floors = $this->floor->where('status',1)->where('deleted_at','=',NULL)->get();
        $room_types = $this->roomType->where('status',1)->where('deleted_at','=',NULL)->get();
        return view('backend.admin.frontdesk.hotel_configure.rooms.edit',compact('room','floors','room_types'));
    }
    public function update(Request $request,$id){
        $rules = array(
            'room_type'=>'required|integer',
            'floor'=>'required|integer',
            'number'=>'required|integer',
           
        );
		$this->validate( $request , $rules);
        $room = $this->room->findOrFail($id);
        $room->room_type_id = $request->room_type;
        $room->floor_id = $request->floor;
        $room->number = $request->number;
       if($request->hasfile('image')){
					
					$file = $request->file('image');
					$extension = $file->getClientOriginalExtension();
					$filename = time(). '.' .$extension;
					$file->move('uploads/',$filename);
					$guests->image = $filename;
				}
        $room->status = $request->has('status')?1:0;
        $room->save();
        Session::flash('msg','Room Updated Successfully');
        return redirect()->route('backend.admin.frontdesk.hotel_configure.rooms');
    }
    public function delete($id){
        $this->room->findOrFail($id)->delete();
		Session::flash('errmsg','Delete successful');
        return redirect()->back();
    }
}
