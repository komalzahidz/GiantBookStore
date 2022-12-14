<?php


use App\Http\Controllers\BookDetailController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\InsertController;
use App\Http\Controllers\PublisherController;
use App\Http\Controllers\PublisherDetailController;
use Illuminate\Support\Facades\Route;

/*
Nama: Stephanie Adhisaputra
NIM:2440033880
Kelas: LM01
*/


Route::get('/', [HomeController::class, 'viewBook'])->name('home');
Route::get('/book/{id}', [BookDetailController::class, 'viewBookDetail'])->name('book detail');

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/publisher', [PublisherController::class, 'viewPublisher'])->name('publisher');
Route::get('/publisher/{id}', [PublisherDetailController::class, 'viewPublisherDetail'])->name('publisher detail');

Route::get('/category/{id}', [CategoryController::class, 'viewCategory'])->name('category');
Route::get('/category', [CategoryController::class, 'allCategory']);

Route::get('/insert', function () {
    return view('insert');
});
Route::post('/insert', [InsertController::class, 'insert'])->name('insert');
