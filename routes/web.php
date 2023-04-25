<?php

use App\Http\Controllers\NoteController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\QuoteController;




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

Route::middleware(['auth'])->prefix('notes')->group(function () {
    Route::get('/', [NoteController::class, 'index'])->name('note.index');
    Route::get('/create', [NoteController::class, 'create'])->name('note.create');
    Route::post('/store', [NoteController::class, 'store'])->name('note.store');
    Route::get('/{note}/edit', [NoteController::class, 'edit'])->name('note.edit');
    Route::patch('/{note}/update', [NoteController::class, 'update'])->name('note.update');
    Route::delete('/{note}/delete', [NoteController::class, 'destroy'])->name('note.delete');
});


