<?php 

class UsuarioSessao{
    public $login;
    public $nome;

    public function salvar(string $nome){
        $this->nome = $nome;
        echo "<p> salvar </p>" ;
    }

    public function ler():string{
        echo "<p> ler </p>";

        return $this->nome;
    }

    public function __construct($login,$nome){  //construtor começa com __ no php
        $this->login = $login;
        $this->nome = $nome;

        echo "<p> novo objeto </p>";
    }

   


}
