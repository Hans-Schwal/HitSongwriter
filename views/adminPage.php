<?php 

/*
 * require est identique à include mis à part le fait que lorsqu'une erreur survient, il produit également une erreur fatale 
 * de niveau E_COMPILE_ERROR. En d'autres termes, il stoppera le script alors que include n'émettra qu'une alerte 
 * de niveau E_WARNING, ce qui permet au script de continuer. 
 */
session_start();
if($_SESSION['id_roles'] !=1){
    header('Location: mainPage.php');
}else{
    require '../controllers/adminPageController.php';
?>
<!doctype html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/smoothness/jquery-ui.css">
    <link href="https://fonts.googleapis.com/css?family=Bowlby+One+SC" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../assets/css/adminPageStyle.css">
    <title>H!T Songwriter</title>
  </head>
  <body>
    <h1>Page Administrateur</h1>
        <div class="container">
            <div class="row">
                <p>
                    <a href="../index.php" class="btn btn-success">Retour Accueil</a>
                </p>
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
                  <?php
                   foreach ($rows as $row) {
                            echo '<tr>';
                            echo '<td>'. $row->lastName . '</td>';
                            echo '<td>'. $row->firstName . '</td>';
                            echo '<td>'. $row->mail . '</td>';
                            echo '<td>'. $row->userName . '</td>';
                            echo '<td>'. $row->password . '</td>';
                            echo '<td width=250>';
                                echo '<a class="btn btn-success" href="read.php?id='.$row->id.'">Voir</a>';
                                echo ' ';
                                echo '<a class="btn btn-warning" href="update.php?id='.$row->id.'">Modifier</a>';
                                echo ' ';
                                echo '<a class="btn btn-danger" href="delete.php?id='.$row->id.'">Supprimer</a>';
                                echo '</td>';
                            echo '</tr>';
                   }
                  ?>
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
    <script type="text/javascript" src="assets/js/script.js"></script>
<?php } ?>
  </body>
</html>