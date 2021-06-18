<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Auth\PasswordController;
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

Route::prefix('/auth')->group(function(){
    Route::view('/login', 'auth.login',['title'=>__('Login')])->name('auth.login');
    Route::post('/login', [AuthController::class, 'login'])->name('auth.postLogin');
    Route::view('/register', 'auth.register',['title'=>__('Register')])->name('auth.register');
    Route::post('/register', [AuthController::class, 'register'])->name('auth.postRegister');

    Route::middleware('auth')->group(function(){
        Route::view('/password/edit', 'auth.password.edit',['title'=>__('Change password')])->name('auth.password.edit');
        Route::post('/password/update', [PasswordController::class, 'update'])->name('auth.password.update');
        Route::get('/logout', function(){
            \Auth::logout();
            \Session::invalidate();
            \Session::regenerateToken();
            return redirect('/');
        })->name('auth.logout');
    });
});
