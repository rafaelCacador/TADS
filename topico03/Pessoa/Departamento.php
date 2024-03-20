<?php
    require_once("Funcionario.php");

    class Departamento{

        private $funcionarios;
        const IDENTIFICADOR = 789;
        static $quantidade = 0;

        public function __construct() {
            $this->funcionarios = array();
            
        }

        public function addFuncionario(Funcionario $funcionarios){
            $this->funcionarios[] = $funcionarios;
            self::$quantidade++; //corresponde a classe, não a instancia
            
        }

        public function getFuncionarios(){
            return $this->funcionarios;
        }

        //public function getFuncionario(int $index){
        //    return $this->funcionarios($index);
        //    
        //}
        
    }
