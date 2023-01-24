<?php
?>
<!doctype html>
<html lang=fr>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Document</title>
</head>
<body>

<header>
    <nav class="
  relative
  w-full
  flex flex-wrap
  items-center
  justify-between
  py-4
  bg-blue-100
  text-blue-700
  shadow-lg
  navbar navbar-expand-lg navbar-light
  ">
        <ul class="flex">
            <li class="px-4  hover:text-blue-500 focus:hover:text-blue-500"><a href="index.php">Accueil</a></li>
            <li class="px-4 hover:text-blue-500 focus:hover:text-blue-500"><a href="index.php">Inscription</a></li>
            <li class="px-4 hover:text-blue-500 focus:hover:text-blue-500"><a href="index.php">Connexion</a></li>
            <li class="px-4 hover:text-blue-500 focus:hover:text-blue-500"><a href="index.php">Rechercher</a></li>
        </ul>
    </nav>
</header>

<h1 class="text-3xl font-bold underline">
    Hello world!
</h1>

<section>
    <form>
        <label for="homme">Monsieur</label>
        <input type="radio" name="civilite" id="homme" value="homme">

        <label for="femme">Femme</label>
        <input type="radio" name="civilite" id="femme" value="femme">

        <label for="Nongenre">Non genré</label>
        <input type="radio" name="civilite" id="nongenre" value="nongenre" checked>


        <label for="prenom">Prénom</label>
        <input type="text" name="prenom">
        <label for="nom">Nom</label>
        <input type="text" name="nom">
        <label for="addresse">Adresse</label>
        <input type="text" name="addresse">
        <label for="password">Password</label>
        <input type="password" name="password">
        <label for="password2">Confirmation password</label>
        <input type="password" name="password2">


        <input type="checkbox" id="informatique" name="passions" checked>
        <label for="informatique">Informatique</label>

        <input type="checkbox" id="voyages" name="passions">
        <label for="informatique">Voyages</label>

        <input type="checkbox" id="sport" name="passions">
        <label for="informatique">Sport</label>

        <input type="checkbox" id="Lecture" name="passions">
        <label for="informatique">Lecture</label>


        <input type="submit" value="Envoyer">
    </form>
</section>
<footer class="text-center bg-gray-900 text-black">
    <ul class="text-center p-4" style="background-color: rgb(178,203,238);">
        <li class="px-4 hover:text-blue-500 focus:hover:text-blue-500"><a href="index.php">Accueil</a></li>
        <li class="px-4 hover:text-blue-500 focus:hover:text-blue-500"><a href="index.php">Inscription</a></li>
        <li class="px-4 hover:text-blue-500 focus:hover:text-blue-500"><a href="index.php">Connexion</a></li>
        <li class="px-4 hover:text-blue-500 focus:hover:text-blue-500"><a href="index.php">Rechercher</a></li>
    </ul>
    <div class="text-center p-4" style="background-color: rgb(178,203,238);">
        © 2023 Copyright:
        <a class="text-whitehite" href="-vair.st…/">Axel Vair</a>
    </div>
</footer>
</body>
</html>

