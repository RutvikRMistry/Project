<?php
namespace App\Http\Controllers\Backend\Admin\Frontdesk\Guest;

use App\Http\Helper\MimeCheckRules;
use App\Model\Frontdesk\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Image;
use Session;
use Redirect;

class IndexController extends Controller
{
    /**
     * @var User
     */
    private $user;

    public function __construct(User $user)
    {
        $this->user = $user;
    }
	
    public function index(){
        $guests = $this->user->paginate(15);
        return view('backend.admin.frontdesk.guest.index',compact('guests'));
    }	
	
    public function create(){
        return view('backend.admin.frontdesk.guest.create');
    }
		
    public function store(Request $request){
        
		$input = $request->all();
		$rules = array(
            'username'=>'required|max:191|string|unique:users',
            'first_name'=>'required|max:191|string',
            'last_name'=>'required|max:191|string',
            'phone'=>'required|max:191|string',
            'email'=>'required|max:191|string',
            'address'=>'required|string',
            'sex'=>'required|string',
            'password'=>'required|string|min:5',
            'picture'=>'required|image|mimes:jpeg,png,jpg,max:2048',
            'id_card_image'=>'required|image|mimes:jpeg,png,jpg,max:2048'
        );
		$this->validate( $request , $rules);
		
        $guests = new $this->user;
        $guests->username = $request->username;
        $guests->first_name = $request->first_name;
        $guests->last_name = $request->last_name;
        $guests->phone = $request->phone;
        $guests->email = $request->email;
        $guests->dob = $request->dob;
        $guests->address = $request->address;
        $guests->sex = $request->sex;
        if($request->hasfile('picture')){
					
					$file = $request->file('picture');
					$extension = $file->getClientOriginalExtension();
					$filename = time(). '.' .$extension;
					$file->move('uploads/',$filename);
				}
		$guests->picture = $filename;
        $guests->password = bcrypt($request->password);
        $guests->id_type = $request->id_type;
        $guests->id_number = $request->id_number;
        if($request->hasfile('id_card_image')){
					
					$file = $request->file('id_card_image');
					$extension = $file->getClientOriginalExtension();
					$filename = time(). '.' .$extension;
					$file->move('uploads/',$filename);
				}
		$guests->id_card_image = $filename;
        $guests->remarks = $request->remarks;
        $guests->vip = $request->has('vip') == 'on' ? '1' : '0';
        $guests->status = $request->has('status') == 'on' ? '1' : '0';
		//$in['status'] =  $request->status == 'on' ? '1' : '0';
        $guests->save();
		Session::flash('msg','Guest save successful');
        return redirect()->route('backend.admin.frontdesk.guest');
    }
	
    public function view($id){
        $guest = $this->user->findOrFail($id);
        return view('backend.admin.frontdesk.guest.view',compact('guest'));
    }

    public function update(Request $request,$id){
       $rules = array(
            'first_name'=>'required|max:191|string',
            'last_name'=>'required|max:191|string',
            'phone'=>'required|max:191|string',
            'email'=>'required|max:191|string',
            'address'=>'required|string',
            'sex'=>'required|string'
        );
		$this->validate( $request , $rules);
        $guests = $this->user->findOrFail($id);
        $guests->first_name = $request->first_name;
        $guests->last_name = $request->last_name;
        $guests->phone = $request->phone;
        $guests->email = $request->email;
        $guests->address = $request->address;
        $guests->sex = $request->sex;
        $guests->dob = $request->dob;
        if($request->hasfile('picture')){
					
					$file = $request->file('picture');
					$extension = $file->getClientOriginalExtension();
					$filename = time(). '.' .$extension;
					$file->move('uploads/',$filename);
					$guests->picture = $filename;
				}
		
        $guests->password = bcrypt($request->password);
        $guests->id_type = $request->id_type;
        $guests->id_number = $request->id_number;
        if($request->hasfile('id_card_image')){
					
					$file = $request->file('id_card_image');
					$extension = $file->getClientOriginalExtension();
					$filename = time(). '.' .$extension;
					$file->move('uploads/',$filename);
					$guests->id_card_image = $filename;
				}
		
        $guests->remarks = $request->remarks;
        $guests->vip = $request->has('vip') == 'on' ? '1' : '0';
        $guests->status = $request->has('status') == 'on' ? '1' : '0';
        $guests->save();
		Session::flash('msg','Guest Update successful');
        return redirect()->back();
    }
	public function delete($id){
		$table =  $this->user->findOrFail($id);
        $table->delete();
        Session::flash('errmsg','Successful delete');
		return redirect()->back();
		
	}
}
