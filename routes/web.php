<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Models\User;

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
Route::resource('user', UserController::class);
Route::get('user/getDownline/{id}', [UserController::class, 'getDownline'])->name('user.getdownline');
Route::get('exercise', [UserController::class, 'exer1'])->name('user.exercise');