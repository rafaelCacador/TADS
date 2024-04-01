<?php

spl_autoload_register(function ($classe){ 
    require_once str_replace('\\','/', $classe,'.php');
 });

require_once "Vendas.php";
require_once "Produto.php";

use Vendas\Cesta;
use Vendas\Produto;

$prod1 = new Produto("Produto 1", 10);
$prod2 = new Produto("Produto 2", 20);

$cesta = new Cesta();
$cesta->adicionaItem($prod1);
$cesta->adicionaItem($prod2);

$cesta->exibeLista();
$cesta->calculaTotal();