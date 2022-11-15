<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/styles.css">
    <title>Log in</title>
</head>
<body>
    <main class="main2">
        <div class="main2-box">
            <div class="container-buttons">
                <a href="../php/login.php"class="iniciar-sesion">Iniciar Sesión</a>
                <a href="../php/crearCuenta.php" class="crear-cuenta">Crear Cuenta</a>
            </div>

            <label for="">Usuario</label>
            <input type="text" name="Usuario" id="">

            <label for="">Contraseña</label>
            <input type="password" required autocomplete="current-password" name="contraseña">

            <div class="container-options">
                <button type="submit" class="confirm">Confirmar</button>
                <div class="options">
                    <a href="" class="forget-password">¿Olvistaste tu contraseña?</a>
                    <a href="../php/loginAdmin.php" class="login-admin">Ingresar como Admin</a>
                </div>
            </div>
        </div>
    </main>
</body>
</html>