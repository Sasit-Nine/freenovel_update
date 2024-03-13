<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\writtercontroller;
use App\Http\Controllers\NovelsController;

Route::get('/catlist',[NovelsController::class,'catlist'])->name('catlist');
Route::get('/resume',[NovelsController::class,'resume'])->name('resume');
Route::get('/allnovel',[NovelsController::class,'allnovel'])->name('allnovel');
Route::get('/',[NovelsController::class,'welcome'])->name('welcome');
Route::get('/blog/{id}',[NovelsController::class,'read'])->name('read');
Route::get('category/{cat}',[NovelsController::class,'category'])->name('category');
Route::prefix('author')->group(function(){
    Route::get('/blog',[writtercontroller::class,'novel'])->name('blog');

    Route::get('/write',[writtercontroller::class,'write'])->name('write');

    Route::post('/insert',[writtercontroller::class,'insert'])->name('insert');

    Route::get('/delete/{id}',[writtercontroller::class,'delete'])->name('delete');

    Route::get('/change/{id}',[writtercontroller::class,'change'])->name('change');

    Route::get('/edit/{id}',[writtercontroller::class,'edit'])->name('edit');

    Route::post('/update/{id}',[writtercontroller::class,'update'])->name('update');
});



Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
