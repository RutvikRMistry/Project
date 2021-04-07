<?php
namespace App\Http\Controllers\Backend\Admin\Banquet\Settings;

use Illuminate\Http\Request;
use App\Model\Banquet\Parking;
use App\Model\Banquet\Equipment;
use App\Model\Banquet\TransportationService;
use App\Model\Banquet\EventLocations;
use App\Model\Banquet\EventRooms;
use App\Model\Banquet\Hotels;
use App\Model\Banquet\LeadSource;
use App\Model\Banquet\Term;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Input;
use File;
use Session;
use DB;
use App\Http\Controllers\Controller;
class FunctionsController extends Controller
{
	
	/* parking */
    public function parkings(){
		$user_id = 17;
		$parking = DB::connection('mysql_banquet')->table('parking')->get()->where('user_id',$user_id);
		 return view('backend.admin.banquet.settings.functions.parkings',compact(
			'parking'
		 ));
	}	
	
	public function addParking(){
		 return view('backend.admin.banquet.settings.functions.add_parking');
	}
	public function storeParking(Request $request){
		$rules = array(
		
			'type' => 'required',
			'capacity' => 'required|numeric',
		);
		$this->validate($request ,$rules);
		$request->merge(['user_id' => 17]);
		Parking::create($request->except('_token'));
		Session::flash('msg','Added Successfully');
		return redirect()->route('backend.admin.banquet.sttings.function.parking');
	
	}
	public function editParking($id){
		$parking = DB::connection('mysql_banquet')->table('parking')->get()->where('id',$id)->first();
		return view('backend.admin.banquet.settings.functions.edit_parking',compact(
			'parking'
		));
	}
	public function updateParking(Request $request,$id){
		$rules = array(
		
			'type' => 'required',
			'capacity' => 'required|numeric',
		);
		$this->validate($request ,$rules);
		$request->merge(['user_id' => 17]);
		Parking::where('id',$id)->update($request->except('_token'));
		Session::flash('msg','Updated Successfully');
		return redirect()->route('backend.admin.banquet.sttings.function.parking');
	}
	public function deleteParking($id){
		$table = Parking::findorfail($id);
		$table->delete();
		Session::flash('errmsg','Deleted Successfully');
		return redirect()->back();
	
	}
	
	/* equipments */
	public function equipments(){
		$user_id = 17;
		$equipment = DB::connection('mysql_banquet')->table('equipment')->get()->where('user_id',$user_id);
		 return view('backend.admin.banquet.settings.functions.equipments',compact(
			'equipment'
		 ));
	}	
	
	public function addEquipment(){
		 return view('backend.admin.banquet.settings.functions.add_equipment');
	}
	public function storeEquipment(Request $request){
		$rules = array(
			'name' => 'required',
			'price' => 'required|numeric',
		);
		$this->validate($request , $rules);
		$request->merge(['user_id' => 17]);
		Equipment::create($request->except('_token'));
		Session::flash('msg','Added Successfully');
		return redirect()->route('backend.admin.banquet.sttings.function.equipment');
	}
	public function editEquipment($id){
		
		$equipment = DB::connection('mysql_banquet')->table('equipment')->get()->where('id',$id)->first();
		 return view('backend.admin.banquet.settings.functions.edit_equipment',compact(
				'equipment'
		 ));
	}
	public function updateEquipment(Request $request,$id){
		 $rules = array(
			'name' => 'required',
			'price' => 'required|numeric',
		);
		$this->validate($request , $rules);
		$request->merge(['user_id' => 17]);
		Equipment::where('id',$id)->update($request->except('_token'));
		Session::flash('msg','Updated Successfully');
		return redirect()->route('backend.admin.banquet.sttings.function.equipment');
	}
	public function deleteEquipment($id){
		$table = Equipment::findorfail($id);
		$table->delete();
		Session::flash('errmsg','Deleted Successfully');
		return redirect()->back();
		 
	}
	
	/* transportServices */
	public function transportServices(){
		$user_id = 17;
		$transport = DB::connection('mysql_banquet')->table('transportation_service')->get()->where('user_id',$user_id);
		 return view('backend.admin.banquet.settings.functions.transport_services',compact(
			'transport'
		 ));
	}	
	
	public function addTransportService(){
		 return view('backend.admin.banquet.settings.functions.add_transport_services');
	}
	public function storeTransportService(Request $request){
		$rules = array(
			'name' => 'required',
			'service_provided' => 'required',
			'price' => 'required|numeric',
			'address' => 'required',
			'email' => 'required|email',
			'phone' => 'required|numeric',
		);
		$this->validate($request,$rules);
		$request->merge(['user_id' => 17]);
		TransportationService::create($request->except('_token'));
		Session::flash('msg','Added Successfully');
		return redirect()->route('backend.admin.banquet.sttings.function.transport_service');
		
	}
	public function editTransportService($id){
		$transport = DB::connection('mysql_banquet')->table('transportation_service')->get()->where('id',$id)->first();
		 return view('backend.admin.banquet.settings.functions.edit_transport_services',compact(
			'transport'
		 ));
	}
	public function updateTransportService($id ,Request $request){
		$rules = array(
			'name' => 'required',
			'service_provided' => 'required',
			'price' => 'required|numeric',
			'address' => 'required',
			'email' => 'required|email',
			'phone' => 'required|numeric',
		);
		$this->validate($request,$rules);
		$request->merge(['user_id' => 17]);
		TransportationService::where('id',$id)->update($request->except('_token'));
		Session::flash('msg','Updated Successfully');
		return redirect()->route('backend.admin.banquet.sttings.function.transport_service'); 
	}
	public function deleteTransportService($id){
		$table = TransportationService::findorfail($id);
		$table->delete();
		Session::flash('errmsg','Deleted Successfully');
		return redirect()->back();
		 
	}
	/* eventLocations */
	public function eventLocations(){
		$user_id = 17;
		$event = DB::connection('mysql_banquet')->table('event_location')->get()->where('user_id',$user_id);
		 return view('backend.admin.banquet.settings.functions.event_locations',compact(
			'event'
		 ));
	}	
	
	public function addEventLocation(){
		 return view('backend.admin.banquet.settings.functions.add_event_locations');
	}
	public function storeEventLocation(Request $request){
		$rules = array(
			'name' => 'required',
			'dimension' => 'required',
			'theater' => 'nullable|numeric',
			'u_shape' => 'required|numeric',
			'banquet' => 'required|numeric',
			'classroom' => 'nullable|numeric',
			'cabaret' => 'nullable|numeric',
			'booth' => 'nullable|numeric',
			'board_room' => 'nullable|numeric',
	'cocktail' => 'required|numeric',
			'location_rent' => 'required|numeric',
		);
		$this->validate($request, $rules);
		$request->merge(['user_id' => 17]);
		EventLocations::create($request->except('_token','u_shape','cabaret','board_room','cocktail'));
		Session::flash('msg','Added Successfully');
		return redirect()->route('backend.admin.banquet.sttings.function.event_location');
		
	}
	public function editEventLocation($id){
		$event = DB::connection('mysql_banquet')->table('event_location')->get()->where('id',$id)->first();
		 return view('backend.admin.banquet.settings.functions.edit_event_locations',compact(
			'event'
		 ));
	}
	public function updateEventLocation(Request $request,$id){
		$rules = array(
			'name' => 'required',
			'dimension' => 'required',
			'theater' => 'nullable|numeric',
			'u_shape' => 'required|numeric',
			'banquet' => 'required|numeric',
			'classroom' => 'nullable|numeric',
			'cabaret' => 'nullable|numeric',
			'booth' => 'nullable|numeric',
			'board_room' => 'nullable|numeric',
			'cocktail' => 'required|numeric',
			'location_rent' => 'required|numeric',
		);
		$this->validate($request, $rules);
		$request->merge(['user_id' => 17]);
		EventLocations::where('id',$id)->update($request->except('_token','u_shape','cabaret','board_room','cocktail'));
		Session::flash('msg','Updated Successfully');
		return redirect()->route('backend.admin.banquet.sttings.function.event_location');
		
	}
	public function deleteEventLocation($id){
		$table = EventLocations::findorfail($id);
		$table->delete();
		Session::flash('errmsg','Deleted Successfully');
		return redirect()->back();
	}
		/* hotels */

	public function hotels(){
		$user_id = 17;
		$hotel = DB::connection('mysql_banquet')->table('hotels')->get()->where('user_id',$user_id);
		 return view('backend.admin.banquet.settings.functions.hotels',compact(
			'hotel'
		 ));
	}	
	
	public function addHotel(){
		 return view('backend.admin.banquet.settings.functions.add_hotel');
	}
	public function storeHotel(Request $request){
		$rules = array(
			'name' => 'required'
		);
		$this->validate($request,$rules);
		$request->merge(['user_id' => 17]);
		Hotels::create($request->except('_token'));
		Session::flash('msg','Added Successfully');
		return redirect()->route('backend.admin.banquet.sttings.function.hotel');
	}
	
	public function editHotel($id){
		$hotel = DB::connection('mysql_banquet')->table('hotels')->get()->where('id',$id)->first();
		 return view('backend.admin.banquet.settings.functions.edit_hotel',compact(
			'hotel'
		 ));
	}
	public function updateHotel(Request $request,$id){
		 $rules = array(
			'name' => 'required'
		);
		$this->validate($request,$rules);
		$request->merge(['user_id' => 17]);
		Hotels::where('id',$id)->update($request->except('_token'));
		Session::flash('msg','Updated Successfully');
		return redirect()->route('backend.admin.banquet.sttings.function.hotel');
	}
	public function deleteHotel($id){
		$table = Hotels::findorfail($id);
		$table->delete();
		Session::flash('errmsg','Deleted Successfully');
		return redirect()->back();
	}
	
	/*Hotels Rooms*/
	public function hotelRooms(){
		$user_id = 17;
		$rooms = EventRooms::join('hotels AS ht', 'event_rooms.hotel_id', '=', 'ht.id' )
		->where('event_rooms.user_id', '=',$user_id)
		->where('ht.user_id', '=',$user_id)
		->select(
			'event_rooms.id',
			'ht.name',
			'event_rooms.room_name'
		)
		->get();
		 return view('backend.admin.banquet.settings.functions.hotel_rooms',compact(
			'rooms',
		 ));
	}	
	
	public function addHotelRoom(){
		$user_id = 17;
		$hotel = DB::connection('mysql_banquet')->table('hotels')->get()->where('user_id',$user_id);
		 return view('backend.admin.banquet.settings.functions.add_hotel_room',compact(
			'hotel'
		 ));
	}
	
	public function storeHotelRoom(Request $request){
			$rules = array(
				'hotel_id' => 'required|numeric',
				'room_name' => 'required',
			);
			$this->validate($request,$rules);
			$request->merge(['user_id' => 17]);
			EventRooms::create($request->except('_token'));
			Session::flash('msg','Added Successfully');
			return redirect()->route('backend.admin.banquet.sttings.function.hotel_room');
	}
	
	public function editHotelRoom($id){
		$user_id = 17;
		$hotel = DB::connection('mysql_banquet')->table('hotels')->get()->where('user_id',$user_id);
		$room = DB::connection('mysql_banquet')->table('event_rooms')->get()->where('id',$id)->first();
		 return view('backend.admin.banquet.settings.functions.edit_hotel_room',compact(
			'hotel',
			'room'
		 ));
	}
	
	public function updateHotelRoom(Request $request,$id){
		$rules = array(
				'hotel_id' => 'required|numeric',
				'room_name' => 'required',
			);
			$this->validate($request,$rules);
			$request->merge(['user_id' => 17]);
			EventRooms::where('id',$id)->update($request->except('_token'));
			Session::flash('msg','Updated Successfully');
			return redirect()->route('backend.admin.banquet.sttings.function.hotel_room');
	}
	
	public function deleteHotelRoom($id){
		$table = EventRooms::findorfail($id);
		$table->delete();
		Session::flash('errmsg','Deleted Successfully');
		return redirect()->back();
		
	}
	
	/*Lead Sources*/
	public function leadSources(){
		$user_id = 17;
		$lead = DB::connection('mysql_banquet')->table('leadsources')->get()->where('user_id',$user_id);
		 return view('backend.admin.banquet.settings.functions.lead_sources',compact(
			'lead'
		 ));
	}	
	
	public function addLeadSource(){
		 return view('backend.admin.banquet.settings.functions.add_lead_source');
	}
	
	public function storeLeadSource(Request $request){
		$rules = array(
			'name' => 'required'
		);
		$this->validate($request ,$rules);
		$this->validate($request,$rules);
		$request->merge(['user_id' => 17]);
		LeadSource::create($request->except('_token'));
		Session::flash('msg','Added Successfully');
		return redirect()->route('backend.admin.banquet.sttings.function.lead_source');
	}
	public function editLeadSource($id){
		$user_id = 17;
		$lead = DB::connection('mysql_banquet')->table('leadsources')->get()->where('id',$id)->first();
		 return view('backend.admin.banquet.settings.functions.edit_lead_source',compact(
			'lead'
		 ));
	}
	public function updateLeadSource(Request $request,$id){
		$rules = array(
			'name' => 'required'
		);
		$this->validate($request ,$rules);
		$this->validate($request,$rules);
		$request->merge(['user_id' => 17]);
		LeadSource::where('id',$id)->update($request->except('_token'));
		Session::flash('msg','Updated Successfully');
		return redirect()->route('backend.admin.banquet.sttings.function.lead_source');
	}
	public function deleteLeadSource($id){
		$table = LeadSource::findorfail($id);
		$table->delete();
		Session::flash('errmsg','Deleted Successfully');
		return redirect()->back();
	}
	
	/*Lead Agreement */
	public function agreements(){
		//$user_id = 17;
		$term = DB::connection('mysql_banquet')->table('terms')->get()->first();
		 return view('backend.admin.banquet.settings.functions.agreements',compact(
			'term'
		 ));
	}	
	
	public function addAgreement(Request $request,$id){
		$rules = array(
			'food_beverage' => 'required',
			'administrative_fees' => 'required',
			'function_room_assignement' => 'required',
			'guarantees' => 'required',
			'menu_pricing' => 'required',
			'decoration' => 'required',
			'security_parking' => 'required',
			'damages' => 'required',
			'service_fees' => 'required',
		);
		$this->validate($request,$rules);
		$request->merge(['user_id' => 17]);
		Term::where('id',$id)->update($request->except('_token'));
		Session::flash('msg','Updated Successfully');
		return redirect()->route('backend.admin.banquet.sttings.function.agreement');
	}
}
