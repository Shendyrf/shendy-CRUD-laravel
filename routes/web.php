<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\employeeController;
use App\Http\Controllers\locationController;
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
    return view('welcome');
});
Route::get('/employee', [EmployeeController::class, 'index'])->name('employee.index');
Route::get('/employee', [employeeController::class, 'create']);
Route::post('/employee', [employeeController::class, 'update'])->name('employee.update');
Route::post('/employee', [employeeController::class, 'store'])->name('employee.store');
Route::resource('/location',locationController::class);
Route::resource('/employee',employeeController::class);
