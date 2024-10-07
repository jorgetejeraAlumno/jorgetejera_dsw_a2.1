<?php

use App\Http\Controllers\doubtController;
use Illuminate\Support\Facades\Route;


//Route::get('/', function () {
  // return view('welcome');
//});
Route::get('/', [doubtController::class,'show_form'] );
Route::post('/save_form', [doubtController::class,'save_form'] ) ->name('saveForm');