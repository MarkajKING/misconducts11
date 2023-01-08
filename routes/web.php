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
Route::get('/handleiding', [HomeController::class, 'userGuide'])->name('home');

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

//Confidants
Route::get('/vertrouwenspersonen', [ConfidantController::class, 'index']);
Route::get('/vertrouwenspersonen/{confidant:name}', [ConfidantController::class, 'show']);

Route::get('/mijn-account/', [ConfidantController::class, 'adminIndex']);

Route::get('/mijn-account/create', [ConfidantController::class, 'create']);
Route::post('/mijn-account/', [ConfidantController::class, 'store'])->name('confidant');

Route::get('/mijn-account/{confidant}/edit', [ConfidantController::class, 'edit']);
Route::patch('admin/mijn-account/{confidant}', [ConfidantController::class, 'update'])->name('confidant');





