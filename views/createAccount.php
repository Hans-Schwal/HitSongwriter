<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */ 
require '../controllers/createAccountController.php';
/*
 * require est identique à include mis à part le fait que lorsqu'une erreur survient, il produit également une erreur fatale 
 * de niveau E_COMPILE_ERROR. En d'autres termes, il stoppera le script alors que include n'émettra qu'une alerte 
 * de niveau E_WARNING, ce qui permet au script de continuer. 
 */
//session_start();
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/smoothness/jquery-ui.css">
  <link href="https://fonts.googleapis.com/css?family=Bowlby+One+SC" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="../assets/css/createAccountStyle.css">
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
  <!-- Début de page -->
    <h1>Créez votre compte!</h1>
    <div class="row">
      <div class="col-sm-4"></div>
      <div class="col-sm-4 justify-content-center">
        <div class="jumbotron" style="text-align: center">
          <p><?= (isset($_GET['echec'])?'Une erreur est survenue, vérifiez vos données' : NULL);?></p>
            <!--la superglobale $_GET permet d'afficher un message d'erreur sur la page si dans l'URL se trouve le paramètre "echec"-->
          <p><?= (isset($_GET['password'])?'Votre mot de passe et sa confirmation sont différents' : NULL);?></p>
            <!--la superglobale $_GET permet d'afficher un message d'erreur sur la page , si dans l'URL se trouve le paramètre "password"-->          
          <?php 
            if(isset($errors) && count($errors) != 0){
          ?>
            <div class="alert alert-danger">
                <ul>
                    <?php foreach($errors as $error){
                      ?>
                    <li><?= $error; ?></li>
                    <?php } 
                    ?>
                </ul>
            </div>
            <?php } 
            ?>
            <form method="post" action="../controllers/createAccountController.php">
            <div class="form-group">
              <label for="lastName">Nom</label>
              <input type="text" name='lastName' id="lastName" class="form-control" placeholder="Nom" value='<?= htmlspecialchars($_POST['lastName']); ?>'/>
            </div>
            <div class="form-group">
              <label for="firstName">Prénom</label>
              <input type="text" name='firstName' id="firstName" class="form-control" placeholder="Prénom" value='<?= htmlspecialchars($_POST['firstName']); ?>'/>
            </div>
            <div class="form-group">
              <label for="mail">Adresse Mail</label>
              <input type="email" name="mail" id="mail" class="form-control" placeholder="Mail" value='<?= htmlspecialchars($_POST['mail']); ?>'/>
            </div>
            <div class="form-group">
              <label for="userName">Nom d'utilisateur</label>
              <input type="text" name='userName' id="userName" class="form-control" placeholder="Nom d'utilisateur" value='<?= htmlspecialchars($_POST['userName']); ?>'/>
            </div>
            <div class="form-group">
              <label for="password">Mot de Passe</label>
              <input type="password" name="password" id="password" class="form-control" placeholder="Mot de Passe"/>
            </div>
            <div class="form-group">
              <label for="confirmPassword">Confirmation du Mot de Passe</label>
              <input type="password" name="confirmPassword" id="confirmPassword" class="form-control" placeholder="Confirmation du Mot de Passe"/>
            </div>
            <button type="submit" value="Submit" name="submit" class="btn btn-success">Créer mon compte!</button>
          </form>
          <a href="loginPage.php">J'ai déjà un compte</a>
        </div>
      </div>
      <div class="col-sm-4"></div>
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
