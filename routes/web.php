<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\FeedbackController;
use Illuminate\Support\Facades\Route;

Route::get('/feedback',[FeedbackController::class,'feedback']);

Route::post('/feedbackAdd',[FeedbackController::class,'feedbackAdd']);

Route::get('/home',[AdminController::class,'index'])->name('home');

Route::get('/',[AdminController::class,'home']);

Route::get('/create_room',[AdminController::class,'create_room']);

Route::post('/add_room',[AdminController::class,'add_room']);

Route::get('/view_room',[AdminController::class,'view_room']);

Route::get('/delete_room/{id}',[AdminController::class,'delete_room']);


Route::get('/update_room/{id}',[AdminController::class,'update_room']);

Route::post('/edit_room/{id}',[AdminController::class,'edit_room']);

Route::get('/room_detail/{id}',[HomeController::class,'room_detail']);





