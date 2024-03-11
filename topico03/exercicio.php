<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays</title>
</head>
<body>
    <table border="1">
        <tr>
            <th>Nome</th>
            <th>Matrícula</th>
            <th>Nota</th>
            <th>Frequência</th>
        </tr>
        <?php
        
        $alunos = array(
            array("Nome" => "João", "Matrícula" => "123456", "Nota" => 8.5, "Frequência" => 90),
            array("Nome" => "Maria", "Matrícula" => "789012", "Nota" => 7.0, "Frequência" => 85),
            array("Nome" => "Pedro", "Matrícula" => "345678", "Nota" => 9.0, "Frequência" => 95),
            array("Nome" => "Ana", "Matrícula" => "901234", "Nota" => 6.5, "Frequência" => 80),
            array("Nome" => "Carlos", "Matrícula" => "567890", "Nota" => 8.0, "Frequência" => 92),
            array("Nome" => "Juliana", "Matrícula" => "234567", "Nota" => 7.5, "Frequência" => 88)
        );

        foreach ($alunos as $aluno) {
            echo "<tr>";
            echo "<td>" . $aluno['Nome'] . "</td>";
            echo "<td>" . $aluno['Matrícula'] . "</td>";
            echo "<td>" . $aluno['Nota'] . "</td>";
            echo "<td>" . $aluno['Frequência'] . "</td>";
            echo "</tr>";
        }
        ?>
    </table>    
</body>
</html>