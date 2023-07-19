<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Client\CommentController;
use App\Http\Controllers\Client\PageController;
use App\Http\Controllers\GoogleController;
use App\Http\Controllers\LanguageController;
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

Route::prefix('/admin')->name('admin.')->group(function (){
    Route::get('/',function (){
        return 'Đây là trang admin';
    })->name('home');
});
