<?php

class Database{

    static $db = null;


    function getConnection() {
          
        if (self::$db == null){
            self::$db = new PDO('mysql:host=mariadb:dbname=tads','root','root',);
            //cria uma vez e fica reaproveitando com o self
        }
        return self::$db; //retorna a conexão
    }

    function closeConnection() {
        self::$db->null;
    }
}

