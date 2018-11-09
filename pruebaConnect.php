<?php



/* 
 * En este archivo se guardan los datos para la conexión a la base de datos.
 * También creamos metodos para la conexión y el cierre de la base de datos.
 */
 

 
function connectDB()
{
$hostname = 'localhost';
$database = 'finalprogramacion3';
$username = 'root';
$password = '';
$DBConnection = null;
    try
    {
      $DBConnection = new PDO(
		"mysql:host=$hostname;dbname=$database",
		$userName,
		$password,
		array(PDO::ATTR_EMULATE_PREPARES => false, 
		PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION)
		);
    }
    catch(PDOException $e)
    {
        print "Error: ".$e->getMessage();
    }
}
 
function closeDB()
{
    $DBConnection['connect'] = NULL;
}

function CrearTablaProductos(){

    $tableProduct = 
"CREATE TABLE IF NOT EXISTS product(
		id INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
		nombre VARCHAR(20) NOT NULL,
		cantidad INT(2) UNSIGNED NOT NULL,
		costo DECIMAL(10,2) UNSIGNED NOT NULL
		)";

	$DBConnection->exec($tableProduct);
	echo("se realizo correctamente la creacion de la tabla Product");
	//var_dump($DBConnection);
}

function crearTablaListaPro(){

    $tableListProduct =
"CREATE TABLE IF NOT EXISTS listProduct(
		listProduct INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
		total DECIMAL(10,2) ,
		user VARCHAR(90))";

	$DBConnection->exec($tableListProduct);
	echo("<br>");
	echo("se creo correctamente la tabla ListProduct");
	//var_dump($DBConnection);

} 	




connectDB();
crearTablaListaPro();
CrearTablaProductos();
?>