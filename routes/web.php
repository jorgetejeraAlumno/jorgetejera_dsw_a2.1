<?php

use App\Http\Controllers\doubtController;
use Illuminate\Support\Facades\Route;


//Route::get('/', function () {
  // return view('welcome');
//});
Route::get('/', [doubtController::class,'show_form'] )->name('show.form');
Route::post('/save_form', [doubtController::class,'save_form'] ) ->name('saveForm');
Route::get('/request', function(){
  return view('request');
} ) ->name('show.request');
Route::get('list_doubts',[doubtController::class,'show_db'])->name('list');
Route::DELETE('delete_db', [doubtController::class, 'delete_db'])->name('delete_db');