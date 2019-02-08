<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of admin
 *
 * @author hans
 */

class admin extends database {
    public $id;
    public $lastName;
    public $firstName;
    public $mail;
    public $userName;
    public $password;
    public $id_roles_defines = 1;

    public function __construct(){
         parent::__construct();
    }
//    __construct() est la seule fonction qui s'execute au moment de l'instanciation d'une classe    

    
    //    La methode suivante permet d'afficher les valeurs de ma table users, en fonction du mail renseigné , grâce à une requete preparee
    public function showUsers(){
        $query = "SELECT `lastName`,`firstName`,`pseudo`,`mail` FROM `users` WHERE '$this->mail'";
        $showUser= $this->db->query($query);
        $result = $showUser->fetchAll(PDO::FETCH_OBJ);
        return $result;
    } 
    
    
     public function updateUsers(){
        $query = 'UPDATE `users` SET `lastname` = :lastname, `firstname` = :firstname, `mail` = :mail, `userName` = :userName, `password` = :password WHERE `id` = :id';
        $updateUsers = $this->db->prepare($query);
        $updateUsers->bindValue(':lastname', $this->lastname, PDO::PARAM_STR);
        $updateUsers->bindValue(':firstname', $this->firstname, PDO::PARAM_STR);
        $updateUsers->bindValue(':mail', $this->mail, PDO::PARAM_STR);
        $updateUsers->bindValue(':userName', $this->userName, PDO::PARAM_STR);
        $updateUsers->bindValue(':password', $this->password, PDO::PARAM_STR);
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
        $listUsers = $this->db->query('SELECT * FROM `users` ORDER BY lastName ASC');
        $tableUsers = $listUsers->fetchAll(PDO::FETCH_OBJ);
        return $tableUsers;
    } 
}
