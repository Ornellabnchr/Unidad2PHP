<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP-Unidad2</title>
    <link rel="stylesheet" href="style.css">
    <style>

    h4 {

      color: white;
      background-color:lightseagreen;
      width: 210px;
   

    }
    h2{
      display: flex;
      justify-content: center;
      width: 300px;
    }
    p{
        color:red;
        font-size: 16pt;
    }


  </style>
</head>
<body>
    <?php
    $css = file_get_contents('main.css');

      $nombre="Ornella";
      $apellido="Banchero";
      $edad=25;
      $hobbie="Mirar peliculas";
      $editorDeCodigoPreferido="Codeblocks, VSC";
      $SOUtilizado="Windows";
  
  
      echo "<b>Nombre:</b> ",$nombre;
      echo "<br> <b>Apellido:</b> ",$apellido;
      echo "<br> <b>Edad:</b> ",$edad;
      echo "<br> <b>Hobbie:</b> ",$hobbie;
      echo "<br> <b>Editor de Codigo Perferido:</b> ",$editorDeCodigoPreferido;
      echo "<br> <b>Sistema Operativo utilizado:</b> ",$SOUtilizado;

        echo "<br>";
      $mensaje_Bienvenida="Bienvenido Al Sistema";
      $alerta="Los datos ingrasados son: ";
      $usuario="User2020";
      $contraseña="12345";
    echo "<br>";
      echo "<h2> $mensaje_Bienvenida </h2>";
      echo "<h4> Los datos ingresados son: </h4>";
    echo "<p>Tu Usuario: $usuario</p>";
    echo "<p>Tu Clave: $contraseña</p>";

    ?>


</body>
</html>