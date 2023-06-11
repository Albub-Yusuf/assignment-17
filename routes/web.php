<?php

use App\Http\Controllers\TestController;
use Illuminate\Support\Facades\Route;

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

Route::get('/',[TestController::class,'getExerptAndDescription']);
Route::get('/question4',[TestController::class,'question4']);
Route::get('/question5',[TestController::class,'question5']);
Route::get('/question7',[TestController::class,'question7']);
Route::get('/question8',[TestController::class,'question8']);
Route::get('/question9',[TestController::class,'question9']);
Route::get('/question10',[TestController::class,'question10']);
Route::get('/question12',[TestController::class,'question12']);
Route::get('/question13',[TestController::class,'question13']);
Route::get('/question13a',[TestController::class,'question13a']);
Route::get('/question14',[TestController::class,'question14']);
Route::get('/question15',[TestController::class,'question15']);









