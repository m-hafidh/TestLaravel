<?php

use App\Utilisateur;
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
    //Enregistrer nos informatioon sur la base de données
    $utilisateur = new App\Models\Utilisateur();
    $utilisateur->email = request('email');
   // $utilisateur->mot_de_passe = request('password');
    //On peut utiliser une fonction pour cacher le mot de passe dzns la base de données 
    $utilisateur->mot_de_passe = bcrypt(request('password'));

    $utilisateur->save();
      return 'Nous avons reçu votre email qui est : ' .request('email') . 'et votre mot de passe est :' .request('password');
});

//Route::get('/inscription', function (){
  //  return 'Formumaire reçu';
//});

