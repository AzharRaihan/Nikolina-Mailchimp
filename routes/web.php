<?php

use Illuminate\Support\Facades\Auth;
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


Auth::routes();
//Frontend Routes
Route::get('/','Frontend\WebController@index')->name('index');
Route::post('/contact/store','Frontend\WebController@contactStore')->name('contact.store');
Route::get('/contact','Frontend\WebController@contact')->name('contact');
Route::get('/courses','Frontend\WebController@courses')->name('courses');
Route::get('/games','Frontend\WebController@games')->name('games');
Route::get('/games2','Frontend\WebController@games2')->name('games2');
Route::get('/games3','Frontend\WebController@games3')->name('games3');
Route::get('/podcast','Frontend\WebController@podcast')->name('podcast');
Route::get('/speaking','Frontend\WebController@speaking')->name('speaking');
// Route::post('/subscriber/store','Frontend\WebController@subscriberStore')->name('subscriber.store');

Route::post('/subscriber/store', function () {
    $email = request('email');
    Newsletter::subscribe($email);
    notify()->success("Subscribed successful","Success");
    return redirect()->back();
})->name('subscriber.store');


Route::post('/lets/talk/store','Frontend\WebController@letsTalkStore')->name('lets.talk.store');

//Backend Routes
Route::group(['as'=>'admin.','prefix'=>'admin','namespace'=>'Backend','middleware'=>['auth','admin']], function (){
    // Admin Dashboard and profile settings route
    Route::get('dashboard','AdminDashboardController@dashboard')->name('dashboard');
    Route::get('account-setting','AccountSettingController@accountSetting')->name('account.setting');
    Route::put('account-update','AccountSettingController@accountUpdate')->name('account.update');
    Route::put('password-update','AccountSettingController@passwordUpdate')->name('password.update');
    // Contact-Us Lists 
    Route::resource('contact', 'ContactUsController');
    Route::resource('subscribers', 'SubscribersController');
    Route::resource('lets-talk', 'LetsTalkController');
});
//User Or Author Routes
Route::group(['as'=>'author.','prefix'=>'author','namespace'=>'Author','middleware'=>['auth','author']], function (){
    Route::get('dashboard','AuthorDashboardController@dashboard')->name('dashboard');
});


