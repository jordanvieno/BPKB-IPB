<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\AdminArticleController;

Route::get('/articles', [ArticleController::class, 'index'])->name('articles.index');

Route::middleware(['auth', 'admin'])->prefix('admin')->name('admin.')->group(function () {
    Route::resource('articles', AdminArticleController::class);
});

use App\Http\Controllers\ArticleController as PublicArticleController;

Route::get('/articles/{article}', [PublicArticleController::class, 'detail'])->name('articles.detail');

use App\Http\Controllers\ProjectRplController;

Route::get('/project-rpl/home', [ProjectRplController::class, 'home'])->name('project_rpl.home');
