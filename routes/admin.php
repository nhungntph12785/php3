<?php

use App\Http\Controllers\CarController;
use App\Http\Controllers\PassengerController;
use Illuminate\Support\Facades\Route;

//     Route::prefix('cars')->group(function(){
//         Route::get('/', [CarController::class,'index'])->name('car.index');
//     };
//     // Route::prefix('cars')->group(function () {
//     // Route::get('/{id}', [CarController::class, 'detail'])->name('cate.detail');



// // });
    Route::prefix('cars')->group(function(){
    Route::get('/', [CarController::class,'index'])->name('car.index');
    Route::get('add',[CarController::class,'addForm'])->name('car.add');
    Route::post('add',[CarController::class,'saveAdd']);
    Route::get('/remove/{id}', [CarController::class, 'remove'])->name('car.remove');
    Route::get('edit/{id}',[CarController::class,'editForm'])->name('car.edit');
    Route::post('edit/{id}',[CarController::class,'saveEdit']);
});

Route::prefix('passengers')->group(function(){
    Route::get('/', [PassengerController::class,'index'])->name('passenger.index');
    Route::get('add',[PassengerController::class,'addForm'])->name('passenger.add');
    Route::post('add',[PassengerController::class,'saveAdd']);
    Route::get('/remove/{id}', [PassengerController::class, 'remove'])->name('passenger.remove');
    Route::get('edit/{id}',[PassengerController::class,'editForm'])->name('passenger.edit');
    Route::post('edit/{id}',[PassengerController::class,'saveEdit']);
});



?>