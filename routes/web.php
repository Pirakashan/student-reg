<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\studentController;



Route::get('/', [studentController::class, 'viewForm'])->name('home'); 
Route::post('/addstudent', [studentController::class, 'addstudent']);