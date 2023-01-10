<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\IndexController;

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

Route::get('/', [IndexController::class, 'index']);
Route::get('/users/home', [HomeController::class, 'index'])->name('home');
Route::get('/redirects', [HomeController::class, 'redirects'])->name('home');

// user
Route::post('/addcard', [HomeController::class, 'addcard']);
Route::post('/addcard/{id}', [HomeController::class, 'addcard']);
Route::post('/orderConfirm', [HomeController::class, 'orderconfirm']);
Route::get('/showCard/{id}', [HomeController::class, 'showCard']);
Route::get('/removeOrder/{id}', [HomeController::class, 'removeOrder']);

// admin user
Route::get('/users', [AdminController::class, 'user']);
Route::get('/deleteuser/{id}', [AdminController::class, 'deleteuser']);


// amind cheff
Route::get('/cheff', [AdminController::class, 'cheff']);
Route::get('/editchef/{id}', [AdminController::class, 'editchef']);
Route::get('/deletechef/{id}', [AdminController::class, 'deletechef']);
Route::post('/updatechef/{id}', [AdminController::class, 'updateChef']);
Route::post('/uploadchef', [AdminController::class, 'uploadchef']);


// admin menu
Route::get('/foodmenu', [AdminController::class, 'foodmenu']);
Route::get('/editmenu/{id}', [AdminController::class, 'editmenu']);
Route::get('/deletemenu/{id}', [AdminController::class, 'deletemenu']);
Route::post('/updatmenu/{id}', [AdminController::class, 'updatemenu']);
Route::post('/upload', [AdminController::class, 'uploadmenu']);

// admin reservation 
Route::post('/reservation', [AdminController::class, 'reservation']);
Route::get('/deletereservation/{id}', [AdminController::class, 'deletereservation']);

Route::get('/Adminreservation', [AdminController::class, 'showreservation']);
Route::get('/search', [AdminController::class, 'search']);
Route::get('/Adminreservation', [AdminController::class, 'showreservation']);

// admin order
Route::get('/orders', [AdminController::class, 'orderShow']);
Route::get('/deleteorders/{id}', [AdminController::class, 'deleteorders']);

Auth::routes();
