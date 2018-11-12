<?php


/*
 @autor Nico--!
 */
class Connection {

  function __construct(){

  }

   function connect()
    {
        // datos de conexión
        $userName = 'root';
        $password = '';
        $host = '127.0.0.1';
        $database = 'finalprogramacion3';
        $driver = "mysql";
        // al ser un recurso externo debemos controlar posibles errores
        try {


            return new PDO(
                "$driver:host=$host;dbname=$database",
                $userName,
                $password
            );

        } catch (PDOException $e) {
            print_r('Error: ' . $e->getMessage());
            //crea un txt para capturar posibles errores de conexión con la DB
            $this->logger_error($e);

        }
    }

      /*
      metodo para generar .txt ,capturando los errores de conexión
      tambien genera automaticamente un nombre aleatorio si existiera,
      un archivo con el nombre "error.txt".
      */
      function logger_error($value){

      $contenido=$value;
      $extencion= "error.txt";
      if (is_file($extencion)) {



       $extencion=substr(str_shuffle("0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ"), 0, 3);

      // $extencion = date("h:m:s j-n-y");

      $extencion="error" . $extencion . ".txt";
      }

      $archivo = fopen($extencion ,'a');
      fwrite($archivo,$contenido);

      echo "se creo el archivo <br>";


    }

   

       public function createSoldProductsTable()
    {
        $tableCreateQuery = "CREATE TABLE IF NOT EXISTS sold_products (
        id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        sell_id INT(6)UNSIGNED,
        NAME VARCHAR(120) NOT NULL,
        price FLOAT(20,2),
        date_sell  TIMESTAMP
    )";
    $connection = $this->connect();
    if (isset($connection)){
        $connection->exec($tableCreateQuery);

    }


 }

    public function createProducts(){
        $tableCreateQuery = "CREATE TABLE IF NOT EXISTS products (
            id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
            NAME VARCHAR(120) NOT NULL,
            price FLOAT(20,2),
            quantity  int(11)
            
        )";
        $connection = $this->connect();
        if (isset($connection)){
            $connection->exec($tableCreateQuery);
    
        }

    }


}



 ?>
