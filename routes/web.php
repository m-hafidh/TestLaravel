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

// La route pour afficher le fichier afficher
Route :: get ('/afficher', function (){
    return view('affiche', ['name' =>'Al-fahami'],['prenom'=>'Toihir']);
});

//une nouvelle route pour la page inscription
Route :: get ('/inscription', function (){
  return view('inscription');

});
// recuperer le champ email
Route :: post('/inscription', function (){
    //return 'votre email est : ' .$_POST('email');
      return 'votre email est : ' .request('email');
});

//Route::get('/inscription', function (){
  //  return 'Formumaire reçu';
//});

