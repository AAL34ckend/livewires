<?php

use App\Http\Controllers\UserController;
use App\Http\Livewire\Article;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/user', function () {
    return view('users.index');
})->name('user.home');

Route::get('/user/{id}',[UserController::class,'show'])->name('user.detail');
Route::get('/user/{id}/edit',[UserController::class,'edit'])->name('user.edit');

Route::get('article',Article::class)->name('article');
