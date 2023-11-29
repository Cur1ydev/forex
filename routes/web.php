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
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Client\RegisterCourseController;
use App\Http\Controllers\Admin\CommentController as CommentAdmin;
use App\Http\Controllers\Admin\OptionTradeController;
use App\Http\Controllers\Admin\ValueTradeController;
use App\Http\Controllers\Admin\AuthCourseController;

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
 Route::get('error', function () {
     abort(500);
 })->name('error');
 Route::get('/changeLocale', [LanguageController::class, 'handle'])
     ->name('changeLocale');
 Route::match(['get', 'post'], 'form-investor', [RegisterCourseController::class, 'handle'])
     ->name('form-investor');
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
         Route::get('/trash', [BlogController::class, 'trash'])
             ->name('trash');
         Route::get('/only-trash/{id}', [BlogController::class, 'storeOnlyTrash'])
             ->name('onlyTrash');
         Route::get('/all-trash', [BlogController::class, 'storeAllTrash'])
             ->name('allTrash');
     });
     Route::prefix('category')->name('category.')->group(function () {
         Route::get('/list', [CategoryController::class, 'list'])
             ->name('list');
         Route::match(['get', 'post'], 'add', [CategoryController::class, 'create'])
             ->name('create');
         Route::match(['get', 'post'], 'update/{id}', [CategoryController::class, 'update'])
             ->name('update');
         Route::get('/delete', [CategoryController::class, 'delete'])
             ->name('delete');
         Route::get('/trash', [CategoryController::class, 'trash'])
             ->name('trash');
         Route::get('/only-trash/{id}', [CategoryController::class, 'storeOnlyTrash'])
             ->name('onlyTrash');
         Route::get('/all-trash', [CategoryController::class, 'storeAllTrash'])
             ->name('allTrash');

     });
     Route::prefix('comment')->name('comment.')->group(function () {
         Route::get('/list', [CommentAdmin::class, 'list'])
             ->name('list');
         Route::match(['get', 'post'], 'add', [CommentAdmin::class, 'create'])
             ->name('create');
         Route::match(['get', 'post'], 'update/{id}', [CommentAdmin::class, 'update'])
             ->name('update');
         Route::get('/delete', [CommentAdmin::class, 'delete'])
             ->name('delete');
         Route::get('/trash', [CommentAdmin::class, 'trash'])
             ->name('trash');
         Route::get('/only-trash/{id}', [CommentAdmin::class, 'storeOnlyTrash'])
             ->name('onlyTrash');
         Route::get('/all-trash', [CommentAdmin::class, 'storeAllTrash'])
             ->name('allTrash');

     });
     Route::prefix('option-trade')->name('optionTrade.')->group(function () {
         Route::get('/list', [OptionTradeController::class, 'list'])
             ->name('list');
         Route::match(['get', 'post'], 'add', [OptionTradeController::class, 'create'])
             ->name('create');
         Route::match(['get', 'post'], 'update/{id}', [OptionTradeController::class, 'update'])
             ->name('update');
         Route::get('/delete', [OptionTradeController::class, 'delete'])
             ->name('delete');
         Route::get('/trash', [OptionTradeController::class, 'trash'])
             ->name('trash');
         Route::get('/only-trash/{id}', [OptionTradeController::class, 'storeOnlyTrash'])
             ->name('onlyTrash');
         Route::get('/all-trash', [OptionTradeController::class, 'storeAllTrash'])
             ->name('allTrash');

     });
     Route::prefix('value-trade')->name('valueTrade.')->group(function () {
         Route::get('/list', [ValueTradeController::class, 'list'])
             ->name('list');
         Route::match(['get', 'post'], 'add', [ValueTradeController::class, 'create'])
             ->name('create');
         Route::match(['get', 'post'], 'update/{id}', [ValueTradeController::class, 'update'])
             ->name('update');
         Route::get('/delete', [ValueTradeController::class, 'delete'])
             ->name('delete');
         Route::get('/trash', [ValueTradeController::class, 'trash'])
             ->name('trash');
         Route::get('/only-trash/{id}', [ValueTradeController::class, 'storeOnlyTrash'])
             ->name('onlyTrash');
         Route::get('/all-trash', [ValueTradeController::class, 'storeAllTrash'])
             ->name('allTrash');

     });
     Route::prefix('register-course')->name('registerCourse.')->group(function () {
         Route::get('/list', [AuthCourseController::class, 'list'])
             ->name('list');
         Route::match(['get', 'post'], 'add', [AuthCourseController::class, 'create'])
             ->name('create');
         Route::match(['get', 'post'], 'update/{id}', [AuthCourseController::class, 'update'])
             ->name('update');
         Route::get('/delete', [AuthCourseController::class, 'delete'])
             ->name('delete');
         Route::get('/trash', [AuthCourseController::class, 'trash'])
             ->name('trash');
         Route::get('/only-trash/{id}', [AuthCourseController::class, 'storeOnlyTrash'])
             ->name('onlyTrash');
         Route::get('/all-trash', [AuthCourseController::class, 'storeAllTrash'])
             ->name('allTrash');
     });
     Route::prefix('register')->name('regist.')->group(function () {
         Route::get('/list/{domain}', [\App\Http\Controllers\Admin\RegisterController::class, 'list'])
             ->name('list');
         Route::get('/delete', [\App\Http\Controllers\Admin\RegisterController::class, 'delete'])
             ->name('delete');
     });
 });

