<?php
require '../models/database.php';
require '../models/compositionCategory.php';

if(isset($_POST['choose'])){
//    $user = new users();
    
    $firstDegree = $_POST['firstDegree'];
    $secondDegree = $_POST['secondDegree'];
    $thirdDegree = $_POST['thirdDegree'];
    $fourthDegree = $_POST['fourthDegree'];
    $fifthDegree = $_POST['fifthDegree'];
    
    $user->lastName = $lastName;
    $user->firstName = $firstName;
    $user->mail = $mail;
    $user->userName = $userName;
    $user->password = $password;
    $user->id = $id;
    
    if($user->deleteUsers()){
        echo 'Suppression réussie';
    }
}


