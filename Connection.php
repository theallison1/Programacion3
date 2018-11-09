
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


?>