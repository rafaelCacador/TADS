<?php

namespace Vendas;

require_once "Produto.php";

class Cesta {
    private $itens = [];

    public function adicionaItem(Produto $produto) {
        $this->itens[] = $produto;
    }
    
    public function exibeLista() {
        foreach ($this->itens as $item) {
            echo $item->getNome()."\n";
        }
    }
    
    public function calculaTotal() {
        $total = 0;
        foreach ($this->itens as $item) {
            $total += $item->getPreco();
        }
        echo "Total: $total\n";
    }
}

spl_autoload_register(function ($class) {
    $class = str_replace('\\', '/', $class);
    require_once __DIR__ . "/$class.php";
});
