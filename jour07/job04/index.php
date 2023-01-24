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
  justify-center
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

<section class="flex justify-center pt-7 pb-8">

    <div class="block p-6 rounded-lg shadow-lg bg-white max-w-md">
        <form>
            <label class="form-check-label inline-block text-gray-800 font-semibold	">Genre</label>
            <div class="form-check pt-1">
                <label for="homme" class="form-check-label inline-block text-gray-800">Homme</label>
                <input type="radio" name="civilite" id="homme" value="homme"
                       class="form-check-input appearance-none rounded-full h-4 w-4 border border-gray-300 bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer">
            </div>

            <div class="form-check">
                <label for="femme" class="form-check-label inline-block text-gray-800">Femme</label>
                <input type="radio" name="civilite" id="femme" value="femme"
                       class="form-check-input appearance-none rounded-full h-4 w-4 border border-gray-300 bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer">
            </div>

            <div class="form-check">
                <label for="Nongenre" class="form-check-label inline-block text-gray-800">Non genré</label>
                <input type="radio" name="civilite" id="nongenre" value="nongenre"
                       class=" form-check-input appearance-none rounded-full h-4 w-4 border border-gray-300 bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer"
                       checked>
            </div>

            <div class="form-group pt-3">
                <label class="form-check-label inline-block text-gray-800 font-semibold	">Vos informations</label>
            </div>
            <div class="form-group">
                <label for="prenom" class="form-label inline-block mb-2 text-gray-700 pt-2">Prénom</label>
                <input type="text" name="prenom" class="
        form-control
        block
        w-full
        px-3
        py-1.5
        text-base
        font-normal
        text-gray-700
        bg-white bg-clip-padding
        border border-solid border-gray-300
        rounded
        transition
        ease-in-out
        m-0
        focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none
      ">
                <label for="nom" class="form-label inline-block mb-2 text-gray-700">Nom</label>
                <input type="text" name="nom" class="
        form-control
        block
        w-full
        px-3
        py-1.5
        text-base
        font-normal
        text-gray-700
        bg-white bg-clip-padding
        border border-solid border-gray-300
        rounded
        transition
        ease-in-out
        m-0
        focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none
      ">
                <label for="addresse" class="form-label inline-block mb-2 text-gray-700">Adresse</label>
                <input type="text" name="addresse" class="
        form-control
        block
        w-full
        px-3
        py-1.5
        text-base
        font-normal
        text-gray-700
        bg-white bg-clip-padding
        border border-solid border-gray-300
        rounded
        transition
        ease-in-out
        m-0
        focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none
      ">
                <label for="password" class="form-label inline-block mb-2 text-gray-700">Password</label>
                <input type="password" name="password" class="
        form-control
        block
        w-full
        px-3
        py-1.5
        text-base
        font-normal
        text-gray-700
        bg-white bg-clip-padding
        border border-solid border-gray-300
        rounded
        transition
        ease-in-out
        m-0
        focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none
      ">
                <label for="password2" class="form-label inline-block mb-2 text-gray-700">Confirmation password</label>
                <input type="password" name="password2" class="
        form-control
        block
        w-full
        px-3
        py-1.5
        text-base
        font-normal
        text-gray-700
        bg-white bg-clip-padding
        border border-solid border-gray-300
        rounded
        transition
        ease-in-out
        m-0
        focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none
      ">
                <div class="form-group pt-3">
                    <label class="form-check-label inline-block text-gray-800 font-semibold	">Vos passions</label>
                </div>
                <div class="form-check pt-1">
                    <input type="checkbox" id="informatique" name="passions"
                           class="form-check-input appearance-none h-4 w-4 border border-gray-300 rounded-sm bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer"
                           checked>
                    <label for="informatique" class="form-check-label inline-block text-gray-800">Informatique</label>
                </div>
                <div class="form-check">
                    <input type="checkbox" id="voyages" name="passions"
                           class="form-check-input appearance-none h-4 w-4 border border-gray-300 rounded-sm bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer">
                    <label for="informatique" class="form-check-label inline-block text-gray-800">Voyages</label>
                </div>
                <div class="form-check">
                    <input type="checkbox" id="sport" name="passions"
                           class="form-check-input appearance-none h-4 w-4 border border-gray-300 rounded-sm bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer">
                    <label for="informatique" class="form-check-label inline-block text-gray-800">Sport</label>
                </div>
                <div class="form-check">
                    <input type="checkbox" id="Lecture" name="passions"
                           class="form-check-input appearance-none h-4 w-4 border border-gray-300 rounded-sm bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer">
                    <label for="informatique" class="form-check-label inline-block text-gray-800">Lecture</label>
                </div>
                <div class="form-group pt-3">
                    <button type="submit" class="
      w-full
      px-6
      py-2.5
      bg-blue-600
      text-white
      font-medium
      text-xs
      leading-tight
      uppercase
      rounded
      shadow-md
      hover:bg-blue-700 hover:shadow-lg
      focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0
      active:bg-blue-800 active:shadow-lg
      transition
      duration-150
      ease-in-out">Envoyer
                    </button>
                </div>
        </form>
    </div>
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

