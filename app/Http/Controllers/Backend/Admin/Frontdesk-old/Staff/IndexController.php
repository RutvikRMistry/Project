<?php

namespace App\Http\Controllers\Backend\Admin\Frontdesk\Staff;

use App\Http\Helper\MimeCheckRules;
use App\Model\Frontdesk\Admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Image;
use Session;
use Redirect;
class IndexController extends Controller
{
    /**
     * @var $staff
     */
    private $staff;

    public function __construct(Admin $staff)
    {
        $this->staff = $staff;
    }
	
    public function index(){
        $staffs = $this->staff->whereRole(1)->paginate(15);
        return view('backend.admin.frontdesk.staff.index',compact('staffs'));
    }
	
    public function create(){
        return view('backend.admin.frontdesk.staff.create');
    }
	
    public function store(Request $request){
        /*$this->validate($request,[
            'username'=>'required|max:191|string|unique:users',
            'first_name'=>'required|max:191|string',
            'last_name'=>'required|max:191|string',
            'phone'=>'required|max:191|string',
            'email'=>'required|max:191|string',
            'address'=>'required|string',
            'sex'=>'required|string',
            'password'=>'required|string',
            'picture'=>['nullable',new MimeCheckRules(['png']),'max:2048','image']
        ]);*/
        $staffs = new $this->staff;
        $staffs->username = $request->username;
        $staffs->first_name = $request->first_name;
        $staffs->last_name = $request->last_name;
        $staffs->phone = $request->phone;
        $staffs->email = $request->email;
        $staffs->address = $request->address;
        $staffs->sex = $request->sex;
        $staffs->role =1;
        if($request->hasfile('picture')){
					
					$file = $request->file('picture');
					$extension = $file->getClientOriginalExtension();
					$filename = time(). '.' .$extension;
					$file->move('uploads/',$filename);
				}
		$staffs->picture = $filename;
        $staffs->password = bcrypt($request->password);
        $staffs->status = $request->has('status') == 'on' ? '1' : '0';
        $staffs->save();
		Session::flash('msg','Staff save successful');
        return redirect()->route('backend.admin.frontdesk.staff');
    }
    
	public function edit($id){
        $staff = $this->staff->findOrFail($id);
        return view('backend.admin.frontdesk.staff.edit',compact('staff'));
    }

    public function update(Request $request,$id){
       /* $this->validate($request,[
            'first_name'=>'nullable|max:191|string',
            'last_name'=>'nullable|max:191|string',
            'phone'=>'required|max:191|string',
            'email'=>'required|max:191|string',
            'address'=>'nullable|string',
            'sex'=>'required|string',
            'password'=>'nullable|string',
            'picture'=>['nullable',new MimeCheckRules(['png']),'max:2048','image'],
        ]);*/
        $staffs = $this->staff->findOrFail($id);
        $staffs->first_name = $request->first_name;
        $staffs->last_name = $request->last_name;
        $staffs->phone = $request->phone;
        $staffs->email = $request->email;
        $staffs->address = $request->address;
        $staffs->sex = $request->sex;
        if($request->hasfile('picture')){
					
					$file = $request->file('picture');
					$extension = $file->getClientOriginalExtension();
					$filename = time(). '.' .$extension;
					$file->move('uploads/',$filename);
					$staffs->picture = $filename;
				}
		
        if($request->password){
            $staffs->password = bcrypt($request->password);
        }

        $staffs->status = $request->has('status') == 'on' ? '1' : '0';
        $staffs->save();
		Session::flash('msg','Staff update successful');
        return redirect()->back();
    }
	
	public function delete($id){
		$table =  $this->staff->findOrFail($id);
        $table->delete();
        Session::flash('errmsg','Successful delete');
		return redirect()->back();
		
	}
}
