<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meta-SaluD</title>
    <link rel="stylesheet" href="style.css">
    <style>
        .logo{
            height: 60px;
        }
    </style>
</head>
<body>

    <img class="logo" src="logotecnosalud2.png" alt="">
    
<!-- formulario -->

    <main>

        <div class="contenedor__todo">
            
            <div class="caja__trasera">
            <div class="caja__trasera-login">
                <h3>¿Ya tienes una cuenta?</h3>
                <p>Inicia sesión para entrar en la página</p>
                <button id="btn__iniciar-sesion">Iniciar sesión</button>
            </div>
            <div class="caja__trasera-register">
                <h3>¿Aún no tienes una cuenta?</h3>
                <p>Regístrate para que puedas iniciar sesión</p>
                <button id="btn__registrarse">Regístrarse</button>
            </div>
            </div>
<!-- formulario de login y registro -->
            <div class="contenedor__login-register">
<!-- login -->
                <form action="login_usuario_be.php" method="POST" class="formulario__login">

                    <h2>Iniciar Sesión</h2>
                    <input type="text" placeholder="Correo Electronico" name="correo">
                    <input type="password" placeholder="Contraseña" name="contraseña">
                    <button>Entrar</button>

                </form>
<!-- registro -->
                <form action="registro_usuario_be.php" method="POST" class="formulario__register">
                    <h2>Regístrarse</h2>
                    <input type="text" placeholder="Nombre Completo" name="nombre_completo">
                    <input type="text" placeholder="Correo Electronico" name="correo">
                    <input type="text" placeholder="Usuario" name="usuario">
                    <input type="password" placeholder="Contraseña" name="contraseña">
                    <button>Regístrarse</button>
                </form>
            </div>
        </div>
    </main>
    <script src="script.js"></script>
</body>
</html>