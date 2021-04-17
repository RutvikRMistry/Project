<?php
namespace App\Http\Controllers\Backend\Admin\Banquet\Sales;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Input;
use App\Model\Banquet\Contect;
use File;
use DB;
use Session;
use App\Http\Controllers\Controller;
class ContactsController extends Controller
{
    public function index(){
		$user_id = 17;
		$cust = Contect::join('companies AS mm', 'contects.company_id', '=', 'mm.id' )
		->select(
			'contects.id',
			'contects.first_name',
			'contects.last_name',
			'contects.mobile',
			'contects.website',
			'mm.name as com'
			
		)
		->get();			
		return view('backend.admin.banquet.sales.contacts',compact(
			'cust'
		));
	}
	
	public function newContact(){	
		$user_id = 17;
		$com = DB::connection('mysql_banquet')->table('companies')->get()->where('user_id',$user_id);	
		$sal = DB::connection('mysql_banquet')->table('sales_teams')->get()->where('user_id',$user_id);	
		return view('backend.admin.banquet.sales.new_contact',compact(
			'com','sal'
		));
	}
	
	public function storeContact(Request $request){

		$rules = array(
			'title' => 'required',
			'first_name' => 'required',
			'last_name' => 'required',
			'company_id' => 'required',
			'sales_team_id' => 'required',
			// 'email' => 'required',
			'mobile' => 'required'
		);
		$this->validate($request,$rules);
		$request->merge(['user_id' => 17]);
		$request->merge(['belong_user_id' => 17]);
		Contect::create($request->all());
		Session::flash('msg','Created Successfully');	
		return redirect()->route('backend.admin.banquet.sales.contact');

	}

	public function editContact($id){
		$user_id = 17;
		$com = DB::connection('mysql_banquet')->table('companies')->get()->where('user_id',$user_id);	
		$sal = DB::connection('mysql_banquet')->table('sales_teams')->get()->where('user_id',$user_id);
		$cust = DB::connection('mysql_banquet')->table('contects')->get()->where('id',$id)->first();	
		return view('backend.admin.banquet.sales.edit_contact',compact(
			'com',
			'sal',
			'cust'
		));
	}

	public function updateContact(Request $request,$id){

		$rules = array(
			'title' => 'required',
			'first_name' => 'required',
			'last_name' => 'required',
			'company_id' => 'required',
			'sales_team_id' => 'required',
			// 'email' => 'required',
			'mobile' => 'required'
		);
		$this->validate($request,$rules);
		$request->merge(['user_id' => 17]);
		$request->merge(['belong_user_id' => 17]);
		Contect::where('id',$id)->update($request->except('_token'));
		Session::flash('msg','updated Successfully');
		return redirect()->route('backend.admin.banquet.sales.contact');

	}

	public function deleteContact($id){
		$table = Contect::findorfail($id);
		$table->delete();
		Session::flash('errmsg','Deleted Successfully');
		return redirect()->back();
		
	}

	public function viewContact($id){	
		$cust = Contect::findorfail($id);	
		return view('backend.admin.banquet.sales.view_contact',compact(
			'cust'
		));
	}
	
	
}
