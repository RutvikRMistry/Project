<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Route::group(['prefix'=>'/ipn','namespace'=>'Frontend'],function () {
//         //Payment IPN
//         Route::get('/ipnbtc', 'HomeController@ipnBchain')->name('ipn.bchain');
//         Route::get('/ipnblockbtc', 'HomeController@blockIpnBtc')->name('ipn.block.btc');
//         Route::get('/ipnblocklite', 'HomeController@blockIpnLite')->name('ipn.block.lite');
//         Route::get('/ipnblockdog', 'HomeController@blockIpnDog')->name('ipn.block.dog');
//         Route::post('/ipnpaypal', 'HomeController@ipnpaypal')->name('ipn.paypal');
//         Route::post('/ipnperfect', 'HomeController@ipnperfect')->name('ipn.perfect');
//         Route::post('/ipnstripe', 'HomeController@ipnstripe')->name('ipn.stripe');
//         Route::post('/ipnskrill', 'HomeController@skrillIPN')->name('ipn.skrill');
//         Route::post('/ipncoinpaybtc', 'HomeController@ipnCoinPayBtc')->name('ipn.coinPay.btc');
//         Route::post('/ipncoinpayeth', 'HomeController@ipnCoinPayEth')->name('ipn.coinPay.eth');
//         Route::post('/ipncoinpaybch', 'HomeController@ipnCoinPayBch')->name('ipn.coinPay.bch');
//         Route::post('/ipncoinpaydash', 'HomeController@ipnCoinPayDash')->name('ipn.coinPay.dash');
//         Route::post('/ipncoinpaydoge', 'HomeController@ipnCoinPayDoge')->name('ipn.coinPay.doge');
//         Route::post('/ipncoinpayltc', 'HomeController@ipnCoinPayLtc')->name('ipn.coinPay.ltc');
//         Route::post('/ipncoin', 'HomeController@ipnCoin')->name('ipn.coinpay');
//         Route::post('/ipncoingate', 'HomeController@ipnCoinGate')->name('ipn.coingate');

//         Route::post('/ipnpaytm', 'HomeController@ipnPayTm')->name('ipn.paytm');
//         Route::post('/ipnpayeer', 'HomeController@ipnPayEer')->name('ipn.payeer');
//         Route::post('/ipnpaystack', 'HomeController@ipnPayStack')->name('ipn.paystack');
//         Route::post('/ipnvoguepay', 'HomeController@ipnVoguePay')->name('ipn.voguepay');
//     });

// Route::get('/', 'Frontend\HomeController@index')->name('home');
// Route::get('/room-list', 'Frontend\HomeController@roomList')->name('room-list');
// Route::get('/room-details/{id}', 'Frontend\HomeController@roomDetails')->name('room_details');
// Route::get('/room-details/{id}/check-available', 'Frontend\HomeController@checkAvailableRoom')->name('check_available_room');
// Route::post('/booking/{id}', 'Frontend\HomeController@booking')->name('booking');
// Route::get('/checkout', 'Frontend\HomeController@checkout')->name('checkout');
// Route::get('/confirm-checkout', 'Frontend\HomeController@confirmCheckout')->name('confirm-checkout');
// Route::post('/apply-coupon', 'Frontend\HomeController@applyCoupon')->name('apply-coupon');
// Route::get('/select-gateway', 'Frontend\HomeController@selectGateway')->name('select_gateway');
// Route::get('/insert-reservation/{gateway_id}', 'Frontend\HomeController@insertReservation')->name('insert_reservation');
// Route::get('/payment-preview', 'Frontend\HomeController@paymentPreview')->name('payment.preview');

// //payment
// Route::post('payment/confirm', 'Frontend\HomeController@paymentConfirm')->name('payment.confirm');
// Route::get('reservation/success', 'Frontend\HomeController@reservationSuccess')->name('reservation.success');




// Route::get('/blog/{cat_id?}', 'Frontend\HomeController@blog')->name('blog');
// Route::get('/blog/{id}/{slug}', 'Frontend\HomeController@blogDetails')->name('blog-details');
// Route::get('/about', 'Frontend\HomeController@about')->name('about');
// Route::get('/gallery', 'Frontend\HomeController@gallery')->name('gallery');
// Route::get('/faq', 'Frontend\HomeController@faq')->name('faq');
// Route::get('/contact', 'Frontend\HomeController@contact')->name('contact');
// Route::post('/contact','Frontend\HomeController@contactSubmit')->name('contact.submit');

Route::group(['middleware'=>'guest'],function(){
    //backend
    Route::get('admin','Backend\Auth\LoginController@showLoginForm')->name('admin.login');
    Route::post('admin/login','Backend\Auth\LoginController@login')->name('admin.login.post');
    Route::post('admin/logout', 'Backend\Auth\LoginController@logout')->name('admin.logout');

});
