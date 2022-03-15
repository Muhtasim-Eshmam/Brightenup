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


Route::get('/', [App\Http\Controllers\AdvisorController::class, 'index']);
Route::get('/advisor', [App\Http\Controllers\AdvisorController::class, 'advisor']);


Route::get('/home', [App\Http\Controllers\StudentController::class, 'index'])->middleware('auth');;
Route::get('/create', [App\Http\Controllers\AdvisorController::class, 'create']);
Route::post('/storeinfo', [App\Http\Controllers\AdvisorController::class, 'store'])->name("info");
Route::get('/showinfo', [App\Http\Controllers\AdvisorController::class, 'show']);
Route::get('/showstu', [App\Http\Controllers\AdvisorController::class, 'showstu']);
Route::get('/calc', [App\Http\Controllers\AdvisorController::class, 'cal']);

Route::get('/adminlogin', [App\Http\Controllers\AdvisorController::class, 'loginpage']);
Route::post('/advisorcheck', [App\Http\Controllers\AdvisorController::class, 'login'])->name('validate');
Route::get('/adminview', [App\Http\Controllers\ApplicantsController::class, 'adminview']);




Route::get('/program', [App\Http\Controllers\ProgramController::class, 'addpragram']);
Route::post('/progrm', [App\Http\Controllers\ProgramController::class, 'addprog'])->name("program");
Route::get('/programlist', [App\Http\Controllers\ProgramController::class, 'programlist']);
Route::post('/updatepro/{id}', [App\Http\Controllers\ProgramController::class, 'update'])->name("updatepro");
Route::get('/editprogram/{id}', [App\Http\Controllers\ProgramController::class, 'edit']);


Route::get('/events', [App\Http\Controllers\EventsController::class, 'addevents']);
Route::post('/store', [App\Http\Controllers\EventsController::class, 'storeevent'])->name("events");
Route::get('/eventlist', [App\Http\Controllers\EventsController::class, 'eventlist']);
Route::post('/updateevent/{id}', [App\Http\Controllers\EventsController::class, 'update'])->name("eventedit");
Route::get('/editevent/{id}', [App\Http\Controllers\EventsController::class, 'edit']);



Route::get('delete/{id}', [App\Http\Controllers\ApplicantsController::class, 'destroy']);



Auth::routes();

Route::get('/student', [App\Http\Controllers\StudentController::class, 'index'])->middleware('auth');;
Route::get('/applypro', [App\Http\Controllers\ApplicantsController::class, 'applypro'])->middleware('auth');;
Route::post('/storeapply', [App\Http\Controllers\ApplicantsController::class, 'store'])->name("apply.now");
Route::get('/myapply', [App\Http\Controllers\ApplicantsController::class, 'show'])->middleware('auth');;