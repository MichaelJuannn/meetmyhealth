<?php

use App\Http\Controllers\ClientController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\IssueController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;
use App\Models\Client;
use App\Models\Doctor;

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

Route::view('/', 'index')->middleware('guest');
Route::get('/about', [ClientController::class, 'about'])->middleware('auth');
Route::get('/sign', [ClientController::class, 'sign'])->middleware('guest');
Route::get('/home', [ClientController::class, 'home'])->name('home')->middleware('auth');
Route::get('/complete', [ClientController::class, 'complete'])->middleware('auth');
Route::get('/check', [ClientController::class, 'check'])->middleware('auth');
Route::post('/store-form', [ClientController::class, 'store']);
Route::post('/update-form', [ClientController::class, 'update']);
route::get('/check/{client}', [ClientController::class, 'show'])->middleware('auth');
Route::get('/keluh', [DoctorController::class, 'janji'])->middleware('auth');

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);
route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth');

route::post('/keluh/store', [IssueController::class, 'store']);
route::get('/appointment/{client}', [IssueController::class, 'show']);
route::get('/appointment/delete/{issue}', [IssueController::class, 'dragon'])->name('delete');
