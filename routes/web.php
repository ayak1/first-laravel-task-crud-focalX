<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
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

Route::get('/', [HomeController::class,'home'] );
Route::get('/add-Post-Form',[PostController::class,'addNewPostForm']);
Route::get('/add-New-Post',[PostController::class,'addNewPost'])->name('post.add');
Route::get('/update-Post-Form/{id}',[PostController::class,'updatePostForm'])->name('form.updatePost');
Route::get('/update-Post/{id}',[PostController::class,'updatePost'])->name('post.update');
Route::get('/delete-Post/{id}',[PostController::class,'deletePost'])->name('post.delete');
