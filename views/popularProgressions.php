<?php

/* 
* To change this license header, choose License Headers in Project Properties.
* To change this template file, choose Tools | Templates
* and open the template in the editor.
*/

session_start();
?>
<!doctype html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/smoothness/jquery-ui.css">
  <link href="https://fonts.googleapis.com/css?family=Bowlby+One+SC" rel="stylesheet">
  <link rel="stylesheet" href="../assets/css/popularProgressionsStyle.css">
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
        <a class="nav-item nav-link active" href="../views/compose.php">Composez !</a>
        <a class="nav-item nav-link active" href="../views/popularProgressions.php">Les progs les + populaires</a>
        <a class="nav-item nav-link active" href="#">Votre espace</a>
      </div>
    </div>
  </nav>
  <!-- Début de page -->
  <div class="jumbotron jumbotron-fluid">
    <div class="container">
      <h1 class="display-4">Les progressions les plus populaires</h1>
      <p class="lead">Une chanson, clefs en main!</p>
    </div>
  </div>
  <div class="jumbotron jumbotron-fluid">
    <div class="container">
      <h2 class="display-4">La plus populaire de toutes!</h2>
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
              <h3 class="card-title">IV</h3>
            </div>
                <audio controls>
                    <source src="../assets/audio/F_majeur.wav" type="audio/wav">
                </audio>
          </div>
        </div>
      </div>
      <div class="jumbotron jumbotron-fluid">
        <div class="container">
          <p class="display-4_where">Où l'entendre?</p>
          <div class="row">
            <div class="col-sm-3">
                <div class="card" style="width: 18rem;">
                  <img class="card-img-top" src="../assets/img/adele.jpeg" alt="Adele_Someone_Like_You">
                <div class="card-body">
                  <h5 class="card-title">Someone Like You</h5>
                  <p class="card-text">Adele</p>
                  <a href="https://www.youtube.com/watch?v=hLQl3WQQoQ0" target="_blank" class="btn btn-danger">Ecouter</a>
                </div>
              </div>
            </div>
            <div class="col-sm-3">
              <div class="card" style="width: 18rem;">
                  <img class="card-img-top" src="../assets/img/avril_lavigne.jpeg" alt="Avril_Lavigne_Complicated">
                <div class="card-body">
                  <h5 class="card-title">Complicated</h5>
                  <p class="card-text">Avril Lavigne</p>
                  <a href="https://www.youtube.com/watch?v=5NPBIwQyPWE" target="_blank" class="btn btn-danger">Ecouter</a>
                </div>
              </div> 
            </div>
            <div class="col-sm-3">
              <div class="card" style="width: 18rem;">
                  <img class="card-img-top" src="../assets/img/bruno_mars.jpeg" alt="Bruno_Mars_Grenade">
                <div class="card-body">
                  <h5 class="card-title">Grenade</h5>
                  <p class="card-text">Bruno Mars</p>
                  <a href="https://www.youtube.com/watch?v=SR6iYWJxHqs" target="_blank" class="btn btn-danger">Ecouter</a>
                </div>
              </div>
            </div>
            <div class="col-sm-3">
              <div class="card" style="width: 18rem;">
                  <img class="card-img-top" src="../assets/img/john_legend.jpeg" alt="John_Legend_All_Of_Me">
                <div class="card-body">
                  <h5 class="card-title">All Of Me</h5>
                  <p class="card-text">John Legend</p>
                  <a href="https://www.youtube.com/watch?v=450p7goxZqg" target="_blank" class="btn btn-danger">Ecouter</a>
                </div>
              </div> 
            </div>
          </div>
        </div>
      </div>  
    </div>
  </div>
    
  <div class="jumbotron jumbotron-fluid">
    <div class="container">
      <h2 class="display-4">Efficace dans tous les styles</h2>
      <div class="row">
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
              <h3 class="card-title">IV</h3>
            </div>
                <audio controls>
                    <source src="../assets/audio/F_majeur.wav" type="audio/wav">
                </audio>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="card">
            <div class="card-body">
              <h3 class="card-title">V</h3>
            </div>
                <audio controls>
                    <source src="../assets/audio/G_majeur.wav" type="audio/wav">
                </audio>
          </div>
        </div>
      </div>
      <div class="jumbotron jumbotron-fluid">
        <div class="container">
          <p class="display-4_where">Où l'entendre?</p>
          <div class="row">
            <div class="col-sm-3">
              <div class="card" style="width: 18rem;">
                  <img class="card-img-top" src="../assets/img/michael_jackson.jpeg" alt="Michael_Jackson_Beat_It">
                <div class="card-body">
                  <h5 class="card-title">Beat It</h5>
                  <p class="card-text">Michael Jackson</p>
                  <a href="https://www.youtube.com/watch?v=oRdxUFDoQe0" target="_blank" class="btn btn-danger">Ecouter</a>
                </div>
              </div>
            </div>
            <div class="col-sm-3">
              <div class="card" style="width: 18rem;">
                  <img class="card-img-top" src="../assets/img/nsync.jpg" alt="N'Sync_It's_Gonna_Be_Me">
                <div class="card-body">
                  <h5 class="card-title">It's Gonna Be Me</h5>
                  <p class="card-text">N'Sync</p>
                  <a href="https://www.youtube.com/watch?v=GQMlWwIXg3M" target="_blank" class="btn btn-danger">Ecouter</a>
                </div>
              </div> 
            </div>
            <div class="col-sm-3">
              <div class="card" style="width: 18rem;">
                  <img class="card-img-top" src="../assets/img/oasis.jpeg" alt="Oasis_Don't_Look_Back_In_Anger">
                <div class="card-body">
                  <h5 class="card-title">Don't Look Back In Anger</h5>
                  <p class="card-text">Oasis</p>
                  <a href="https://www.youtube.com/watch?v=r8OipmKFDeM" target="_blank" class="btn btn-danger">Ecouter</a>
                </div>
              </div>
            </div>
            <div class="col-sm-3">
              <div class="card" style="width: 18rem;">
                  <img class="card-img-top" src="../assets/img/passenger.jpeg" alt="Passenger_Let_Her_Go">
                <div class="card-body">
                  <h5 class="card-title">Let Her Go</h5>
                  <p class="card-text">Passenger</p>
                  <a href="https://www.youtube.com/watch?v=RBumgq5yVrA" target="_blank" class="btn btn-danger">Ecouter</a>
                </div>
              </div> 
            </div>
          </div>
        </div>
      </div>  
    </div>
  </div>  
    
  <div class="jumbotron jumbotron-fluid">
    <div class="container">
      <h2 class="display-4">Ces changements magiques</h2>
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
              <h3 class="card-title">IV</h3>
            </div>
                <audio controls>
                    <source src="../assets/audio/F_majeur.wav" type="audio/wav">
                </audio>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="card">
            <div class="card-body">
              <h3 class="card-title">V</h3>
            </div>
                <audio controls>
                    <source src="../assets/audio/G_majeur.wav" type="audio/wav">
                </audio>
          </div>
        </div>
      </div>
      <div class="jumbotron jumbotron-fluid">
        <div class="container">
          <p class="display-4_where">Où l'entendre?</p>
          <div class="row">
            <div class="col-sm-3">
              <div class="card" style="width: 18rem;">
                  <img class="card-img-top" src="../assets/img/hoobastank.jpeg" alt="Hoobastank_The_Reason">
                <div class="card-body">
                  <h5 class="card-title">The Reason</h5>
                  <p class="card-text">Hoobastank</p>
                  <a href="https://www.youtube.com/watch?v=fV4DiAyExN0" target="_blank" class="btn btn-danger">Ecouter</a>
                </div>
              </div>
            </div>
            <div class="col-sm-3">
              <div class="card" style="width: 18rem;">
                  <img class="card-img-top" src="../assets/img/jeff_buckley.jpeg" alt="Hallelujah_Jeff_Buckley">
                <div class="card-body">
                  <h5 class="card-title">Hallelujah</h5>
                  <p class="card-text">Jeff Buckley</p>
                  <a href="https://www.youtube.com/watch?v=y8AWFf7EAc4" target="_blank" class="btn btn-danger">Ecouter</a>
                </div>
              </div> 
            </div>
            <div class="col-sm-3">
              <div class="card" style="width: 18rem;">
                  <img class="card-img-top" src="../assets/img/the_police.jpeg" alt="The_Police_Every_Breath_You_Take">
                <div class="card-body">
                  <h5 class="card-title">Every Breath You Take</h5>
                  <p class="card-text">The Police</p>
                  <a href="https://www.youtube.com/watch?v=OMOGaugKpzs" target="_blank" class="btn btn-danger">Ecouter</a>
                </div>
              </div>
            </div>
            <div class="col-sm-3">
              <div class="card" style="width: 18rem;">
                  <img class="card-img-top" src="../assets/img/justin_bieber.jpeg" alt="Justin_Bieber_Baby">
                <div class="card-body">
                  <h5 class="card-title">Baby</h5>
                  <p class="card-text">Justin Bieber</p>
                  <a href="https://www.youtube.com/watch?v=kffacxfA7G4" target="_blank" class="btn btn-danger">Ecouter</a>
                </div>
              </div> 
            </div>
          </div>
        </div>
      </div>  
    </div>
  </div>     
    
  <div class="jumbotron jumbotron-fluid">
    <div class="container">
      <h2 class="display-4">En gain de popularité</h2>
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
              <h3 class="card-title">IV</h3>
            </div>
                <audio controls>
                    <source src="../assets/audio/F_majeur.wav" type="audio/wav">
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
              <h3 class="card-title">V</h3>
            </div>
                <audio controls>
                    <source src="../assets/audio/G_majeur.wav" type="audio/wav">
                </audio>
          </div>
        </div>
      </div>
      <div class="jumbotron jumbotron-fluid">
        <div class="container">
          <p class="display-4_where">Où l'entendre?</p>
          <div class="row">
            <div class="col-sm-3">
              <div class="card" style="width: 18rem;">
                  <img class="card-img-top" src="../assets/img/sia.jpeg" alt="Sia_Alive">
                <div class="card-body">
                  <h5 class="card-title">Alive</h5>
                  <p class="card-text">Sia</p>
                  <a href="https://www.youtube.com/watch?v=t2NgsJrrAyM" target="_blank" class="btn btn-danger">Ecouter</a>
                </div>
              </div>
            </div>
            <div class="col-sm-3">
              <div class="card" style="width: 18rem;">
                  <img class="card-img-top" src="../assets/img/the_black_eyed_peas.jpeg" alt="The_Black_Eyed_Peas_Just_Can't_Get_Enough">
                <div class="card-body">
                  <h5 class="card-title">Just Can't Get Enough</h5>
                  <p class="card-text">The Black Eyed Peas</p>
                  <a href="https://www.youtube.com/watch?v=OrTyD7rjBpw" target="_blank" class="btn btn-danger">Ecouter</a>
                </div>
              </div> 
            </div>
            <div class="col-sm-3">
              <div class="card" style="width: 18rem;">
                  <img class="card-img-top" src="../assets/img/taylor_swift.jpeg" alt="Taylor_Swift_Style">
                <div class="card-body">
                  <h5 class="card-title">Style</h5>
                  <p class="card-text">Taylor Swift</p>
                  <a href="https://www.youtube.com/watch?v=-CmadmM5cOk" target="_blank" class="btn btn-danger">Ecouter</a>
                </div>
              </div>
            </div>
            <div class="col-sm-3">
              <div class="card" style="width: 18rem;">
                  <img class="card-img-top" src="../assets/img/kesha.jpeg" alt="Kesha_Die_Young">
                <div class="card-body">
                  <h5 class="card-title">Die Young</h5>
                  <p class="card-text">Kesha</p>
                  <a href="https://www.youtube.com/watch?v=NOubzHCUt48" target="_blank" class="btn btn-danger">Ecouter</a>
                </div>
              </div> 
            </div>
          </div>
        </div>
      </div>  
    </div>
  </div>     
    
  <div class="jumbotron jumbotron-fluid">
    <div class="container">
      <h2 class="display-4">Intemporelle</h2>
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
              <h3 class="card-title">IV</h3>
            </div>
                <audio controls>
                    <source src="../assets/audio/F_majeur.wav" type="audio/wav">
                </audio>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="card">
            <div class="card-body">
              <h3 class="card-title">V</h3>
            </div>
                <audio controls>
                    <source src="../assets/audio/G_majeur.wav" type="audio/wav">
                </audio>
          </div>
        </div>
      </div>
      <div class="jumbotron jumbotron-fluid">
        <div class="container">
          <p class="display-4_where">Où l'entendre?</p>
          <div class="row">
            <div class="col-sm-3">
              <div class="card" style="width: 18rem;">
                  <img class="card-img-top" src="../assets/img/boston.jpeg" alt="Boston_More_Than_A_Feeling">
                <div class="card-body">
                  <h5 class="card-title">More Than A Feeling</h5>
                  <p class="card-text">Boston</p>
                  <a href="" target="_blank" class="btn btn-danger">Ecouter</a>
                </div>
              </div>
            </div>
            <div class="col-sm-3">
              <div class="card" style="width: 18rem;">
                  <img class="card-img-top" src="../assets/img/blink.jpeg" alt="Blink_182_All_The_Small_Things">
                <div class="card-body">
                  <h5 class="card-title">All The Small Things</h5>
                  <p class="card-text">Blink 182</p>
                  <a href="https://www.youtube.com/watch?v=9Ht5RZpzPqw" target="_blank" class="btn btn-danger">Ecouter</a>
                </div>
              </div> 
            </div>
            <div class="col-sm-3">
              <div class="card" style="width: 18rem;">
                  <img class="card-img-top" src="../assets/img/dion.jpeg" alt="Celine_Dion_My_Heart_Will_Go_On">
                <div class="card-body">
                  <h5 class="card-title">My Heart Will Go On</h5>
                  <p class="card-text">Celine Dion</p>
                  <a href="https://www.youtube.com/watch?v=WNIPqafd4As" target="_blank" class="btn btn-danger">Ecouter</a>
                </div>
              </div>
            </div>
            <div class="col-sm-3">
              <div class="card" style="width: 18rem;">
                  <img class="card-img-top" src="../assets/img/katty_perry.jpeg" alt="Katy_Perry_Waking_Up_In_Vegas">
                <div class="card-body">
                  <h5 class="card-title">Waking Up In Vegas</h5>
                  <p class="card-text">Katy Perry</p>
                  <a href="https://www.youtube.com/watch?v=1-pUaogoX5o" target="_blank" class="btn btn-danger">Ecouter</a>
                </div>
              </div> 
            </div>
          </div>
        </div>
      </div>  
    </div>
  </div>  
    
  <div class="jumbotron jumbotron-fluid">
    <div class="container">
      <h2 class="display-4">La préférée de L'Admin ;)</h2>
      <div class="row">
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
              <h3 class="card-title">IV</h3>
            </div>
                <audio controls>
                    <source src="../assets/audio/F_majeur.wav" type="audio/wav">
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
      </div>
      <div class="jumbotron jumbotron-fluid">
        <div class="container">
          <p class="display-4_where">Où l'entendre?</p>
          <div class="row">
            <div class="col-sm-6">
              <div class="card" style="width: 18rem;">
                  <img class="card-img-top" src="../assets/img/lp_leaveoutalltherest.jpg" alt="Linkin_Park_Leave_Out_All_The_Rest">
                <div class="card-body">
                  <h5 class="card-title">Leave Out All The Rest</h5>
                  <p class="card-text">Linkin Park</p>
                  <a href="https://www.youtube.com/watch?v=yZIummTz9mM" target="_blank" class="btn btn-danger">Ecouter</a>
                </div>
              </div>
            </div>
            <div class="col-sm-6">
              <div class="card" style="width: 18rem;">
                  <img class="card-img-top" src="../assets/img/mike_shinoda.jpeg" alt="Mike_Shinoda_Watching_As_I_Fall">
                <div class="card-body">
                  <h5 class="card-title">Watching As I Fall</h5>
                  <p class="card-text">Mike Shinoda</p>
                  <a href="https://www.youtube.com/watch?v=zW52pp_qKeM" target="_blank" class="btn btn-danger">Ecouter</a>
                </div>
              </div> 
            </div>
           <button class="btn btn-danger" onclick="topFunction()" id="myBtn" title="Haut de Page">Haut de page</button>    
     
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

