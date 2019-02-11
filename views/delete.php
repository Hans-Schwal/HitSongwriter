<?php
session_start();
require '../controllers/deleteController.php';
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
    <link rel="stylesheet" type="text/css" href="../assets/css/deleteStyle.css">
    <title>H!T Songwriter</title>
  </head>
 
<body>
    <div class="container">
                <div class="span10 offset1">
                    <div class="row">
                        <h3>Supprimer l'utilisateur</h3>
                    </div> 
                    <form class="form-horizontal" action="delete.php?id=<?php echo $id?>" method="post">
                      <input type="hidden" name="id" value="<?php echo $id;?>"/>
                      <p class="alert alert-error">Sûr de vouloir supprimer ?</p>
                      <div class="form-actions">
                          <button type="submit" class="btn btn-success" name="delete">Oui</button>
                          <a class="btn btn-danger" href="adminPage.php">Non</a>
                          <a class="btn btn-warning" href="adminPage.php">Retour à la page Admin</a>
                        </div>
                    </form>
                </div>                
    </div> 
  </body>
</html>

