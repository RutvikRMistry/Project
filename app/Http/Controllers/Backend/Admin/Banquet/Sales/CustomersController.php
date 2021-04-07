<?php
namespace App\Http\Controllers\Backend\Admin\Banquet\Sales;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Input;
use App\Model\Banquet\Customer;
use File;
use DB;
use Session;
use App\Http\Controllers\Controller;
class CustomersController extends Controller
{
    public function index(){	
		$user_id = 17;
		$cust = Customer::join('companies AS mm', 'customers.company_id', '=', 'mm.id' )
		->select(
			'customers.id',
			'customers.first_name',
			'customers.last_name',
			'customers.mobile',
			'customers.website',
			'mm.phone as com'
			
		)
		->get();	
		return view('backend.admin.banquet.sales.customers',compact(
			'cust'
		));
	}
	
	public function createCustomer(){	
		$user_id = 17;
		$com = DB::connection('mysql_banquet')->table('companies')->get()->where('user_id',$user_id);	
		$sal = DB::connection('mysql_banquet')->table('sales_teams')->get()->where('user_id',$user_id);
		// $cust = DB::connection('mysql_banquet')->table('customers')->get()->where('user_id',$user_id);	
		return view('backend.admin.banquet.sales.create_customer',compact(
			'com',
			'sal'
		));
	}

	public function storeCustomer(Request $request){

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
		Customer::create($request->all());
		Session::flash('msg','Created Successfully');	
		return redirect()->route('backend.admin.banquet.sales.customer');

	}

	public function editCustomer($id){
		$user_id = 17;
		$com = DB::connection('mysql_banquet')->table('companies')->get()->where('user_id',$user_id);	
		$sal = DB::connection('mysql_banquet')->table('sales_teams')->get()->where('user_id',$user_id);
		$cust = DB::connection('mysql_banquet')->table('customers')->get()->where('id',$id)->first();	
		return view('backend.admin.banquet.sales.edit_customer',compact(
			'com',
			'sal',
			'cust'
		));
	}

	public function updateCustomer(Request $request,$id){

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
		Customer::where('id',$id)->update($request->except('_token'));
		Session::flash('msg','updated Successfully');
		return redirect()->route('backend.admin.banquet.sales.customer');

	}

	public function deleteCustomer($id){
		$table = Customer::findorfail($id);
		$table->delete();
		Session::flash('errmsg','Deleted Successfully');
		return redirect()->back();
		
	}
	
	public function viewCustomer(){		
		return view('backend.admin.banquet.sales.view_customer');
	}
	
	
}
