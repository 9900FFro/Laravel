<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\homeController;
use App\Http\Controllers\newsController;
use App\Http\Controllers\formController;

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
    return view('welcome');
});

Route::get('/home', [homeController::class, 'home'])
    ->name('home');
// Route::get('/news', [newsController::class, 'news'])
//     ->name('news');

Route::group([
    'prefix' => '/news',
    'as' => 'news::',
], function () {
    Route::get('/', [newsController::class, 'news'])
    ->name('news');
    Route::get('/news/{category}', [newsController::class, 'card'])
    ->name('card');
});

Route::match(['get', 'post'], '/feedback', [formController::class, 'form'])
    ->name('form');