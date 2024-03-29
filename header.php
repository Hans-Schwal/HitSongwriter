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
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.0/css/bootstrap.min.css" integrity="sha384-PDle/QlgIONtM1aqA2Qemk5gPOE7wFq8+Em+G/hmo5Iq0CCmYZLv3fVRDJ4MMwEA" crossorigin="anonymous">     <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/smoothness/jquery-ui.css">
    <link href="https://fonts.googleapis.com/css?family=Bowlby+One+SC" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../assets/css/style.css">
    <title>H!T Songwriter</title>
</head>
<body>
    <?php 
        if(isset($_SESSION['id-roles'])){
            if ($_SESSION['id-roles'] == 2){
            echo 'Utilisateur';
            echo $_SESSION['id-roles'];
            echo '<a href="controlers/destroySessionControler.php">Deco</a>';
        }elseif ($_SESSION['id-roles'] == 1){
            echo 'Administrateur';
            echo $_SESSION['id-roles'];
            echo '<a href="controlers/destroySessionControler.php">Deco</a>';
        }else{
            header('location:index.php');
        }
    }
    ?>
    <!-- Navbar --> 
  <nav class="navbar navbar-expand-lg navbar-dark bg-info">
    <a class="navbar-brand" href="index.php">H!T Songwriter</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-item nav-link active" href="#">Un peu de théorie<span class="sr-only">(current)</span></a>
        <a class="nav-item nav-link active" href="views/compose.php">Composez !</a>
        <a class="nav-item nav-link active" href="views/popularProgressions.php">Les progs les + populaires</a>
        <a class="nav-item nav-link active" href="views/personalSpace.php">Votre espace</a>
        <?php 
            if (isset($_SESSION['id_roles'])){
        ?>
        <a class="nav-item nav-link active" href="views/loginPage.php?disconnect" onclick="disconnect()">Deconnexion</a>
            <?php }
            if ($_SESSION['id_roles'] == 1){
        ?>
        <a class="nav-item nav-link active" href="views/adminPage.php">Page Admin</a>
            <?php } ?>
      </div>
    </div>
  </nav>
