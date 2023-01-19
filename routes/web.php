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

    $name = "Lucio";
    $surname = "Bo";
    $listaSpesa = ["pizza","cacicavallo","birra tanta!"];

    return view('Home', [
        "name" => $name,
        "surname" => $surname,
        "listaSpesa" => $listaSpesa,
    ]);
});

Route::get('/Contatti', function () {

    $name = "Lucio";
    $surname = "Bo";
    $ContattiLucio = ["Lucio Bo","Via le mani dal...","luciobo@mailacaso.com"];

    return view('Contatti', [
        
        "name" => $name,
        "surname" => $surname,
        "ContattiLucio" => $ContattiLucio
    ]);
})->name("Contatti");
