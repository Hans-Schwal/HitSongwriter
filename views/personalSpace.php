<?php
session_start();
?>
<!doctype html>
<html lang="fr" dir="ltr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.0/css/bootstrap.min.css" integrity="sha384-PDle/QlgIONtM1aqA2Qemk5gPOE7wFq8+Em+G/hmo5Iq0CCmYZLv3fVRDJ4MMwEA" crossorigin="anonymous">     <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/smoothness/jquery-ui.css">
    <link href="https://fonts.googleapis.com/css?family=Bowlby+One+SC" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../assets/css/personalSpaceStyle.css">
    <title>H!T Songwriter</title>
</head>
<body>
    <!-- Navbar --> 
  <nav class="navbar navbar-expand-lg navbar-dark bg-info">
    <a class="navbar-brand" href="../index.php">H!T Songwriter</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-item nav-link active" href="#">Un peu de théorie<span class="sr-only">(current)</span></a>
        <a class="nav-item nav-link active" href="compose.php">Composez !</a>
        <a class="nav-item nav-link active" href="popularProgressions.php">Les progs les + populaires</a>
        <a class="nav-item nav-link active" href="personalSpace.php">Votre espace</a>
        <?php 
            if (isset($_SESSION['id_roles'])){
        ?>
        <a class="nav-item nav-link active" href="loginPage.php?disconnect" onclick="disconnect()">Deconnexion</a>
            <?php }
            if ($_SESSION['id_roles'] == 1){
        ?>
        <a class="nav-item nav-link active" href="adminPage.php">Page Admin</a>
            <?php } ?>
      </div>
    </div>
  </nav>
  <div class="jumbotron jumbotron-fluid">
    <div class="container">
        <h1>Bienvenue <?= $_SESSION['pseudo'] . ' '?></h1>        
      <p class="lead">Vous êtes içi dans votre espace personnel</p>
    </div>
  </div>    
   <div class="jumbotron jumbotron-fluid">
    <div class="container-fluid">
        <h2>Vos informations</h2>    
        <table class="table table-striped table-bordered">
                  <thead>
                    <tr>
                      <th>Nom</th>
                      <th>Prénom</th>
                      <th>Mail</th>
                      <th>Nom d'utilisateur</th>
                      <th>Password</th>
                      <th>Profil</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td><?= $_SESSION['lastName'];?></td>
                      <td><?= $_SESSION['firstName'];?></td>
                      <td><?= $_SESSION['mail'];?></td>
                      <td><?= $_SESSION['userName'];?></td>
                      <td><?= $_SESSION['password'];?></td>
                      <td><a class="btn btn-warning" href="update.php?id='.$row->id.'">Modifier</a>
                          <a class="btn btn-danger" href="delete.php?id='.$row->id.'">Supprimer</a>
                      </td>
                    </tr>
                  </tbody>
        </table>
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

