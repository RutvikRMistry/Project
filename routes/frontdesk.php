<?php
use Illuminate\Support\Facades\Route;
// Route::group(['prefix'=>'/admin','middleware' => 'auth:admin'],function () {
Route::group(['prefix'=>'/admin'],function () {

    Route::get('/configuration','Backend\Admin\ConfigurationController@index')->name('backend.admin.configuration');	
	
    Route::post('user-profile/change-password','ProfileController@changePasswordStore')->name('admin.user_profile.change_password.store');		
    
    Route::get('/dashboard', 'Backend\Admin\Frontdesk\Dashboard\IndexController@index')->name('backend.admin.frontdesk.dashboard');
	// Route::group(['middleware' => 'permission:admin'],function () {
    Route::group([],function () {
    //     ////////////////////Hotel Configure////////////////////////////////
        
    //     /*Amenities*/
        Route::get('amenities', 'Backend\Admin\Frontdesk\HotelConfigure\AmenitiesController@index')->name('backend.admin.frontdesk.hotel_configure.amenities');
        Route::get('amenities/create', 'Backend\Admin\Frontdesk\HotelConfigure\AmenitiesController@create')->name('backend.admin.frontdesk.hotel_configure.amenities.create');
        Route::post('amenities/store', 'Backend\Admin\Frontdesk\HotelConfigure\AmenitiesController@store')->name('backend.admin.frontdesk.hotel_configure.amenities.store');
        Route::get('amenities/{id}/edit', 'Backend\Admin\Frontdesk\HotelConfigure\AmenitiesController@edit')->name('backend.admin.frontdesk.hotel_configure.amenities.edit');
        Route::post('amenities/{id}/update', 'Backend\Admin\Frontdesk\HotelConfigure\AmenitiesController@update')->name('backend.admin.frontdesk.hotel_configure.amenities.update');
        Route::get('amenities/{id}/delete', 'Backend\Admin\Frontdesk\HotelConfigure\AmenitiesController@delete')->name('backend.admin.frontdesk.hotel_configure.amenities.delete');
        
    //     /*Floor*/
        Route::get('floor', 'Backend\Admin\Frontdesk\HotelConfigure\FloorController@index')->name('backend.admin.frontdesk.hotel_configure.floor');
        Route::get('floor/create', 'Backend\Admin\Frontdesk\HotelConfigure\FloorController@create')->name('backend.admin.frontdesk.hotel_configure.floor.create');
        Route::post('floor/store', 'Backend\Admin\Frontdesk\HotelConfigure\FloorController@store')->name('backend.admin.frontdesk.hotel_configure.floor.store');
        Route::get('floor/{id}/edit', 'Backend\Admin\Frontdesk\HotelConfigure\FloorController@edit')->name('backend.admin.frontdesk.hotel_configure.floor.edit');
        Route::post('floor/{id}/update', 'Backend\Admin\Frontdesk\HotelConfigure\FloorController@update')->name('backend.admin.frontdesk.hotel_configure.floor.update');
        Route::get('floor/{id}/delete', 'Backend\Admin\Frontdesk\HotelConfigure\FloorController@delete')->name('backend.admin.frontdesk.hotel_configure.floor.delete');
        
        
    //     /*Tax*/
        Route::get('tax', 'Backend\Admin\Frontdesk\HotelConfigure\TaxController@index')->name('backend.admin.frontdesk.hotel_configure.tax');
        Route::get('tax/create', 'Backend\Admin\Frontdesk\HotelConfigure\TaxController@create')->name('backend.admin.frontdesk.hotel_configure.tax.create');
        Route::post('tax/store', 'Backend\Admin\Frontdesk\HotelConfigure\TaxController@store')->name('backend.admin.frontdesk.hotel_configure.tax.store');
        Route::get('tax/{id}/edit', 'Backend\Admin\Frontdesk\HotelConfigure\TaxController@edit')->name('backend.admin.frontdesk.hotel_configure.tax.edit');
        Route::post('tax/{id}/update', 'Backend\Admin\Frontdesk\HotelConfigure\TaxController@update')->name('backend.admin.frontdesk.hotel_configure.tax.update');
        Route::get('tax/{id}/delete', 'Backend\Admin\Frontdesk\HotelConfigure\TaxController@delete')->name('backend.admin.frontdesk.hotel_configure.tax.delete');
        
    //     /*Paid service*/
        Route::get('paid-service','Backend\Admin\Frontdesk\HotelConfigure\PaidServiceController@index')->name('backend.admin.frontdesk.hotel_configure.paid_service');
        Route::get('paid-service/create','Backend\Admin\Frontdesk\HotelConfigure\PaidServiceController@create')->name('backend.admin.frontdesk.hotel_configure.paid_service.create');
        Route::post('paid-service/store','Backend\Admin\Frontdesk\HotelConfigure\PaidServiceController@store')->name('backend.admin.paid_service.store');
        Route::get('paid-service/{id}/edit','Backend\Admin\Frontdesk\HotelConfigure\PaidServiceController@edit')->name('backend.admin.paid_service.edit');
        Route::post('paid-service/{id}/update','Backend\Admin\Frontdesk\HotelConfigure\PaidServiceController@update')->name('backend.admin.paid_service.update');
        Route::get('paid-service/{id}/delete','Backend\Admin\Frontdesk\HotelConfigure\PaidServiceController@delete')->name('backend.admin.paid_service.delete');

    //     /*Coupon Master*/
        Route::get('coupon', 'Backend\Admin\Frontdesk\HotelConfigure\CouponMasterController@index')->name('backend.admin.frontdesk.hotel_configure.coupon');
        Route::get('coupon/create', 'Backend\Admin\Frontdesk\HotelConfigure\CouponMasterController@create')->name('backend.admin.frontdesk.hotel_configure.coupon.create');
        Route::post('coupon/store', 'Backend\Admin\Frontdesk\HotelConfigure\CouponMasterController@store')->name('backend.admin.frontdesk.hotel_configure.coupon.store');
        Route::get('coupon/{id}/edit', 'Backend\Admin\Frontdesk\HotelConfigure\CouponMasterController@edit')->name('backend.admin.frontdesk.hotel_configure.coupon.edit');
        Route::post('coupon/{id}/update', 'Backend\Admin\Frontdesk\HotelConfigure\CouponMasterController@update')->name('backend.admin.frontdesk.hotel_configure.coupon.update');
        Route::get('coupon/{id}/delete', 'Backend\Admin\Frontdesk\HotelConfigure\CouponMasterController@delete')->name('backend.admin.frontdesk.hotel_configure.coupon.delete');
        
    //     /*Room*/
        Route::get('rooms', 'Backend\Admin\Frontdesk\HotelConfigure\RoomsController@index')->name('backend.admin.frontdesk.hotel_configure.rooms');
        Route::get('room/create', 'Backend\Admin\Frontdesk\HotelConfigure\RoomsController@create')->name('backend.admin.frontdesk.hotel_configure.room.create');
        Route::post('room/store', 'Backend\Admin\Frontdesk\HotelConfigure\RoomsController@store')->name('backend.admin.room.store');
        Route::get('room/{id}/edit', 'Backend\Admin\Frontdesk\HotelConfigure\RoomsController@edit')->name('backend.admin.room.edit');
        Route::post('room/{id}/update', 'Backend\Admin\Frontdesk\HotelConfigure\RoomsController@update')->name('backend.admin.room.update');
        Route::get('room/{id}/delete', 'Backend\Admin\Frontdesk\HotelConfigure\RoomsController@delete')->name('backend.admin.room.delete');
        
    //     /**Room type***/
        Route::get('room-type', 'Backend\Admin\Frontdesk\HotelConfigure\RoomTypeController@index')->name('backend.admin.frontdesk.hotel_configure.room_type');
        Route::get('room-type/create', 'Backend\Admin\Frontdesk\HotelConfigure\RoomTypeController@create')->name('backend.admin.frontdesk.hotel_configure.room_type.create');
        Route::post('room-type/store', 'Backend\Admin\Frontdesk\HotelConfigure\RoomTypeController@store')->name('backend.admin.frontdesk.hotel_configure.room_type.store');
        Route::get('room-type/{id}/view', 'Backend\Admin\Frontdesk\HotelConfigure\RoomTypeController@view')->name('backend.admin.frontdesk.hotel_configure.room_type.view');
        Route::get('room-type/{id}/edit', 'Backend\Admin\Frontdesk\HotelConfigure\RoomTypeController@edit')->name('backend.admin.frontdesk.hotel_configure.room_type.edit');
        Route::post('room-type/{id}/update', 'Backend\Admin\Frontdesk\HotelConfigure\RoomTypeController@update')->name('backend.admin.frontdesk.hotel_configure.room_type.update');
        Route::get('room-type/{id}/delete', 'Backend\Admin\Frontdesk\HotelConfigure\RoomTypeController@delete')->name('backend.admin.frontdesk.hotel_configure.room_type.delete');
         /*Room type image*/
         Route::get('room-type/upload-image', 'Backend\Admin\Frontdesk\HotelConfigure\RoomTypeController@uploadImageGet')->name('backend.admin.room_type_upload_image');
        Route::post('room-type/upload-image', 'Backend\Admin\Frontdesk\HotelConfigure\RoomTypeController@uploadImage')->name('backend.admin.room_type_upload_image');
        Route::post('room-type/delete-image', 'Backend\Admin\Frontdesk\HotelConfigure\RoomTypeController@deleteImage')->name('backend.admin.room_type_delete_image');
        Route::get('room-type/{room_type_id}/{id}/set-as-featured', 'Backend\Admin\frontdesk\HotelConfigure\RoomTypeController@setAsFeatured')->name('backend.admin.room_type_set_as_featured');
        
        /*Room type   update regular price and Special price*/
        //Route::get('room-type/{room_type_id}/regular-price', 'Backend\Admin\Frontdesk\HotelConfigure\RoomTypeController@regularPrice')->name('backend.admin.frontdesk.room_type.reular_price');
        //Route::get('room-type/{room_type_id}/special-price', 'Backend\Admin\Frontdesk\HotelConfigure\RoomTypeController@specialPrice')->name('backend.admin.frontdesk.room_type.special_price');
        
        Route::get('room-type/regular-price/{id}/update', 'Backend\Admin\Frontdesk\HotelConfigure\RoomTypeController@regularPriceUpdate')->name('backend.admin.frontdesk.regular_price_update');
        Route::post('room-type/regular-price/{id}/update', 'Backend\Admin\Frontdesk\HotelConfigure\RoomTypeController@regularPriceUpdate')->name('backend.admin.frontdesk.regular_price_update');
        Route::get('room-type/special-price/{id}/update', 'Backend\Admin\Frontdesk\HotelConfigure\RoomTypeController@specialPriceUpdate')->name('backend.admin.special_price_update');
        Route::post('room-type/special-price/{id}/update', 'Backend\Admin\Frontdesk\HotelConfigure\RoomTypeController@specialPriceUpdate')->name('backend.admin.special_price_update');

        /**********Manage Staff**************/
        
        /*New Route Code Staff @start*/
        Route::get('staff', 'Backend\Admin\Frontdesk\Staff\IndexController@index')->name('backend.admin.frontdesk.staff');
        Route::get('staff/create', 'Backend\Admin\Frontdesk\Staff\IndexController@create')->name('backend.admin.frontdesk.staff.create');
        Route::post('staff/store', 'Backend\Admin\Frontdesk\Staff\IndexController@store')->name('backend.admin.frontdesk.staff.store');
        Route::get('staff/{id}/edit', 'Backend\Admin\Frontdesk\Staff\IndexController@edit')->name('backend.admin.frontdesk.staff.edit');
        Route::post('staff/{id}/update', 'Backend\Admin\Frontdesk\Staff\IndexController@update')->name('backend.admin.frontdesk.staff.update');
        Route::get('staff/{id}/delete', 'Backend\Admin\Frontdesk\Staff\IndexController@delete')->name('backend.admin.frontdesk.staff.delete');
        /*@end*/
    });

	/*Guest Information*/
	Route::get('guest','Backend\Admin\Frontdesk\Guest\IndexController@index')->name('backend.admin.frontdesk.guest');
	Route::get('guest/create','Backend\Admin\Frontdesk\Guest\IndexController@create')->name('backend.admin.frontdesk.guest.create');
	Route::post('guest/store','Backend\Admin\Frontdesk\Guest\IndexController@store')->name('backend.admin.frontdesk.guest.store');
	Route::get('guest/{id}/view','Backend\Admin\Frontdesk\Guest\IndexController@view')->name('backend.admin.frontdesk.guest.view');
	Route::post('guest/{id}/update','Backend\Admin\Frontdesk\Guest\IndexController@update')->name('backend.admin.frontdesk.guest.update');
	Route::get('guest/{id}/delete','Backend\Admin\Frontdesk\Guest\IndexController@delete')->name('backend.admin.frontdesk.guest.delete');
	
	/*Reservation*/	
	/*New Route Code @start*/
	Route::get('reservations/{booking_type?}', 'Backend\Admin\Frontdesk\Reservation\IndexController@index')->name('backend.admin.frontdesk.reservation');
	Route::get('reservation/create', 'Backend\Admin\Frontdesk\Reservation\IndexController@create')->name('backend.admin.frontdesk.reservation.create');
	Route::get('reservation/{id}/view', 'Backend\Admin\Frontdesk\Reservation\IndexController@view')->name('backend.admin.frontdesk.reservation.view');
	Route::post('reservation/{id}/view', 'Backend\Admin\Frontdesk\Reservation\IndexController@view')->name('backend.admin.frontdesk.reservation.view');
	/*@end*/
	
	
	Route::post('reservation/store', 'Backend\Admin\Frontdesk\Reservation\IndexController@store')->name('backend.admin.reservation.store');
	// Route::get('reservation/{id}/confirm', 'Backend\Admin\ReservationController@confirm')->name('backend.admin.reservation.confirm');
	// Route::post('reservation/{id}/confirm-post', 'Backend\Admin\ReservationController@confirmPost')->name('backend.admin.reservation.confirm_post');
	// Route::get('reservation/{id}/change-status/{status}', 'Backend\Admin\ReservationController@changeStatus')->name('backend.admin.reservation.change_status');
	// Route::post('reservation/{id}/payment', 'Backend\Admin\ReservationController@payment')->name('backend.admin.reservation.payment');
	// Route::post('reservation/{id}/add_service', 'Backend\Admin\ReservationController@addService')->name('backend.admin.reservation.add_service');
	// Route::post('reservation/{id}/remove_service', 'Backend\Admin\ReservationController@removeService')->name('backend.admin.reservation.remove_service');
	// Route::post('reservation/{id}/cancel_room', 'Backend\Admin\ReservationController@cancelRoom')->name('backend.admin.reservation.cancel_room');
	// Route::post('reservation/{id}/change_room', 'Backend\Admin\ReservationController@changeRoom')->name('backend.admin.reservation.change_room');

	Route::get('reservation/get-room-type-details','Backend\Admin\ReservationController@getRoomTypeDetails')->name('backend.admin.reservation.get_room_type_details');
	Route::get('reservation/get-night-calculation','Backend\Admin\ReservationController@getNightCalculation')->name('backend.admin.reservation.get_night_calculation');
	Route::get('reservation/get-checkout-available-date','Backend\Admin\ReservationController@getCheckOutAvailableDate')->name('backend.admin.reservation.get_checkout_available_date');
	Route::get('reservation/apply-coupon','Backend\Admin\ReservationController@applyCoupon')->name('backend.admin.reservation.apply_coupon');

	/*******************Payment*********************/
	Route::get('gateway/{type?}', 'Backend\Admin\Frontdesk\PaymentSetting\GatewayController@index')->name('backend.admin.frontdesk.payment_setting.gateway');
	Route::post('gatewayListUpdate/{id}', 'Backend\Admin\Frontdesk\PaymentSetting\GatewayController@update')->name('gateway.list.update');
	Route::post('gateway-store', 'Backend\Admin\Frontdesk\PaymentSetting\GatewayController@store')->name('gateway.list.store');
	Route::get('payment-log/{id?}', 'Backend\Admin\Frontdesk\PaymentSetting\GatewayController@paymentLog')->name('backend.admin.frontdesk.payment_setting.payment_log');
	
	// Route::group(['middleware' => 'permission:admin'],function () {
	Route::group([],function () {
		////////////////////Setting////////////////////////////////
		Route::get('general-settings', 'Backend\Admin\Frontdesk\GeneralSetting\IndexController@index')->name('backend.admin.frontdesk.general_settings');
		Route::post('general-settings', 'Backend\Admin\Frontdesk\GeneralSetting\IndexController@generalSettingUpdate')->name('backend.admin.general_setting.update');

		Route::get('email-setting', 'Backend\Admin\Frontdesk\GeneralSetting\IndexController@emailSetting')->name('backend.admin.email_setting');
		Route::post('email-setting', 'Backend\Admin\Frontdesk\GeneralSetting\IndexController@emailSettingUpdate')->name('backend.admin.email_setting.update');
		
		Route::get('sms-setting', 'Backend\Admin\Frontdesk\GeneralSetting\IndexController@smsSetting')->name('backend.admin.frontdesk.general-setting.sms_setting');
		Route::post('sms-setting', 'Backend\Admin\Frontdesk\GeneralSetting\IndexController@smsSettingUpdate')->name('backend.admin.sms_setting.update');
		
		Route::get('logo-and-fav-setting', 'Backend\Admin\Frontdesk\GeneralSetting\IndexController@logoAndFavicon')->name('backend.admin.frontdesk.general-setting.logo_and_fav_setting');
		Route::post('logo-and-fav-setting', 'Backend\Admin\Frontdesk\GeneralSetting\IndexController@logoAndFaviconUpdate')->name('backend.admin.logo_and_fav_setting.update');

		/*************Blogs*************/
		Route::get('/blog/category','Backend\Admin\Frontdesk\WebsiteSetting\PostController@category')->name('backend.admin.frontdesk.website_setting.blog.category');		
		Route::get('/blog/category/create','Backend\Admin\Frontdesk\WebsiteSetting\PostController@createCategory')->name('backend.admin.frontdesk.website_setting.blog.category.create');		
		Route::post('/blog/category/create','Backend\Admin\Frontdesk\WebsiteSetting\PostController@createCategory')->name('backend.admin.frontdesk.website_setting.blog.category.create');		
		Route::get('/blog/category/update/{id}', 'Backend\Admin\Frontdesk\WebsiteSetting\PostController@UpdateCategory')->name('backend.admin.frontdesk.website_setting.blog.category.edit');
		Route::post('/blog/category/update/{id}', 'Backend\Admin\Frontdesk\WebsiteSetting\PostController@UpdateCategory')->name('backend.admin.frontdesk.website_setting.blog.category.edit');
		Route::get('/blog/category/delete/{id}', 'Backend\Admin\Frontdesk\WebsiteSetting\PostController@DeleteCategory')->name('backend.admin.frontdesk.website_setting.blog.category.delete');		
		Route::post('/post-category', 'Backend\Admin\Frontdesk\WebsiteSetting\PostController@UpdateCategory')->name('backend.admin.frontdesk.website_setting.blog.category.update');		
		Route::get('blogs', 'Backend\Admin\Frontdesk\WebsiteSetting\PostController@index')->name('backend.admin.frontdesk.website_setting.blog');
		Route::post('blogs', 'Backend\Admin\Frontdesk\WebsiteSetting\PostController@index')->name('backend.admin.frontdesk.website_setting.blog');
		Route::get('blog/create', 'Backend\Admin\Frontdesk\WebsiteSetting\PostController@create')->name('backend.admin.frontdesk.website_setting.blog.create');
		Route::post('blog/create', 'Backend\Admin\Frontdesk\WebsiteSetting\PostController@store')->name('blog.store');
		Route::get('blog/delete/{id}', 'Backend\Admin\Frontdesk\WebsiteSetting\PostController@destroy')->name('backend.admin.frontdesk.blog.delete');
		Route::get('blog/edit/{id}', 'Backend\Admin\Frontdesk\WebsiteSetting\PostController@edit')->name('backend.admin.frontdesk.blog.edit');
		Route::post('blog/edit/{id}', 'Backend\Admin\Frontdesk\WebsiteSetting\PostController@edit')->name('backend.admin.frontdesk.blog.edit');
		Route::get('blog-update/{id}', 'Backend\Admin\Frontdesk\WebsiteSetting\PostController@updatePost')->name('blog.update');
		Route::post('blog-update/{id}', 'Backend\Admin\Frontdesk\WebsiteSetting\PostController@updatePost')->name('blog.update');

		/*Web Setting*/
		// Route::get('/web-setting/{page}/{section}','Backend\Admin\WebSettingController@sectionEdit')->name('admin.web_setting.section');
		// Route::post('/web-setting/{page}/{section}','Backend\Admin\WebSettingController@sectionUpdate')->name('admin.web_setting.section.store');
		/***************** Home ********************/ 
		Route::get('/website-setting/home','Backend\Admin\Frontdesk\WebsiteSetting\IndexController@home')->name('backend.admin.frontdesk.website_setting.home');
		Route::post('/website-setting/home','Backend\Admin\Frontdesk\WebsiteSetting\IndexController@home')->name('backend.admin.frontdesk.website_setting.home.update');
		
		Route::get('/website-setting/contact','Backend\Admin\Frontdesk\WebsiteSetting\IndexController@contact')->name('backend.admin.frontdesk.website_setting.contact');
		Route::post('/website-setting/contact','Backend\Admin\Frontdesk\WebsiteSetting\IndexController@contact')->name('backend.admin.frontdesk.website_setting.contact');	
		
		Route::get('/website-setting/footer','Backend\Admin\Frontdesk\WebsiteSetting\IndexController@footer')->name('backend.admin.frontdesk.website_setting.footer');
		Route::post('/website-setting/footer','Backend\Admin\Frontdesk\WebsiteSetting\IndexController@footer')->name('backend.admin.frontdesk.website_setting.footer');
		
		Route::get('/website-setting/fb','Backend\Admin\Frontdesk\WebsiteSetting\IndexController@fbComment')->name('backend.admin.frontdesk.website_setting.fb');
		Route::post('/website-setting/fb','Backend\Admin\Frontdesk\WebsiteSetting\IndexController@fbComment')->name('backend.admin.frontdesk.website_setting.fb');
		
		Route::get('/website-setting/login-background','Backend\Admin\Frontdesk\WebsiteSetting\IndexController@loginBackground')->name('backend.admin.frontdesk.website_setting.login-bg');
		
		Route::get('/website-setting/gallery','Backend\Admin\Frontdesk\WebsiteSetting\GalleryController@index')->name('backend.admin.frontdesk.website_setting.gallery');
		Route::post('/website-setting/gallery','Backend\Admin\Frontdesk\WebsiteSetting\GalleryController@index')->name('backend.admin.frontdesk.website_setting.gallery');
		
		Route::get('/website-setting/gallery/create','Backend\Admin\Frontdesk\WebsiteSetting\GalleryController@create')->name('backend.admin.frontdesk.website_setting.gallery.create');
		
		Route::get('/website-setting/gallery-category','Backend\Admin\Frontdesk\WebsiteSetting\GalleryController@galleryCategory')->name('backend.admin.frontdesk.website_setting.gallery.category');		
		
		Route::get('/website-setting/gallery-category-add','Backend\Admin\Frontdesk\WebsiteSetting\GalleryController@galleryCategoryAdd')->name('backend.admin.frontdesk.website_setting.gallery.category.create');
		
		/**************Social Links**********************/			
		Route::get('/website-setting/social-links','Backend\Admin\Frontdesk\WebsiteSetting\SocialController@index')->name('backend.admin.frontdesk.website_setting.social');
		Route::get('/website-setting/social-link/create','Backend\Admin\Frontdesk\WebsiteSetting\SocialController@create')->name('backend.admin.frontdesk.website_setting.social.create');	
		Route::post('/website-setting/social-link/create','Backend\Admin\Frontdesk\WebsiteSetting\SocialController@create')->name('backend.admin.frontdesk.website_setting.social.create');			
		Route::get('/website-setting/social-link/edit/{id}','Backend\Admin\Frontdesk\WebsiteSetting\SocialController@update')->name('backend.admin.frontdesk.website_setting.social.update');	
		Route::post('/website-setting/social-link/edit/{id}','Backend\Admin\Frontdesk\WebsiteSetting\SocialController@update')->name('backend.admin.frontdesk.website_setting.social.update');	
		Route::get('/website-setting/social-link/delete/{id}','Backend\Admin\Frontdesk\WebsiteSetting\SocialController@delete')->name('backend.admin.frontdesk.website_setting.social.delete');
		
		/***********************FAQ*********************/
		Route::get('/website-setting/faq','Backend\Admin\Frontdesk\WebsiteSetting\FaqController@index')->name('backend.admin.frontdesk.website_setting.faq');		
		Route::post('/website-setting/faq','Backend\Admin\Frontdesk\WebsiteSetting\FaqController@index')->name('backend.admin.frontdesk.website_setting.faq');
		
		Route::get('/website-setting/faq/create','Backend\Admin\Frontdesk\WebsiteSetting\FaqController@create')->name('backend.admin.frontdesk.website_setting.faq.create');		
		Route::get('/website-setting/faq/store','Backend\Admin\Frontdesk\WebsiteSetting\FaqController@faqStore')->name('backend.admin.frontdesk.website_setting.store');
		Route::post('/website-setting/faq/store','Backend\Admin\Frontdesk\WebsiteSetting\FaqController@faqStore')->name('backend.admin.frontdesk.website_setting.faq.store');
		Route::get('/website-setting/faq/{id}/update','Backend\Admin\Frontdesk\WebsiteSetting\FaqController@Update')->name('backend.admin.frontdesk.website_setting.faq.update');
		Route::post('/website-setting/faq/{id}/update','Backend\Admin\Frontdesk\WebsiteSetting\FaqController@faqUpdate')->name('backend.admin.frontdesk.website_setting.faq.update');
		Route::get('/website-setting/faq/{id}/delete','Backend\Admin\Frontdesk\WebsiteSetting\FaqController@faqDelete')->name('backend.admin.frontdesk.website_setting.faq.delete');	
		

		Route::get('/website-setting/home/about','Backend\Admin\Frontdesk\WebsiteSetting\IndexController@about')->name('backend.admin.frontdesk.website_setting.home.about');	
		Route::post('/website-setting/home/about','Backend\Admin\Frontdesk\WebsiteSetting\IndexController@aboutUpdate')->name('backend.admin.frontdesk.website_setting.home.about');	
		
		Route::get('/website-setting/home/our-room','Backend\Admin\Frontdesk\WebsiteSetting\IndexController@ourRoom')->name('backend.admin.frontdesk.website_setting.home.our_room');		
		Route::post('/website-setting/home/our-room','Backend\Admin\Frontdesk\WebsiteSetting\IndexController@ourRoom')->name('backend.admin.frontdesk.website_setting.home.our_room');		
		
		Route::get('/website-setting/home/service','Backend\Admin\Frontdesk\WebsiteSetting\IndexController@service')->name('backend.admin.frontdesk.website_setting.home.service');
		Route::post('/website-setting/home/service','Backend\Admin\Frontdesk\WebsiteSetting\IndexController@service')->name('backend.admin.frontdesk.website_setting.home.service');
		
		Route::get('/website-setting/home/testimonial','Backend\Admin\Frontdesk\WebsiteSetting\IndexController@testimonial')->name('backend.admin.frontdesk.website_setting.home.testimonial');
		Route::post('/website-setting/home/testimonial','Backend\Admin\Frontdesk\WebsiteSetting\IndexController@testimonial')->name('backend.admin.frontdesk.website_setting.home.testimonial');
		
		Route::get('/website-setting/home/testimonial/add','Backend\Admin\Frontdesk\WebsiteSetting\IndexController@addTestimonial')->name('backend.admin.frontdesk.website_setting.home.testimonial.add');
		Route::post('/website-setting/home/testimonial/add','Backend\Admin\Frontdesk\WebsiteSetting\IndexController@addTestimonial')->name('backend.admin.frontdesk.website_setting.home.testimonial.add');
		Route::get('/website-setting/home/testimonial/edit/{id}','Backend\Admin\Frontdesk\WebsiteSetting\IndexController@editTestimonial')->name('backend.admin.frontdesk.website_setting.home.testimonial.edit');
		Route::post('/website-setting/home/testimonial/edit/{id}','Backend\Admin\Frontdesk\WebsiteSetting\IndexController@editTestimonial')->name('backend.admin.frontdesk.website_setting.home.testimonial.edit');		
		Route::get('/website-setting/home/testimonial/delete/{id}','Backend\Admin\Frontdesk\WebsiteSetting\IndexController@deleteTestimonial')->name('backend.admin.frontdesk.website_setting.home.testimonial.delete');
		Route::get('/website-setting/home/video','Backend\Admin\Frontdesk\WebsiteSetting\IndexController@video')->name('backend.admin.frontdesk.website_setting.home.video');
		Route::post('/website-setting/home/video','Backend\Admin\Frontdesk\WebsiteSetting\IndexController@video')->name('backend.admin.frontdesk.website_setting.home.video');
		
		/***********************Facility**************************/
		Route::get('/website-setting/home/facility','Backend\Admin\Frontdesk\WebsiteSetting\IndexController@ourFacility')->name('backend.admin.frontdesk.website_setting.home.facility');
		Route::post('/website-setting/home/facility','Backend\Admin\Frontdesk\WebsiteSetting\IndexController@ourFacility')->name('backend.admin.frontdesk.website_setting.home.facility');		
		Route::get('/website-setting/home/facility/add','Backend\Admin\Frontdesk\WebsiteSetting\IndexController@addFacility')->name('backend.admin.frontdesk.website_setting.home.facility.add');
		Route::post('/website-setting/home/facility/add','Backend\Admin\Frontdesk\WebsiteSetting\IndexController@addFacility')->name('backend.admin.frontdesk.website_setting.home.facility.add');
		Route::get('/website-setting/home/facility/edit/{id}','Backend\Admin\Frontdesk\WebsiteSetting\IndexController@editFacility')->name('backend.admin.frontdesk.website_setting.home.facility.edit');
		Route::post('/website-setting/home/facility/edit/{id}','Backend\Admin\Frontdesk\WebsiteSetting\IndexController@editFacility')->name('backend.admin.frontdesk.website_setting.home.facility.edit');
		Route::get('/website-setting/home/facility/delete/{id}','Backend\Admin\Frontdesk\WebsiteSetting\IndexController@deleteFacility')->name('backend.admin.frontdesk.website_setting.home.facility.delete');
		
		
		Route::get('/website-setting/home/counter','Backend\Admin\Frontdesk\WebsiteSetting\IndexController@counter')->name('backend.admin.frontdesk.website_setting.home.counter');	

		Route::get('/website-setting/home/counter/add','Backend\Admin\Frontdesk\WebsiteSetting\IndexController@addCounter')->name('backend.admin.frontdesk.website_setting.home.counter.add');		
		Route::post('/website-setting/home/counter/add','Backend\Admin\Frontdesk\WebsiteSetting\IndexController@addCounter')->name('backend.admin.frontdesk.website_setting.home.counter.add');		
		Route::get('/website-setting/home/counter/edit/{id}','Backend\Admin\Frontdesk\WebsiteSetting\IndexController@editCounter')->name('backend.admin.frontdesk.website_setting.home.counter.edit');		
		Route::post('/website-setting/home/counter/edit/{id}','Backend\Admin\Frontdesk\WebsiteSetting\IndexController@editCounter')->name('backend.admin.frontdesk.website_setting.home.counter.edit');		
		Route::get('/website-setting/home/counter/delete/{id}','Backend\Admin\Frontdesk\WebsiteSetting\IndexController@deleteCounter')->name('backend.admin.frontdesk.website_setting.home.counter.delete');		

		Route::get('/website-setting/home/team','Backend\Admin\Frontdesk\WebsiteSetting\IndexController@team')->name('backend.admin.frontdesk.website_setting.home.team');	
		Route::post('/website-setting/home/team','Backend\Admin\Frontdesk\WebsiteSetting\IndexController@team')->name('backend.admin.frontdesk.website_setting.home.team');	
		
		Route::get('/website-setting/home/team/edit/{id}','Backend\Admin\Frontdesk\WebsiteSetting\IndexController@editTeam')->name('backend.admin.frontdesk.website_setting.home.team.edit_team');	
		Route::post('/website-setting/home/team/edit/{id}','Backend\Admin\Frontdesk\WebsiteSetting\IndexController@editTeam')->name('backend.admin.frontdesk.website_setting.home.team.edit_team');	
		Route::get('/website-setting/home/team/delete/{id}','Backend\Admin\Frontdesk\WebsiteSetting\IndexController@deleteTeam')->name('backend.admin.frontdesk.website_setting.home.team.delete_team');	

		
		
	 	// Route::post('/web-settings/home/team/store','Backend\Admin\WebSettingController@teamStore')->name('admin.web_setting.home.team.store');
		// Route::post('/web-settings/home/team/{id}/update','Backend\Admin\WebSettingController@teamUpdate')->name('admin.web_setting.home.team.update');
		// Route::post('/web-settings/home/team/{id}/delete','Backend\Admin\WebSettingController@teamDelete')->name('admin.web_setting.home.team.delete'); 
		///////Category
		Route::post('/web-settings/gallery/category/store','Backend\Admin\Frontdesk\WebsiteSetting\GalleryController@galleryCategoryStore')->name('admin.web_setting.gallery.category.store');
		Route::get('/web-settings/gallery/category/{id}/update','Backend\Admin\Frontdesk\WebsiteSetting\GalleryController@galleryCategoryUpdate')->name('admin.web_setting.gallery.category.update');
		Route::post('/web-settings/gallery/category/{id}/update','Backend\Admin\Frontdesk\WebsiteSetting\GalleryController@galleryCategoryUpdate')->name('admin.web_setting.gallery.category.update');
		Route::get('/web-settings/gallery/category/{id}/delete','Backend\Admin\Frontdesk\WebsiteSetting\GalleryController@galleryCategoryDelete')->name('admin.web_setting.gallery.category.delete');
		///////gallery Section
		Route::post('/web-settings/gallery/gallery-section/store','Backend\Admin\Frontdesk\WebsiteSetting\GalleryController@galleryStore')->name('admin.web_setting.gallery.gallery-section.store');
		Route::get('/web-settings/gallery/gallery-section/{id}/update','Backend\Admin\Frontdesk\WebsiteSetting\GalleryController@galleryUpdate')->name('admin.web_setting.gallery.gallery-section.update');
		Route::post('/web-settings/gallery/gallery-section/{id}/update','Backend\Admin\Frontdesk\WebsiteSetting\GalleryController@galleryUpdate')->name('admin.web_setting.gallery.gallery-section.update');
		Route::get('/web-settings/gallery/gallery-section/{id}/delete','Backend\Admin\Frontdesk\WebsiteSetting\GalleryController@galleryDelete')->name('admin.web_setting.gallery.gallery-section.delete');
		///////Counter Section
	 	// Route::post('/web-settings/home/counter-section/store','Backend\Admin\WebSettingController@counterStore')->name('admin.web_setting.home.counter-section.store');
		// Route::post('/web-settings/home/counter-section/{id}/update','Backend\Admin\WebSettingController@counterUpdate')->name('admin.web_setting.home.counter-section.update');
		// Route::post('/web-settings/home/counter-section/{id}/delete','Backend\Admin\WebSettingController@counterDelete')->name('admin.web_setting.home.counter-section.delete');
		// ///////Testimonial Section
		// Route::post('/web-settings/home/testimonial-section/store','Backend\Admin\WebSettingController@testimonialStore')->name('admin.web_setting.home.testimonial-section.store');
		// Route::post('/web-settings/home/testimonial-section/{id}/update','Backend\Admin\WebSettingController@testimonialUpdate')->name('admin.web_setting.home.testimonial-section.update');
		// Route::post('/web-settings/home/testimonial-section/{id}/delete','Backend\Admin\WebSettingController@testimonialDelete')->name('admin.web_setting.home.testimonial-section.delete');
		// ///////Social Link
		// Route::post('/web-settings/social/store','Backend\Admin\WebSettingController@socialStore')->name('admin.web_setting.social.store');
	 	// Route::post('/web-settings/social/{id}/update','Backend\Admin\WebSettingController@socialUpdate')->name('admin.web_setting.social.update');
	 	// Route::post('/web-settings/social/{id}/delete','Backend\Admin\WebSettingController@socialDelete')->name('admin.web_setting.social.delete');	
     });
	});