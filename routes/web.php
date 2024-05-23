<?php

use Illuminate\Support\Facades\Route;
use App\Models\Todo;
use App\Http\Controllers\TodoController;

Route::get('/', function () {
    return view('welcome', ['todos' => Todo::all()]);
});

Route::post('/', [TodoController::class, 'addNew']);
