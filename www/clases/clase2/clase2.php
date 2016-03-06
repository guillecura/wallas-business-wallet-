<div class="container">
  <h1>Clase 2</h1>
  <?php
  $nContenido = $_GET[contenido];
  echo $nContenido;

  include "clase2-menu.php";

  switch ($nContenido) {
    case '1':
      include "clase2-contenido1.php";
      break;

    case '2':
      include "clase2-contenido2.php";
      break;

    case '3':
      include "clase2-contenido3.php";
      break;

    default:
      break;
  }

  include "clase2-pie.php";
  ?>
</div>
