<?php

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
    $congresos = Congreso::all();
    return view('index', compact('congresos'));
});


Route::get('/nuevoDocuemnto', function () {
    return view('nuevoDocuemnto');
});
