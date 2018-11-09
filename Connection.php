
<?php 


$userName = 'root';
$password = '';
$host = 'localhost';
$database = 'finalprogramacion3';


//se crea la conexion
	try {
	$DBConnection = null; 
	$DBConnection = new PDO(
		"mysql:host=$host;dbname=$database",
		$userName,
		$password,
		array(PDO::ATTR_EMULATE_PREPARES => false, 
		PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION)
		);

	} 	catch(PDOExeption $e) {
		echo 'Error: ' . $e -> getMessage();
	}


//creando una funcion para crear la tabla product si no existiera

function createTableProduct(){

	try{
		$tableProduct = 
        "CREATE TABLE IF NOT EXISTS product(
		id INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
		nombre VARCHAR(20) NOT NULL,
		cantidad INT(2) UNSIGNED NOT NULL,
		costo DECIMAL(10,2) UNSIGNED NOT NULL
		)";

		$GLOBALS['DBConnection']->exec($tableProduct);//$Global nos permite acceder a las variables globalmente
		echo("<br>");
		echo("se realizo correctamente la creacion de la tabla Product");
		//var_dump($DBConnection);

	}catch(PDOExeption $e) {
		echo 'Error: ' . $e -> getMessage();
	}	

}
	function insertDate(){

		// $sql = "SELECT id FROM $dbTable where id=1";
		$sql1  = "INSERT into product (nombre,costo,cantidad)VALUES ('celular',33.33,444)";
 		$stmt = $GLOBALS['DBConnection']->prepare($sql1);
		 $stmt->execute(); 
		 echo("se insertaron dato s por defecto");
	}


	//creando una funcion para crear la tabla listProduct si no existiera

function createTableListProduct(){


	try{

		$tableListProduct =
        "CREATE TABLE IF NOT EXISTS listProduct(
		listProduct INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
		total DECIMAL(10,2) ,
		user VARCHAR(90))";

		$GLOBALS['DBConnection']->exec($tableListProduct);//$Global nos permite acceder a las variables globalmente

		
		echo("<br>");
		echo("se creo correctamente la tabla ListProduct");
		//var_dump($DBConnection);

	}catch(PDOExeption $e) {
		echo 'Error: ' . $e -> getMessage();
	}

}

	//funcion para eliminar conexion a la DB
	function disconnect () {

   $GLOBALS['DBConnection'];
   $GLOBALS['DBConnection'] = null;
   echo("<br>");
   echo("se cerro correctamente la BD");
}

	//validar si en la db existen productos 
    function ValidateValuesInDB(){
	$dbTable = 'product';		
	$sql = "SELECT COUNT(id)FROM $dbTable";
 	$stmt = $GLOBALS['DBConnection']->prepare($sql);
 	$stmt->execute(); 

 	//Para almacenar los datos en una variable
	 $ArrDatos = $stmt->fetchAll(PDO::FETCH_ASSOC);
	 echo("<br>");
	 var_dump($ArrDatos);
	 echo("<br>");
		
		
	
	//Comprobar si está vació y si lo está, le insertamos datos
		
	if(count($ArrDatos)>1){
		echo("hay datos!");
	}
	else{
		echo("no hay datos");
	
	}
	
            

	
            

//una vez establecida la conexion con la DB ejecutamos la funciones de crear tablas en DB
// createTableProduct();
// createTableListProduct();


//verificamos si existen valores precargados y si no los hubiese los cargamos
ValidateValuesInDB();

//terminando de ejecutar todas nuestras tareas en la BD cerramos la conexion
// disconnect();




?>