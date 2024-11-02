<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CrudController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/',[CrudController::class,'index']);
Route::get('/show_data',[CrudController::class,'show_data']);
Route::get('/add_data',[CrudController::class,'add_data']);
Route::post('store_data',[CrudController::class,'store_data']);
