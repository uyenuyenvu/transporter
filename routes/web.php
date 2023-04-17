<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\OrderController;

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
Route::post('/post-order', [OrderController::class, 'postOrder'])->name('submit-order');
Route::get('/blog', function () {
    return view('pages.blog');
});
Route::get('/contact', function () {
    return view('pages.contact');
})->name('contact');
Route::get('/introduce', function () {
    return view('pages.introduce');
})->name('introduce');
