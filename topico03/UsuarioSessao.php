<?php 

class UsuarioSessao{
    public $login;
    public $nome;

    public function salvar(){
        echo "<p> salvar </p>" ;
    }

    public function ler(){
        echo "<p> ler </p>";

    }

    public function __construct($login,$nome){  //construtor começa com __ no php
        $this->login = $login;
        $this->nome = $nome;
        


        echo "<p> novo objeto </p>";
    }
}
