<?php
include 'connection.php';

$conector = new Connection();
$conector->connect();

$name = $_POST['product'];
$price = $_POST['price'];
$quantity = $_POST['quantity'];

if($name === '' || $price=== '' || $quantity=== ''){
    echo json_encode('error');
}else{
    $conector->insertProducts($name, $price, $quantity);

}