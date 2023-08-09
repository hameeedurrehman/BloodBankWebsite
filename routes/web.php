<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Mail;
use App\Mail\form_mail;
use App\Http\Controllers\mailController;
use App\Http\Controllers\donor_controller;
use App\Http\Controllers\CityController;
use App\Http\Controllers\FileController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
// Route::get('donor/main', 'App\http\Controllers\donor_controller@main');

Route::get('donor/main', [App\Http\Controllers\donor_controller::class, 'index']);

Route::get('donor/create', 'App\Http\Controllers\donor_controller@create')->name('donor.create');
Route::post('donor/store', 'App\Http\Controllers\donor_controller@store')->name('donor.store');


Route::get('donor/read', 'App\Http\Controllers\donor_controller@read')->name('donor.read');
Route::get('donor/edit/{cnic}', 'App\Http\Controllers\donor_controller@edit')->name('donor.edit');
Route::post('donor/update/{cnic}', 'App\Http\Controllers\donor_controller@update')->name('donor.update');
Route::get('donor/delete/{cnic}', 'App\Http\Controllers\donor_controller@delete')->name('donor.delete');


//city routes
Route::get('city/create', 'App\Http\Controllers\CityController@create')->name('city.create');
Route::post('city/store', 'App\Http\Controllers\CityController@store')->name('city.store');
Route::get('city/read', 'App\Http\Controllers\CityController@read')->name('city.read');


// blood group routes 
Route::get('bloodgroup/create', 'App\Http\Controllers\BloodgroupController@create')->name('bloodgroup.create');
Route::post('bloodgroup/store', 'App\Http\Controllers\BloodgroupController@store')->name('bloodgroup.store');
Route::get('bloodgroup/read', 'App\Http\Controllers\BloodgroupController@read')->name('bloodgroup.read');


// hospital routes
Route::get('hospital/create', 'App\Http\Controllers\HospitalController@create')->name('hospital.create');
Route::post('hospital/store', 'App\Http\Controllers\HospitalController@store')->name('hospital.store');
Route::get('hospital/read', 'App\Http\Controllers\HospitalController@read')->name('hospital.read');
// blood group routes 
// mail routes
// Route::get('/send_mail', function(){ 
//     Mail::to('hameedurrehman35@gmail.com') 
//     ->send(new form_mail()); 
// });


// mail form route
Route::get('/mail_form', [mailController::class, 'open_form' ]) ->name('mail_form');
Route::post('/send_mail', [mailController::class, 'send_mail']) ->name('send_mail');


// file routes
Route::get('/file_upload', [FileController::class, 'open_file_form']);
Route::post('/file_store', [FileController::class, 'store_file']);
Route::get('/show_data', [FileController::class, 'show_file_data']);
Route::get('/view_file/{id}',[FileController::class, 'file_view']);
Route::get('/download_file/{file}', [FileController::class, 'file_download']);

// Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
