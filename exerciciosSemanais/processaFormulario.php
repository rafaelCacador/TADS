<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
</head>
<body>
    <p>O nome é <?php echo $_POST["nome"]; ?> </p>
    <p>O email é <?php echo $_POST["email"]; ?> </p>
    <p>O endereço é <?php echo $_POST["endereco"]; ?> </p>
    <p>A profissão é <?php echo $_POST["profissao"]; ?> </p>
    <p>O gênero é <?php echo $_POST["genero"]; ?> </p>
    
    <p>As áreas de interesse são: <br>
    <?php 
            foreach ($_POST["area_interesse"] as $area) {
                echo $area . "<br>";
            }
    ?>
    </p>
    <p>O fale conosco é <?php echo $_POST["fale_conosco"]; ?> </p>
    <p>Deseja receber promoções? <?php echo isset($_POST["promocoes"]) ? "Sim" : "Não"; ?> </p>
    <p>A senha é <?php echo $_POST["senha"]; ?> </p>
    <p>A confirmação da senha é <?php echo $_POST["confirmar_senha"]; ?> </p>

    <?php
    var_dump($_POST);
    ?>
</body>
</html>
