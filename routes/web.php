<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ProductController;

Route::get('/', function () {
    return view('welcome');
});


Route::get('productCreate',[ProductController::class,'ProdCreate']);


Route::post('productStore',[ProductController::class,'ProdStore']);


Route::get('productView',[ProductController::class,'ProdView'])->name('prodView');

Route::get('productEdit/{id}',[ProductController::class,'ProdEdit'])->name('prodEdit');


