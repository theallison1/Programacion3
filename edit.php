<?php

include 'Connection.php';
if(!isset($_GET["id"])) exit();
$id = $_GET["id"];

$connection = new Connection();
$con=$connection->connect();

$sentences = $con->prepare("SELECT * FROM products WHERE id = ?;");
$sentences->execute([$id]);
$productList = $sentences->fetch();
if($productList === FALSE){
	echo "¡No existe ningun producto con ese ID!";
	exit();
}

?>
<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Supermerk2</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

  </head>

<body>
    <div class="container my-5">
    <h2 class=" text-center">Edit product</h2>
    <br><br>
    <form method="post" action="saveData.php">
    	<input type="hidden" name="id" value="<?php echo $productList["id"]; ?>"> <!-- ID oculto para el usuario -->
        <div class="form-group row">
            <label for="NAME" class="col-sm-2 col-fomr-label">Name</label>
            <div class="col-sm-10">
               <input value="<?php echo $productList["name"] ?>" name="name" onblur="validation()" required type="text" id="fnamePro" class="form-control">

            </div>
        </div>
        <div class="form-group row">
            <label for="price" class="col-sm-2 col-fomr-label">Price</label>
            <div class="col-sm-10">
                <input value="<?php echo $productList["price"] ?>" onkeypress="return validarNumero(event)" name="price" required type="text" id="price" class="form-control">
            </div>
        </div>
        <div class="form-group row">
            <label for="quantity" class="col-sm-2 col-fomr-label">Quantity</label>
            <div class="col-sm-10">
                <input value="<?php echo $productList["quantity"] ?>" onkeypress="return validarNumero(event)" name="quantity" required type="text" id="quantity" class="form-control">
            </div>
        </div>
        <div class="text-center">
        <button class="btn btn-danger " type="submit" value="Guardar cambios">Save</button>
        </div>
    </form>

        <div class="mt-3" id="respuesta">
            
        </div>
    </div>

    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/scripts.js"></script>
    <script src="Validaciones.js"></script>
  </body>
</html>