<?php

    session_start();

    include 'conexion_be.php';

    $correo = $_POST['correo'];
    $contraseña = $_POST['contraseña'];

    $validar_login = mysqli_query($conexion, "SELECT * FROM usuarios WHERE correo='$correo'
    and contraseña='$contraseña' ");

    if(mysqli_num_rows($validar_login) > 0){
        $_SESSION['usuarios'] = $correo;
        header("Location: recibo.php");
        exit;
    }else{
        echo '
        <script>
            alert("Usuario no existente, por favor verifique los datos introducidos");
            window.location = "index.php";
        </script>  
        ';

        exit;
    }
    

?>