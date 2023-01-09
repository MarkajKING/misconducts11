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
Route::get('/handleiding', [HomeController::class, 'userGuide'])->name('home');

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
Route::get('/vertrouwenspersonen', [ConfidantController::class, 'index'])->name("confidant.index");
Route::get('/vertrouwenspersonen/{language}', [ConfidantController::class, 'filterLanguage'])->name('confidant.filterLanguage');
Route::get('/vertrouwenspersonen/show/{id}', [ConfidantController::class, 'show'])->name('confidant.show');


Route::get('/mijn-account/', [ConfidantController::class, 'adminIndex']);

Route::get('/mijn-account/create', [ConfidantController::class, 'create']);
Route::post('/mijn-account/', [ConfidantController::class, 'store'])->name('confidant');

Route::get('/mijn-account/{confidant}/edit', [ConfidantController::class, 'edit']);
Route::patch('admin/mijn-account/{confidant}', [ConfidantController::class, 'update'])->name('confidant');

Route::post('/admin/mijn-account', [ConfidantController::class, 'store']);
Route::get('/admin/mijn-informatie/create', [ConfidantController::class, 'create'])->name('confidant.create');
Route::get('/admin/mijn-account', [ConfidantController::class, 'all']);
