<?php

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

Route::get('/', function () {
    return '<h1>hello user!</h1>
            <div>
                <a href="/public/">Главная</a>
                <a href="/public/info">Информация</a>
                <a href="/public/news">Новости</a>
            </div>';
});

Route::get('/info', function () {
    return '<h1>project information</h1>
            <div>
                <a href="/public/">Главная</a>
                <a href="/public/info">Информация</a>
                <a href="/public/news">Новости</a>
            </div>
            <p>lesson 1</p>';
});

Route::get('/news', function () {
    return '<h1>News</h1>
            <div>
                <a href="/public/">Главная</a>
                <a href="/public/info">Информация</a>
                <a href="/public/news">Новости</a>
            </div>
            <p>page for news</p>';
});