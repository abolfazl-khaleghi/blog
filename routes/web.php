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

Route::get('/', function () {
    return view('main');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::group(['middleware' => 'auth','prefix' => 'admin'], function () {
    Route::resource('/category', App\Http\Controllers\CategoryController::class);
    Route::resource('/articles', App\Http\Controllers\ArticlesController::class);
    Route::resource('/comment', App\Http\Controllers\CommentController::class);

});
Route::get('/art', [App\Http\Controllers\ArticlesController::class,'indexHome'])->name("show.articles");
Route::get('/art/{artical}', [App\Http\Controllers\ArticlesController::class,'showHome'])->name("show.article");

Route::post('/comment', [App\Http\Controllers\CommentController::class,'store'])->name("home.comment");
Route::get('/tag', [App\Http\Controllers\TagController::class,'index'])->name("tag.list");
