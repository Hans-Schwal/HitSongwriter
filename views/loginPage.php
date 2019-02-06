<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */ 
require '../controllers/loginPageController.php';
/*
 * require est identique à include mis à part le fait que lorsqu'une erreur survient, il produit également une erreur fatale 
 * de niveau E_COMPILE_ERROR. En d'autres termes, il stoppera le script alors que include n'émettra qu'une alerte 
 * de niveau E_WARNING, ce qui permet au script de continuer. 
 */
?>
<!doctype html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="../assets/css/loginPageStyle.css">
  <title>H!T Songwriter</title>
</head>
<body>
  <!--  Navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-info">
    <a class="navbar-brand" href="../index.php">H!T Songwriter</a>
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
    <h1>Connectez-vous!</h1>
        <div class="row">
      <div class="col-sm-4"></div>
      <div class="col-sm-4 justify-content-center">
        <div class="jumbotron" style="text-align: center">
          <form method="POST">
<!--la superglobale $_GET me permet d'afficher un message sur cette page , SI dans l'URL se trouve le paramètre "success"-->
            <p><?= (isset($_GET['success'])?'Votre compte a été crée avec succès !' : NULL);?></p>
            <div class="form-group">
              <label for="exampleInputEmail1">Adresse Mail</label>
              <input type="email" name="mail" class="form-control" aria-describedby="emailHelp" placeholder="Mail">
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Mot de Passe</label>
              <input type="password" name="password" class="form-control" placeholder="Mot de Passe">
            </div>
            <div class="form-check">
              <input type="checkbox" class="form-check-input" id="exampleCheck1">
              <label class="form-check-label" for="exampleCheck1">Se Souvenir de moi</label>
            </div>
            <input type="submit" name="submit" class="btn btn-danger" value="Me connecter">
          </form>
          <a href="createAccount.php">Créer un compte</a>
        </div>
      </div>
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.7.5/angular.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.7.5/angular-route.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.7.5/angular-animate.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" ></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="../assets/js/script.js"></script>
  </body>
</html>
