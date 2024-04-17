<?php

require_once "Recado.php";
require_once "InterfaceDAO";

class RecadoDAO extends Recado implements InterfaceDAO{

    public static function criar($dados){

        $con = Database::getConnection(); //conexão do banco :: usa um método da classe

        $sql = "INSERT INTO tads.recados
        (nome, email, cidade, texto)
        VALUES(:nome,:email,:cidade,texto);";
        $stmt = $con->prepare($sql); //precisa de uma conexão
        $stmt->bindValue(':nome',$nome);
        $stmt->bindValue(':email',$email);
        $stmt->bindValue(':cidade',$cidade);
        $stmt->bindValue(':texto',$texto);
        return $stmt->execute();
        
    }
    public static function deletar($id){

        $con = Database::getConnection();

        $sql = "DELETE FROM tads.recados WHERE id=:id";

        $stmt = $con->prepare($sql); //precisa de uma conexão
        $stmt->bindValue(':id',$id);
       
        return $stmt->execute();


    }
    public static function buscar($id){

        $con = Database::getConnection();



    }
    public static function buscarTodos(){

    }
    public static function atualizar($id, $dados){

        $con = Database::getConnection();

        $sql = "UPDATE tads.recados
            SET nome= :nome, email=:email, cidade=:cidade, texto=:texto 
            WHERE id=:id";

        $stmt = $con->prepare($sql); //precisa de uma conexão
        $stmt->bindValue(':nome',$nome);
        $stmt->bindValue(':email',$email);
        $stmt->bindValue(':cidade',$cidade);
        $stmt->bindValue(':texto',$texto);
        $stmt->execute();

    }

    function imprimeLinhaTabela(){
        echo "
            <tr>\n
                <td> {$this->nome} </td>\n
                <td> {$this->email} </td>\n
                <td> {$this->cidade} </td>\n
                <td> {$this->texto} </td>\n
                <td> <a href=\"index.php?excluir={$this->id}\">X</a></td>
                <td> <a href=\"index.php?alterar={$this->id}\">X</a></td>
            </tr>\n
        ";        
    }

   
}