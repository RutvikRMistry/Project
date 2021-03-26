<?php
namespace App\Http\Controllers\Backend\Admin\Pos;

use Illuminate\Http\Request;
use App\Model\POS\User;

use App\Model\POS\Role;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Input;
use File;
use DB;
use Session;
use App\Http\Controllers\Controller;
class OfficeController extends Controller
{
	 public function __construct(Role $role)
    {
        $this->role = $role;
    }
	
	
	
    public function user(){
		
		$users = DB::connection('mysql_banquet_pos')->table('users')->where('deleted_at','=',NULL)->get();
		 return view('backend.admin.pos.office.users',compact(
			'users'
			
		 ));
	}	
	
	public function addUser(){
		//$business_id = request()->session()->get('user.business_id');
		$user = DB::connection('mysql_banquet_pos')->table('users')->get()->first();
		
		$business_id = 1;
		$roles = DB::connection('mysql_banquet_pos')->table('roles')->get()->where('business_id', $business_id);
		 return view('backend.admin.pos.office.add_user',compact(
			'roles'
		 ));
	}
	
	public function store(Request $request){
			
			$rules = array(
			
				'surname' => 'nullable',
				'surname' => 'nullable',
				'first_name' => 'required',
				'email' => 'required|email|unique:users',
				'role' => 'required',
				'username' => 'required|min:5|unique:users',
				'password' => 'required|min:5',
				'confirm_password' => 'required|same:password',
			
			);
		$this->validate($request , $rules);
		
		  $user_details = $request->only(['surname', 'first_name', 'last_name', 'username', 'email', 'password']);
			$business_id = 1;
            $user_details['business_id'] = $business_id;
            $user_details['password'] = bcrypt($user_details['password']);
							if ($request->has('cmmsn_percent')) {
					$user_details['cmmsn_percent'] = $request->get('cmmsn_percent');
				} else {
					$user_details['cmmsn_percent'] = 0;
				}
			//echo '<pre>';
			//print_r($business_id);
			//die;	
			 $user = User::create($user_details);
			 $business_id = $request->input('role');
			$role = Role::findOrFail($business_id);
            //$user->assignRole($role->name);
			 //problem is here in this section 
			Session::flash('msg','Added Successfully');
			return redirect()->route('backend.admin.pos.office.user');
	}
	
	public function edit(Request $request,$id){
		
		$user = DB::connection('mysql_banquet_pos')->table('users')->get()->where('id',$id)->first();
		$user1 = DB::connection('mysql_banquet_pos')->table('users')->get()->first();
		
		$business_id = $user1->business_id;
		$roles_array = DB::connection('mysql_banquet_pos')->table('roles')->get()->where('business_id', $business_id)->pluck('name', 'id');
       $roles = [];
        foreach ($roles_array as $key => $value) {
            $roles[$key] = str_replace('#' . $business_id, '', $value);
        }
		
		return view('backend.admin.pos.office.edit_user',compact(
			'roles',
			'user'
		));
	}
	
	public function update(Request $request,$id){
		$rules = array(
			
				'surname' => 'nullable',
				'surname' => 'nullable',
				'first_name' => 'required',
				'email' => 'required|email|unique:users',
				'role' => 'required',
				'username' => 'required|min:5|unique:users',
				'password' => 'nullable|min:5',
				'confirm_password' => 'nullable|same:password',
			
			);
		$this->validate($request , $rules);
		
		  $user_details = $request->only(['surname', 'first_name', 'last_name', 'username', 'email', 'password']);
            $user = DB::connection('mysql_banquet_pos')->table('users')->get()->first();
			$business_id = $user->business_id;
            $user_details['business_id'] = $business_id;
            $user_details['password'] = bcrypt($user_details['password']);
							if ($request->has('cmmsn_percent')) {
					$user_details['cmmsn_percent'] = $request->get('cmmsn_percent');
				} else {
					$user_details['cmmsn_percent'] = 0;
				}
			 $user = User::where('id',$id)->update($user_details);
			$business_id = $request->input('role');
			$role = Role::findOrFail($business_id);
            $user->assignRole($role->name);
			Session::flash('msg','Updated Successfully');
			return redirect()->route('backend.admin.pos.office.user');
	}
	public function delete($id){
		$table = User::findorfail($id);
		$table->delete();
		Session::flash('errmsg','Deleted Sucessfully');
		return redirect()->back();
		
		
	}
	
	public function roles(){
		
		$role = DB::connection('mysql_banquet_pos')->table('roles')->get();
		 return view('backend.admin.pos.office.roles',compact(
		 
			'role'
		 ));
	}
	
	public function addRole(){
		 return view('backend.admin.pos.office.add_role');
	}
	
	public function editRole($id){
		$role = DB::connection('mysql_banquet_pos')->table('roles')->get()->where('id',$id)->first();
		 return view('backend.admin.pos.office.edit_role',compact(
				'role'
		 ));
	}
	
	public function updateRole(Request $request,$id){
		// return view('backend.admin.pos.office.add_role');
	}
	public function deleteRole($id){
		// return view('backend.admin.pos.office.add_role');
	}
	
	
	
	// sales commission agent
	public function salesCommission(){
		$users = DB::connection('mysql_banquet_pos')->table('users')->where('deleted_at','=',NULL)->get();
		 return view('backend.admin.pos.office.sales_commission',compact(
			'users'
		 ));
	}
	
	public function addSalesCommission(){
		 return view('backend.admin.pos.office.add_sales_commission');
	}
	
	public function storeSalesCommission(Request $request){
		
		$rules = array(
			'surname' => 'nullable|max:4',
			'first_name' => 'required|min:3',
			'last_name' => 'nullable',
			'email' => 'required|email|unique:users',
			'contact_no' => 'required|min:10|numeric',
			'address' => 'required',
			'cmmsn_percent' => 'required|numeric'
		
		);
		$this->validate($request,$rules);
		  $input = $request->only(['surname', 'first_name', 'last_name', 'email', 'address', 'contact_no', 'cmmsn_percent']);
            $user1 = DB::connection('mysql_banquet_pos')->table('users')->get()->first();
			$business_id = $user1->business_id;
            $input['business_id'] = $business_id;
            $input['username'] = uniqid();
            $input['password'] = 'DUMMY';
            $input['is_cmmsn_agnt'] = 1;

            $user = User::create($input);
			Session::flash('msg','Added Successfully');
			return redirect()->route('backend.admin.pos.office.sales_commission');
	}
	public function editSalesCommission(Request $request,$id){
			
			$user = DB::connection('mysql_banquet_pos')->table('users')->get()->where('id',$id)->first();
			return view('backend.admin.pos.office.edit_sales_commission',compact(
			
				'user'
			));
	}
	public function updateSalesCommission(Request $request,$id){
		
		$rules = array(
			'surname' => 'nullable|max:4',
			'first_name' => 'required|min:3',
			'last_name' => 'nullable',
			'email' => 'required|email',
			'contact_no' => 'required|min:10|numeric',
			'address' => 'required',
			'cmmsn_percent' => 'required|numeric'
		
		);
		$this->validate($request,$rules);
			
			$input = $request->only(['surname', 'first_name', 'last_name', 'email', 'address', 'contact_no', 'cmmsn_percent']);
            $user1 = DB::connection('mysql_banquet_pos')->table('users')->get()->first();
			$business_id = $user1->business_id;
            $input['business_id'] = $business_id;
            $input['username'] = uniqid();
            $input['password'] = 'DUMMY';
            $input['is_cmmsn_agnt'] = 1;

            $user = User::where('id',$id)->update($input);
			Session::flash('msg','Updated Successfully');
			return redirect()->route('backend.admin.pos.office.sales_commission');
			
	}
	
	public function deleteSalesCommission($id){
		$table = User::findorfail($id);
		$table->delete();
		Session::flash('errmsg','Deleted Sucessfully');
		return redirect()->back();
	}
}
