<?php 

include "Conexion.php";

$nombre = $_POST["nombre"];
$sexo = $_POST["sexo"];
$edad = $_POST["edad"];
$domicilio = $_POST["domicilio"];
$fecha_nacimiento = $_POST["fecha de nacimiento"];

$sql = "INSERT INTO usuarios(nombre, edad, sexo, domicilio, fecha_nacimiento)".
        "VALUES ('".$nombre."', ".$edad.", ".$sexo.", '".$domicilio."', '".$fecha_nacimiento."')";

        if($conexion->query($sql) == TRUE){
            echo "Registro guardado con exito <a href='ConsultarDatos.php'>Regresar</a>"

        }else{
            echo "Error: ".$sql."<br>".$conexion->error."<br><br><a href='ConsultarDatos.php'>Regresar</a>";
        }

    $conexion->close();
?>