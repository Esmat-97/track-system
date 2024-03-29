<?php

use Illuminate\Support\Facades\Route;
use App\Http\controllers\studcontrol;
use App\Http\controllers\categorycontrol;
use App\Http\controllers\Usercontrol;
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


Route::get('/edit/{id}', [studcontrol:: class ,"edit"])->name('edit');

Route::put('/update/{id}', [studcontrol:: class ,"update"])->name('update');


Route::delete('/destroy/{id}',[studcontrol:: class ,"destroy"]);


Route::post('/save',[studcontrol:: class ,"store"]);



Route::get('/form',[studcontrol:: class ,"create"]);






                               /*                 */



  Route::get('/user/data',[Usercontrol :: class ,"index"]);


  Route::get('/user/detail/{id}', [Usercontrol :: class ,"details"]);


  Route::delete('/user/destroy/{id}',[Usercontrol :: class ,"destroy"]);


                            /*             */



Route::get('/category/data',[categorycontrol:: class ,"index"]);

Route::get('/category/detail/{id}', [categorycontrol:: class ,"details"])->name('track.show');


Route::get('/category/edit/{id}', [categorycontrol:: class ,"edit"]);


Route::put('/category/update/{id}', [categorycontrol:: class ,"update"])->name('update');


 Route::get('/category/form',[categorycontrol:: class ,"create"]);


Route::post('/category/save',[categorycontrol:: class ,"store"]);


Route::delete('/category/destroy/{id}',[categorycontrol:: class ,"destroy"]);







Route::get('/four',[studcontrol:: class ,"moh1"]);


Route::get('/three/{id}', [studcontrol:: class ,"moh2"]);


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
