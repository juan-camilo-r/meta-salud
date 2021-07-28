<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div id="menu">
          <ul>
              <li><a href="#" class="active">Iniciar Sesión</a></li>
          </ul>
    </div>
    <div id="formularios">
        <form action="resicibir_post.php" id="form_session" method="POST">

            <p>Correo electrónico</p>
            <div class="field-container">
                <i class="fa fa-envelope-o fa-lg" aria-hidden="true"></i>
                <input name="usuario" type="text" class="field" placeholder="user@example.com"><br/>
            </div>
        </form>
    </div>
</body>
</html>