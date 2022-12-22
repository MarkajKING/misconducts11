<?php


use App\Http\Controllers\AdminController;

use App\Http\Controllers\ConfidantController;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ConfidantController;
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
Route::get('/list', [ConfidantController::class, 'index']);
Route::post('/list/addConfidantToUser', [ConfidantController::class, 'addConfidant'])->name('confidant.addConfidant');
=======

Route::get('admin/users', [AdminController::class, 'index'])->name('admin.index');
Route::patch('admin/{user}/confidantchecker', [AdminController::class, 'confidantchecker'])->name('admin.confidantchecker');
Route::post('admin/search', [AdminController::class, 'search'])->name('admin.search');

//Confidants
Route::get('/vertrouwenspersonen', [ConfidantController::class, 'index']);
Route::get('/vertrouwenspersonen/{language}', [ConfidantController::class, 'filterLanguage'])->name('confidant.filterLanguage');
Route::get('/vertrouwenspersonen/show/{id}', [ConfidantController::class, 'show'])->name('confidant.show');

Route::post('/admin/mijn-account', [ConfidantController::class, 'store']);
Route::get('/admin/mijn-informatie/create', [ConfidantController::class, 'create'])->name('confidant.create');
Route::get('/admin/mijn-account', [ConfidantController::class, 'all']);
