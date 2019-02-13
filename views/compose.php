<?php
session_start();
?>
<!doctype html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/smoothness/jquery-ui.css">
  <link href="https://fonts.googleapis.com/css?family=Bowlby+One+SC" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="../assets/css/composeStyle.css">
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
  <div class="jumbotron jumbotron-fluid">
    <div class="container">
      <h1 class="display-4">Composez!</h1>
      <p class="lead">A vous de jouer, exprimez-vous!</p>
    </div>
  </div>
  
  <div class="jumbotron jumbotron-fluid">
    <div class="container">
      <p class="display-4">Do majeur<p>
      <p class="lead">Ordonnez vos degrés</p>
          
        <div class="row">  
          <div class="col-sm-3">
          <div class="card">
            <div class="card-body">
              <h3 class="card-title">I</h3>
            </div>
               <audio controls>
                   <source src="../assets/audio/C_majeur.wav" type="audio/wav">
                </audio> 
          </div>
          </div>
          <div class="col-sm-3">
          <div class="card">
            <div class="card-body">
              <h3 class="card-title">ii</h3>
            </div>
               <audio controls>
                   <source src="../assets/audio/D_mineur.wav" type="audio/wav">
                </audio> 
          </div>
          </div>
          <div class="col-sm-3">
          <div class="card">
            <div class="card-body">
              <h3 class="card-title">iii</h3>
            </div>
               <audio controls>
                   <source src="../assets/audio/E_mineur.wav" type="audio/wav">
                </audio> 
          </div>
          </div>
          <div class="col-sm-3">
          <div class="card">
            <div class="card-body">
              <h3 class="card-title">IV</h3>
            </div>
               <audio controls>
                   <source src="../assets/audio/F_majeur.wav" type="audio/wav">
                </audio> 
          </div>
          </div>          
        </div>
       
        <div class="row"> 
          <div class="col-sm-3 offset-2">
          <div class="card">
            <div class="card-body">
              <h3 class="card-title">V</h3>
            </div>
               <audio controls>
                   <source src="../assets/audio/G_majeur.wav" type="audio/wav">
                </audio> 
          </div>
          </div>
            <div class="col-sm-3">
          <div class="card">
            <div class="card-body">
              <h3 class="card-title">vi</h3>
            </div>
               <audio controls>
                   <source src="../assets/audio/A_mineur.wav" type="audio/wav">
                </audio> 
          </div>
          </div>
            <div class="col-sm-3">
          <div class="card">
            <div class="card-body">
              <h3 class="card-title">vii</h3>
            </div>
               <audio controls>
                   <source src="../assets/audio/B_dim.wav" type="audio/wav">
                </audio> 
          </div>
          </div>
        </div>    
    </div>
  </div>
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

