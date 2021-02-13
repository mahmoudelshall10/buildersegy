<?php
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
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

    Route::get('about', 'HomeController@about');
    Route::get('builders-story', 'HomeController@buildersStory');

    Route::get('builders-story-single/{id}', 'HomeController@buildersStorySingle');
    Route::get('contact', 'HomeController@contact');
    Route::get('consultancy', 'HomeController@consultancy');
    Route::get('bspyl-about', 'HomeController@BSPYL_About');
    Route::get('bspyl-stages', 'HomeController@BSPYL_Stages');
    Route::get('bspyl-home', 'HomeController@BSPYL_Home');
    Route::get('training', 'HomeController@training');
    Route::get('iso-accreditation', 'HomeController@isoAccreditation');


    Route::get('contact', 'ClientFeedBackController@index');
    Route::post('contact', 'ClientFeedBackController@store');


    Route::get('index', 'ConsultationController@index');
    Route::post('index', 'ConsultationController@store');

    Route::get('/', 'ConsultationController@index');

    Route::get('/bspyl-form', 'BspylController@index');
    Route::post('/bspyl-form', 'BspylController@store');


//     Auth::routes();

   Route::get('admin/login', 'Admin\Auth\LoginController@showLoginForm')->name('login');
   Route::post('admin/login', 'Admin\Auth\LoginController@login');
   Route::post('admin/logout', 'Admin\Auth\LoginController@logout')->name('logout');
        

    Route::get('admin', 'Admin\AdminController@index')->name('admin.index');
    Route::resource('admin/numbers', 'Admin\NumberController');
    Route::resource('admin/bspyl', 'Admin\BspylController');


    Route::get('admin/users', 'Admin\UserController@index')->name('admin.users');

    Route::group(['middleware' => ['userAuth']], function () {
            Route::get('admin/users/create', 'Admin\UserController@create');
            Route::post('admin/users', 'Admin\UserController@store');
            Route::get('admin/users/profile', 'Admin\UserController@profile');
            Route::post('admin/users/profile', 'Admin\UserController@update_photo');
            Route::delete('admin/users/{id}','Admin\UserController@destroy');
    }); 


    Route::resource('admin/clientfeedbacks', 'Admin\ClientFeedBackController');
    Route::get('admin/clientfeedbacks/unactive-clientfeedbacks/{id}','Admin\ClientFeedBackController@unactive_feedback');
    Route::get('admin/clientfeedbacks/active-clientfeedbacks/{id}','Admin\ClientFeedBackController@active_feedback');
    Route::resource('admin/consultations', 'Admin\ConsultationController');
    Route::resource('admin/consultancies', 'Admin\ConsultancyController');
    Route::resource('admin/team_members', 'Admin\TeamController');
    Route::resource('admin/trainings', 'Admin\TrainingController');
    Route::resource('admin/stories', 'Admin\StoryController');
    Route::resource('admin/partners', 'Admin\PartnerController');  
    