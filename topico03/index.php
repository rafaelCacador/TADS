<?php
 // require_once("./Pessoa/Pessoa.php");
 // require_once("./Pessoa/Funcionario.php");
 // require_once("./Pessoa/Departamento.php");
 // require_once("./Financas/Conta.php");
 // require_once("./Seguranca/Conta.php");

 spl_autoload_register(function ($classe){ //função de callback (acontece se acontecer alguma coisa)
    echo "Fez o require do {$classe}.php";
    require_once str_replace('\\','/', $classe,'.php');

 });


use Financas\Conta as ContaF;
use Seguranca\Conta as ContaS; //não substitui o require once

$func1 = new Funcionario(1234,"Rafael",1243);
$func2 = new Funcionario(1234,"Mariazinha",1243);

$dep = new Departamento();

$dep-> addFuncionario($func1);
$dep-> addFuncionario($func2);

$contaF = new ContaF();
$contaS = new ContaS();

//$seguranca = new Seguranca\Conta();

//$financa = new Financas\Conta();
