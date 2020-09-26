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
    return view('admin.login');
});
Route::group(['middleware'=>'prevent-back-history'],function(){
Auth::routes();
Route::get('/admin/dashboard','UserController@dashboard');
Route::get('admin/employee','EmployeeController@getEmployeeDetails');
Route::get('/user/changestatus/{id}','UserController@userChangeStatus');
Route::get('employee/changestatus/{id}','EmployeeController@changestatus');
});
Route::get('/admin/user','UserController@viewUser');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/logout','UserController@logout');
Route::match(['get','post'],'/register','UserController@register');
Route::match(['get','post'],'/login','UserController@login');
