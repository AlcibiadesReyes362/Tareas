<?php

    $servidor = "localhost"; // El servidor que utilizaremos, en este caso será el localhost 
    $usuario = "JuanDS7"; // El usuario que acabamos de crear en la base de datos 
    $contrasenha = "hola123"; // La contraseña del usuario que utilizaremos 
    $BD = "practicajuan"; // El nombre de la base de datos
    
    /* Hacemos la conexion a la base de datos */ 

    

    $conexion = new mysqli($servidor, $usuario, $contrasenha, $BD); 

    /* Comprobamos la conexion */

    if (!$conexion) { 
        die('<strong>No pudo conectarse:</strong> ' . mysql_error()); 
        }

?>