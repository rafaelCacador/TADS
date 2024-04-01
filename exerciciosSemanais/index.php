<?php
require_once "Vendas.php";
require_once "Produto.php";

use Vendas\Cesta;
use Vendas\Produto;

$produto1 = new Produto("Produto 1", 10);
$produto2 = new Produto("Produto 2", 20);

$cesta = new Cesta();
$cesta->adicionaItem($produto1);
$cesta->adicionaItem($produto2);

$cesta->exibeLista();
$cesta->calculaTotal();