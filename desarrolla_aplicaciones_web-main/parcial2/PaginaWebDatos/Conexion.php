<?php 

 $server = "localhost";
 $user = "root";
 $password = "";
 $database = "practica_web";

 $conexion = new mysqli ($server, $user, $password, $database);

 if($conexion -> connect_error){
    die("Fallo la conexion" . $conexion -> connect_error);
 }



?>