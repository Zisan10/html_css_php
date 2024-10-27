<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\InfosController;
use App\Http\Controllers\HomeController;
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

Route::get('/', [HomeController::class, 'index'])->name('/');
Route::get('/about', [HomeController::class, 'about'])->name('/about');
Route::get('/contact', [HomeController::class, 'contact'])->name('/contact');
Route::get('/facebookContact', [HomeController::class, 'facebookContact'])->name('/facebookContact');
//contact detail store

Route::get('/dashboard', function () {
    return view('frontend/dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::POST('/contact/store', [InfosController::class, 'store'])->name('contact.store');
});

require __DIR__.'/auth.php';
