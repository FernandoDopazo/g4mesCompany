<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\gameController;


Route::get('/', function () {
    return view('index');
});
Route::get('/games', [gameController::class, 'index'])->name('game.index');
Route::get('/games/create', [gameController::class, 'create'])->name('game.create');
Route::post('/post', [gameController::class, 'store'])->name('game.store');
//Route::get('/games/{game}', [gameController::class, 'show'])->name('game.show');
//Route::get('/games/{game}/edit', [gameController::class, 'edit'])->name('game.edit');
//Route::put('/games/{game}', [gameController::class, 'update'])->name('game.update');
//Route::delete('/games/{game}', [gameController::class, 'destroy'])->name('game.destroy');
Route::get('/consoles', [gameController::class, 'console'])->name('game.console');

