<?php

use Illuminate\Support\Facades\Route;
use App\Http\controllers\studcontrol;
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






Route::get('/',[studcontrol:: class ,"welcome"]);

Route::get('/data',[studcontrol:: class ,"index"]);

Route::get('/detail/{id}', [studcontrol:: class ,"details"]);

Route::get('/form',[studcontrol:: class ,"create"]);


Route::post('/save',[studcontrol:: class ,"store"]);


Route::delete('/destroy/{id}',[studcontrol:: class ,"destroy"]);




Route::get('/four',[studcontrol:: class ,"moh1"]);


Route::get('/three/{id}', [studcontrol:: class ,"moh2"]);

