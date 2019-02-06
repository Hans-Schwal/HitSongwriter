<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

require_once'../models/database.php';
require_once'../models/users.php';
require_once '../models/admin.php';
/*
 * L'instruction require_once est identique à require mis à part que PHP vérifie si le fichier a déjà été inclus, 
 * et si c'est le cas, ne l'inclut pas une deuxième fois. 
 */

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

    if ($passwordCorrect){
        session_start();
// La fonction session_start() active la session où la valeur de l'id est recupérée dans le tableau (une ligne)
        $_SESSION['id'] = $result[0]->id;
        $_SESSION['pseudo'] = $result[0]->pseudo;
        $_SESSION['mail'] = $mail;
        header('Location: ../index.php?success'); 
    }
    else {
        ?>
<p id="erreur"><?='Identifiant ou Mot de Passe non reconnu';?></p>
<?php
    }
}
?>