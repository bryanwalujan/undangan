<?php

use App\Http\Controllers\UcapanController;
use Illuminate\Support\Facades\Route;

Route::get('/', [UcapanController::class, 'index'])->name('home');

Route::post('/ucapan', [UcapanController::class, 'store'])->name('ucapan.store');
Route::get('/ucapan/latest', [UcapanController::class, 'latest'])->name('ucapan.latest');