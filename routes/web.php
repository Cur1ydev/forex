<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Client\CommentController;
use App\Http\Controllers\Client\PageController;
use App\Http\Controllers\GoogleController;
use App\Http\Controllers\LanguageController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\BlogController;

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
Route::get('error', function () {
    abort(500);
})->name('error');
Route::get('/', [PageController::class, 'home'])
    ->name('home');
Route::get('/changeLocale', [LanguageController::class, 'handle'])
    ->name('changeLocale');

Route::post('/comment', [CommentController::class, 'handle'])
    ->name('comment');
Route::match(['get', 'post'], '/login', [LoginController::class, 'login'])
    ->name('login');
Route::get('/log-out', function () {
    auth()->logout();
    return redirect()->route('login');
})->name('log-out');
Route::get('/page/{slug}', [PageController::class, 'handlePage'])
    ->name('page');
Route::get('/register-course', [])
    ->name('register-course');
Route::prefix('/google')->name('google.')->group(function () {
    Route::get('/login', [GoogleController::class, 'loginWithGoogle'])
        ->name('login');
    Route::any('/callback', [GoogleController::class, 'callback'])
        ->name('callback');
});
Route::get('/blog/{slug}', [PageController::class, 'blog'])
    ->name('blog');

Route::prefix('/admin')->middleware('loginAdmin')->name('admin.')->group(function () {
    Route::get('/', [DashboardController::class, 'index'])
        ->name('home');
    Route::prefix('user')->name('user.')->group(function () {
        Route::get('/', [UserController::class, 'list'])
            ->name('list');
        Route::get('/delete-{id}', [UserController::class, 'delete'])
            ->name('delete');
    });
    Route::prefix('page')->name('blog.')->group(function () {
        Route::get('/list', [BlogController::class, 'list'])
            ->name('list');
        Route::match(['get', 'post'], 'add', [BlogController::class, 'create'])
            ->name('create');
        Route::match(['get', 'post'], 'update/{id}', [BlogController::class, 'update'])
            ->name('update');
        Route::get('/delete', [BlogController::class, 'delete'])
            ->name('delete');
    });
});

