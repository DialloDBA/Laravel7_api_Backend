<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ProductController;




Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

// Route::controller(ProductController::class)->group(function(){
//     Route::get('/products','index');
//     Route::post('/products','store');
//     Route::get('/product/{id}','show');
//     Route::put('/products/{id}','update');
//     Route::delete('/products/{id}','destroy');
// });

Route::namespace('Api')->group(function(){
    Route::get('/products', 'ProductController@index');
    Route::post('/product', 'ProductController@store');
    Route::get('/product/{id}', 'ProductController@show');
    Route::put('/product/{id}', 'ProductController@update');
    Route::delete('/product/{id}', 'ProductController@destroy');
});