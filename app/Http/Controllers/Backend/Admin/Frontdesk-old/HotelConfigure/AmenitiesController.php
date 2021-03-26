<?php
namespace App\Http\Controllers\Backend\Admin\Frontdesk\HotelConfigure;

use App\Http\Helper\MimeCheckRules;
use App\Model\Amenity;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Image;
use Session;
class AmenitiesController extends Controller
{
    /**
     * @var Amenity
     */
    private $amenity;

    public  function __construct(Amenity $amenity)
    {
        $this->amenity = $amenity;
    }

    public function index(){
        $amenities = $this->amenity->get();
        return view('backend.admin.frontdesk.hotel_configure.amenity.index',compact('amenities'));
    }
    public function create(){
        return view('backend.admin.frontdesk.hotel_configure.amenity.create');
    }

    public function store(Request $request){
        /*$this->validate($request,[
            'name'=>'required|max:191|unique:amenities',
            'image'=>[new  MimeCheckRules(['png']),'max:2048','image'],
        ]);*/
        $amenity = new $this->amenity;
        $amenity->name = $request->name;
        $amenity->description = $request->description;
        $amenity->status = $request->has('status')?1:0;
        $amenity->save();
		Session::flash('msg','Saved Successful');
        return redirect()->route('backend.admin.frontdesk.hotel_configure.amenities');
    }
    public function edit($id){
        $amenity = $this->amenity->findOrFail($id);
        return view('backend.admin.frontdesk.hotel_configure.amenity.edit',compact('amenity'));
    }
    public function update(Request $request,$id){
        /*$this->validate($request,[
            'name'=>'required|max:191|unique:amenities,name,'.$id,
            'image'=>[new  MimeCheckRules(['png']),'max:2048'],
        ]);*/
        $amenity = $this->amenity->findOrFail($id);
        $amenity->name = $request->name;
        $amenity->description = $request->description;
        $amenity->status = $request->has('status')?1:0;
        $amenity->save();
		Session::flash('msg','Updated Successful');
        return redirect()->route('backend.admin.frontdesk.hotel_configure.amenities');
    }
    public function delete($id){
        $this->amenity->findOrFail($id)->delete();
		Session::flash('errmsg','Deleted Successful');
        return redirect()->back();
    }
}
