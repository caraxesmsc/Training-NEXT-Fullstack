<?php

use Illuminate\Support\Facades\Route;

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

use App\Http\Controllers\StudentController;

Route::get('/',[StudentController::class,'indexFunction']);
Route::get('/about',[StudentController::class,'aboutFunction']);
Route::get('/contact',[StudentController::class,'contactFunction']);

Route::get('/', function () {
    return view('welcome');
});
Route::get('/about', function () {
    return view('about');
});
