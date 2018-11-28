<?php
include 'connection.php';

    $connection=new Connection();
    $con = $connection->connect(); 
    $sentences = $con->prepare("SELECT  * from products");
    $sentences->execute();
    $result = $sentences->fetchAll();

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

<body>
  <header id="header">
    <div class="container">

      <h1 class="text-center">
        Supermerk2
      </h1>

      <ul class="nav nav-pills">
        <li class="nav-item">
          <a class="nav-link" href="index.html">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="product.php">Products</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="sale.html">Sales</a>
        </li>
      </ul>
      <br><br>
    <a href="newProduct.html" class="btn btn-info btn-sm btn-block" type="button">New Product</a>   
  </header> 

<div>
  <section id="hero">
    <div class="hero-container">
      
<table class="table table-striped table-hover">
        <thead>
          <tr>
            <th>#</th>
            <th>Product</th>
            <th>Price</th>
            <th>Quantity</th>
            <th>Action</th>
          </tr>
        </thead>

        <tbody>
          <?php foreach($result as $res) { ?>
          <tr>
            <td><?php echo $res["id"] ?></td>
            <td><?php echo $res["name"] ?></td>
            <td><?php echo $res["price"] ?></td>
            <td><?php echo $res["quantity"] ?></td>
            <td>
              <a class="btn btn-lg btn-warning btn-sm" href="<?php echo "edit.php?id=" . $res["id"]?>">Edit</a> 
              <a class="btn btn-lg btn-danger btn-sm" href="<?php echo "delete.php?id=" . $res["id"]?>">Delete</a>
            </td>
          </tr>
          <?php } ?>
        </tbody>
</table>

    </div>
  </section>
  </div>


    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/scripts.js"></script>
  </body>
</html>