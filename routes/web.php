<?php

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

// The route has the url and the controller.

Route::get('/', function () {
    return view('welcome');
});

Route::get('/test-page', function () {
    return view('test');
});

Route::get('/steeze-page', function () {
    return view('steeze');
});

// How to make a model, controller and migration
// php artisan make:model ModelName -c -m

Route::get("/add-post", [PostController::class, 'add'])->name('post.add');

Route::post("/store-post", [PostController::class, 'store'])->name('post.store');
Route::get("/all-post", [PostController::class, 'allPost'])->name('all.post');
