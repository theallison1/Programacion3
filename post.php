<?php
include 'connection.php';

//objeto conecction

$queseyo = new Connection();

$queseyo->connect();



$name = $_POST['name'];
$price = $_POST['price'];
$quantity = $_POST['quantity'];

if($name === '' || $price=== ''){
    echo json_encode('error');
}else{


    $queseyo->createProducts();
    
    $queseyo->insert($name,$price,$quantity);

    // echo json_encode(['pass' => $pass, 'user' => $usuario]);

    echo json_encode('Correcto ha insertado en la base de datos <br>Nombre: '.$name.'<br>Precio: $ '.$price.
    '<br>Cantidad: '.$quantity.' Articulos');

}









