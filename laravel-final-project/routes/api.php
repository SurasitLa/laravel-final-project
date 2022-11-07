<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\StudentController;

Route::get('/students',[App\Http\Controllers\StudentController::class, 'index']);
Route::get('/grades',[App\Http\Controllers\StudentController::class, 'index']);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
