<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Final programacion 3</title>
</head>
<body>
    <select name="" id="">
        <?php
        require('Connection.php');
        $con = conectar();
        $sql = "SELECT id,nombre FROM  product ";
        $stmt = $con->prepare($sql);
        $result = $stmt->exec();
        $rows = $stmt->fetchAll(PDO::FETCH_OBJ);

        foreach ($rows as $row) {
            ?>
            <option value="<?php print($row->id);?>"> <?php print($row->nombre);?>  </option>
            <?php

        }
        
?>

        
    </select>
</body>
</html>