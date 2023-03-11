<?php

use Illuminate\Support\Facades\Route;

Route::get('/editor',[\Kovyakin\Editor\Http\Controllers\EditorController::class,'index']);
Route::post('/editor',[\Kovyakin\Editor\Http\Controllers\EditorController::class,'insert']);
