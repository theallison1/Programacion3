<?php

/*
 @autor Nico--!
 */

include 'Sell.php';
include 'Product.php';
include 'connection.php';

$conector =new connection();

$conector->connect();
$conector->createProducts();
$conector->createSoldProductsTable();

echo"se crearon correctamente las tablas";