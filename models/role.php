<?php

/**
* Description of role
*
* @author hans
*/
class role extends database{
  
  public $id;
  public $name;
  
  public function __construct() {
    parent::__construct();
    
  }
  
  /**
  * La méthode suivante permet d'afficher le rôle des utilisateurs (soit simple utilisateur, soit administrateur.) 
  * 
  * @return type
  */
  public function showRoles(){
    $query = 'SELECT `users`.`lastName`, `users`.`firstName`, `users`.`mail`, `users`.`userName`, `users`.`password`, `roles`.`name` FROM `roles` INNER JOIN `users` ON `roles`.`id` = `users`.`id_roles_defines`';
    $showInfo = $this->db->query($query);
    $showInfos = $showInfo->fetchAll(PDO::FETCH_OBJ);
    if(COUNT($showInfos) > 0){
      return $showInfos;
    }
  }
}
