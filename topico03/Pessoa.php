<?php
    class Pessoa{

    protected float $nome;
    protected string $salario;

    public function __construct(string $nome,float $salario){ 
    
        $this->nome = $nome;
        $this->salario = $salario;
    }

}
