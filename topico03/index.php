<?php 
echo "Imprime letras: <br>";
include("a.php"); //funciona como um ctrl C ctrl V  
require("a.php"); //require faz com que o código seja obrigatório para a página rodar
// require("d.php"); erro fatal acaba com a impressão

require_once("c.php"); //evita redeclaração
include("b.php");
include_once("a.php"); //só é incluido uma vez, não dá erro assim. Útil em classes

// $usu1->$nome = "Juquinha"; // -> é equivalente ao . 
// $usu1->$login = "juca";
// $usu1->salvar();
// $usu1->ler();

// var_dump($usu1);

//-----------------------------------------------------------------------------------

 require_once("UsuarioSessao.php");  //importa
 require_once("UsuarioSessaoPermissao.php"); //SEMPRE usar o require ONCE
 require_once("Funcionario.php");
 require_once("Departamento.php");

$usu1 = new UsuarioSessao("Juquinha", null);

$usuP = new UsuarioSessaoPermissao("Juca","Juquinha",10);

$usuP->ler(); //UsuarioSessaoPermissao

$func1 = new Funcionario(1234,"Rafael",1243);
$func2 = new Funcionario(1234,"Mariazinha",1243);

$dep = new Departamento();

$dep-> addFuncionario($func1);
$dep-> addFuncionario($func2);

echo Departamento :: IDENTIFICADOR;

$dep-> getFuncionario(1)->getSalario(); //getFuncionario() do departamento e get salario do Funcionario -> mesmo obj Funcionario

var_dump($func1);

