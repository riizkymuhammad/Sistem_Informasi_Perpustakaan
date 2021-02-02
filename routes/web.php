<?php

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

Route::get('/',[App\Http\Controllers\Frontend\BookController::class, 'index']);

// Route::get('/admin', function () {
//     return view('admin.templates.default');
// })->name('admin');

Route::get('/user', function () {
    return view('admin.user.index');
})->name('homepage');

Route::get('/book/{book}',[App\Http\Controllers\Frontend\BookController::class, 'show'])->name('book.show');
Route::post('/book/{book}/borrow',[App\Http\Controllers\Frontend\BookController::class, 'borrow'])->name('book.borrow');

Auth::routes(['verify' => true]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('verified');

