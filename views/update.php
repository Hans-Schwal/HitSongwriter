<?php
session_start();
require '../controllers/updateController.php';
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
    <link rel="stylesheet" type="text/css" href="../assets/css/updateStyle.css">
    <title>H!T Songwriter</title>
  </head>
 
<body>
    <div class="container"> 
                <div class="span10 offset1">
                    <div class="row">
                        <h3>Modifier un utilisateur</h3>
                    </div>
             
                    <form class="form-horizontal" action="update.php?id=<?php echo $id?>" method="post">
                      <div class="control-group <?php echo !empty($lastNameError)?'error':'';?>">
                        <label class="control-label">Nom</label>
                        <div class="controls">
                            <input name="lastName" type="text"  placeholder="Nom" value="<?php echo !empty($lastName)?$lastName:'';?>">
                            <?php 
                            if (!empty($lastNameError)): ?>
                                <span class="help-inline"><?php echo $lastNameError;?></span>
                            <?php endif; ?>
                        </div>
                      </div>
                      <div class="control-group <?php echo !empty($firstNameError)?'error':'';?>">
                        <label class="control-label">Prénom</label>
                        <div class="controls">
                            <input name="firstName" type="text"  placeholder="Prénom" value="<?php echo !empty($firstName)?$firstName:'';?>">
                            <?php if (!empty($firstNameError)): ?>
                                <span class="help-inline"><?php echo $firstNameError;?></span>
                            <?php endif; ?>
                        </div>
                      </div>
                      <div class="control-group <?php echo !empty($mailError)?'error':'';?>">
                        <label class="control-label">Mail</label>
                        <div class="controls">
                            <input name="mail" type="mail" placeholder="Mail" value="<?php echo !empty($mail)?$mail:'';?>">
                            <?php if (!empty($mailError)): ?>
                                <span class="help-inline"><?php echo $mailError;?></span>
                            <?php endif;?>
                        </div>
                      </div>
                      <div class="control-group <?php echo !empty($userNameError)?'error':'';?>">
                        <label class="control-label">Nom d'utilisateur</label>
                        <div class="controls">
                            <input name="userName" type="text"  placeholder="Nom d'utilisateur" value="<?php echo !empty($userName)?$userName:'';?>">
                            <?php if (!empty($userNameError)): ?>
                                <span class="help-inline"><?php echo $userNameError;?></span>
                            <?php endif; ?>
                        </div>
                      </div>
<!--                      <div class="control-group <?php echo !empty($passwordError)?'error':'';?>">
                        <label class="control-label">Mot de passe</label>
                        <div class="controls">
                            <input name="password" type="text"  placeholder="Mot de passe" value="<?php echo !empty($password)?$password:'';?>">
                            <?php if (!empty($passwordError)): ?>
                                <span class="help-inline"><?php echo $passwordError;?></span>
                            <?php endif; ?>
                        </div>
                      </div>-->
                      <div class="form-actions">
                          <button type="submit" class="btn btn-success" name="update">Modifier</button>
                          <a class="btn btn-danger" href="adminPage.php">Retour</a>
                        </div>
                    </form>
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
        