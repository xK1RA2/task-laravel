<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
   dd(auth::check());
});

Auth::routes();


Route::resource('tasks',App\Http\Controllers\TaskController::class);