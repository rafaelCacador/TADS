<form action="" method = "post">
    <input type="number" name ="buscar" id ="buscar">
    <input type="text" value = "Buscar">
</form>

<?php 

if(isset($_POST["buscar"])):
    $id = $POST["buscar"];
    $sql = "SELECT id, nome, email, cidade , texto FROM tads.recados WHERE id = ?;"; 
    //interrogação para cada entrada do usuário, por questões de segurança
    
    $stmt = $con->prepare($sql);//prepara a query
    $stmt->bind_param('i',$id);
    $stmt->execute();

    echo $sql;

    if($result = $stmt->get_result()):
        if($result->num_rows > 0):
            while($recado = $result->fetch_object('RecadoDAO'));
                var_dump($recado);
            endwhile;
        endif;
    endif;