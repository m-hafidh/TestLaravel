<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravale</title>
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
</head>
<body>
<h1> Mon Troisieme titre</h1>
<p> Salut! Mr {{$name}} {{$prenom}}</p> <br>

<form method="POST" action="">

   Nom: <input type="text" name="nom" > <br> <br>
   Prenom : <input type="text" name="prenom" > <br> <br>
   E-mail : <input type="email" name="email" ><br><br>
            <input type="button" name="btn" value="Envoyer">


</form>


</body>
</html>
