<?php  
    //A letra deve contar até 99 patinhos;
    //Imprima um "Quá" para cada patinho que for passear;

    function musicaPatinhos($quantidade) {
        for ($i = 1; $i <= $quantidade; $i++) {
            $qua = ''; // Inicializa a string para contar os quás

            for ($j = 0; $j < $i; $j++) {

                $qua .= "Quá, "; // .= adiciona um quá 
            }
            echo "$i patinhos foram passear, além das montanhas para brincar\n";
            echo "A mamãe gritou: $qua\n";
        }
        echo "Mas nenhum patinho voltou de lá.\n";
    }
    
    musicaPatinhos(99);
    
?>
