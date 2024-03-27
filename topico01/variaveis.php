<?php
    //
    
    $varA = "A";
    $varB = &$varA; //referencia o endereço de memória de A
    $varB = "B";
    
    echo "Será mostrado o valor da variável: $varA";
    echo "Será mostrado o valor da variável: $varb";

    echo $varA;
    echo "<br>";
    echo $varB;


    echo "<br>";
    $numero = 12;
    $decimal = $numero;

    echo $decimal;

    $texto = "12";
    $numero = (int) $texto; //força converção

    echo gettype($numero);

    $texto2 = "Olá";
    $texto3 = "Mundo!";
    $resultado = $texto2.$texto3; //concatencação, bem diferente
    
    echo $resultado;


    // if, elseif e else igual as outras linguagens

    $var = 10;

    if($var > 5){
        echo "Maior que 5";
    }else if($var > 3){
        echo "Menor que 5 e maior que 3";
    }else{
        echo "Menor que 3";
    }

    for($i = 0; $i <= 20; $i++){
        ;
        echo "O quadrado de $i é ".$i*$i;

    }



?>
