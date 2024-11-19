<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Estilo/style.css">
    <title>Inicio de sesion</title>
</head>
<body>
    <div class="container">
        <div class="form-background">
           <h2>Iniciar Sesión</h2>

            <form action="Metodos/sesion.php" method="post">
                <label for="Email">Email:</label>
                <input type="Email" id="Email" name="Email" required><br><br>

                <label for="Contraseña">Contraseña:</label>
                <input type="password" id="Contraseña" name="Contraseña" required><br><br>

                <input type="submit" value="Iniciar Sesión">
            </form>
            <p>Si ya tienes una cuenta, <a href="registro.html" class="accion">Registrarse</a></p>
            
        </div>
    </div>

    
</body>
</html>
