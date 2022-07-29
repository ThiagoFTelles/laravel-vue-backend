<?php

use App\Http\Controllers\UsersController;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::get('/users', [UsersController::class, 'index']);
//TODO: Paginar o retorno caso haja muitos users.

Route::post('/users', [UsersController::class, 'store']);
