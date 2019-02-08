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
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>H!T Songwriter</title>
  </head>
  <body>
    <h1>Page Admin</h1>
    <a href="mainPage.php">Retour Accueil</a>
        <div class="container">
            <div class="row">
                <p>
                    <a href="create.php" class="btn btn-success">Voir Utilisateurs</a>
                    <a href="create.php" class="btn btn-success">Modifier Utilisateurs</a>
                    <a href="create.php" class="btn btn-success">Supprimer Utilisateurs</a>
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
                                echo '<a class="btn" href="read.php?id='.$row->id.'">Voir</a>';
                                echo ' ';
                                echo '<a class="btn btn-success" href="update.php?id='.$row->id.'">Modifier</a>';
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
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<?php } ?>
  </body>
</html>