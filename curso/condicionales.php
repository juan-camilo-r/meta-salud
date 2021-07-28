<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>condicionales</title>
</head>
<style>
    body{
        font-family: arial;
        background-color: #bde85f;
    }

    div{
        background: white;
        padding: 20px;
        margin: 0 auto;
        width: 200px;
    }

    h1{
        font-size: 30px;
    }
</style>
<body>
    <div>
       <?php
          $hora = 7;
          if($hora > 6 && $hora < 12){
              echo "<h1>hola! buenos dias </h1>";
          }else if($hora >= 6 && $hora < 12){
              echo "<h1>hola! buenas tardes</h1>";
          }else{
              echo "<h1>hola! buenas noches</h1>";
          }
       ?>
    </div>
</body>
</html>