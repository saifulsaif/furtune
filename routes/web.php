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
Route::get('/', 'PageController@index');
Route::get('/#', 'PageController@index')->name('#');
Route::get('/dashboard', 'DashboardController@index')->name('dashboard');
Route::get('/commpany-profile', 'PageController@companyProfile')->name('company_profile');
Route::get('/team-of-expert', 'PageController@teamOfExpert')->name('team_of_expert');
Route::get('/CSR', 'PageController@csr')->name('csr');
Route::get('/service/{id}', 'PageController@service');
Route::get('/package-details/{id}', 'PageController@packageDetails');
Route::get('/home-collection', 'PageController@homeCollection')->name('home_collection');
Route::get('/health-package', 'PageController@healthPackage')->name('health_package');
Route::get('/career', 'PageController@career')->name('career');
Route::get('/corporate-partner', 'PageController@corporateParter')->name('corporeate_partner');
Route::get('/franchisee', 'PageController@franchisee')->name('franchisee');
Route::post('/save-franchisee', 'PageController@saveFranchisee');
Route::get('/customer-care', 'PageController@customerCare')->name('customer_care');
Route::get('/feedback', 'PageController@feedback')->name('feedback');
Route::post('/save-feedback', 'PageController@saveFeedback');

Route::get('/get-in-touch', 'PageController@getInTouch')->name('get_in_touch');
Route::get('/faq', 'PageController@faq')->name('faq');




Route::group(['as' => 'fortune.', 'prefix' => 'sajib'], function () {

    Route::get('/getDoctor', 'AppointmentController@getDoctor')->name('getDoctor');
    Route::get('/getAppoinmet/{id}', 'AppointmentController@getAppoinmet')->name('getAppoinmet');
    Route::post('/sendAppointment', 'AppointmentController@sendAppointment')->name('sendAppointment');
    // Route::get('/getpdf', 'CartController@generatePDF')->name('getpdf');
});
Route::group(['as' => 'saiful.', 'prefix' => 'saiful', 'namespace' => 'Frontend'], function () {


});
