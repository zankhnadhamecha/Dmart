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

Route::get('/','PageController@home')->name('home');

Route::get('contact','PageController@contact')->name('contact');

Route::get('product','PageController@product')->name('product');

Route::get('category','PageController@category')->name('category');

Route::get('company','PageController@company')->name('company');

Route::get('about-us','PageController@about')->name('about');

Route::get('queries','QueryController@test');

Route::group(['prefix' => 'dmart'],function(){
	Route::get('category','QueryController@category');
	Route::get('company','QueryController@company');
	Route::get('product','QueryController@product');
});

Auth::routes();

Route::group(['middleware' => ['auth','activated']],function(){

	Route::get('dashboard', 'HomeController@index')->name('dashboard');
	Route::resource('productcategories','ProductCategoryController');
	Route::resource('productcompanies','ProductCompanyController');

});

Route::group(['prefix' => 'admin' , 'as' => 'admin.'], function () {

  Route::get('/login', 'AdminAuth\LoginController@showLoginForm')->name('login');
  Route::post('/login', 'AdminAuth\LoginController@login');
  Route::post('/logout', 'AdminAuth\LoginController@logout')->name('logout');

  // Route::get('/register', 'AdminAuth\RegisterController@showRegistrationForm')->name('register');
  // Route::post('/register', 'AdminAuth\RegisterController@register');

  Route::post('/password/email', 'AdminAuth\ForgotPasswordController@sendResetLinkEmail')->name('password.request');
  Route::post('/password/reset', 'AdminAuth\ResetPasswordController@reset')->name('password.email');
  Route::get('/password/reset', 'AdminAuth\ForgotPasswordController@showLinkRequestForm')->name('password.reset');
  Route::get('/password/reset/{token}', 'AdminAuth\ResetPasswordController@showResetForm');

});
