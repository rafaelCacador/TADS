<?php 
echo "Imprime letras: <br>";
include("a.php"); //funciona como um ctrl C ctrl V  
require("a.php"); //require faz com que o código seja obrigatório para a página rodar
// require("d.php"); erro fatal acaba com a impressão

require_once("c.php"); //evita redeclaração
include("b.php");
include_once("a.php") //só é incluido uma vez, não dá erro assim. Útil em classes

//----------------------------------------------------------------------------------
require_once("UsuarioSessao.php");  //importa

$usu1 = new UsuarioSessao();

$usu1->$nome = "Juquinha"; // -> é equivalente ao . 
$usu1->$login = "juca";

$usu1->salvar()
$usu1->ler()

var_dump($usu1);
