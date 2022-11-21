<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\ShowserviceController;
use App\Http\Controllers\Admin\ServicenotificationController;
use App\Http\Controllers\Admin\WorkhistoryController;
use App\Http\Controllers\Admin\OrganizerController;
use App\Http\Controllers\Admin\UserController;

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

Route::get('/', [App\Http\Controllers\IndexController::class, 'index'])->name('promotepage.index');
Route::get('/about', [App\Http\Controllers\IndexController::class, 'about'])->name('promotepage.about');
Route::get('/doctor', [App\Http\Controllers\IndexController::class, 'doctor'])->name('promotepage.doctor');
Route::post('/doctor',[App\Http\Controllers\IndexController::class,'insert'])->name('promotepage.insert');
Route::get('/blog', [App\Http\Controllers\IndexController::class, 'blog'])->name('promotepage.blog');
Route::get('/contact', [App\Http\Controllers\IndexController::class, 'contact'])->name('promotepage.contact');


Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/admin/index', [HomeController::class, 'admin'])->name('admin');

//Showservice
// Route::get('/admin/Showservice/index',[ShowserviceController::class, 'index'])->name('Showservice.index');
// Route::get('/admin/Showservice/create',[ShowserviceController::class, 'createform'])->name('Showservice.create');
Route::get('/admin/Showservice/index',[ShowserviceController::class, 'index'])->name('Showservice.index');
Route::get('/admin/Showservice/create',[ShowserviceController::class, 'createform'])->name('Showservice.create');
Route::post('/admin/Showservice/insert',[ShowserviceController::class,'insert'])->name('Showservice.insert');
Route::get('/admin/Showservice/delete/{id}',[ShowserviceController::class, 'delete'])->name('admin.showservice.delete');
Route::get('/admin/Showservice/edit/{id}',[ShowserviceController::class, 'edit'])->name('admin.showservice.edit');
Route::post('/admin/Showservice/update/{id}',[ShowserviceController::class, 'update'])->name('admin.showservice.update');

Route::get('/admin/Servicenotification/index',[ServicenotificationController::class, 'index'])->name('Servicenotification.index');
Route::post('/admin/Servicenotification/update{id}',[ServicenotificationController::class, 'update'])->name('admin.Servicenotification.update');
Route::get('/admin/Servicenotification/delete/{id}',[ServicenotificationController::class, 'delete'])->name('admin.Servicenotification.delete');
Route::get('/admin/Servicenotification/edit/{id}',[ServicenotificationController::class, 'edit'])->name('admin.Servicenotification.edit');

Route::get('/admin/Workhistory/index',[WorkhistoryController::class, 'index'])->name('Workhistory.index');
Route::get('/admin/Workhistory/create',[WorkhistoryController::class, 'createform'])->name('Workhistory.create');
Route::post('/admin/Workhistory/insert',[WorkhistoryController::class,'insert'])->name('Workhistory.insert');
Route::get('/admin/Workhistory/delete/{id}',[WorkhistoryController::class, 'delete'])->name('admin.Workhistory.delete');
Route::get('/admin/Workhistory/edit/{id}',[WorkhistoryController::class, 'edit'])->name('admin.Workhistory.edit');
Route::post('/admin/Workhistory/update/{id}',[WorkhistoryController::class, 'update'])->name('admin.Workhistory.update');

Route::get('/admin/Organizer/index',[OrganizerController::class, 'index'])->name('Organizer.index');
Route::get('/admin/Organizer/create',[OrganizerController::class, 'createform'])->name('Organizer.create');
Route::post('/admin/Organizer/insert',[OrganizerController::class,'insert'])->name('Organizer.insert');
Route::get('/admin/Organizer/delete/{id}',[OrganizerController::class, 'delete'])->name('admin.Organizer.delete');
Route::get('/admin/Organizer/edit/{id}',[OrganizerController::class, 'edit'])->name('admin.Organizer.edit');
Route::post('/admin/Organizer/update/{id}',[OrganizerController::class, 'update'])->name('admin.Organizer.update');

Route::get('/admin/User/index',[UserController::class, 'index'])->name('User.index');
Route::get('/admin/User/edit{id}',[UserController::class, 'edit'])->name('admin.User.edit');
Route::post('/admin/User/update{id}',[UserController::class, 'update'])->name('admin.User.update');
Route::get('/admin/User/delete/{id}',[UserController::class, 'delete'])->name('admin.User.delete');
