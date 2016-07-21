  <?php

  $file=fopen("visitas.txt","r");
  $visitas=fgets($file);
  fclose($file);

  $visitas+=1;

  $file=fopen("visitas.txt","w");
  fputs($file,$visitas);
  fclose($file);
  echo $visitas;  // para ver qué si funciona

  ?>
