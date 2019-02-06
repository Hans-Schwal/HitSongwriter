<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<!doctype html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="../assets/css/style.css">
  <title>H!T Songwriter</title>
</head>
<body>
  <!--  Navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-info">
    <a class="navbar-brand" href="index.php">H!T Songwriter</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-item nav-link active" href="#">Un peu de théorie<span class="sr-only">(current)</span></a>
        <a class="nav-item nav-link active" href="#">Composez !</a>
        <a class="nav-item nav-link active" href="../views/popularProgressions.php">Les progs les + populaires</a>
        <a class="nav-item nav-link active" href="#">Votre espace</a>
      </div>
    </div>
  </nav>
  <!-- Première section du parallax -->
  <div class="jumbotron paral paralsec">
    <h1 class="display-3">Bienvenue sur H!T Songwriter</h1>
    <p class="lead">Un hit en quelques clics!</p>
    <p class="lead">
      <a class="btn btn-success btn-lg" href="../views/createAccount.php" role="button">Créer votre compte!</a>
      <a class="btn btn-danger btn-lg" href="../views/loginPage.php" role="button">Connectez-vous</a>
    </p>
  </div>
  <!-- Seconde section du parallax -->
  <div class="jumbotron paral paralsec1">
    <h1 class="display-3">L'outil qui simplifie la composition !</h1>
    <p class="lead">Une méthode rapide et efficace pour vous exprimer en musique !</p>
    <p class="lead">
      <a class="btn btn-primary btn-lg btn-md" href="widgets.html" role="button">En savoir plus !</a>
    </p>
  </div>
  <!-- Troisième section du parallax -->
  <div class="jumbotron paral paralsec2">
    <h1 class="display-3">Seul(e) ou avec vos ami(e)s</h1>
    <p class="lead">Faites sonner vos émotions!</p>
    <p class="lead">
      <a class="btn btn-primary btn-lg btn-md" href="../views/popularProgressions.php" role="button">Les progs les + populaires !</a>
    </p>
  </div>
<!-- Footer -->
<footer>
    <p>Hans SCHWAL Titre Professionnel Développeur Web & Web Mobile 2018-2019 La MANU Amiens</p>
    <p>&#xA9; Tous droits réservés</p>
</footer>
</body>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
