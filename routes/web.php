<?php

use App\Http\Controllers\Auth\LoginController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Backend\DashBoardController;
use App\Http\Controllers\Backend\EmployeeController;
use App\Http\Controllers\Backend\CustomerController;

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
    return view('layout.main');
});


//Register
Route::group(['as'=>'Register.','middleware'=>'guest'], function(){
    Route::get('/register',[RegisterController::class,'Index'])->name('register');
    Route::post('/register',[RegisterController::class,'UserRegister'])->name('register-submit');
});

//Login
Route::group(['as'=>'Login.','middleware'=>'guest'], function(){
    Route::get('/login',[LoginController::class,'Index'])->name('login');
    Route::post('/login',[LoginController::class,'Login'])->name('login-submit');
});

//Home
Route::group(['as'=>'Home.','middleware'=>'auth'], function(){
    Route::get('/home',[DashBoardController::class,'Index'])->name('home');
    Route::get('/log-out',[DashBoardController::class,'LogOut'])->name('LogOut');
});

//Employee
Route::group(['as'=>'Employee.','middleware'=>'auth'], function(){
    Route::get('/employee',[EmployeeController::class,'Index'])->name('index');
    Route::get('/employee-add',[EmployeeController::class,'Add'])->name('add');
    Route::post('/employee-insert',[EmployeeController::class,'Insert'])->name('insert');
});

//Customer
Route::group(['as'=>'Customer.','middleware'=>'auth'], function(){
    Route::get('/customer-index',[CustomerController::class,'Index'])->name('index');
    Route::get('/customer-add',[CustomerController::class,'Add'])->name('add');
    Route::post('/customer-insert',[CustomerController::class,'Insert'])->name('insert');
    Route::post('/customer-search',[CustomerController::class,'Search'])->name('search');

    //csv
    Route::get('/csv-upload',[CustomerController::class,'CsvUpload'])->name('csv-upload');
    Route::post('/csv-store',[CustomerController::class,'CsvStore'])->name('csv-store');

});