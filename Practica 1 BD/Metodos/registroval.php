<?php 
if ($_SERVER["REQUEST_METHOD"] == "POST"){

    $Email = $_POST["Email"];
    $Nombre = $_POST["Nombre"];
    $Apellido = $_POST["Apellido"];
    $Contraseña = $_POST["Contraseña"];

    include '../Conexion/conexion.php';

    $hash = password_hash($Contraseña, PASSWORD_DEFAULT);

    $check_email_sql = "SELECT * FROM usuario WHERE Email = '$Email'";
    $result = $conexion->query($check_email_sql);
    
    if ($result->num_rows > 0){
        echo "Ya existe una cuenta con este correo";
    }
    
    else if($result->num_rows = 0){
        $sql = "INSERT INTO usuario (Nombre, Apellido, Email, Contraseña) VALUES ('$Nombre', '$Apellido', '$Email', '$hash')";
        $conexion->query($sql);
        header("Location: ../index.php");
        exit;
    }

    else{
        header("Location: error.php?error");
        exit;
    }
    $conexion->close();
}
?>