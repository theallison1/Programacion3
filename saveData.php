<?php
include 'connection.php';

$connection = new Connection();
$con = $connection->connect();

if(
	!isset($_POST["name"]) || 
	!isset($_POST["price"]) || 
	!isset($_POST["quantity"]) || 
	!isset($_POST["id"])
) exit();


$id = $_POST["id"];
$name = $_POST["name"];
$price = $_POST["price"];
$quantity = $_POST["quantity"];

$sentences = $con->prepare("UPDATE products SET name = ?, price = ?, quantity = ? WHERE id = ?;");
$result = $sentences->execute([$name, $price, $quantity, $id]); 
if($result === TRUE)header('Location: product.php');
else echo "Algo salió mal. Por favor verifica que la tabla exista, así como el ID del usuario";
?>