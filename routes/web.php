<?php

use Illuminate\Support\Facades\Route;
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
Route::get('/about', [App\Http\Controllers\AboutController::class, 'index'])->name('promotepage.about');
Route::get('/doctor', [App\Http\Controllers\DoctorController::class, 'index'])->name('promotepage.doctor');
Route::get('/blog', [App\Http\Controllers\BlogController::class, 'index'])->name('promotepage.blog');
Route::get('/contact', [App\Http\Controllers\ContactController::class, 'index'])->name('promotepage.contact');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/admin/index',[HomeController::class, 'admin'])->name('admin');

//Showservice
// Route::get('/admin/Showservice/index',[ShowserviceController::class, 'index'])->name('Showservice.index');
// Route::get('/admin/Showservice/create',[ShowserviceController::class, 'createform'])->name('Showservice.create');
Route::get('/admin/Showservice/index',[ShowserviceController::class, 'index'])->name('Showservice.index');
Route::get('/admin/Showservice/create',[ShowserviceController::class, 'createform'])->name('Showservice.create');

Route::get('/admin/Servicenotification/index',[ServicenotificationController::class, 'index'])->name('Servicenotification.index');
Route::get('/admin/Servicenotification/create',[ServicenotificationController::class, 'createform'])->name('Servicenotification.create');

Route::get('/admin/Workhistory/index',[WorkhistoryController::class, 'index'])->name('Workhistory.index');
Route::get('/admin/Workhistory/create',[WorkhistoryController::class, 'createform'])->name('Workhistory.create');

Route::get('/admin/Organizer/index',[OrganizerController::class, 'index'])->name('Organizer.index');
Route::get('/admin/Organizer/create',[OrganizerController::class, 'createform'])->name('Organizer.create');

Route::get('/admin/User/index',[UserController::class, 'index'])->name('User.index');
Route::get('/admin/User/edit{id}',[UserController::class, 'edit'])->name('User.edit');
Route::post('/admin/User/update{id}',[UserController::class, 'update'])->name('User.update');