<?php

use App\Http\Controllers\Auth\RegisterController as AuthRegisterController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ShopController;
use Illuminate\Support\Facades\Auth;

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
Auth::routes();
Route::middleware('auth')->group(function (){
    Route::get('/', [ShopController::class, 'shop_all'])->name('posts.shop');
});

// Route::post('/register', [RegisterController::class, 'create']);
// Route::post('/register', [RegisterController::class, 'store']);
Route::get('/logout', [LoginController::class, 'logout']);
// Route::post('/login', [LoginController::class, 'login']);
// Route::post('/login', [LoginController::class, 'store']);


Route::get('/done', [Controller::class, 'done']);
Route::get('/thanks', [Controller::class, 'thanks']);
Route::post('/thanks', [Controller::class, 'thanks']);
Route::get('/menu1', [Controller::class, 'menu1']);
Route::get('/menu2', [Controller::class, 'menu2']);

