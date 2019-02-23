<?php
require '../models/database.php';
require '../models/users.php';

$id = $_GET['id'];

if(isset($_POST['read'])){
  $user = new users();
  
  $lastName = $_POST['lastName'];
  $firstName = $_POST['firstName'];
  $mail = $_POST['mail'];
  $userName = $_POST['userName'];
  $password = $_POST['password'];
  
  $user->lastName = $lastName;
  $user->firstName = $firstName;
  $user->mail = $mail;
  $user->userName = $userName;
  $user->password = $password;
  $user->id = $id;
  
  if($user->showUsers()){
    echo 'Profil de l\'utilisateur';
  }
}


