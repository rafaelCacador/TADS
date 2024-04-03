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


    //localhost:8081

    //$db = new mysqli('mariadb', 'root', 'root', 'tads');  

    //$query = 'SELECT * FROM tads.alunos';

    //$result = $db->query($query);

    //while($linha = $result->fetch_assoc()){ //pega os resultados pelo array associativo
    //    echo "<p> {$linha["id"]} {$linha["matricula"]} {$linha["nome"]} </p>";
    //}

    //var_dump($db);

    //$db->close();
 


