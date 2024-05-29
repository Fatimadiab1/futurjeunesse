<?php

use App\Http\Controllers\EvenementController;
use App\Http\Controllers\GroupeController;
use App\Http\Controllers\MembreController;
use App\Http\Controllers\ProfileController;
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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/members', [MembreController::class, 'index'])->name('members.index');
Route::get('/members/create', [MembreController::class, 'create'])->name('members.create');
Route::get('/members/{id}/edit', [MembreController::class, 'edit'])->name('members.edit');
Route::post('/members', [MembreController::class, 'store'])->name('members.store');
Route::put('/members/{id}', [MembreController::class, 'update'])->name('members.update');
Route::delete('/members/{id}', [MembreController::class, 'delete'])->name('members.delete');




Route::get('/groupes',[GroupeController::class,'groupes'])->name('groupes');
Route::get('/evenements',[EvenementController::class,'evenements'])->name('evenements');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
