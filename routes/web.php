<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DashboardPostController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\RegisterController;
use App\Models\category;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [HomeController::class, 'index']);

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);


Route::get('/produk', [PostController::class, 'index']);
Route:: get('/produk/{post:slug}', [PostController::class, 'show']);

Route::get('/categories', function(){
    return view('categories', [
        'title' =>'All categories',
        'active' => 'categories',
        'categorys' =>Category::all(),
    ]);
});

Route::get('/dashboard/posts/checkSlug', [DashboardPostController::class, 'checkSlug'])->middleware('auth');
Route::resource('/dashboard/posts', DashboardPostController::class)->middleware('auth');


Route::get('/dashboard/user', [RegisterController::class, 'index'])->middleware('auth');

Route::get('/dashboard/user/create', [RegisterController::class, 'create'])->middleware('auth');
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/dashboard/password/{id}', [RegisterController::class, 'showPasswordForm'])->name('show.password.form');
Route::post('/dashboard/password/{id}', [RegisterController::class, 'updatePassword'])->name('update.password');;


// Route::get('/dashboard/categories/checkSlug', [AdminCategoryController::class, 'checkSlug'])->middleware('auth');
// Route::resource('/dashboard/categories', AdminCategoryController::class)->except('show')->middleware('admin');

