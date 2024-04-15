<?php

require_once "Database.php";
require_once "Aluno.php";

$db = new Database();

$con = $db->getConnection();

$nome = 'Florzinha';
$matricula = 12345.

$insertSql = "INSERT INTO tads.alunos (nome,alunos) VALUES (:nome,:matricula);";

$stmt = $con->prepare($insertSql);

//bindParam passa um parâmetro para o nome da variável especificada
$stmt->bindValue(':nome',$nome);
$stmt->bindValue(':matricula',$matricula); //não importa se mudar depois, 
//e sim o valor quando o bind é chamado, fixa o valor

$stmt->bindParam(1,$nome); //faz o bind com a variável e só atribui 
//o valor com o execute, podendo alterar o valor de acordo com mudanças do endereço
$stmt->bindParam(2,$matricula);

$nome = 'Lindinha';
$matricula = 78654321;

if($stmt->execute()){
    echo "Registro incluido! <br>"
}


// $insertSql = "INSERT INTO tads.alunos (nome,alunos) VALUES ('Mariazinha','456132798');";
// $insertResult = $con->exec($insertSql)


$sql = "SELECT id, nome, matricula FROM tads.alunos;";

$alunos = $con->query($sql);

$alunos->setFetchMode(PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE,"Aluno");


echo "Quantidade de alunos: {$alunos->rowCount()}";

foreach ($alunos as $aluno) {
    $aluno->imprimeDados();
}







