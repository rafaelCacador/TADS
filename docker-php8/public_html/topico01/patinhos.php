<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Patinhos</title>
</head>
<body>
    <?php
     $patinhos = 100;
        while ($patinhos >= 1):

      ?>      
        <p>
            <?= $patinhos?> foram passear <br>
            Além das montanhas foram brincar <br>
            A mamãe gritou Quá quá quá quá <br>
            mas só <?= -- $patinhos ?> voltaram de lá

        </p>

    <?php
    endwhile;

    ?>  

</body>
</html>