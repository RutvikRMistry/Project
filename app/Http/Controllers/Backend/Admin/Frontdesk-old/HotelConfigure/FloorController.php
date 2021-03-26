<?php

namespace App\Http\Controllers\Backend\Admin\Frontdesk\HotelConfigure;

use App\Model\Floor;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Session;

class FloorController extends Controller
{
    /**
     * @var Floor
     */
    private $floor;

    public  function __construct(Floor $floor)
    {
        $this->floor = $floor;
    }

    public function index(){
        $floors = $this->floor->get();
        return view('backend.admin.frontdesk.hotel_configure.floor.index',compact('floors'));
    }
    public function create(){
        return view('backend.admin.frontdesk.hotel_configure.floor.create');
    }

    public function store(Request $request){
        /*$this->validate($request,[
            'name'=>'required|max:191|unique:floors',
            'number'=>'required|integer|unique:floors',
        ]);*/
        $floor = new $this->floor;
        $floor->name = $request->name;
        $floor->number = $request->number;
        $floor->description = $request->description;
        $floor->status = $request->has('status')?1:0;
        $floor->save();
		Session::flash('msg','Save successful');
        return redirect()->route('backend.admin.frontdesk.hotel_configure.floor');
    }
    public function edit($id){
        $floor = $this->floor->findOrFail($id);
        return view('backend.admin.frontdesk.hotel_configure.floor.edit',compact('floor'));
    }
    public function update(Request $request,$id){
        $this->validate($request,[
            'name'=>'required|max:191|unique:floors,name,'.$id,
            'number'=>'required|integer|unique:floors,number,'.$id,
        ]);
        $floor = $this->floor->findOrFail($id);
        $floor->name = $request->name;
        $floor->number = $request->number;
        $floor->description = $request->description;
        $floor->status = $request->has('status')?1:0;
        $floor->save();
        Session::flash('msg','Updated successful');
        return redirect()->route('backend.admin.frontdesk.hotel_configure.floor');
    }
    public function delete($id){
        $this->floor->findOrFail($id)->delete();
		Session::flash('errmsg','deleted successful');
        return redirect()->back();
    }
}
