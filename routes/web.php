<?php

use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\CarController;

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/car', [CarController::class, 'index']);


//controller grouping 
// Route::controller(CarController::class)->group(function(){
//     Route::get('/car', 'index');
//     Route::get('/my-car', 'my-car');
// });


// Route::get('/car', CarController::class);