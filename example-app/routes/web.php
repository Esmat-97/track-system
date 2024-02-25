<?php

use Illuminate\Support\Facades\Route;
use App\Http\controllers\studcontrol;
use App\Http\controllers\categorycontrol;
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






Route::get('/category/data',[categorycontrol:: class ,"index"]);

Route::get('/category/detail/{id}', [categorycontrol:: class ,"details"]);

 Route::get('/category/form',[categorycontrol:: class ,"create"]);


Route::post('/category/save',[categorycontrol:: class ,"store"]);


Route::delete('/category/destroy/{id}',[categorycontrol:: class ,"destroy"]);







Route::get('/four',[studcontrol:: class ,"moh1"]);


Route::get('/three/{id}', [studcontrol:: class ,"moh2"]);

