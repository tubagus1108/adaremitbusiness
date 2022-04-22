<?php

use App\Http\Controllers\Admin\HomeController;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;
// use App\Http\Contr
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
Route::get('{locale}',[HomeController::class,'lang']);
Route::get('/',[HomeController::class,'home']);
