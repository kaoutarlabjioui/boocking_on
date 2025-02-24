<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\SalleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ReservationController;
use App\Models\Reservation;
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
Route::get('/logout',[AuthController::class , 'logout']);

// Route::post('/Auth/register',[AuthController::class,'register'])->name('register');
// Route::post('/Auth/login',[AuthController::class,'login'])->name('login');

Route::get('/salles', [SalleController::class,'index']);
Route::post('/salles/store',[SalleController::class,'store']);
Route::get('/salles/showSalles',[SalleController::class,'showSalles']);

Route::get('/users/showUsers',[UserController::class,'showUsers']);
Route::get('/salles/destroy/{id}',[SalleController::class,'destroy']);
Route::get('/updatesalleForm/{id}',[SalleController::class,'FormUpdate']);

Route::post('/salles/update',[SalleController::class,'update']);

// Route::resource('salles', SalleController::class);

Route::view('/reservation', 'reservation');
Route::get('/reservation/showreservation',[ReservationController::class,'showreservation']);
Route::post('/reservation/store',[ReservationController::class,'store']);
Route::get('/reservation/valider/{id}',[ReservationController::class,'validerReservation']);






