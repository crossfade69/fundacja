<?php 

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PostController;

// Strona główna
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::get('/register', [AuthController::class, 'showRegister'])->name('register');
Route::post('/register', [AuthController::class, 'register']);
Route::get('/dashboard', [PostController::class, 'create'])->name('dashboard');
Route::get('/posts/{id}', [PostController::class, 'show'])->name('posts.show');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
// Trasa dla dynamicznych stron (np. /praktyki/o-fundacji)
Route::get('/{slug}', [PageController::class, 'show']);

Route::get('/projekty', [PostController::class, 'projekty'])->name('projekty');
Route::get('/aktualnosci/{page?}', [PostController::class, 'aktualnosci'])->where('page', '[0-9]+')->name('aktualnosci');
Route::get('/sprawozdania', [PostController::class, 'sprawozdania'])->name('sprawozdania');

// Trasy dla postów
Route::prefix('posts')->group(function () {
    Route::post('/', [PostController::class, 'store'])->name('posts.store');
    Route::get('/{post}/edit', [PostController::class, 'edit'])->name('posts.edit');
    Route::put('/{post}', [PostController::class, 'update'])->name('posts.update');
    Route::delete('/{post}', [PostController::class, 'destroy'])->name('posts.destroy');
});


