<?php 

if ($_SERVER["REQUEST_METHOD"] == "POST"){

    $Email = $_POST["Email"];
    $Contraseña = $_POST["Contraseña"];

    include '../Conexion/conexion.php';

    $sql = "SELECT Contraseña FROM usuario WHERE Email = '$Email'";
    $result = $conexion->query($sql);

    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();
        $hash = $row["Contraseña"];

        if (password_verify($Contraseña, $hash)) {
            header("Location: ../principal.php");
        } else {
            header("Location: error.php?error=Contraseña");
        }
    } else {
        header("Location: error.php?error=usuario");
    }


    $conexion->close();

}
?>