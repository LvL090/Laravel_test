<?php

use Illuminate\Support\Facades\Route;
//use App\Http\Controllers\GamesController;
use App\Http\Controllers\UsersController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/index', [UsersController::class, 'index']);
Route::get('/create', [UsersController::class, 'create']);
Route::get('/edit', function () {
    return view('edit');
});
