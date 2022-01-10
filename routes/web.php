<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Products;
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
// Route::get('/user/{name}', function ($name) {
//     return view('users',["name"=>$name]);
// });
Route::get('users',[UsersController::class,'ShowUsers']);
Route::get('users/{user}',[UsersController::class,'loadView']);

// Route::view("user","users");
// Route::get("user",[UserController::class,'show']);
// Route::get("user/{id}",[UserController::class,'show']);

Route::get("/products",[Products::class,'showProducts']);
// Route::view("users","users");