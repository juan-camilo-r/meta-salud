<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arreglos</title>
    <style>
        body{
            background-color: #b5cde6; font-family: Arial, Helvetica, sans-serif; font-size: 4em; padding: 50px;
        }
    </style>
</head>
<body>
    <?php
      $frutas = array("platanos", "manzanas", "uvas", "fresa");

      print_r($frutas);

      echo $frutas[3];

      echo "<br>";

      echo count($frutas) . "elementos";

      echo "<br>";

      for($i= 0; $i < count($frutas); $i++){
          echo $frutas[$i] . "<br/>";
      }
      
      $edades = array("marcos" => 34, "tania" => 23, "omar" => 27);

      print_r($edades);

      echo "<br >";

      echo $edades['tania'];

      echo "<br>";

      foreach($edades as $key => $value){
          echo $key . " tiene el valor en edad de " . $value . "<br/>";
      }

      

    ?>
</body>
</html>