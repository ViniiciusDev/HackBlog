<?php

use App\Http\Controllers\ArticlesController;
use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;

Route::get('/', [MainController::class, 'home'])->name('homepage');
Route::get('/aboutus', [MainController::class, 'aboutus'])->name('aboutUs');
Route::get('/contacts', [MainController::class, 'contact'])->name('contact');
Route::get('/articles', [ArticlesController::class, 'articles'])->name('articles');
Route::get('/article/{id}', [ArticlesController::class, 'article'])->name('article');
