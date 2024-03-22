<?php
    //localhost:8081

    $db = new mysqli('mariadb', 'root', 'root', 'tads');  

    $query = 'SELECT * FROM tads.alunos';

    $result = $db->query($query);

    while($linha = $result->fetch_assoc()){ //pega os resultados pelo array associativo
        echo "<p> {$linha["id"]} {$linha["matricula"]} {$linha["nome"]} </p>";
    }

    var_dump($db);

    $db->close();-



