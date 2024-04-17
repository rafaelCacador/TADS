<?php

    class Database{

        static $db = null;

        public function __construct() {
        
            if (self::$db == null){
                self::$db = new mysqli('mariadb','root','root','tads');
        
                if ( self::$db->connect_errno > 0){
                    die("Ocorreu um erro { self::$db->connect_errno}");
                }
            }
        
        }
    
       function getConnection(){
            return self::$db;
        }
        function closeConnection(){
            self::$db->close();
        }

}
