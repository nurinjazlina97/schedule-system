<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// Route::method('uri','action\callback')
 Route::get('/schedules',[App\Http\Controllers\ScheduleController::class,'index'])->name('schedule:index')->middleware('auth');

 //create form
 Route::get('/schedules/create',[App\Http\Controllers\ScheduleController::class,'create'])->name('schedule:create');

 //store 
 Route::post('/schedules/create',[App\Http\Controllers\ScheduleController::class,'store'])->name('schedule:store');

 //show
 Route::get('/schedules/{schedule}',[App\Http\Controllers\ScheduleController::class, 'show'])->name('schedule:show');

 //edit
 Route::get('/schedules/{schedule}/edit',[App\Http\Controllers\ScheduleController::class, 'edit'])->name('schedule:edit');

//update
Route::post('/schedules/{schedule}/edit',[App\Http\Controllers\ScheduleController::class, 'update'])->name('schedule:update');

//delete
Route::get('/schedules/{schedule}/destroy',[App\Http\Controllers\ScheduleController::class,'destroy'])->name('schedule:destroy');

//force delete
Route::get('/schedules/{schedule}/force-destroy',[App\Http\Controllers\ScheduleController::class,'forceDestroy'])->name('schedule:force-destroy');