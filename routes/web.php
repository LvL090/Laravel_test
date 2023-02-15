<?php

use Illuminate\Support\Facades\Route;
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
Route::get('/index', [UsersController::class, 'index'])->name('index');

Route::get('/create', [UsersController::class, 'create']);

Route::get('/edit/{user_id}', [UsersController::class, 'viewEdit'])->name('viewEdit');

Route::get('/delete/{user_id}', [UsersController::class, 'delete'])->name('deleteUser');

Route::get('/check_create', function () {
    return view('check_create');
})->name('check_create');

Route::get('/check_edit', function () {
    return view('check_edit');
})->name('check_edit');

Route::get('/check_delete', function () {
    return view('check_delete');
})->name('check_delete');



Route::post('/create/storeUser', [UsersController::class, 'storeUser'])->name('storeUser');
Route::post('/edit/updateUser', [UsersController::class, 'updateUser'])->name('updateUser');


