<?php

use App\Http\Controllers\CompanyController;
use App\Http\Controllers\CorpController;
use App\Http\Controllers\HeadquarterController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\SoldierController;
use App\Models\Headquarter;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/formularioProducto',[ProductController::class,'create']);
Route::post('/storeProducto',[ProductController::class,'store'])->name('product.store');

Route::get('/registroSoldados',[SoldierController::class,'create']);
Route::post('/storeSoldados',[SoldierController::class,'store'])->name('soldier.store');

Route::get('/registroCuartel',[HeadquarterController::class,'create']);
Route::post('/storeCuartel',[HeadquarterController::class,'store'])->name('headquarter.store');

Route::get('/registroCuerpo',[CorpController::class,'create']);
Route::post('/storeCuerpo',[CorpController::class,'store'])->name('corp.store');

Route::get('/registroCompania',[CompanyController::class,'create']);
Route::post('/storeCompania',[CompanyController::class,'store'])->name('company.store');

Route::get('/registroServicio',[ServiceController::class,'create']);
Route::post('/storeServicio',[ServiceController::class,'store'])->name('service.store');


