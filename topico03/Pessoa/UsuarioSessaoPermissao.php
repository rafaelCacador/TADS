<?php
require_once("UsuarioSessao.php");

class UsuarioSessaoPermissao extends UsuarioSessao{
    public $permissao;

    public function __construct($nome, $login, $permissao){

        parent::__construct($login,$nome); //acessa o construtor pai com os parametros filho
        //this faz referencia da instancia do objeto

        $this->permissao = $permissao;

        echo "Nova permissao";

    }

    public function ler():string{
        echo "<p> ler UsuarioSessaoPermissao</p>";

        return $this->nome;
    }

}
