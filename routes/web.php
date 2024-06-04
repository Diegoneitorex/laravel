<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\MainController; 

Route::get('/',[MainController::class,'index'])->name('home');
Route::get('/listar',[MainController::class,'listar'])->name('listar');
Route::post('/create',[MainController::class,'create'])->name('create');
Route::delete('/delete/{jugador}',[MainController::class,'delete'])->name('delete');
