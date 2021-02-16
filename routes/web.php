<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ProgramController;
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


/*
|--------------------------------------------------------------------------
| Praktikum 1
|--------------------------------------------------------------------------
*/

// Route::get('/', function () {
//   return 'Selamat Datang';
// });

// Route::get('/about', function () {
//   return '1941720013 - Mochammad Syaifuddin Zuhri';
// });

// Route::get('/articles/{id}', function ($id) {
//   return 'Halaman artikel dengan ID ' . $id;
// });



/*
|--------------------------------------------------------------------------
| Praktikum 2
|--------------------------------------------------------------------------
*/

// Route::get('/', [PageController::class, 'index']);
// Route::get('/about', [PageController::class, 'about']);
// Route::get('/articles/{id}', [PageController::class, 'articles']);

// Modifikasi Routes
// Route::get('/', [HomeController::class, 'index']);
// Route::get('/about', [AboutController::class, 'index']);
// Route::get('/articles/{id}', [ArticleController::class, 'index']);

/*
|--------------------------------------------------------------------------
| Praktikum 3
|--------------------------------------------------------------------------
*/

// Route::get('/', [HomeController::class, 'index'])->name('home.index');

// Route::group(['prefix' => 'category'], function () {
//   Route::get('/', [CategoryController::class, 'index'])->name('category.index');
//   Route::get('/{category}', [CategoryController::class, 'showProducts'])->name('category.showproducts');
// });

// Route::get('/news', [NewsController::class, 'index'])->name('news.index');
// Route::get('/news/{news}', [NewsController::class, 'show'])->name('news.show');

// Route::group(['prefix' => 'program'], function () {
//   Route::get('/{program}', [ProgramController::class, 'listProgram'])->name('program.list');
// });

// Route::get('/about-us', [AboutUsController::class, 'index'])->name('aboutus.index');
// Route::resource('contact-us', ContactUsController::class);