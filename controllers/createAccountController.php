<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
require_once '../models/database.php';
require_once '../models/users.php';
require_once '../models/admin.php';
/*
 * L'instruction require_once est identique à require mis à part que PHP vérifie si le fichier a déjà été inclus, 
 * et si c'est le cas, ne l'inclut pas une deuxième fois. 
 */

  $verifText = '#[A-Z]{1}[a-zÀ-ÿ-]+$#';

if(isset($_POST["submit"])){
  $errors = [];
  if(empty($_POST['lastName']) || !preg_match($verifText, $_POST['lastName'])){
        $errors['lastName'] = 'Le nom renseigné est invalide';
    } if (empty($_POST['firstName']) || !preg_match($verifText, $_POST['firstName'])){
        $errors['firstName'] = 'Le prénom renseigné est invalide';
    } if(empty($_POST['mail']) || !filter_input(INPUT_POST, 'mail', FILTER_VALIDATE_EMAIL)){
        $errors['mail'] = 'L\' email renseigné est invalide';
    }if(empty($_POST['userName']) || !preg_match($verifText, $_POST['userName'])){
        $errors['userName'] = 'Le nom d\'utilisateur renseigné est invalide';
    }
    if(count($errors) == 0){
      
    
         
    $user = new users();
    
    $user->lastName = $_POST['lastName'];
    $user->firstName =  $_POST['firstName'];
    $user->mail = $_POST['mail'];
    $user->userName = $_POST['userName'];
    $passwordHash = password_hash($_POST['password'], PASSWORD_BCRYPT);
    $user->password = $passwordHash;
    
    /*
     * La fonction password_hash() crée un nouveau hachage en utilisant un algorithme de hachage fort et irréversible. 
     * La fonction password_hash() est compatible avec la fonction crypt(). Aussi, un mot de passe haché par la fonction 
     * crypt() peut être utilisé avec la fonction password_hash().
     * PASSWORD_BCRYPT permet l'utilisation de l'algorithme CRYPT_BLOWFISH pour créer la clé de hachage. 
     * Ceci va créer une clé de hachage standard crypt() utilisant l'identifiant "$2y$". 
     * Le résultat sera toujours une chaîne de 60 caractères, ou FALSE si une erreur survient.
     */
    
    if($user->createAccount()){
        header('Location: ../views/loginPage.php?success'); 
    }else{
        echo 'erreur';
        header('Location: ../views/createAccount.php?echec');
    }
    
    $admin = new admin();
    
    $admin->lastName = $_POST['lastName'];
    $admin->firstName =  $_POST['firstName'];
    $admin->mail = $_POST['mail'];
    $admin->userName = $_POST['userName'];
    $passwordHash = password_hash($_POST['password'], PASSWORD_BCRYPT);
    $admin->password = $passwordHash;
    
    /*
     * La fonction password_hash() crée un nouveau hachage en utilisant un algorithme de hachage fort et irréversible. 
     * La fonction password_hash() est compatible avec la fonction crypt(). Aussi, un mot de passe haché par la fonction 
     * crypt() peut être utilisé avec la fonction password_hash().
     * PASSWORD_BCRYPT permet l'utilisation de l'algorithme CRYPT_BLOWFISH pour créer la clé de hachage. 
     * Ceci va créer une clé de hachage standard crypt() utilisant l'identifiant "$2y$". 
     * Le résultat sera toujours une chaîne de 60 caractères, ou FALSE si une erreur survient.
     */
    
    if($admin->createAccount()){
        header('Location: ../views/loginPage.php?success'); 
    }else{
        echo 'erreur';
        header('Location: ../views/createAccount.php?echec');
    }
    
    }else{
        echo 'erreur2';
    }
}
?>


