<?php
    class Pessoa{

    protected float $nome;
    protected string $salario;

    public function __construct(string $nome,float $salario){ 
    
        $this->nome = $nome;
        $this->salario = $salario;
    }

    //Funcionario é obrigado a implementar
    abstract public setSalario(float $salario);
    abstract public getSalario(): float;
    abstract public setNome(string $nome);
    abstract public getNome(): string; //abstrato não tem implementação

    public function imprimeNome(){
        echo "<p> {$this->nome} </p>";
    }

}
