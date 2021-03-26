<?php
namespace App\Http\Controllers\Backend\Admin\Banquet\Settings;

use Illuminate\Http\Request;
use App\Model\Banquet\MainMenu;
use App\Model\Banquet\Menus;
use App\Model\Banquet\MenuType;
use App\Model\Banquet\SubMenu;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Input;
use File;
use DB;
use Session;
use App\Http\Controllers\Controller;
class MenusController extends Controller
{
    public function index(){
		$user_id = 17;
		$main_menu = DB::connection('mysql_banquet')->table('main_menu')->get()->where('user_id',$user_id);
		 return view('backend.admin.banquet.settings.menus.menus',compact(
			'main_menu'
		 ));
	}	
	
	public function addMenu(){
		 return view('backend.admin.banquet.settings.menus.add_menu');
	}
	
	public function storeMenu(Request $request){
		$rules = array(
			'name' => 'required',
			'min_person' => 'required|numeric',
			'max_person' => 'required|numeric',
			'tables' => 'required|numeric',
		);
		$this->validate($request,$rules);
		$request->merge(['user_id' => 17]);
		MainMenu::create($request->except('_token'));
		Session::flash('msg','Added Successfully');
		return redirect()->route('backend.admin.banquet.sttings.menu');
	}
	
	public function editMenu($id){
		
		$menu = DB::connection('mysql_banquet')->table('main_menu')->get()->where('id',$id)->first();
		 return view('backend.admin.banquet.settings.menus.edit_menu',compact(
			'menu'
		 ));
	}
	
	public function updateMenu(Request $request,$id){
		$rules = array(
			'name' => 'required',
			'min_person' => 'required|numeric',
			'max_person' => 'required|numeric',
			'tables' => 'required|numeric',
		);
		$this->validate($request,$rules);
		$request->merge(['user_id' => 17]);
		MainMenu::where('id',$id)->update($request->except('_token'));
		Session::flash('msg','Updated Successfully');
		return redirect()->route('backend.admin.banquet.sttings.menu');
	}
	
	public function deleteMenu($id){
		$table = MainMenu::findorfail($id);
		$table->delete();
		Session::flash('errmsg','Deleted Successfully');
		return redirect()->back();
	}
	/*Menu Type */
	public function menuTypes(){
		$user_id = 17;
		$type = MenuType::join('main_menu AS mm', 'menu_type.main_menu_id', '=', 'mm.id' )
		->where('menu_type.user_id', '=',$user_id)
		->where('mm.user_id', '=',$user_id)
		->select(
			'menu_type.id',
			'mm.name',
			'menu_type.name as menu',
			'menu_type.price_per_person'
		)
		->get();
		 return view('backend.admin.banquet.settings.menus.menu_types',compact(
			'type'
		 ));
	}

	
	public function addMenuType(){
		$user_id = 17;
		$menu = DB::connection('mysql_banquet')->table('main_menu')->get()->where('user_id',$user_id);
		 return view('backend.admin.banquet.settings.menus.add_menu_type',compact(
			'menu'
		 ));
	}
	
	public function storeMenuType(Request $request){
		$rules = array(
			'name' => 'required',
			'main_menu_id' => 'required|numeric',
			'price_per_person' => 'required|numeric',
		);
		$this->validate($request,$rules);
		$request->merge(['user_id' => 17]);
		MenuType::create($request->except('_token'));
		Session::flash('msg','Added Successfully');
		return redirect()->route('backend.admin.banquet.sttings.menu.type');
	}
	
	public function editMenuType($id){
		$user_id = 17;
		$menu = DB::connection('mysql_banquet')->table('main_menu')->get()->where('user_id',$user_id);
		$type = DB::connection('mysql_banquet')->table('menu_type')->get()->where('id',$id)->first();
		 return view('backend.admin.banquet.settings.menus.edit_menu_type',compact(
			'menu',
			'type'
		 ));
	}
	
	public function updateMenuType($id,Request $request){
		$rules = array(
			'name' => 'required',
			'main_menu_id' => 'required|numeric',
			'price_per_person' => 'required|numeric',
		);
		$this->validate($request,$rules);
		$request->merge(['user_id' => 17]);
		MenuType::where('id',$id)->update($request->except('_token'));
		Session::flash('msg','Updated Successfully');
		return redirect()->route('backend.admin.banquet.sttings.menu.type'); 
	}
	
	public function deleteMenuType($id){
		$table = MenuType::findorfail($id);
		$table->delete();
		Session::flash('errmsg','Deleted Successfully');
		return redirect()->back();
	}
	
	
	/* Sub MENU */
	public function subMenus(){
		$user_id = 17;
		$sub = SubMenu::join('main_menu AS mm', 'sub_menu.main_menu_id', '=', 'mm.id' )
		->leftjoin('menu_type AS m', 'sub_menu.menu_type', '=', 'm.id')
		
		->select(
			'sub_menu.id',
			'sub_menu.name',
			'sub_menu.max_person',
			'sub_menu.min_person',
			'sub_menu.times',
			'mm.name as menu',
			'm.name as type',
			
		)
		->get();
		 return view('backend.admin.banquet.settings.menus.sub_menus',compact(
			'sub'
		 ));
	}	
	
	public function addSubMenu(){
		$user_id = 17;
		$menu = DB::connection('mysql_banquet')->table('main_menu')->get()->where('user_id',$user_id);
		$type = DB::connection('mysql_banquet')->table('menu_type')->get()->where('user_id',$user_id);
		 return view('backend.admin.banquet.settings.menus.add_sub_menu',compact(
			'menu',
			'type'
		 ));
	}
	public function storeSubMenu(Request $request){
		$rules = array(
			'name' => 'required',
			'main_menu_id' => 'required|numeric',
			'menu_type' => 'required|numeric',
			'min_person' => 'required|numeric',
			'max_person' => 'required|numeric',
			'times' => 'required',
		);
		$this->validate($request,$rules);
		$request->merge(['user_id' => 17]);
		SubMenu::create($request->except('_token'));
		Session::flash('msg','Added Successfully');
		return redirect()->route('backend.admin.banquet.sttings.menu.sub_menu');
	}
	public function editSubMenu($id){
		$user_id = 17;
		$menu = DB::connection('mysql_banquet')->table('main_menu')->get()->where('user_id',$user_id);
		$type = DB::connection('mysql_banquet')->table('menu_type')->get()->where('user_id',$user_id);
		$sub = DB::connection('mysql_banquet')->table('sub_menu')->get()->where('id',$id)->first();
		return view('backend.admin.banquet.settings.menus.edit_sub_menu',compact(
			'menu',
			'type',
			'sub'
		 ));
		
	}
	public function updateSubMenu(Request $request,$id){
	$rules = array(
			'name' => 'required',
			'main_menu_id' => 'required|numeric',
			'menu_type' => 'required|numeric',
			'min_person' => 'required|numeric',
			'max_person' => 'required|numeric',
			'times' => 'required',
		);
		$this->validate($request,$rules);
		$request->merge(['user_id' => 17]);
		SubMenu::where('id',$id)->update($request->except('_token'));
		Session::flash('msg','Updated Successfully');	
		return redirect()->route('backend.admin.banquet.sttings.menu.sub_menu');
	}
	
	public function deleteSubMenu($id){
		$table = SubMenu::findorfail($id);
		$table->delete();
		Session::flash('errmsg','Deleted Successfully');
		return redirect()->back();
		
	}
	/* Menu Item */
	public function menuItems(){
		 return view('backend.admin.banquet.settings.menus.menu_items');
	}	
	
	public function addMenuItem(){
		$user_id = 17;
		$menu = DB::connection('mysql_banquet')->table('main_menu')->get()->where('user_id',$user_id);
		$type = DB::connection('mysql_banquet')->table('menu_type')->get()->where('user_id',$user_id);
		$sub = DB::connection('mysql_banquet')->table('sub_menu')->get()->where('user_id',$user_id);
		 return view('backend.admin.banquet.settings.menus.add_menu_item',compact(
		 
			'menu',
			'type',
			'sub'
		 ));
	}
	
	public function storeMenuItem(Request $request){
		
	}
	
	public function editMenuItem($id){
		 return view('backend.admin.banquet.settings.menus.add_menu_item');
	}
	
	public function updateMenuItem(Request $request,$id){
		
	}
	
	public function deleteMenuItem($id){
		
	}
	
	
}
