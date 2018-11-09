<?php
    include 'conexion.php';
    $query=mysqli_query($mysqli,"SELECT id, nombre FROM product");
    
    if(isset($_POST['estado']))
    {
        $estado=$_POST['estado'];
        echo $estado;
    }
?>

<html>
    <head>
        <!-- Bootstrap CSS -->
<link rel="stylesheet" href="bootstrap/bootstrap.min.css">
        <title>
            Ejemplo
        </title>
    </head>
    <body>
        <form action="estados.php" method="post">
            <div class="text-center">
                
                    <h3>Elije tu producto </h3>
                    <select name="estado">
                    <?php 
                        while($datos = mysqli_fetch_array($query))
                        {
                    ?>          
                        <div class="dropdown ">
                            <option   value="<?php echo $datos['nombre']?>"> <?php echo $datos['nombre']?> </option>
                            
                        </div>
                    <?php
                        }
                    ?> 
                    </select>
                    <input class="btn btn-primary" type="submit" value="Agregar">
               
            </div>

                        
            
        </form>
    </body>
</html>