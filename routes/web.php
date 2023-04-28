<?php

use App\Http\Controllers\Comments\IndexController;
use App\Http\Controllers\Comments\ModerateController;
use App\Http\Controllers\Comments\SearchController;
use App\Http\Controllers\Comments\ShowController;
use App\Http\Controllers\Comments\StoreController;
use Illuminate\Support\Facades\Route;

Route::get('/', IndexController::class)->name('home');
Route::post('/', StoreController::class)->name('create-feedback');

Route::get('/feedbacks', ShowController::class)->name('feedbacks');
Route::get('/feedbacks/{keyword}', SearchController::class)->name('search-feedback');

Route::get('/admin', [ModerateController::class, 'index'])->name('admin');
Route::put('/admin/accept/{feedback}', [ModerateController::class, 'accept'])->name('accept-feedback');
Route::put('/admin/reject/{feedback}', [ModerateController::class, 'reject'])->name('reject-feedback');

