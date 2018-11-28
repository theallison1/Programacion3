<?php
if(!isset($_GET["id"])) exit();
$id = $_GET["id"];
$connection=new PDO("mysql:host=127.0.0.1;dbname=finalprogramacion3;port=3306","root","");
$sentences = $connection->prepare("DELETE FROM products WHERE id = ?;");
$result = $sentences->execute([$id]);
if($result === TRUE)
	header('Location: product.php');
else echo "Algo salió mal";
?>