<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthController;
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
    return view('index');
})->name('home');

Route::view('/auth/login', 'auth.login',['title'=>__('Login')])->name('auth.login');
Route::post('/auth/login', [AuthController::class, 'login'])->name('auth.postLogin');
Route::view('/auth/register', 'auth.register',['title'=>__('Register')])->name('auth.register');
Route::post('/auth/register', [AuthController::class, 'register'])->name('auth.postRegister');
Route::get('/auth/logout', function(){
    \Auth::logout();
    \Session::invalidate();
    \Session::regenerateToken();
    return redirect('/');
})->name('auth.logout');
