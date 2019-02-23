<?php

/*
* To change this license header, choose License Headers in Project Properties.
* To change this template file, choose Tools | Templates
* and open the template in the editor.
*/

/**
* Description of savedProgressions
*
* @author hans
*/

class savedProgressions extends database {
  public $id;
  public $scaleName;
  public $firstChosenDegree;
  public $secondChosenDegree;
  public $thirdChosenDegree;
  public $fourthChosenDegree;
  
  public function __construct(){
    parent::__construct();
  }
  //    __construct() est la seule fonction qui s'execute au moment de l'instanciation d'une classe   
  
  public function saveProgression(){
    $query = 'INSERT INTO `savedProgressions`(`scaleName`, `firstChosenDegree`, `secondChosenDegree`, `thirdChosenDegree`, `fourthChosenDegree`) VALUES (:scaleName, :firstChosenDegree, :secondChosenDegree, :thirdChosenDegree, :fourthChosenDegree)';
    $saveProgression = $this->db->prepare($query);
    $saveProgression->bindValue(':scaleName', $this->lastName, PDO::PARAM_STR);
    $saveProgression->bindValue(':firstChosenDegree', $this->firstName, PDO::PARAM_STR);
    $saveProgression->bindValue(':secondChosenDegree', $this->mail, PDO::PARAM_STR);
    $saveProgression->bindValue(':thirdChosenDegree', $this->userName, PDO::PARAM_STR);
    $saveProgression->bindValue(':fourthChosenDegree', $this->password, PDO::PARAM_STR);
    if($saveProgression->execute()){
      return true;
    }
  }      
}
