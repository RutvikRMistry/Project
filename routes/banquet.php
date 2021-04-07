<?php

use Illuminate\Support\Facades\Route;

Route::group(['middleware'=>'guest'],function(){
    //backend
    Route::get('admin','Backend\Auth\LoginController@showLoginForm')->name('admin.login');
    Route::post('admin/login','Backend\Auth\LoginController@login')->name('admin.login.post');
    Route::post('admin/logout', 'Backend\Auth\LoginController@logout')->name('admin.logout');

});

// Route::group(['prefix'=>'/admin','middleware' => 'auth:admin'],function () {
Route::group(['prefix'=>'/admin'],function () {

	Route::get('/configuration','Backend\Admin\ConfigurationController@index')->name('backend.admin.configuration');	
	
    Route::post('user-profile/change-password','ProfileController@changePasswordStore')->name('admin.user_profile.change_password.store');		
		
    Route::get('/dashboard', 'Backend\Admin\Frontdesk\Dashboard\IndexController@index')->name('backend.admin.frontdesk.dashboard');


	// Route::group(['prefix'=>'/banquet','middleware' => 'permission:admin'],function () {
	Route::group(['prefix'=>'/banquet'],function () {
			/*Sales Team*/
			Route::get('/setting/sales-team','Backend\Admin\Banquet\Settings\SalesTeamController@index')->name('backend.admin.banquet.sttings.sales_team');
			Route::get('/setting/sales-team/add','Backend\Admin\Banquet\Settings\SalesTeamController@create')->name('backend.admin.banquet.sttings.sales_team.add');
			Route::post('/setting/sales-team/store','Backend\Admin\Banquet\Settings\SalesTeamController@store1')->name('backend.admin.banquet.sttings.sales_team.store');
			Route::get('/setting/sales-team/edit/{id}','Backend\Admin\Banquet\Settings\SalesTeamController@edit')->name('backend.admin.banquet.sttings.sales_team.edit');
			Route::post('/setting/sales-team/update/{id}','Backend\Admin\Banquet\Settings\SalesTeamController@update')->name('backend.admin.banquet.sttings.sales_team.update');
			Route::get('/setting/sales-team/delete/{id}','Backend\Admin\Banquet\Settings\SalesTeamController@destroy')->name('backend.admin.banquet.sttings.sales_team.delete');
			Route::get('/setting/sales-team/view/{id}','Backend\Admin\Banquet\Settings\SalesTeamController@view')->name('backend.admin.banquet.sttings.sales_team.view');
			
			/*Staff*/		
			Route::get('/setting/staff','Backend\Admin\Banquet\Settings\StaffController@index')->name('backend.admin.banquet.sttings.staff');
			Route::get('/setting/staff/add','Backend\Admin\Banquet\Settings\StaffController@create')->name('backend.admin.banquet.sttings.staff.add');
			Route::post('/setting/staff/store','Backend\Admin\Banquet\Settings\StaffController@store')->name('backend.admin.banquet.sttings.staff.store');
			Route::get('/setting/staff/edit/{id}','Backend\Admin\Banquet\Settings\StaffController@edit')->name('backend.admin.banquet.sttings.staff.edit');
			Route::post('/setting/staff/update/{id}','Backend\Admin\Banquet\Settings\StaffController@update')->name('backend.admin.banquet.sttings.staff.update');
			Route::get('/setting/staff/delete/{id}','Backend\Admin\Banquet\Settings\StaffController@delete')->name('backend.admin.banquet.sttings.staff.delete');
			Route::get('/setting/staff/view','Backend\Admin\Banquet\Settings\StaffTeamController@view')->name('backend.admin.banquet.sttings.staff.view'); 
			
			/*Options*/
			Route::get('/setting/option','Backend\Admin\Banquet\Settings\OptionsController@index')->name('backend.admin.banquet.sttings.option');
			Route::get('/setting/option/add','Backend\Admin\Banquet\Settings\OptionsController@addOption')->name('backend.admin.banquet.sttings.option.add');
			Route::post('/setting/option/store','Backend\Admin\Banquet\Settings\OptionsController@storeOption')->name('backend.admin.banquet.sttings.option.store');
			Route::get('/setting/option/edit/{id}','Backend\Admin\Banquet\Settings\OptionsController@editOption')->name('backend.admin.banquet.sttings.option.edit');
			Route::get('/setting/option/view/{id}','Backend\Admin\Banquet\Settings\OptionsController@viewOption')->name('backend.admin.banquet.sttings.option.view');
			Route::post('/setting/option/update/{id}','Backend\Admin\Banquet\Settings\OptionsController@updateOption')->name('backend.admin.banquet.sttings.option.update');
			Route::get('/setting/option/delete/{id}','Backend\Admin\Banquet\Settings\OptionsController@deleteOption')->name('backend.admin.banquet.sttings.option.delete');
			
			
			Route::get('/setting/option/caterer-types','Backend\Admin\Banquet\Settings\OptionsController@caterers')->name('backend.admin.banquet.sttings.option.caterer');
			Route::get('/setting/option/add-caterer-type','Backend\Admin\Banquet\Settings\OptionsController@addCaterer')->name('backend.admin.banquet.sttings.option.caterer.add');
			Route::post('/setting/option/store-caterer-type','Backend\Admin\Banquet\Settings\OptionsController@storeCaterer')->name('backend.admin.banquet.sttings.option.caterer.store');
			Route::get('/setting/option/edit-caterer-type/{id}','Backend\Admin\Banquet\Settings\OptionsController@editCaterer')->name('backend.admin.banquet.sttings.option.caterer.edit');
			Route::post('/setting/option/update-caterer-type/{id}','Backend\Admin\Banquet\Settings\OptionsController@updateCaterer')->name('backend.admin.banquet.sttings.option.caterer.update');
			Route::get('/setting/option/delete-caterer-type/{id}','Backend\Admin\Banquet\Settings\OptionsController@deleteCaterer')->name('backend.admin.banquet.sttings.option.caterer.delete');
			
			Route::get('/setting/option/event-types','Backend\Admin\Banquet\Settings\OptionsController@events')->name('backend.admin.banquet.sttings.option.event');
			Route::get('/setting/option/add-event-type','Backend\Admin\Banquet\Settings\OptionsController@addEvent')->name('backend.admin.banquet.sttings.option.event.add');
			Route::post('/setting/option/store-event-type','Backend\Admin\Banquet\Settings\OptionsController@storeEvent')->name('backend.admin.banquet.sttings.option.event.store');
			Route::get('/setting/option/edit-event-type/{id}','Backend\Admin\Banquet\Settings\OptionsController@editEvent')->name('backend.admin.banquet.sttings.option.event.edit');
			Route::post('/setting/option/update-event-type/{id}','Backend\Admin\Banquet\Settings\OptionsController@updateEvent')->name('backend.admin.banquet.sttings.option.event.update');
			Route::get('/setting/option/delete-event-type/{id}','Backend\Admin\Banquet\Settings\OptionsController@deleteEvent')->name('backend.admin.banquet.sttings.option.event.delete');
			
			
			Route::get('/setting/option/deposit-types','Backend\Admin\Banquet\Settings\OptionsController@deposits')->name('backend.admin.banquet.sttings.option.deposit');
			Route::get('/setting/option/add-deposit-type','Backend\Admin\Banquet\Settings\OptionsController@addDeposit')->name('backend.admin.banquet.sttings.option.deposit.add');
			Route::post('/setting/option/store-deposit-type','Backend\Admin\Banquet\Settings\OptionsController@storeDeposit')->name('backend.admin.banquet.sttings.option.deposit.store');
			Route::get('/setting/option/edit-deposit-type/{id}','Backend\Admin\Banquet\Settings\OptionsController@editDeposit')->name('backend.admin.banquet.sttings.option.deposit.edit');
			Route::post('/setting/option/store-deposit-type/{id}','Backend\Admin\Banquet\Settings\OptionsController@updateDeposit')->name('backend.admin.banquet.sttings.option.deposit.update');
			Route::get('/setting/option/delete-deposit-type/{id}','Backend\Admin\Banquet\Settings\OptionsController@deleteDeposit')->name('backend.admin.banquet.sttings.option.deposit.delete');
			
			/*Contractor*/
			Route::get('/setting/contractor/caterers','Backend\Admin\Banquet\Settings\ContractorController@caterers')->name('backend.admin.banquet.sttings.contractor.caterer');
			Route::get('/setting/contractor/add-caterer','Backend\Admin\Banquet\Settings\ContractorController@AddCaterer')->name('backend.admin.banquet.sttings.contractor.caterer.add');
			Route::post('/setting/contractor/store-caterer','Backend\Admin\Banquet\Settings\ContractorController@storeCaterer')->name('backend.admin.banquet.sttings.contractor.caterer.store');
			Route::get('/setting/contractor/edit-caterer/{id}','Backend\Admin\Banquet\Settings\ContractorController@editCaterer')->name('backend.admin.banquet.sttings.contractor.caterer.edit');
			Route::post('/setting/contractor/update-caterer/{id}','Backend\Admin\Banquet\Settings\ContractorController@updateCaterer')->name('backend.admin.banquet.sttings.contractor.caterer.update');
			Route::get('/setting/contractor/delete-caterer/{id}','Backend\Admin\Banquet\Settings\ContractorController@deleteCaterer')->name('backend.admin.banquet.sttings.contractor.caterer.delete');
			
			Route::get('/setting/contractor/photographers','Backend\Admin\Banquet\Settings\ContractorController@photographers')->name('backend.admin.banquet.sttings.contractor.photographer');
			Route::get('/setting/contractor/add-photographer','Backend\Admin\Banquet\Settings\ContractorController@AddPhotographer')->name('backend.admin.banquet.sttings.contractor.photographer.add');
			Route::post('/setting/contractor/store-photographer','Backend\Admin\Banquet\Settings\ContractorController@storePhotographer')->name('backend.admin.banquet.sttings.contractor.photographer.store');
			Route::get('/setting/contractor/edit-photographer/{id}','Backend\Admin\Banquet\Settings\ContractorController@editPhotographer')->name('backend.admin.banquet.sttings.contractor.photographer.edit');
			Route::post('/setting/contractor/update-photographer/{id}','Backend\Admin\Banquet\Settings\ContractorController@updatePhotographer')->name('backend.admin.banquet.sttings.contractor.photographer.update');
			Route::get('/setting/contractor/delete-photographer/{id}','Backend\Admin\Banquet\Settings\ContractorController@deletePhotographer')->name('backend.admin.banquet.sttings.contractor.photographer.delete');
			
			Route::get('/setting/contractor/entertainers','Backend\Admin\Banquet\Settings\ContractorController@entertainers')->name('backend.admin.banquet.sttings.contractor.entertainer');
			Route::get('/setting/contractor/add-entertainer','Backend\Admin\Banquet\Settings\ContractorController@AddEntertainer')->name('backend.admin.banquet.sttings.contractor.entertainer.add');		
			Route::post('/setting/contractor/store-entertainer','Backend\Admin\Banquet\Settings\ContractorController@storeEntertainer')->name('backend.admin.banquet.sttings.contractor.entertainer.store');		
			Route::get('/setting/contractor/edit-entertainer/{id}','Backend\Admin\Banquet\Settings\ContractorController@editEntertainer')->name('backend.admin.banquet.sttings.contractor.entertainer.edit');		
			Route::post('/setting/contractor/update-entertainer/{id}','Backend\Admin\Banquet\Settings\ContractorController@updateEntertainer')->name('backend.admin.banquet.sttings.contractor.entertainer.update');		
			Route::get('/setting/contractor/delete-entertainer/{id}','Backend\Admin\Banquet\Settings\ContractorController@deleteEntertainer')->name('backend.admin.banquet.sttings.contractor.entertainer.delete');		
			
			Route::get('/setting/contractor/decorators','Backend\Admin\Banquet\Settings\ContractorController@decorators')->name('backend.admin.banquet.sttings.contractor.decorator');
			Route::get('/setting/contractor/add-decorator','Backend\Admin\Banquet\Settings\ContractorController@AddDecorator')->name('backend.admin.banquet.sttings.contractor.decorator.add');
			Route::post('/setting/contractor/store-decorator','Backend\Admin\Banquet\Settings\ContractorController@storeDecorator')->name('backend.admin.banquet.sttings.contractor.decorator.store');
			Route::get('/setting/contractor/edit-decorator/{id}','Backend\Admin\Banquet\Settings\ContractorController@editDecorator')->name('backend.admin.banquet.sttings.contractor.decorator.edit');
			Route::post('/setting/contractor/update-decorator/{id}','Backend\Admin\Banquet\Settings\ContractorController@updateDecorator')->name('backend.admin.banquet.sttings.contractor.decorator.update');
			Route::get('/setting/contractor/delete-decorator/{id}','Backend\Admin\Banquet\Settings\ContractorController@deleteDecorator')->name('backend.admin.banquet.sttings.contractor.decorator.delete');
			
			Route::get('/setting/contractor/miscellaneous','Backend\Admin\Banquet\Settings\ContractorController@miscellaneous')->name('backend.admin.banquet.sttings.contractor.miscellaneous');
			Route::get('/setting/contractor/add-miscellaneous','Backend\Admin\Banquet\Settings\ContractorController@Addmiscellaneous')->name('backend.admin.banquet.sttings.contractor.miscellaneous.add');
			Route::post('/setting/contractor/store-miscellaneous','Backend\Admin\Banquet\Settings\ContractorController@storemiscellaneous')->name('backend.admin.banquet.sttings.contractor.miscellaneous.store');
			Route::get('/setting/contractor/edit-miscellaneous/{id}','Backend\Admin\Banquet\Settings\ContractorController@editmiscellaneous')->name('backend.admin.banquet.sttings.contractor.miscellaneous.edit');
			Route::post('/setting/contractor/update-miscellaneous/{id}','Backend\Admin\Banquet\Settings\ContractorController@updatemiscellaneous')->name('backend.admin.banquet.sttings.contractor.miscellaneous.update');
			Route::get('/setting/contractor/delete-miscellaneous/{id}','Backend\Admin\Banquet\Settings\ContractorController@deletemiscellaneous')->name('backend.admin.banquet.sttings.contractor.miscellaneous.delete');
			
			/*Function Settings*/
			Route::get('/setting/function/parking','Backend\Admin\Banquet\Settings\FunctionsController@parkings')->name('backend.admin.banquet.sttings.function.parking');
			Route::get('/setting/function/add-parking','Backend\Admin\Banquet\Settings\FunctionsController@addParking')->name('backend.admin.banquet.sttings.function.parking.add');
			Route::post('/setting/function/store-parking','Backend\Admin\Banquet\Settings\FunctionsController@storeParking')->name('backend.admin.banquet.sttings.function.parking.store');
			Route::get('/setting/function/edit-parking/{id}','Backend\Admin\Banquet\Settings\FunctionsController@editParking')->name('backend.admin.banquet.sttings.function.parking.edit');
			Route::post('/setting/function/update-parking/{id}','Backend\Admin\Banquet\Settings\FunctionsController@updateParking')->name('backend.admin.banquet.sttings.function.parking.update');
			Route::get('/setting/function/delete-parking/{id}','Backend\Admin\Banquet\Settings\FunctionsController@deleteParking')->name('backend.admin.banquet.sttings.function.parking.delete');
			
			Route::get('/setting/function/equipment','Backend\Admin\Banquet\Settings\FunctionsController@equipments')->name('backend.admin.banquet.sttings.function.equipment');
			Route::get('/setting/function/add-equipment','Backend\Admin\Banquet\Settings\FunctionsController@addEquipment')->name('backend.admin.banquet.sttings.function.equipment.add');
			Route::post('/setting/function/store-equipment','Backend\Admin\Banquet\Settings\FunctionsController@storeEquipment')->name('backend.admin.banquet.sttings.function.equipment.store');
			Route::get('/setting/function/edit-equipment/{id}','Backend\Admin\Banquet\Settings\FunctionsController@editEquipment')->name('backend.admin.banquet.sttings.function.equipment.edit');
			Route::post('/setting/function/update-equipment/{id}','Backend\Admin\Banquet\Settings\FunctionsController@updateEquipment')->name('backend.admin.banquet.sttings.function.equipment.update');
			Route::get('/setting/function/delete-equipment/{id}','Backend\Admin\Banquet\Settings\FunctionsController@deleteEquipment')->name('backend.admin.banquet.sttings.function.equipment.delete');
			
			Route::get('/setting/function/transport-service','Backend\Admin\Banquet\Settings\FunctionsController@transportServices')->name('backend.admin.banquet.sttings.function.transport_service');
			Route::get('/setting/function/add-transport-service','Backend\Admin\Banquet\Settings\FunctionsController@addTransportService')->name('backend.admin.banquet.sttings.function.transport_service.add');
			Route::post('/setting/function/store-transport-service','Backend\Admin\Banquet\Settings\FunctionsController@storeTransportService')->name('backend.admin.banquet.sttings.function.transport_service.store');
			Route::get('/setting/function/edit-transport-service/{id}','Backend\Admin\Banquet\Settings\FunctionsController@editTransportService')->name('backend.admin.banquet.sttings.function.transport_service.edit');
			Route::post('/setting/function/update-transport-service/{id}','Backend\Admin\Banquet\Settings\FunctionsController@updateTransportService')->name('backend.admin.banquet.sttings.function.transport_service.update');
			Route::get('/setting/function/delete-transport-service/{id}','Backend\Admin\Banquet\Settings\FunctionsController@deleteTransportService')->name('backend.admin.banquet.sttings.function.transport_service.delete');
			
			Route::get('/setting/function/event-location','Backend\Admin\Banquet\Settings\FunctionsController@eventLocations')->name('backend.admin.banquet.sttings.function.event_location');
			Route::get('/setting/function/add-event-location','Backend\Admin\Banquet\Settings\FunctionsController@addEventLocation')->name('backend.admin.banquet.sttings.function.event_location.add');
			Route::post('/setting/function/store-event-location','Backend\Admin\Banquet\Settings\FunctionsController@storeEventLocation')->name('backend.admin.banquet.sttings.function.event_location.store');
			Route::get('/setting/function/edit-event-location/{id}','Backend\Admin\Banquet\Settings\FunctionsController@editEventLocation')->name('backend.admin.banquet.sttings.function.event_location.edit');
			Route::post('/setting/function/update-event-location/{id}','Backend\Admin\Banquet\Settings\FunctionsController@updateEventLocation')->name('backend.admin.banquet.sttings.function.event_location.update');
			Route::get('/setting/function/delete-event-location/{id}','Backend\Admin\Banquet\Settings\FunctionsController@deleteEventLocation')->name('backend.admin.banquet.sttings.function.event_location.delete');
			
			Route::get('/setting/function/hotels','Backend\Admin\Banquet\Settings\FunctionsController@hotels')->name('backend.admin.banquet.sttings.function.hotel');
			Route::get('/setting/function/add-hotel','Backend\Admin\Banquet\Settings\FunctionsController@addHotel')->name('backend.admin.banquet.sttings.function.hotel.add');
			Route::post('/setting/function/store-hotel','Backend\Admin\Banquet\Settings\FunctionsController@storeHotel')->name('backend.admin.banquet.sttings.function.hotel.store');
			Route::get('/setting/function/edit-hotel/{id}','Backend\Admin\Banquet\Settings\FunctionsController@editHotel')->name('backend.admin.banquet.sttings.function.hotel.edit');
			Route::post('/setting/function/update-hotel/{id}','Backend\Admin\Banquet\Settings\FunctionsController@updateHotel')->name('backend.admin.banquet.sttings.function.hotel.update');
			Route::get('/setting/function/delete-hotel/{id}','Backend\Admin\Banquet\Settings\FunctionsController@deleteHotel')->name('backend.admin.banquet.sttings.function.hotel.delete');
			
			Route::get('/setting/function/hotel-rooms','Backend\Admin\Banquet\Settings\FunctionsController@hotelRooms')->name('backend.admin.banquet.sttings.function.hotel_room');
			Route::get('/setting/function/add-hotel-room','Backend\Admin\Banquet\Settings\FunctionsController@addHotelRoom')->name('backend.admin.banquet.sttings.function.hotel_room.add');
			Route::post('/setting/function/store-hotel-room','Backend\Admin\Banquet\Settings\FunctionsController@storeHotelRoom')->name('backend.admin.banquet.sttings.function.hotel_room.store');
			Route::get('/setting/function/edit-hotel-room/{id}','Backend\Admin\Banquet\Settings\FunctionsController@editHotelRoom')->name('backend.admin.banquet.sttings.function.hotel_room.edit');
			Route::post('/setting/function/store-hotel-room/{id}','Backend\Admin\Banquet\Settings\FunctionsController@updateHotelRoom')->name('backend.admin.banquet.sttings.function.hotel_room.update');
			Route::get('/setting/function/delete-hotel-room/{id}','Backend\Admin\Banquet\Settings\FunctionsController@deleteHotelRoom')->name('backend.admin.banquet.sttings.function.hotel_room.delete');
		
			/* Lead */
			Route::get('/setting/function/lead-source','Backend\Admin\Banquet\Settings\FunctionsController@leadSources')->name('backend.admin.banquet.sttings.function.lead_source');
			Route::get('/setting/function/add-lead-source','Backend\Admin\Banquet\Settings\FunctionsController@addLeadSource')->name('backend.admin.banquet.sttings.function.lead_source.add');
			Route::post('/setting/function/store-lead-source','Backend\Admin\Banquet\Settings\FunctionsController@storeLeadSource')->name('backend.admin.banquet.sttings.function.lead_source.store');
			Route::get('/setting/function/edit-lead-source/{id}','Backend\Admin\Banquet\Settings\FunctionsController@editLeadSource')->name('backend.admin.banquet.sttings.function.lead_source.edit');
			Route::post('/setting/function/update-lead-source/{id}','Backend\Admin\Banquet\Settings\FunctionsController@updateLeadSource')->name('backend.admin.banquet.sttings.function.lead_source.update');
			Route::get('/setting/function/delete-lead-source/{id}','Backend\Admin\Banquet\Settings\FunctionsController@deleteLeadSource')->name('backend.admin.banquet.sttings.function.lead_source.delete');
			
			Route::get('/setting/function/agreement','Backend\Admin\Banquet\Settings\FunctionsController@agreements')->name('backend.admin.banquet.sttings.function.agreement');
			Route::post('/setting/function/add-agreement/{id}','Backend\Admin\Banquet\Settings\FunctionsController@addAgreement')->name('backend.admin.banquet.sttings.function.agreement.update');
			
			/*Menus Settings*/
			Route::get('/setting/menus','Backend\Admin\Banquet\Settings\MenusController@index')->name('backend.admin.banquet.sttings.menu');
			Route::get('/setting/menu/add','Backend\Admin\Banquet\Settings\MenusController@addMenu')->name('backend.admin.banquet.sttings.menu.add');
			Route::post('/setting/menu/store','Backend\Admin\Banquet\Settings\MenusController@storeMenu')->name('backend.admin.banquet.sttings.menu.store');
			Route::get('/setting/menu/edit/{id}','Backend\Admin\Banquet\Settings\MenusController@editMenu')->name('backend.admin.banquet.sttings.menu.edit');
			Route::post('/setting/menu/update/{id}','Backend\Admin\Banquet\Settings\MenusController@updateMenu')->name('backend.admin.banquet.sttings.menu.update');
			Route::get('/setting/menu/delete/{id}','Backend\Admin\Banquet\Settings\MenusController@deleteMenu')->name('backend.admin.banquet.sttings.menu.delete');
			
			Route::get('/setting/menus/menu-types','Backend\Admin\Banquet\Settings\MenusController@MenuTypes')->name('backend.admin.banquet.sttings.menu.type');
			Route::get('/setting/menus/add-menu-type','Backend\Admin\Banquet\Settings\MenusController@addMenuType')->name('backend.admin.banquet.sttings.menu.type.add');
			Route::post('/setting/menus/store-menu-type','Backend\Admin\Banquet\Settings\MenusController@storeMenuType')->name('backend.admin.banquet.sttings.menu.type.store');
			Route::get('/setting/menus/edit-menu-type/{id}','Backend\Admin\Banquet\Settings\MenusController@editMenuType')->name('backend.admin.banquet.sttings.menu.type.edit');
			Route::post('/setting/menus/update-menu-type/{id}','Backend\Admin\Banquet\Settings\MenusController@updateMenuType')->name('backend.admin.banquet.sttings.menu.type.update');
			Route::get('/setting/menus/delete-menu-type/{id}','Backend\Admin\Banquet\Settings\MenusController@deleteMenuType')->name('backend.admin.banquet.sttings.menu.type.delete');
			
			Route::get('/setting/menus/sub-menus','Backend\Admin\Banquet\Settings\MenusController@subMenus')->name('backend.admin.banquet.sttings.menu.sub_menu');
			Route::get('/setting/menus/add-sub-menu','Backend\Admin\Banquet\Settings\MenusController@addSubMenu')->name('backend.admin.banquet.sttings.menu.sub_menu.add');
			Route::post('/setting/menus/store-sub-menu','Backend\Admin\Banquet\Settings\MenusController@storeSubMenu')->name('backend.admin.banquet.sttings.menu.sub_menu.store');
			Route::get('/setting/menus/edit-sub-menu/{id}','Backend\Admin\Banquet\Settings\MenusController@editSubMenu')->name('backend.admin.banquet.sttings.menu.sub_menu.edit');
			Route::post('/setting/menus/update-sub-menu/{id}','Backend\Admin\Banquet\Settings\MenusController@updateSubMenu')->name('backend.admin.banquet.sttings.menu.sub_menu.update');
			Route::get('/setting/menus/delete-sub-menu/{id}','Backend\Admin\Banquet\Settings\MenusController@deleteSubMenu')->name('backend.admin.banquet.sttings.menu.sub_menu.delete');
			
			Route::get('/setting/menus/items','Backend\Admin\Banquet\Settings\MenusController@menuItems')->name('backend.admin.banquet.sttings.menu.item');
			Route::get('/setting/menus/add-menu-item','Backend\Admin\Banquet\Settings\MenusController@addMenuItem')->name('backend.admin.banquet.sttings.menu.item.add');	
			Route::post('/setting/menus/store-menu-item','Backend\Admin\Banquet\Settings\MenusController@storeMenuItem')->name('backend.admin.banquet.sttings.menu.item.store');	
			Route::get('/setting/menus/edit-menu-item/{id}','Backend\Admin\Banquet\Settings\MenusController@editMenuItem')->name('backend.admin.banquet.sttings.menu.item.edit');	
			Route::post('/setting/menus/update-menu-item/{id}','Backend\Admin\Banquet\Settings\MenusController@updateMenuItem')->name('backend.admin.banquet.sttings.menu.item.update');	
			Route::get('/setting/menus/delete-menu-item/{id}','Backend\Admin\Banquet\Settings\MenusController@deleteMenuItem')->name('backend.admin.banquet.sttings.menu.item.delete');	
			
			Route::get('/setting/subscription-plan','Backend\Admin\Banquet\Settings\SubscriptionPlanController@index')->name('backend.admin.banquet.sttings.subscription_plan');
			//Route::post('/setting/subscription-plan/{id}','Backend\Admin\Banquet\Settings\SubscriptionPlanController@updateindex')->name('backend.admin.banquet.sttings.subscription_plan.update');

			Route::get('/setting','Backend\Admin\Banquet\Settings\IndexController@index')->name('backend.admin.banquet.setting');
			Route::post('/setting/{id}','Backend\Admin\Banquet\Settings\IndexController@updateIndex')->name('backend.admin.banquet.setting.update');
			
			Route::get('/setting/payment-gateway','Backend\Admin\Banquet\Settings\PaymentGatewayController@index')->name('backend.admin.banquet.setting.payment_gateway');
					
			Route::get('/dashboard','Backend\Admin\Banquet\DashboardController@index')->name('backend.admin.banquet.dashboard');
			
			Route::get('/calendar','Backend\Admin\Banquet\CalendarController@index')->name('backend.admin.banquet.calendar');



			/* sales */
			Route::get('/sales/lead','Backend\Admin\Banquet\Sales\SalesController@leads')->name('backend.admin.banquet.sales.lead');
			Route::post('/sales/lead/store','Backend\Admin\Banquet\Sales\SalesController@storeLead')->name('backend.admin.banquet.sales.lead.store');
			Route::get('/sales/lead/delete/{id}','Backend\Admin\Banquet\Sales\SalesController@deleteLead')->name('backend.admin.banquet.sales.lead.delete');	
			Route::get('/sales/lead/create-lead','Backend\Admin\Banquet\Sales\SalesController@createLead')->name('backend.admin.banquet.sales.lead.add');
			Route::get('/sales/lead/edit-lead/{id?}','Backend\Admin\Banquet\Sales\SalesController@editLead')->name('backend.admin.banquet.sales.lead.edit');
			Route::post('/sales/lead/update/{id}','Backend\Admin\Banquet\Sales\SalesController@updateLead')->name('backend.admin.banquet.sales.lead.update');
			Route::get('/sales/lead/view-lead/{id?}','Backend\Admin\Banquet\Sales\SalesController@leadDetail')->name('backend.admin.banquet.sales.lead.view');
			Route::get('/sales/create-event','Backend\Admin\Banquet\Sales\SalesController@createEvent')->name('backend.admin.banquet.sales.lead.create_event');


			Route::get('/sales/lead-call','Backend\Admin\Banquet\Sales\SalesController@leadCall')->name('backend.admin.banquet.sales.lead.call');
			Route::get('/sales/create-lead-call','Backend\Admin\Banquet\Sales\SalesController@createLeadCall')->name('backend.admin.banquet.sales.lead.create_call');
			Route::post('/sales/lead-call/store','Backend\Admin\Banquet\Sales\SalesController@storeLeadCall')->name('backend.admin.banquet.sales.lead.call_store');
			Route::get('/sales/lead-call/delete/{id}','Backend\Admin\Banquet\Sales\SalesController@deleteLeadCall')->name('backend.admin.banquet.sales.lead.call_delete');





			
			Route::get('/sales/quotations','Backend\Admin\Banquet\Sales\QuotationsController@index')->name('backend.admin.banquet.sales.quotation');
			
			Route::get('/sales/edit-event','Backend\Admin\Banquet\Sales\QuotationsController@editEvent')->name('backend.admin.banquet.sales.edit_event');
			
			Route::get('/sales/invoices','Backend\Admin\Banquet\Sales\InvoicesController@index')->name('backend.admin.banquet.sales.invoice');
			
			// customers
			Route::get('/sales/customers','Backend\Admin\Banquet\Sales\CustomersController@index')->name('backend.admin.banquet.sales.customer');
			Route::get('/sales/create-customer','Backend\Admin\Banquet\Sales\CustomersController@createCustomer')->name('backend.admin.banquet.sales.customer.add');
			Route::post('/sales/store-customer','Backend\Admin\Banquet\Sales\CustomersController@storeCustomer')->name('backend.admin.banquet.sales.customer.store');
			Route::get('/sales/delete-customer/{id}','Backend\Admin\Banquet\Sales\CustomersController@deleteCustomer')->name('backend.admin.banquet.sales.customer.delete');
			Route::get('/sales/edit-customer/{id}','Backend\Admin\Banquet\Sales\CustomersController@editCustomer')->name('backend.admin.banquet.sales.customer.edit');
			Route::post('/sales/update-customer/{id}','Backend\Admin\Banquet\Sales\CustomersController@updateCustomer')->name('backend.admin.banquet.sales.customer.update');
			Route::get('/sales/view-customer','Backend\Admin\Banquet\Sales\CustomersController@viewCustomer')->name('backend.admin.banquet.sales.customer.view');
			
			//contact
			Route::get('/sales/contacts','Backend\Admin\Banquet\Sales\ContactsController@index')->name('backend.admin.banquet.sales.contact');
			Route::post('/sales/store-contact','Backend\Admin\Banquet\Sales\ContectController@storeCustomer')->name('backend.admin.banquet.sales.contact.store');			
			Route::get('/sales/new-contact','Backend\Admin\Banquet\Sales\ContactsController@newContact')->name('backend.admin.banquet.sales.contact.add');
			
			Route::get('/sales/view-contact','Backend\Admin\Banquet\Sales\ContactsController@viewContact')->name('backend.admin.banquet.sales.contact.view');
			
			/*Functions and Event*/
			Route::get('/functions/events','Backend\Admin\Banquet\FunctionsController@events')->name('backend.admin.banquet.functions.event');
			Route::get('/functions/create-event','Backend\Admin\Banquet\FunctionsController@createEvent')->name('backend.admin.banquet.functions.event.create');
			Route::post('/functions/store-event','Backend\Admin\Banquet\FunctionsController@storeEvent')->name('backend.admin.banquet.functions.event.store');
			Route::get('/functions/delete-event/{id}', 'Backend\Admin\Banquet\FunctionsController@deleteEvent')->name('backend.admin.banquet.functions.event.delete');
			// Route::get('/functions/edit-event','Backend\Admin\Banquet\FunctionsController@editEvent')->name('backend.admin.banquet.functions.event.edit');
			Route::get('/functions/event-edit/{id?}','Backend\Admin\Banquet\FunctionsController@Eventedit')->name('backend.admin.banquet.functions.event.edit');
			Route::post('/functions/update-event/{id}','Backend\Admin\Banquet\FunctionsController@updateEvent')->name('backend.admin.banquet.functions.event.update');
			Route::get('/functions/view-event/{id?}','Backend\Admin\Banquet\FunctionsController@viewEvent')->name('backend.admin.banquet.functions.event.view');
			
			Route::get('/functions/calendar','Backend\Admin\Banquet\FunctionsController@calendar')->name('backend.admin.banquet.functions.calendar');
			
			Route::get('/functions/tickets','Backend\Admin\Banquet\FunctionsController@tickets')->name('backend.admin.banquet.functions.ticket');
			
			Route::get('/functions/sell-ticket','Backend\Admin\Banquet\FunctionsController@sellTicket')->name('backend.admin.banquet.functions.ticket.sell');
					
			Route::get('/functions/new-booking','Backend\Admin\Banquet\FunctionsController@newBooking')->name('backend.admin.banquet.functions.new_booking');

			/* tasks */
			
			Route::get('/task/todo','Backend\Admin\Banquet\TaskController@todoList')->name('backend.admin.banquet.task.todo');

			/* meeting */
			Route::get('/task/meeting','Backend\Admin\Banquet\TaskController@meeting')->name('backend.admin.banquet.task.meeting');
			Route::get('/task/create-meeting','Backend\Admin\Banquet\TaskController@createMeeting')->name('backend.admin.banquet.task.meeting.create');
			Route::post('/task/store-meeting','Backend\Admin\Banquet\TaskController@storeMeeting')->name('backend.admin.banquet.task.meeting.store');
			Route::get('/task/edit-meeting/{id}','Backend\Admin\Banquet\TaskController@editMeeting')->name('backend.admin.banquet.task.meeting.edit');
			Route::get('/task/delete-meeting/{id}','Backend\Admin\Banquet\TaskController@deleteMeeting')->name('backend.admin.banquet.task.meeting.delete');		
			Route::post('/task/update-meeting/{id}','Backend\Admin\Banquet\TaskController@updateMeeting')->name('backend.admin.banquet.task.meeting.update');
			Route::get('/task/view-meeting','Backend\Admin\Banquet\TaskController@viewMeeting')->name('backend.admin.banquet.task.meeting.view');
			
			/* callls */
			Route::get('/task/calls','Backend\Admin\Banquet\TaskController@calls')->name('backend.admin.banquet.task.call');
			Route::get('/task/new-call','Backend\Admin\Banquet\TaskController@newCall')->name('backend.admin.banquet.task.call.new');
			Route::post('/task/store-call','Backend\Admin\Banquet\TaskController@storeCall')->name('backend.admin.banquet.task.call.store');
			Route::get('/task/delete-call/{id}','Backend\Admin\Banquet\TaskController@deleteCall')->name('backend.admin.banquet.task.call.delete');
			Route::get('/task/edit-call/{id}','Backend\Admin\Banquet\TaskController@editCall')->name('backend.admin.banquet.task.call.edit');
			Route::post('/task/update-call/{id}','Backend\Admin\Banquet\TaskController@updateCall')->name('backend.admin.banquet.task.call.update');
			Route::get('/task/view-call','Backend\Admin\Banquet\TaskController@viewCall')->name('backend.admin.banquet.task.call.view');
			
			
			/*Reports*/
			Route::get('/reports/events','Backend\Admin\Banquet\ReportsController@eventReport')->name('backend.admin.banquet.report.event');	
			Route::get('/reports/leads','Backend\Admin\Banquet\ReportsController@leadReport')->name('backend.admin.banquet.report.lead');	
			Route::get('/reports/sales','Backend\Admin\Banquet\ReportsController@salesReport')->name('backend.admin.banquet.report.sale');	
			Route::get('/reports/contractors','Backend\Admin\Banquet\ReportsController@contractorReport')->name('backend.admin.banquet.report.contractor');	
			Route::get('/reports/forecasted','Backend\Admin\Banquet\ReportsController@forecastedReport')->name('backend.admin.banquet.report.forecasted');	
			Route::get('/reports/reservation','Backend\Admin\Banquet\ReportsController@reservationReport')->name('backend.admin.banquet.report.reservation');	
			Route::get('/reports/payment-log','Backend\Admin\Banquet\ReportsController@paymentLog')->name('backend.admin.banquet.report.payment_log');	
			
		});

	
});
		?>