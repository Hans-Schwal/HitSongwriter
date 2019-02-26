<?php
require_once'../models/database.php';
require_once'../models/users.php';
require_once '../models/admin.php';
/*
* L'instruction require_once est identique à 'require' mis à part que PHP vérifie si le fichier a déjà été inclus, 
* et si c'est le cas, ne l'inclut pas une deuxième fois. 
*/

if(isset($_GET['disconnect'])){
  session_destroy();
  header('location:../index.php');
}


if(isset($_POST["submit"])){
  $verifPassword = new users();
  //  Instanciation de l'objet $verifPassword à la classe users
  $mail = $_POST['mail'];
  $verifPassword->mail = $mail;
  // L'opérateur "->" permet içi de donner à l'attribut mail de la class users, la valeur de $mail.
  $result = $verifPassword->userLogin();
  // Application de la méthode userLogin à l'objet $verifPassword, et récupération du résultat dans une nouvelle variable $result
  $passwordCorrect = password_verify($_POST['password'] , $result[0]->password);
  /*
  * La fonction "password_verify" contrôle que la valeur renseignée dans l'input password du formulaire correspond 
  * au même mot de passe haché dans la base de données
  */
  
  if(count($result) != 0){
    $passwordCorrect = password_verify($_POST['password'] , $result[0]->password);
    if ($passwordCorrect){
      session_start();
      // La fonction session_start() active la session où la valeur de l'id est recupérée dans le tableau (une ligne)
      $_SESSION['id'] = $result[0]->id;
      $_SESSION['lastName'] = $result[0]->lastName;
      $_SESSION['firstName'] = $result[0]->firstName;
      $_SESSION['mail'] = $mail;
      $_SESSION['userName'] = $result[0]->userName;
      $_SESSION['password'] = $result[0]->password;
      $_SESSION['id_roles']= $result[0]->id_roles_defines;
      sleep(1);
      header('Location: ../index.php?success'); 
      exit;
    }
    else {
      ?>
      <p class="erreur"><?='Identifiant et/ou Mot de Passe non reconnu';?></p>
      <?php
    }
  }else{ ?>
    <p class="erreur"><?='Mot de passe non reconnu';?></p> 
  <?php }
}
?>

