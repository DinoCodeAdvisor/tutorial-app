<?php

use App\Http\Controllers\CommentController;
use App\Http\Controllers\HomepageController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use App\Models\Comment;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', function(){
    return view('login');
})->name('login');

Route::post('/authenticate', [LoginController::class, 'authenticate'])->name('authenticate');

Route::middleware('auth')->get('/homepage', [HomepageController::class, 'homepage'])->name('homepage');

//This is one form of doing it
// Route::controller(PostController::class)
// ->prefix('posts')
// ->group(function () {
//     // Route Model Binding
//     Route::get('/{post}', 'showPost')->withTrashed()->name('showPost');
// });

Route::middleware('auth')->resource('posts', PostController::class)->withTrashed(['show']);
Route::middleware('auth')->put('post/{post}', [PostController::class, 'restore'])->withTrashed()->name('posts.restore');

Route::middleware('auth')->resource('comments', CommentController::class)->withTrashed(['show','update','store']);
Route::middleware('auth')->put('comment/{comment}', [CommentController::class, 'restore'])->withTrashed()->name('comments.restore');
