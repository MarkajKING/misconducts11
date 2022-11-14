<?php

use App\Http\Controllers\ConfidantController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', [HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

//Confidants
Route::get('/vertrouwenspersonen', [ConfidantController::class, 'index']);
Route::get('/vertrouwenspersonen/{confidant:first_name}', [ConfidantController::class, 'show']);

Route::post('/admin/mijn-account', [ConfidantController::class, 'store']);
Route::get('/admin/mijn-informatie/create', [ConfidantController::class, 'create']);
Route::get('/admin/mijn-account', [ConfidantController::class, 'all']);




