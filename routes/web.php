<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\IndexController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\TestController;
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

Route::get('/mylogin',function(){
    return view('auth.login');
});

Route::get('/myregister',function(){
    return view('auth.register');
});


Route::get('/test', TestController::class);


Route::get('/user',[UserController::class,'infoPage'])->name('user.info');
Route::put('/user',[UserController::class,'infoUpdate'])->name('user.info.update');


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
