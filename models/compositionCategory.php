<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of compositionCategory
 *
 * @author hans
 */

class compositionCategory extends database {
    public $id;
    public $categoryName;
    public $firstDegree;
    public $secondDegree;
    public $thirdDegree;
    public $fourthDegree;  
    public $fifthDegree; 
    public $sixthDegree;  
    public $seventhDegree;      

    
    public function __construct(){
         parent::__construct();
    }
//    __construct() est la seule fonction qui s'execute au moment de l'instanciation d'une classe   
    
}
