<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\SalleController;
use App\Http\Controllers\UserController;
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

Route::get('/', function () {
    return view('home');
});

Route::get('/register',[ AuthController::class,'showForm'])->name('register');
Route::post('/registerUser',[ AuthController::class,'register'])->name('registerUser');
Route::get('/login',[ AuthController::class,'index'])->name('login');
Route::post('/login',[ AuthController::class,'login'])->name('login');



Route::get('/login',function(){
    return view('loginForm');
});

// Route::post('/Auth/register',[AuthController::class,'register'])->name('register');
// Route::post('/Auth/login',[AuthController::class,'login'])->name('login');

// Route::view('/salles', 'salles');
Route::post('/salles/create',[SalleController::class,'store'])->name('salleCreate');
Route::get('/salles/showSalles',[SalleController::class,'showSalles']);

Route::get('/users/showUsers',[UserController::class,'showUsers']);
