<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!--tudo vai ser enviado em post e o action via get-->
    <form action="processa.php?id=<?$_POST["userId"]?>" method="post"> <!-- get manda direto pela url-->
    <!-- userId é recebido via Post e fica dentro da url(GET)-->
        <input type="text" name = "nome" > <br>
        <input type="text" name= "sobrenome"><br>

        <input type="radio" name="estCivil" value="Solteiro">Solteiro
        <input type="radio" name="estCivil" value="Casado">Casado <br> <!-- tem o mesmo nome para não poder marcar os 2-->
        
        <select name="selEstado">
            <option value="RJ">Rio de Janeiro</option>
            <option value="MG">Minas Gerais</option>
            <option value="SP">São Paulo</option>
            <option value="RS">Rio Grande do Sul</option>
            <option value="BA">Bahia</option>
        </select><br>

        <select name="mes">

            <option value="Janeiro">1</option>
            <option value="Fevereiro">2</option>
            <option value="Março">3</option>
            <option value="Abril">4</option>
            <option value="Maio">5</option>
            <option value="Junho">6</option>
            <option value="Julho">7</option>
            <option value="Agosto">8</option>
            <option value="Setembro">9</option>
            <option value="Outubro">10</option>
            <option value="Novembro">11</option>
            <option value="Dezembro">12</option>

        </select><br>

        <input type="checkbox" name = "extras[]" value="Garagem" > Garagem <br>
        <input type="checkbox" name = "extras[]" value="Piscina" > Piscina <br>
        <input type="checkbox" name = "extras[]" value="Jardim" > Jardim <br>

        <input type="hidden" name = "userId" value="<?= $_POST["userId"]?>" >
        <input type="hidden" name = "token" value="132456"> 
      
        <input type="submit" value= "Enviar">

    </form>
    
</body>
</html>