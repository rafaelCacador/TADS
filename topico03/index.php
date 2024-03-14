<?php 
echo "Imprime letras: <br>";
include("a.php"); //funciona como um ctrl C ctrl V  
require("a.php"); //require faz com que o código seja obrigatório para a página rodar
// require("d.php"); erro fatal acaba com a impressão

require_once("c.php"); //evita redeclaração
include("b.php");
include_once("a.php") //só é incluido uma vez, não dá erro assim. Útil em classes

//-----------------------------------------------------------------------------------

require_once("UsuarioSessao.php");  //importa
require_once("UsuarioSessaoPermissao.php"); //SEMPRE usar o require ONCE
require_once("Funcionario.php");

$usu1 = new UsuarioSessao("Juquinha", null);

$usuP = new UsuarioSessaoPermissao("Juca","Juquinha",10);

$usuP->ler(); //UsuarioSessaoPermissao

$func = new Funcionario(1234,"Rafael",1243);

var_dump($func);

// $usu1->$nome = "Juquinha"; // -> é equivalente ao . 
// $usu1->$login = "juca";
// $usu1->salvar();
// $usu1->ler();

// var_dump($usu1);
