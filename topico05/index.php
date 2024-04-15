<?php
require_once "Database.php";
require_once "Aluno.php";

$alunoAntigo = new Aluno(1,"Huguinho",132456, true);

//PDO prepared statements
$db = new Database();

$con = $db->getConnection();

$sql = "SELECT id, nome, matricula FROM tads.alunos WHERE id = 1;";

$alunos = $con->query($sql);

$alunos->setFetchMode(PDO::FETCH_INTO, $alunoAntigo); //busca os elementos e atualiza o obj, não o banco
//para atualizar o banco precisa de uma query insert 
$alunos->execute(); //executa o statement

$alunos->fetch();
$alunoAntigo = $alunos->fetch();

echo "Quantidade de alunos: {$alunos->rowCount()}";

var_dump($alunoAntigo);

foreach($alunos as $aluno){
    $aluno->imprimeDados();

}
$db->closeConnection();

//$alunos->setFetchMode(PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE, "Aluno");
//insere as propriedades depois, funciona junto com o fetch_class