<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\TodosController;
use App\Http\Controllers\TodosCotroller;
use Illuminate\Support\Facades\Route;

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



Route::get('todos',[TodosController::class,'index']);
Route::get('todos/create',[TodosController::class,'create']);
Route::post('store-todo',[TodosController::class,'store']);
Route::get('todos/{id}',[TodosController::class,'show']);
Route::get('todos/{id}/edit',[TodosController::class,'edit']);
Route::post('todos/{id}/update',[TodosController::class,'update']);
Route::get('todos/{id}/delete',[TodosController::class,'destroy']);
Route::get('todos/{id}/complete',[TodosController::class,'complete']);  
