<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\ConciertoController;
use App\Http\Controllers\Admin\ArtistaController;

Route::get('',[HomeController::class,'index'])->middleware('can:admin.home')->name('admin.home');

Route::resource('users',UserController::class)->middleware('can:admin.users')->names('admin.users');

Route::resource('conciertos',ConciertoController::class)->middleware('can:admin.conciertos')->names('admin.conciertos');

Route::resource('artistas',ArtistaController::class)->middleware('can:admin.artistas')->names('admin.artistas');