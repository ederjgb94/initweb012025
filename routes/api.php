<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:sanctum');


// Route::get('/hello1', function () {
//     return response()->json(['message' => 'Hello World1!']);
// });

// Route::post('/hello2', function (Request $request) {
//     $edad = $request['edad'];
//     $costo = $request['costo'];
//     $suma = $edad + $costo;
    
//     return response()->json(['suma' => $suma]);
// });

Route::apiResource('pets', 'App\Http\Controllers\PetController');

// Route::get('/pets', 'App\Http\Controllers\PetController@index');
// Route::post('/pets', 'App\Http\Controllers\PetController@store');
// Route::get('/pets/{pet}', 'App\Http\Controllers\PetController@show');
// Route::put('/pets/{pet}', 'App\Http\Controllers\PetController@update');
// Route::delete('/pets/{pet}', 'App\Http\Controllers\PetController@destroy');