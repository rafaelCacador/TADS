<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
</head>
<body>
    <p>O nome é <?php $_POST["nome"]?> </p>
    <p>O estado civil é <?php $_POST["estCivil"]?> </p>
    <p>O estado é <?php $_POST["selEstado"]?> </p>
    <p>Os extras são: <br>
<?php 
    foreach ($POST["extras"] as $extra): 
?> 

<?= $extra ?> <br>

<?php 
    endforeach;
?> 
    </p>
    
    <p>O userId é: <?= $_GET["id"] ?> </p> <!-- via GET e os outros via POST -->

    <?php
    var_dump($_POST)
    ?>
</body>
</html>
