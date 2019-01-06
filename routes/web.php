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

//Route::get('/', function () {
//    return view('welcome');
//});

Auth::routes();
Route::get('/', 'MainController@index')->name('main');

//Route::get('/home', 'HomeController@index')->name('home');
Route::get('/about-us', 'MainController@about')->name('about');
Route::get('/news', 'MainController@news')->name('news');
Route::get('/services', 'MainController@services')->name('services');
Route::get('/contacts', 'MainController@contacts')->name('contacts');

//Route::group(['prefix' => 'admin','namespace' => 'Admin'], function () {
//    // Маршруты аутентификации...
//    Route::get('/login', 'Auth\LoginController@showLoginForm');
//    Route::post('/login', 'Auth\LoginController@login');
//    Route::get('/logout', 'Auth\LoginController@logout');
//
//    // Маршруты регистрации...
////    Route::get('/register', 'Auth\AuthController@getRegister');
////    Route::post('/register', 'Auth\AuthController@postRegister');
//});

Route::group(['prefix' => 'admin','namespace' => 'Admin', 'middleware' => ['auth','checkAdmin']], function () {

    Route::get('/', 'AdminController@index')->name('admin');
    Route::get('/info', 'AdminController@info')->name('admin.info');
    Route::post('/info', 'AdminController@info')->name('admin.info.post');

    Route::get('/news', 'AdminController@news')->name('admin.news');
    Route::get('/news/create', 'AdminController@newsCreate')->name('admin.news.create');
    Route::post('/news/create', 'AdminController@newsCreate')->name('admin.news.create.post');
    Route::get('/news/edit/{id}', 'AdminController@newsEdit');
    Route::post('/news/edit/{id}', 'AdminController@newsEdit');
    Route::get('/news/delete/{id}', 'AdminController@newsDelete');

    Route::get('/services', 'AdminController@services')->name('admin.services');
    Route::get('/services/create', 'AdminController@serviceCreate')->name('admin.service.create');
    Route::post('/services/create', 'AdminController@serviceCreate')->name('admin.service.create.post');
    Route::get('/services/edit/{id}', 'AdminController@serviceEdit');
    Route::post('/services/edit/{id}', 'AdminController@serviceEdit');
    Route::get('/services/delete/{id}', 'AdminController@serviceDelete');

    Route::get('/prices', 'AdminController@prices')->name('admin.prices');
    Route::post('/prices', 'AdminController@prices')->name('admin.prices.post');

    Route::get('/pages', 'AdminController@pages')->name('admin.pages');
    Route::get('/pages/create', 'AdminController@pageCreate')->name('admin.pages.create');
    Route::post('/pages/create', 'AdminController@pageCreate')->name('admin.pages.create.post');
    Route::get('/pages/edit/{id}', 'AdminController@pageEdit');
    Route::post('/pages/edit/{id}', 'AdminController@pageEdit');
    Route::get('/pages/delete/{id}', 'AdminController@pageDelete');

    Route::get('/doctors', 'AdminController@doctors')->name('admin.doctors');
    Route::get('/doctors/create', 'AdminController@doctorCreate')->name('admin.doctor.create');
    Route::post('/doctors/create', 'AdminController@doctorCreate')->name('admin.doctor.create.post');
    Route::get('/doctors/edit/{id}', 'AdminController@doctorEdit');
    Route::post('/doctors/edit/{id}', 'AdminController@doctorEdit');
    Route::get('/doctors/delete/{id}', 'AdminController@doctorDelete');

    Route::get('/gallery', 'AdminController@gallery')->name('admin.gallery');
    Route::get('/feedback', 'AdminController@feedback')->name('admin.feedback');
    Route::get('/licenses', 'AdminController@licenses')->name('admin.licenses');

});
