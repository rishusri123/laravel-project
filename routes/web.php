<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TimesheetController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/index',[TimesheetController::class,'index']);
Route::post('/store',[TimesheetController::class,'Store']);
Route::get('/show',[TimesheetController::class,'show']);
Route::get('/edit/{id}',[TimesheetController::class,'edit']);
Route::post('/update/{id}',[TimesheetController::class,'update']);