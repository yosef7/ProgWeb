<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <?php
    $dia=date("d");
    if ($dia<=15) {
      echo "Sitio activo";
    }
    else {
      echo "Sitio fuera de servicio";
    }
    ?>

  </body>
</html>
