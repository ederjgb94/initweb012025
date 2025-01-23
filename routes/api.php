<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


Route::get('/hello1', function () {
    return response()->json(['message' => 'Hello World1!']);
});

Route::post('/hello2', function (Request $request) {
    $edad = $request['edad'];
    $costo = $request['costo'];
    $suma = $edad + $costo;
    
    return response()->json(['suma' => $suma]);
});
