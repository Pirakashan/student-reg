<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\studentController;

Route::get('/test', function () {
    return 'Backend is working!';
});




Route::get('/', [studentController::class, 'viewForm'])->name('home'); 
Route::post('/addstudent', [studentController::class, 'addstudent']);