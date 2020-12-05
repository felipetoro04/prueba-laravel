<?php

use App\Models\Dog;
use App\Models\Animal;
use Illuminate\Support\Facades\Route;
use App\Http\Resources\DogResource;
use App\Http\Resources\AnimalResource;
use App\Http\Controllers\DogController;
use App\Http\Controllers\AnimalController;


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
Route::get('/dogs','DogContoller@index');
Route::get('/dogs/{dog}','DogContoller@show');
Route::get('/dogs','DogContoller@store');
Route::put('/dogs/{dog}','DogContoller@update');
Route::delete('/dogs/{dog}','DogContoller@destroy');

Route::get('/animals','AnimalContoller@index');
Route::get('/animals/{animal}','AnimalContoller@show');
Route::get('/animals','AnimalContoller@store');
Route::put('/animals/{animal}','AnimalContoller@update');
Route::delete('/animals/{animal}','AnimalContoller@destroy');
