<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
session_start();
//require 'controllers/mainPageController.php';
?>
<!doctype html>
<html lang="fr" dir="ltr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/smoothness/jquery-ui.css">
    <link href="https://fonts.googleapis.com/css?family=Bowlby+One+SC" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../assets/css/mainPageStyle.css">
    <title>H!T Songwriter</title>
</head>
<body>
    <?php 
        if(isset($_SESSION['id-roles'])){
            if ($_SESSION['id-roles'] == 2){
            echo 'Utilisateur';
            echo $_SESSION['id-roles'];
            echo '<a href="../controlers/destroySessionControler.php">Deco</a>';
        }elseif ($_SESSION['id-roles'] == 1){
            echo 'Administrateur';
            echo $_SESSION['id-roles'];
            echo '<a href="../controlers/destroySessionControler.php">Deco</a>';
        }else{
            header('location:loginPage.php');
        }
    }
    ?>
  <!--  Navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-info">
    <a class="navbar-brand" href="../index.php">H!T Songwriter</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-item nav-link active" href="#">Un peu de théorie<span class="sr-only">(current)</span></a>
        <a class="nav-item nav-link active" href="../views/compose.php">Composez !</a>
        <a class="nav-item nav-link active" href="../views/popularProgressions.php">Les progs les + populaires</a>
        <a class="nav-item nav-link active" href="#">Votre espace</a>
        <?php 
            if (isset($_SESSION['userName'])){
        ?>
        <a class="nav-item nav-link active" href="loginPage.php?disconnect">Deconnexion</a>
            <?php }
            if ($_SESSION['id_roles'] == 1){
        ?>
        <a class="nav-item nav-link active" href="views/adminPage.php">Page Admin</a>
        <a class="nav-item nav-link active" href="loginPage.php?disconnect">Deconnexion</a>
            <?php } ?>
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
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.7.5/angular.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.7.5/angular-route.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.7.5/angular-animate.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" ></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="assets/js/script.js"></script>
</body>
</html>
