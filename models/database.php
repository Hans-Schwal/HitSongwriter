<?php

/*
* To change this license header, choose License Headers in Project Properties.
* To change this template file, choose Tools | Templates
* and open the template in the editor.
*/

/**
* Description of database
*
* @author hans
*/
class database{
  public $db;
  
  public function __construct(){
    $this->db = new PDO('mysql:dbname=hitsongwriter;host=localhost', 'hans', 'Lhlpsdnh87', [PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION]);
    /*
    * [PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION] permet de définir le code d'erreur, de lancer une exception et 
    * de montrer rapidement le problème rencontré.
    */
  }
}
?>