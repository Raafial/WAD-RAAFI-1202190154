<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Modul5Controller;
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

// Route::get('/', function () {
//    return view('welcome');
// });

Route::get('/', [Modul5Controller::class,'index']);
Route::get('/create', [Modul5Controller::class, 'create']);
Route::get('/vaccine', [Modul5Controller::class, 'vaccine']);
Route::post('/store', [Modul5Controller::class, 'store']);
Route::get('/show/{id}', [Modul5Controller::class, 'show']);
Route::post('/update/{id}', [Modul5Controller::class, 'update']);
Route::get('/destroy/{id}', [Modul5Controller::class, 'destroy']);