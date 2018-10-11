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
    Route::get('logout','\App\Http\Controllers\Auth\LoginController@logout');
});

Route::group(['middleware'=>['auth','admin']],function (){

    Route::get('/admin/dashboard', 'HomeController@index')->name('home');
    Route::get('/add-sheet', 'SalaryController@index')->name('index');
    Route::get('/employee','SalaryController@show');
    Route::post('import', 'SalaryController@import')->name('import');
    Route::get('/salary/{id}','SalaryController@salary');
    Route::get('/add_employee','EmployeeController@index');
    Route::post('/add_employee/create','EmployeeController@create');
});

Route::group(['middleware'=>['auth','project.manager']],function (){

    Route::get('project-manager/dashboard','ProjectManagerController@dashboard');
});


Route::group(['middleware'=>['auth','team.lead']],function (){


});


Route::group(['middleware' => ['auth','employee']],function (){
    Route::get('employee/dashboard','EmployeeController@dashboard');
    Route::get('/apply_leave','EmployeeController@leave');


});