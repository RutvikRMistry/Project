<?php
namespace App\Http\Controllers\Backend\Admin\Banquet\Settings;

use Illuminate\Http\Request;
use App\Model\Banquet\Department;
use App\Model\Banquet\Designation;
use App\Model\Banquet\Setting;
use App\Model\Banquet\User;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Input;
use File;
use DB;
use Session;
use App\Http\Controllers\Controller;
class StaffController extends Controller
{
	
	 private $user;

    public function __construct(User $user)
    {
        $this->user = $user;
    }
    public function index(){
		
		$user_id = 17;
		$user = User::leftJoin('designation_master AS dm', 'users.user_id', '=', 'dm.user_id')
                        ->join('department_master AS dpm','users.user_id','=','dpm.user_id')
                        ->select(
							'users.id',
                            'users.first_name',
                            'users.last_name',
                            'users.email',
							'users.created_at',
                            'dm.designation_name as des',
                            'dpm.department_name as dep'
                            // DB::raw("CONCAT(COALESCE(user.first_name, ''),' ',COALESCE(user.last_name,'')) as full_name")
                        )->get();
		// $user = DB::connection('mysql_banquet')->table('users')->get()->where('user_id',$user_id);
		 return view('backend.admin.banquet.settings.staff.index',compact(
			'user'
		 ));
	}	
	
	public function create(){
		$designation = DB::connection('mysql_banquet')->table('designation_master')->get();
		$department = DB::connection('mysql_banquet')->table('department_master')->get();
		
		 return view('backend.admin.banquet.settings.staff.create',compact(
			'designation',
			'department'
		 ));
	}	
	public function store(Request $request){
		$rules = array(
			'department_id' => 'required',
			'designation_id' => 'required',
			'first_name' => 'required',
			'last_name' => 'required',
			'phone_number' => 'required|min:10|numeric',
			'email' => 'required|email|unique:users',
			'password' => 'required',
			'confirm_password' => 'required|same:password',
		
		); 
		$this->validate($request ,$rules);
		$request->merge(['stripe_id' => 17]);
		//User::insert($request->all());
		//echo '<pre>';
		//print_r($_POST);
		//die;
		// $user = DB::connection('mysql_banquet')->table('users')->insert($request->except('_token','confirm_password','permissions'));
		User::create($request->except('_token','confirm_password','permissions'));
		
		/*$user = new $this->user;
		$user->first_name = $request->first_name;
		$user->last_name = $request->last_name;
		$user->email = $request->email;
		$user->password = $request->password;
		$user->phone_number = $request->phone_number;
		$user->department_id = $request->department_id;
		$user->designation_id = $request->designation_id;
		$user->user_id = 17;
		if($request->hasfile('user_avatar')){
					
					$file = $request->file('user_avatar');
					$extension = $file->getClientOriginalExtension();
					$filename = time(). '.' .$extension;
					$file->move('banquet/settings/uploads/',$filename);
					$guests->user_avatar = $filename;
				}
		//foreach ($request->get('permissions', []) as $permission) {
          // $user->addPermission($permission);
       // }
		$insert =DB::connection('mysql_banquet')->table('users')->insert($user);
		*/
		//$user->save();
		//$input = $request->only(['first_name', 'last_name', 'email', 'password','phone_number','department_id','designation_id']);
		//$role = Sentinel::findRoleBySlug('staff');
       // $role->users()->attach($user);

        //$user = User::find($user->id);
       // if($this->user->inRole('staff')){
         //   $any = User::find($this->user->user_id);
         //   $any->users()->save($user);
        //} else {
        //    $this->user->users()->save($user);
       // }

        //foreach ($request->get('permissions', []) as $permission) {
         //   $input->addPermission($permission);
       // }

        //$user->phone_number = $request->phone_number;
        //$user->user_avatar = $request->user_avatar;
        //$user->department_id = $request->department;
        //$user->designation_id = $request->designation;
        //$user->save();
		//$users = User::create($input);

		Session::flash('msg','Added Sucessfully');
		return redirect()->route('backend.admin.banquet.sttings.staff');
	}
	public function edit($id){
		$designation = DB::connection('mysql_banquet')->table('designation_master')->get();
		$department = DB::connection('mysql_banquet')->table('department_master')->get();
		$user = DB::connection('mysql_banquet')->table('users')->get()->where('id',$id)->first();
		 return view('backend.admin.banquet.settings.staff.edit',compact(
			'designation',
			'department',
			'user'
		 ));
	}
	public function update(Request $request,$id){

		$rules = array(
			'department_id' => 'required',
			'designation_id' => 'required',
			'first_name' => 'required',
			'last_name' => 'required',
			'phone_number' => 'required|min:10|numeric',
			// 'email' => 'required|email',
			'password' => 'required',
			'confirm_password' => 'required|same:password',
		
		); 
		$this->validate($request ,$rules);
		// $user = DB::connection('mysql_banquet')->table('users')->update($request->except('_token','confirm_password','permissions'));
		User::where('id',$id)->update($request->except('_token','confirm_password','permissions'));
		Session::flash('msg','updated Successfully');
		return redirect()->route('backend.admin.banquet.sttings.staff');
	}
	public function view($id){
		return view('backend.admin.banquet.settings.staff.view');
	}
	public function delete($id){
		$user = User::findorfail($id);
		$user->delete();
		Session::flash('errmsg','Deleted Sucessfully');
		return redirect()->back();
	}
}
