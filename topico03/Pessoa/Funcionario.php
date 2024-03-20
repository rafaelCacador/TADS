
<?php
    require_once("Pessoa.php");

    class Funcionario extends Pessoa{

        private int $matricula;

        public function __construct(float $salario,string $nome, int $matricula){ 

            parent:: __construct($salario,$nome);
            $this->matricula = $matricula; 

        }

        public function __destruct(){
            echo "Destruindo o objeto {$this->nome}";
        }

        public function getSalario(): float{
            return $this->salario;
        }

        public function setSalario(float $valor){
            if($valor >= 1000){
                $this->salario = $valor;
            }
        }

        function setNome(string $nome){
            $this->nome = $nome;
        }

        function getNome(): string{
            return $this->nome = $nome;
        }
        
        function imprime(){
            echo "<p> {$this->nome} </p>";
            echo "<p> {$this->salario} </p>";
            echo "<p> {$this->matricula} </p>";
        }


        //__get e __set usa só em situações bem especificas
        function __get($nome) {
            if($nome == "identidade"){
                return $this->matricula;
            }
            //__get é chamada quando tem que pegar um atributo não tem acesso ou não existe
            var_dump($nome);
            die(); //lança um erro e para um código
            
        }

        function __set($nome,$valor){
            if($nome == "identidade"){
                return $this->matricula = $valor;
            }
        }

        function __call($nome,$parametros){
            if($nome == "setIdentidade"){
                $this->matricula = $parametros[0];
            }
        }
    }
