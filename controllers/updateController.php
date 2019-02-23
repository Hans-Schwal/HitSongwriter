<?php
require '../models/database.php';
require '../models/users.php';

$id = $_GET['id'];

if(isset($_POST['update'])){
  $user = new users();
  
  $lastName = $_POST['lastName'];
  $firstName = $_POST['firstName'];
  $mail = $_POST['mail'];
  $userName = $_POST['userName'];
  
  $user->lastName = $lastName;
  $user->firstName = $firstName;
  $user->mail = $mail;
  $user->userName = $userName;
  $user->id = $id;
  
  if($user->updateUsers()){
    echo 'Modification réussie';
  }
}