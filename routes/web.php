<?php

use Illuminate\Support\Facades\Route;

//La route pour afficher la page welcome sur le navigateur
Route::get('/', function () {
    return view('welcome');
});

// la route pour afficher le fichier test
Route :: get('/test', function (){

    return view('test');
});

