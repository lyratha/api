<?php

use Illuminate\Http\Request;


Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::apiResource('/products','ProductController');
Route::group(['prefix'=>'product'],function(){
    Route::apiResource('/{product}/reviews','ReviewController');
});