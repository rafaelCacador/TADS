
<?php
    require_once("Pessoa.php");

    class Funcionario extends Pessoa{

        private int $matricula;

        public function __construct(string $nome,float $salario, int $matricula){ 

            parent::__construct(string $nome,float $salario);
            $this->matricula = $matricula; 

        }
        public function getSalario(): float{
            return $this->salario
        }

        public function setSalario(): (float $valor){
            if($valor >= 1000){
                $this->salario = $valor;
            }
        }
        
    }
