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
    Route::get('print/salary/{id}','SalaryController@printSalary');
});

Route::group(['middleware'=>['auth','project.manager']],function (){

    Route::group(['prefix' => 'project-manager'],function (){
        Route::get('dashboard','ProjectManagerController@dashboard');
        Route::get('apply-leave','ProjectManagerController@applyLeave');
        Route::post('submit-leave','ProjectManagerController@storeLeave');
        Route::get('leaves','ProjectManagerController@showMyLeaves');
        Route::get('employee-leaves','ProjectManagerController@employeeLeaves');
        Route::get('approved-leaves','ProjectManagerController@approvedLeaves');
        Route::post('cancel-leaves','ProjectManagerController@canceledLeaves');
        Route::get('reject-leaves','ProjectManagerController@rejectedLeaves');


    });
});


Route::group(['middleware'=>['auth','team.lead']],function (){

    Route::group(['prefix' => 'team-lead'],function (){
        Route::get('dashboard','TeamLeadController@dashboard');
        Route::post('leave/submit','TeamLeadController@storeLeave');
        Route::get('my-leaves','TeamLeadController@showMyLeaves');
        Route::get('team-leaves','TeamLeadController@teamLeaves');
        Route::get('approved-leaves','TeamLeadController@approvedLeaves');
        Route::post('cancel-leave','TeamLeadController@cancelLeave');
        Route::get('reject-leave','TeamLeadController@rejectLeave');

    });
    Route::get('team_lead/leave','TeamLeadController@applyLeave');
    Route::put('update/team-leaves','TeamLeadController@updateTeamLeave');


});


Route::group(['middleware' => ['auth','employee']],function (){
    Route::get('employee/dashboard','EmployeeController@dashboard')->name('employee.dashboard');
    Route::get('/apply-leave','EmployeeController@leave');
    Route::post('employee-leave/submit','LeaveController@submit');
    Route::get('/my-leave', 'EmployeeController@myLeaves');


});

Route::group(['middleware'=>['auth','super.admin']],function (){

    Route::get('superAdmin/dashboard','SuperController@dashboard');

});

