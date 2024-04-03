<?php

class RecadoDAO{
    private $id;
    private $nome;
    private $email;
    private $cidade;
    private $texto;

    //adiciona ao sql antes de chamar o construtor, por isso não implementa agora

    function imprimeLinhaTabela(){//fazendo get para o index.php passando o id 
        echo "
            <tr> \n
                <td>{$this->nome}</td>\n
                <td>{$this->email}</td>\n
                <td>{$this->cidade}</td>\n
                <td>{$this->texto}</td>\n
                <td><a href=\"index.php?excluir={$this->id}\"</a></td> 
            </tr> 
        ";
    }
}