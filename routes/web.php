<?php

use App\Http\Controllers\TicketController;
use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
Route::get('/',function(){
    return view('index');
});

// tickets routes
Route::get('/tickets',[TicketController::class,'index']);
Route::get('tickets/create',[TicketController::class,'create']);
Route::post('tickets/store',[TicketController::class,'store']);
Route::get('tickets/delete/{id}',[TicketController::class,'delete']);
Route::get('tickets/edit/{id}',[TicketController::class,'edit']);
Route::patch('tickets/update/{id}',[TicketController::class,'update']);

// category route
Route::resource('category', CategoryController::class);
Route::get('category/delete/{category}',[ CategoryController::class, 'destroy']);
