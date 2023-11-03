<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LikesController;
use App\Http\Controllers\BlogPostsController;
use App\Http\Controllers\UserSitesController;
use App\Http\Controllers\RegisterController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::resource('likes', LikesController::class);
Route::resource('blog_posts', BlogPostsController::class);
Route::resource('user_sites', UserSitesController::class);
Route::resource('registers', RegisterController::class);
Route::get('/posts', function () {
    return view("post.index");
});
Route::get('/register', function () {
    $registeredUsers = DB::select("SELECT * FROM `registers`");
    return view('registers.index', compact('registeredUsers'));
});
