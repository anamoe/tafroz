<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DistributorController;
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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/',[DistributorController::class,'landingpage']);

Route::get('/logout', [AuthController::class, 'logout']);
Route::get('/profil', [AuthController::class, 'profil']);
Route::post('/profil/{id}', [AuthController::class, 'profile_update']);
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('login-post', [AuthController::class, 'postlogin']);
Route::get('lupa-password', [AuthController::class, 'lupa_password']);
Route::post('lupa-password', [AuthController::class, 'lupa_password_post']);
Route::get('password-baru/{token_reset}', [AuthController::class, 'password_baru']);
Route::post('password-baru/{token_reset}', [AuthController::class, 'password_baru_post']);

Route::get('provinsi',[DistributorController::class,'fetchDataProvinsi']);
Route::resource('data-distributor',DistributorController::class);

Route::get('/get-cities', [DistributorController::class, 'getCities'])->name('get-cities');
Route::get('/get-distributors-by-city', [DistributorController::class, 'showByCity'])->name('get-distributors-by-city');
Route::get('provinsi',[DistributorController::class,'fetchDataProvinsi']);
Route::resource('data-distributor',DistributorController::class);
Route::get('/search', [DistributorController::class, 'search'])->name('search');