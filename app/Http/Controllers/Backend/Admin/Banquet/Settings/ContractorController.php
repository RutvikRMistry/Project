<?php
namespace App\Http\Controllers\Backend\Admin\Banquet\Settings;

use Illuminate\Http\Request;
use App\Model\Banquet\SupplierPackage;
use App\Model\Banquet\Photographers;
use App\Model\Banquet\Entertainment;
use App\Model\Banquet\Caterers;
use App\Model\Banquet\EventCaterer;
use App\Model\Banquet\EventMiscellaneous;
use App\Model\Banquet\Miscellaneous;
use App\Model\Banquet\Decorators;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Input;
use File;
use Session;
use DB;
use App\Http\Controllers\Controller;
class ContractorController extends Controller
{
	private $caterers;
	 public function __construct(Caterers $caterers)
    {
        $this->caterers = $caterers;
    }
	
	/* caterers */
    public function caterers(){
		$user_id = 17;
		$cater = DB::connection('mysql_banquet')->table('event_caterers')->get()->where('user_id',$user_id);
		 return view('backend.admin.banquet.settings.contractor.caterers',compact(
		 'cater'
		 ));
	}	
	
	public function AddCaterer(){
		 return view('backend.admin.banquet.settings.contractor.add_caterer');
	}
	
	public function storeCaterer(Request $request){
		$rules = array(
			'name' => 'required',
			'email' => 'required|email',
			'phone' => 'required|numeric',
			'address' => 'required',
			'package_name.*' => 'required',
			'price.*' => 'required',
			'person.*' => 'required',
			'services.*' => 'required',
		);
		$this->validate($request, $rules);
		$request->merge(['day' => 3]);
		$request->merge(['veg_quoted_price' => 'agsj']);
		$request->merge(['nonveg_quoted_price' => 'agsj']);
		$request->merge(['veg_final_price' => 12]);
		$request->merge(['nonveg_final_price' => 12]);
		$request->merge(['user_id' => 17]);
		EventCaterer::create($request->except('_token','package_name','price','person','services'));
		Session::flash('msg','Added Successfully');
		return redirect()->route('backend.admin.banquet.sttings.contractor.caterer');
	}
	
	public function editCaterer($id,Request $request){
		$user_id = 17;
		$cater = DB::connection('mysql_banquet')->table('event_caterers')->get()->where('id',$id)->first();
		return view('backend.admin.banquet.settings.contractor.edit_caterer',compact(
		'cater'
		));
	}
	
	public function updateCaterer($id,Request $request){
		$rules = array(
			'name' => 'required',
			'email' => 'required|email',
			'phone' => 'required|numeric',
			'address' => 'required',
			'package_name.*' => 'required',
			'price.*' => 'required',
			'person.*' => 'required',
			'services.*' => 'required',
		);
		$this->validate($request, $rules);
		$request->merge(['user_id' => 17]);
		EventCaterer::where('id',$id)->update($request->except('_token','package_name','price','person','services'));
		Session::flash('msg','Updated Successfully');
		return redirect()->route('backend.admin.banquet.sttings.contractor.caterer');
	}
	
	public function deleteCaterer($id){
		$cat = EventCaterer::findorfail($id);
		$cat->delete();
		Session::flash('errmsg','delete Successfully');
		return redirect()->route('backend.admin.banquet.sttings.contractor.caterer');
	}
	
	/*photographers */
	public function photographers(){
		$user_id = 17;
		$photographer = DB::connection('mysql_banquet')->table('photographers')->get()->where('user_id',$user_id);
		 return view('backend.admin.banquet.settings.contractor.photographers',compact(
		 'photographer'
		 
		 ));
	}
	
	public function AddPhotographer(){
		 return view('backend.admin.banquet.settings.contractor.add_photographer');
	}
	public function storePhotographer(Request $request){
		
		$rules = array(
			'name' => 'required',
			'email' => 'required|email',
			'phone' => 'required|numeric',
			'address' => 'required',
			'package_name.*' => 'required',
			'price.*' => 'required',
			'person.*' => 'required',
			'services.*' => 'required',
		);
		$this->validate($request, $rules);
		$request->merge(['user_id' => 17]);
		Photographers::create($request->except('_token','package_name','price','person','services'));
		Session::flash('msg','added Successfully');
		return redirect()->route('backend.admin.banquet.sttings.contractor.photographer');
		
	}
	public function editPhotographer($id){
		$photo = DB::connection('mysql_banquet')->table('photographers')->get()->where('id',$id)->first();
		 return view('backend.admin.banquet.settings.contractor.edit_photographer',compact(
		 'photo'
		 ));
	}
	public function updatePhotographer($id,Request $request){
		$rules = array(
			'name' => 'required',
			'email' => 'required|email',
			'phone' => 'required|numeric',
			'address' => 'required',
			'package_name.*' => 'required',
			'price.*' => 'required',
			'person.*' => 'required',
			'services.*' => 'required',
		);
		$this->validate($request, $rules);
		$request->merge(['user_id' => 17]);
		Photographers::where('id',$id)->update($request->except('_token','package_name','price','person','services'));
		Session::flash('msg','Updated Successfully');
		return redirect()->route('backend.admin.banquet.sttings.contractor.photographer');
	}
	public function deletePhotographer($id){
		$table = Photographers::findorfail($id);
		$table->delete();
		Session::flash('errmsg','Deleted Successfully');
		return redirect()->route('backend.admin.banquet.sttings.contractor.photographer');
	}
	/* entertainers */
	public function entertainers(){
		$user_id = 17;
		$entertainment = DB::connection('mysql_banquet')->table('entertainment')->get()->where('user_id',$user_id);
		 return view('backend.admin.banquet.settings.contractor.entertainers',compact(
		 'entertainment'
		 ));
	}
	
	public function AddEntertainer(){
		 return view('backend.admin.banquet.settings.contractor.add_entertainer');
	}
	public function storeEntertainer(Request $request){
		$rules = array(
			'name' => 'required',
			'email' => 'required|email',
			'phone' => 'required|numeric',
			'address' => 'required',
			'package_name.*' => 'required',
			'price.*' => 'required',
			'person.*' => 'required',
			'services.*' => 'required',
		);
		$this->validate($request, $rules);
		$request->merge(['user_id' => 17]);
		Entertainment::create($request->except('_token','package_name','price','person','services'));
		Session::flash('msg','Added Successfully');
		return redirect()->route('backend.admin.banquet.sttings.contractor.entertainer');
	}
	public function editEntertainer($id){
		$entertain = DB::connection('mysql_banquet')->table('entertainment')->get()->where('id',$id)->first();
		 return view('backend.admin.banquet.settings.contractor.edit_entertainer',compact(
			'entertain'
		 ));
	}
	public function updateEntertainer($id,Request $request){
		$rules = array(
			'name' => 'required',
			'email' => 'required|email',
			'phone' => 'required|numeric',
			'address' => 'required',
			'package_name.*' => 'required',
			'price.*' => 'required',
			'person.*' => 'required',
			'services.*' => 'required',
		);
		$this->validate($request, $rules);
		$request->merge(['user_id' => 17]);
		Entertainment::where('id',$id)->update($request->except('_token','package_name','price','person','services'));
		Session::flash('msg','Updated Successfully');
		return redirect()->route('backend.admin.banquet.sttings.contractor.entertainer');
	}
	public function deleteEntertainer($id){
		$table = Entertainment::findorfail($id);
		$table->delete();
		Session::flash('errmsg','Deleted Successfully');
		return redirect()->route('backend.admin.banquet.sttings.contractor.entertainer');
	}
	/* decorators */
	public function decorators(){
		$user_id = 17;
		$decorator = DB::connection('mysql_banquet')->table('decorators')->get()->where('user_id',$user_id);
		 return view('backend.admin.banquet.settings.contractor.decorators',compact(
			'decorator'
		 ));
	}
	
	public function AddDecorator(){
		 return view('backend.admin.banquet.settings.contractor.add_decorator');
	}
	public function storeDecorator(Request $request){
		$rules = array(
			'name' => 'required',
			'email' => 'required|email',
			'phone' => 'required|numeric',
			'address' => 'required',
			'package_name.*' => 'required',
			'price.*' => 'required',
			'person.*' => 'required',
			'services.*' => 'required',
		);
		$this->validate($request, $rules);
		$request->merge(['user_id' => 17]);
		$request->merge(['service_provided' => 'adshg']);
		Decorators::create($request->except('_token','package_name','price','person','services'));
		Session::flash('msg','Added Successfully');
		return redirect()->route('backend.admin.banquet.sttings.contractor.decorator');
	}
	public function editDecorator($id){
		$decorator = DB::connection('mysql_banquet')->table('decorators')->get()->where('id',$id)->first();
		 return view('backend.admin.banquet.settings.contractor.edit_decotator',compact(
			'decorator'
		 ));
	}
	public function updateDecorator($id,Request $request){
		$rules = array(
			'name' => 'required',
			'email' => 'required|email',
			'phone' => 'required|numeric',
			'address' => 'required',
			'package_name.*' => 'required',
			'price.*' => 'required',
			'person.*' => 'required',
			'services.*' => 'required',
		);
		$this->validate($request, $rules);
		$request->merge(['user_id' => 17]);
		Decorators::where('id',$id)->update($request->except('_token','package_name','price','person','services'));
		Session::flash('msg','Updated Successfully');
		return redirect()->route('backend.admin.banquet.sttings.contractor.decorator');
	}
	public function deleteDecorator($id){
		$table = Decorators::findorfail($id);
		$table->delete();
		Session::flash('errmsg','Deleted Successfully');
		return redirect()->route('backend.admin.banquet.sttings.contractor.decorator');
	}
	/* miscellaneous */
	public function miscellaneous(){
		$user_id =17;
		$miscellaneous = DB::connection('mysql_banquet')->table('miscellaneous')->get()->where('user_id',$user_id);
		 return view('backend.admin.banquet.settings.contractor.miscellaneous',compact(
			'miscellaneous'
		 ));
	}
	
	public function AddMiscellaneous(){
		 return view('backend.admin.banquet.settings.contractor.add_miscellaneous');
	}
	
	public function StoreMiscellaneous(Request $request){
		$rules = array(
			'name' => 'required',
			'email' => 'required|email',
			'phone' => 'required|numeric',
			'address' => 'required',
			'package_name.*' => 'required',
			'price.*' => 'required',
			'person.*' => 'required',
			'services.*' => 'required',
		);
		$this->validate($request, $rules);
		$request->merge(['user_id' => 17]);
		$request->merge(['event_id' => 1]);
		$request->merge(['day' => 17]);
		$request->merge(['miscellaneous' => 'dgsahj']);
		Miscellaneous::create($request->except('_token','package_name','price','person','services'));
		EventMiscellaneous::create($request->except('_token','package_name','price','person','services'));
		Session::flash('msg','Added Successfully');
		return redirect()->route('backend.admin.banquet.sttings.contractor.miscellaneous');
	}
	public function editMiscellaneous($id){
		$miscellaneous = DB::connection('mysql_banquet')->table('miscellaneous')->get()->where('id',$id)->first();
		return view('backend.admin.banquet.settings.contractor.edit_miscellaneous',compact(
			'miscellaneous'
		));
	}
	public function updateMiscellaneous($id,Request $request){
		$rules = array(
			'name' => 'required',
			'email' => 'required|email',
			'phone' => 'required|numeric',
			'address' => 'required',
			'package_name.*' => 'required',
			'price.*' => 'required',
			'person.*' => 'required',
			'services.*' => 'required',
		);
		$this->validate($request, $rules);
		$request->merge(['user_id' => 17]);
		Miscellaneous::where('id',$id)->update($request->except('_token','package_name','price','person','services'));
		EventMiscellaneous::where('id',$id)->update($request->except('_token','package_name','price','person','services'));
		Session::flash('msg','Updated Successfully');
		return redirect()->route('backend.admin.banquet.sttings.contractor.miscellaneous');
	}
	public function deleteMiscellaneous($id){
		$tabl = Miscellaneous::findorfail($id);
		$table = EventMiscellaneous::findorfail($id);
		$tabl->delete();
		$table->delete();
		Session::flash('errmsg','Deleted Successfully');
		return redirect()->route('backend.admin.banquet.sttings.contractor.miscellaneous');
	}
	
	
}
