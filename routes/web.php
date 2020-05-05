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
Route::get('/dashboard', 'DashboardController@index')->name('dashboard');
Route::get('/commpany-profile', 'PageController@companyProfile')->name('company_profile');
Route::get('/team-of-expert', 'PageController@teamOfExpert')->name('team_of_expert');

Route::group(['as' => 'sajib.', 'prefix' => 'sajib', 'namespace' => 'Frontend'], function () {

    Route::get('/show', 'AppointmentController@show')->name('getDoctor');
    // Route::get('/getpdf', 'CartController@generatePDF')->name('getpdf');
});
Route::group(['as' => 'saiful.', 'prefix' => 'saiful', 'namespace' => 'Frontend'], function () {

    // Route::post('/pdf', 'CartController@generatePDF')->name('pdf');
    // Route::get('/getpdf', 'CartController@generatePDF')->name('getpdf');
});
