<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
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

Route::get('/',[MainController::class,'main']);
Route::post('/confirm',[MainController::class,'confirm']);
Route::get('/confirm/fix',[MainController::class,'fix']);
Route::post('/thanks',[MainController::class,'store']);
