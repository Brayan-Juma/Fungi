<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/login.css">
</head>
<body>
<div class="login-container">
        <h1 class="login-title">Iniciar sesión</h1>
        <form class="login-form" action="../php/login.php" method="POST">
            <div>
                <label for="cedula">Cédula:</label>
                <input type="text" id="cedula" name="cedula" required>
            </div>
            <div>
                <label for="password">Contraseña:</label>
                <input type="password" id="password" name="password" required>
            </div>
            <input type="submit" value="Iniciar sesión">
            <div class="links">
                <div class="olvidadaste-tu-contrasea">
                    <a href="../html/recuperar.html">Recuperar cuenta</a>
                </div>
                <div class="no-tienes-una">
                    No tienes una cuenta? <a href="../html/register.html">Regístrate</a>
                </div>
            </div>
        </form>
    </div>
    
</body>
</html>








