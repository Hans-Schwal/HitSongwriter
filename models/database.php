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

//class database
//{
//    private static $dbName = 'hitsongwriter' ;
//    private static $dbHost = 'localhost' ;
//    private static $dbUsername = 'hans';
//    private static $dbUserPassword = 'Lhlpsdnh87';
//     
//    private static $cont  = null;
//     
//    public function __construct() {
//        die('Init function is not allowed');
//    }
/*
 * __construct(): This is the constructor of class Database. Since it is a static class, 
 * initialization of this class is not allowed. To prevent misuse of the class, we use a "die" 
 * function to remind users.
 */     
//    public static function connect()
//    {
       // One connection through whole application
//       if ( null == self::$cont )
//       {     
//        try
//        {
//          self::$cont =  new PDO( "mysql:host=".self::$dbHost.";"."dbname=".self::$dbName, self::$dbUsername, self::$dbUserPassword); 
//        }
//        catch(PDOException $e)
//        {
//          die($e->getMessage()); 
//        }
//       }
//       return self::$cont;
//    }
//     
//    public static function disconnect()
//    {
//        self::$cont = null;
//    }
//}
//?>