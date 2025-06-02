<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

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
    Route::get('/', function () {
        return redirect()->route('admin.dashboard');
    })->name('home');

    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    })->name('dashboard');

    Route::resource('articles', AdminArticleController::class);

    Route::get('/dokumentasi', [\App\Http\Controllers\AdminDocumentationController::class, 'index'])->name('dokumentasi.index');
    Route::get('/dokumentasi/create', [\App\Http\Controllers\AdminDocumentationController::class, 'create'])->name('dokumentasi.create');
    Route::post('/dokumentasi', [\App\Http\Controllers\AdminDocumentationController::class, 'store'])->name('dokumentasi.store');
    Route::get('/dokumentasi/{documentation}', [\App\Http\Controllers\AdminDocumentationController::class, 'show'])->name('dokumentasi.show');
    Route::get('/dokumentasi/{documentation}/edit', [\App\Http\Controllers\AdminDocumentationController::class, 'edit'])->name('dokumentasi.edit');
    Route::put('/dokumentasi/{documentation}', [\App\Http\Controllers\AdminDocumentationController::class, 'update'])->name('dokumentasi.update');
    Route::delete('/dokumentasi/{documentation}', [\App\Http\Controllers\AdminDocumentationController::class, 'destroy'])->name('dokumentasi.destroy');

    Route::get('/operasi', [\App\Http\Controllers\AdminOperasiController::class, 'index'])->name('operasi.index');
    Route::post('/operasi/update', [\App\Http\Controllers\AdminOperasiController::class, 'update'])->name('operasi.update');

    // API endpoint to get operasi data as JSON
    Route::get('/api/operasi-data', [\App\Http\Controllers\AdminOperasiController::class, 'getOperasiData'])->name('api.operasi.data');
});

use App\Http\Controllers\ArticleController as PublicArticleController;

Route::get('/articles/{article}', [PublicArticleController::class, 'detail'])->name('articles.detail');

use App\Http\Controllers\ProjectRplController;

Route::get('/', [ProjectRplController::class, 'home'])->name('project_rpl.home');
Route::get('/document', [ProjectRplController::class, 'document'])->name('project_rpl.document');

Route::view('/about-us', 'about')->name('about_us');
