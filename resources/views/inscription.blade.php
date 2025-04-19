<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
</head>
<body>
@include("header")

@extends("layouts.main") <!--Appelons le fichier qui contien mon layout-->
@section('contenu')



   <form action="/inscription" method="post">
       <!--le csrf est est une derivé pour proteger notre formulaire-->
       {{csrf_field()}}

       <input type="email" name="email" placeholder="email">
       <input type="password" name="password" placeholder="Mot de passe">
       <input type="password" name="password_confirmation" placeholder="Mot de passe confirmation">
       <input type="submit" value="S'inscrire">
   </form>
@endsection

@include("footer")
</body>
</html>
