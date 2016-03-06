<nav>
  <ul>
    <li><a href="/?contenido=0"
      <?php if ($nContenido == 0) {
      echo 'class="active"';
      } ?>>index</a></li>

    <li><a href="/?contenido=1"
      <?php if ($nContenido == 1) {
      echo 'class="active"';
      } ?>>contenido 1</a></li>

    <li><a href="/?contenido=2"
      <?php if ($nContenido == 2) {
      echo 'class="active"';
      } ?>>contenido 2</a></li>

    <li><a href="/?contenido=3"
      <?php if ($nContenido == 3) {
      echo 'class="active"';
      } ?>>contenido 3</a></li>
  </ul>
</nav>
