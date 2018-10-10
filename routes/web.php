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

use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return view('welcome');

});
//Route::get('/admin',function (){
//
//    return view('admin/create');
//});


Auth::routes();
Route::group(['middleware'=>'auth'],function(){
    Route::get('/home', 'HomeController@index')->name('home');
    Route::get('logout','\App\Http\Controllers\Auth\LoginController@logout');
    Route::get('/add-sheet', 'SalaryController@index')->name('index');
    Route::get('/employee','SalaryController@show');
    Route::post('import', 'SalaryController@import')->name('import');
    Route::get('/salary/{id}','SalaryController@salary');
    Route::get('/add_employee','EmployeeController@index');
    Route::post('/add_employee/create','EmployeeController@create');
});
