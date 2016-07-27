<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <?php

    $name = $_POST("name");
    $lastname = $_POST("lastname");
    $edad = $_POST("edad");
    $correo = $_POST("correo");


    Hola <?php echo htmlspecialchars($_POST['nombre']); ?>.
    Usted tiene <?php echo (int)$_POST['edad']; ?> años.




     ?>

  </body>
</html>


<!--
<form action="accion.php" method="post">
 <p>Su nombre: <input type="text" name="nombre" /></p>
 <p>Su edad: <input type="text" name="edad" /></p>
 <p><input type="submit" /></p>
</form>
-->
