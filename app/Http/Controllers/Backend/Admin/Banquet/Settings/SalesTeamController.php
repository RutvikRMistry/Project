<?php
namespace App\Http\Controllers\Backend\Admin\Banquet\Settings;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use App\Model\Banquet\User;
use App\Model\Banquet\Salesteam;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Input;
use File;
use App\Http\Controllers\Controller;
// use Session;
use App\Http\Requests\SalesteamRequest;
// use DB;

class SalesTeamController extends Controller
{
    public function index(){
	//	$user = User::all();
		$user_id = 17;
		$sales_team = DB::connection('mysql_banquet')->table('sales_teams')->get()->where('user_id',$user_id);
		return view('backend.admin.banquet.settings.sales_team.index',compact(
			'sales_team'));
	}	
	
	public function create(){
		 return view('backend.admin.banquet.settings.sales_team.create');
	}	
	
	public function view($id){

		$sales_team = Salesteam::findorfail($id);
		return view('backend.admin.banquet.settings.sales_team.view',compact(
			 'sales_team'
		 ));
	}
	public function store1(Request $request){
		// $request->merge(['invoice_forecast' => 1.33]);
		//  $request->merge(['team_members' => 'asdsds']);
		// $request->merge(['leads' => 1]);
		// $request->merge(['quotations' => 0]);
		// $request->merge(['opportunities' => 1]);

		$rules = array(
			'salesteam' =>'required',
			'commision' =>'required',
			'team_leader' => 'required',
			'invoice_target' =>'required',
			'invoice_forecast' =>'required',
			'opportunities' =>'required',
			'quotations' =>'required',
			'leads' =>'required'
		);
		$this->validate($request ,$rules);
		//
		// dd($request->all());
		$request->merge(['user_id' => 17]);

		Salesteam::create($request->all());
		Session::flash('msg','Added Successfully');
		return redirect()->route('backend.admin.banquet.sttings.sales_team');
	}

	public function destroy($id){
		$sales_team = Salesteam::findorfail($id);
		$sales_team->delete();
		Session::flash('errmsg','Deleted Successfully');
		return redirect()->back();
	}

	public function edit($id){

		$user_id = 17;
		$sales_team = DB::connection('mysql_banquet')->table('sales_teams')->get()->where('id',$id)->first();
		return view('backend.admin.banquet.settings.sales_team.edit',compact(
			'sales_team'));

	}

	public function update($id,Request $request){

		// $request->merge(['invoice_forecast' => 1.33]);
		$request->merge(['team_members' => 'asdsds']);
		// $request->merge(['leads' => 1]);
		// $request->merge(['quotations' => 0]);
		// $request->merge(['opportunities' => 1]);

		$rules = array(
			'salesteam' =>'required',
			'commision' =>'required',
			'team_leader' => 'required',
			'invoice_target' =>'required',
			'invoice_forecast' =>'required',
			'opportunities' =>'required',
			'quotations' =>'required',
			'leads' =>'required'
		);
		$this->validate($request ,$rules);
		//
		// dd($request->all());
		Salesteam::where('id',$id)->update($request->except('_token'));
		Session::flash('msg','updated Successfully');
		return redirect()->route('backend.admin.banquet.sttings.sales_team');

	}
}
