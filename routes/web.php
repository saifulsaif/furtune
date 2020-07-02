<?php

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

// Route::get('/', function () {
//     return view('fontend.content.index');
// });

Auth::routes();
Route::get('/', 'PageController@index')->name('home');
Route::get('/#', 'PageController@index')->name('#');
Route::get('/dashboard', 'DashboardController@index')->name('dashboard');
Route::get('/commpany-profile', 'PageController@companyProfile')->name('company_profile');
Route::get('/team-of-expert', 'PageController@teamOfExpert')->name('team_of_expert');
Route::get('/expert-details/{id}', 'PageController@expertDetails');
Route::get('/CSR', 'PageController@csr')->name('csr');
Route::get('/service/{id}', 'PageController@service');
Route::get('/package-details/{id}', 'PageController@packageDetails');
Route::get('/home-collection', 'PageController@homeCollection')->name('home_collection');
Route::get('/health-package', 'PageController@healthPackage')->name('health_package');
Route::get('/health-check-tests', 'PageController@health_check')->name('health_check');
Route::get('/career', 'PageController@career')->name('career');
Route::get('/corporate-partner', 'PageController@corporateParter')->name('corporeate_partner');
Route::get('/franchisee', 'PageController@franchisee')->name('franchisee');
Route::post('/save-franchisee', 'PageController@saveFranchisee');
Route::get('/customer-care', 'PageController@customerCare')->name('customer_care');
Route::get('/feedback', 'PageController@feedback')->name('feedback');
Route::post('/save-feedback', 'PageController@saveFeedback');
Route::get('/meadia-and-event', 'PageController@event')->name('event');
Route::get('/privacy-and-policy', 'PageController@policy')->name('policy');
Route::get('/terms-and-conditions', 'PageController@terms')->name('terms');
Route::get('/faq', 'PageController@faq')->name('faq');
Route::get('/latest-news', 'PageController@blog')->name('blog');
Route::get('/gallery', 'PageController@gallery')->name('gallery');
Route::get('/get-in-touch', 'PageController@getInTouch')->name('get_in_touch');
Route::get('/covid-19', 'PageController@covid')->name('covid');
Route::get('/telemedicine', 'PageController@telemedicine')->name('telemedicine');


Route::post('/deleteservice', 'PageController@deleteservice')->name('deleteservice');





Route::post('/sendAppointment', 'AppointmentController@sendAppointment')->name('sendAppointment');
Route::post('/contact_us', 'AppointmentController@contact_us')->name('contact_us');

Route::group(['as' => 'fortune.', 'prefix' => 'fortune'], function () {
    Route::post('/make-appointment', 'PageController@make_an_appointment');
    Route::get('/getDoctor', 'AppointmentController@getDoctor')->name('getDoctor');
    Route::get('/getAppoinmet/{id}', 'AppointmentController@getAppoinmet')->name('getAppoinmet');
    // Route::get('/getpdf', 'CartController@generatePDF')->name('getpdf');
});
