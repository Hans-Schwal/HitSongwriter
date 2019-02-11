<?php
session_start();
require '../controllers/readController.php';
if($_SESSION['id_roles'] !=1){
    header('Location: mainPage.php');
}
?>
<!doctype html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/smoothness/jquery-ui.css">
    <link href="https://fonts.googleapis.com/css?family=Bowlby+One+SC" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../assets/css/readStyle.css">
    <title>H!T Songwriter</title>
  </head>
<body>
    <div class="container">
     
                <div class="span10 offset1">
                    <div class="row">
                        <h3>Profil Utilisateur</h3>
                    </div>                      
                    <div class="form-horizontal" >
                      <div class="control-group">
                        <label class="control-label">Nom: </label>
                        <div class="controls">
                            <label class="checkbox">
                                <?php echo $data['lastName'];?>
                            </label>
                        </div>
                      </div>
                      <div class="control-group">
                        <label class="control-label">Prénom: </label>
                        <div class="controls">
                            <label class="checkbox">
                                <?php echo $data['firstName'];?>
                            </label>
                        </div>
                      </div>
                      <div class="control-group">
                        <label class="control-label">Mail: </label>
                        <div class="controls">
                            <label class="checkbox">
                                <?php echo $data['mail'];?>
                            </label>
                        </div>
                      </div>
                      <div class="control-group">
                        <label class="control-label">Nom d'utilisateur: </label>
                        <div class="controls">
                            <label class="checkbox">
                                <?php echo $data['userName'];?>
                            </label>
                        </div>
                      </div>
                      <div class="control-group">
                        <label class="control-label">Mot de passe: </label>
                        <div class="controls">
                            <label class="checkbox">
                                <?php echo $data['password'];?>
                            </label>
                        </div>
                      </div>
                        <div class="form-actions">
                            <a class="btn btn-success" href="adminPage.php">Retour</a>
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

