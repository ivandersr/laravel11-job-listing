<?php

use App\Http\Controllers\JobController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'home');
Route::view('/contact', 'contact');
Route::view('/meet-the-team', 'meet-the-team');

Route::resource('jobs', JobController::class);
