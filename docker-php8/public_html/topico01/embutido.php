<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Embutido</title>
<style>

    </style>


</head>
<body>
    <div class="principal">
        <h1>Quadrados</h1>
        <p>
<?php
    $j = 1;
    while($j <= 20):
        $quadrado = $j * $j;
        echo "O quadrado de $j é $quadrado <br>";
        $j++;

    endwhile;   //mais fácil para não se perder no php html
                //também existe o endif

    $nome = "Rafael";
    $sobrenome = "Caçador";

?>
    <h2 class= "blue"><?php echo "$nome $sobrenome" ?> </h2>
    <h2 class= "blue"><?= "$nome $sobrenome" ?> </h2> <!-- mesma coisa que a linha de cima -->
</p>
    </div>
</body>
</html>