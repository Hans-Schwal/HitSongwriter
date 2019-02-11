<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Users
 *
 * @author hans
 */

class users extends database{
    public $id;
    public $lastName;
    public $firstName;
    public $mail;
    public $userName;
    public $password;
    public $id_roles_defines;

    public function __construct(){
         parent::__construct();
    }
//    __construct() est la seule fonction qui s'execute au moment de l'instanciation d'une classe

    
    public function createAccount(){
        $query = 'INSERT INTO `users`(`lastName`, `firstName`, `mail`, `userName`, `password`,`id_roles_defines`) VALUES (:lastName, :firstName, :mail, :userName, :password, :id_roles_defines)';
        $createAccount = $this->db->prepare($query);
        $createAccount->bindValue(':lastName', $this->lastName, PDO::PARAM_STR);
        $createAccount->bindValue(':firstName', $this->firstName, PDO::PARAM_STR);
        $createAccount->bindValue(':mail', $this->mail, PDO::PARAM_STR);
        $createAccount->bindValue(':userName', $this->userName, PDO::PARAM_STR);
        $createAccount->bindValue(':password', $this->password, PDO::PARAM_STR);
        $createAccount->bindValue(':id_roles_defines', 2, PDO::PARAM_INT);
        if($createAccount->execute()){
            return true;
        }
    }
    
    //    La methode suivante permet de rechercher le password et l'id d'un utilisateur de la table "users" via son adresse mail  
    public function userLogin(){
        $query = "SELECT * FROM `users` WHERE `mail` = '$this->mail'";
        $sql= $this->db->query($query);
        $result = $sql->fetchAll(PDO::FETCH_OBJ);
        return $result;
    }
    
    //    La methode suivante permet d'afficher les valeurs de ma table users, en fonction du mail renseigné , grâce à une requete preparee
    public function showUsers(){
        $query = "SELECT `lastName`,`firstName`,`mail`,`userName`, `password` FROM `users` WHERE '$this->mail'";
        $showUser= $this->db->query($query);
        $result = $showUser->fetchAll(PDO::FETCH_OBJ);
        return $result;
    } 
    
    
     public function updateUsers(){
        $query = 'UPDATE `users` SET `lastName` = :lastName, `firstName` = :firstName, `mail` = :mail, `userName` = :userName WHERE `id` = :id';
        $updateUsers = $this->db->prepare($query);
        $updateUsers->bindValue(':lastName', $this->lastName, PDO::PARAM_STR);
        $updateUsers->bindValue(':firstName', $this->firstName, PDO::PARAM_STR);
        $updateUsers->bindValue(':mail', $this->mail, PDO::PARAM_STR);
        $updateUsers->bindValue(':userName', $this->userName, PDO::PARAM_STR);
        $updateUsers->bindValue(':id', $this->id, PDO::PARAM_INT);
        if($updateUsers->execute()){
            return true;
        }
    }
    
    public function deleteUsers(){
        $query = 'DELETE FROM `users` WHERE `id` = :id';
        $delete = $this->db->prepare($query);
        $delete->bindValue(':id', $this->id, PDO::PARAM_INT);
        if($delete->execute()){
            return true;
        }
    }
    
    public function listUsers(){
        $listUsers = $this->db->query('SELECT * FROM `users`');
        $tableUsers = $listUsers->fetchAll(PDO::FETCH_OBJ);
        return $tableUsers;   
    }
}