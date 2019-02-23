<?php

/*
* To change this license header, choose License Headers in Project Properties.
* To change this template file, choose Tools | Templates
* and open the template in the editor.
*/

/**
* Description of popularProgressions
*
* @author hans
*/

class popularProgressions extends database {
  public $id;                    
  public $progressionName;       
  public $scaleDegrees;   
  public $id_compositionCategory = 1;
  //  attribution des rôles = compositionCategory --> 1 = Majeur 2 = Mineur
  
}
