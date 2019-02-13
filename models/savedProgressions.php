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
    public $scaleDegrees;
    
    public function __construct(){
         parent::__construct();
    }
//    __construct() est la seule fonction qui s'execute au moment de l'instanciation d'une classe   
  
    
    
}
