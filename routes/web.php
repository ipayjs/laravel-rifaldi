<?php

namespace  App\Http\Controllers;
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

Route::get('/', [HomeController::class, 'home']); // Closing parenthesis added here

Route::get('/service', [HomeController::class, 'service']); // Closing parenthesis added here

// Route::get('/',[ipaycontroller::class,'index']);

// Route::get('/',[ipaycontroller::class,'index']);