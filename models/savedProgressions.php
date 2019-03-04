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
  public $id_users;
  public $id_compositionCategory;
  
  public function __construct(){
    parent::__construct();
  }
  //    __construct() est la seule fonction qui s'execute au moment de l'instanciation d'une classe   
  
  public function saveProgression(){
    $query = 'INSERT INTO `savedProgressions`(`scaleName`, `firstChosenDegree`, `secondChosenDegree`, `thirdChosenDegree`, `fourthChosenDegree`, `id_users`, `id_compositionCategory`) VALUES (:scaleName, :firstChosenDegree, :secondChosenDegree, :thirdChosenDegree, :fourthChosenDegree, :id_users, :id_compositionCategory)';
    $saveProgression = $this->db->prepare($query);
    $saveProgression->bindValue(':scaleName', $this->scaleName, PDO::PARAM_STR);
    $saveProgression->bindValue(':firstChosenDegree', $this->firstChosenDegree, PDO::PARAM_STR);
    $saveProgression->bindValue(':secondChosenDegree', $this->secondChosenDegree, PDO::PARAM_STR);
    $saveProgression->bindValue(':thirdChosenDegree', $this->thirdChosenDegree, PDO::PARAM_STR);
    $saveProgression->bindValue(':fourthChosenDegree', $this->fourthChosenDegree, PDO::PARAM_STR);
    $saveProgression->bindValue(':id_users', $this->id_users, PDO::PARAM_STR);
    $saveProgression->bindValue(':id_compositionCategory', $this->id_compositionCategory, PDO::PARAM_STR);
    if($saveProgression->execute()){
      return true;
    }
  }      
}
