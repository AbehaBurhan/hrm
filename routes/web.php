<?php


use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AgencyController;
use App\Http\Controllers\LeaveApplicationController;
use App\Http\Controllers\LeaveController;
use App\Models\LeaveApplication;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return redirect()->route('login');
});

Auth::routes();

// Route::get('/home', [HomeController::class, 'index'])->name('home')->middleware('employees');

//home controller routes
Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::get('/redirect', [HomeController::class, 'redirect'])->name('redirect');


// Route::get('master', function () {

//     return view('admin.layouts.master');
// });

//admin controller routes

Route::get('/admin/index', [AdminController::class, 'index'])->name('admin.index')->middleware('admin');
Route::get('/admin/create', [AdminController::class, 'create'])->name('admin.create')->middleware('admin');
Route::post('/admin/store', [AdminController::class, 'store'])->name('admin.store')->middleware('admin');
Route::get('/admin/edit/{id}', [AdminController::class, 'edit'])->name('admin.edit')->middleware('admin');
Route::post('/admin/update/{id}', [AdminController::class, 'update'])->name('admin.update')->middleware('admin');
Route::get('/admin/delete/{id}', [AdminController::class, 'delete'])->name('admin.delete')->middleware('admin');
Route::get('/admin/leaves/index', [LeaveController::class, 'index'])->name('admin.leave.index')->middleware('admin');
Route::get('/admin/leaves/create', [LeaveController::class, 'create'])->name('admin.leave.create')->middleware('admin');
Route::post('/admin/leaves/store', [LeaveController::class, 'store'])->name('admin.leave.store')->middleware('admin');
Route::get('/admin/leave/edit/{id}', [LeaveController::class, 'edit'])->name('admin.leave.edit')->middleware('admin');
Route::put('/admin/leave/update/{id}', [LeaveController::class, 'update'])->name('admin.leave.update')->middleware('admin');
Route::get('/admin/application/index', [LeaveController::class, 'appindex'])->name('admin.application.index')->middleware('admin');

//agency Controlles routes
Route::get('index', [AgencyController::class, 'index'])->name('agency.leave.index')->middleware('employees');
Route::get('applications/index', [LeaveApplicationController::class, 'index'])->name('agency.application.index')->middleware('employees');
Route::get('applications/create', [LeaveApplicationController::class, 'create'])->name('agency.application.create')->middleware('employees');
Route::post('applications/store', [LeaveApplicationController::class, 'store'])->name('agency.application.store')->middleware('employees');
