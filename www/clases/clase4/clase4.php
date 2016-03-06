<?php
  // Include the DB connection
  include "clase4-inc.php";

  // SQL queries
  $q = "SELECT * FROM clase3";

  if (isset($_GET[barrio])) {
    $q = "SELECT * FROM clase3 WHERE barrio='$_GET[barrio]'";
  }

  if (isset($_GET[sexo])) {
    $q = "SELECT * FROM clase3 WHERE sexo='$_GET[sexo]'";
  }

  if (isset($_GET[form_barrio])) {
    $q = "SELECT * FROM clase3 WHERE barrio='$_GET[form_barrio]' AND sexo='$_GET[form_sexo]'";
  }

  $query = mysql_query($q);
  $length = mysql_num_rows($query);
?>

<div class="container">
  <h1>Clase 4</h1>
  <h6><em><?php echo $q; ?></em></h6>
  <a href="./">Todos</a>
  <nav>
    <ul>
      <li>Barrios:</li>
      <li><a href="./?barrio=Pocitos">Pocitos</a></li>
      <li><a href="./?barrio=Centro">Centro</a></li>
      <li><a href="./?barrio=Parque Batlle">Parque Batlle</a></li>
    </ul>
  </nav>

  <nav>
    <ul>
      <li>Sexo:</li>
      <li><a href="./?sexo=Femenino">Femenino</a></li>
      <li><a href="./?sexo=Masculino">Masculino</a></li>
    </ul>
  </nav>

  <?php
    echo "<h3>" .$length. " alumnos obtenidos de la consulta</h3>";

    while ($item = mysql_fetch_array($query)) {
  ?>
    <div>
      <h5>Nombre Completo: <?php echo $item["nombre"]. " " .$item["apellido"]; ?></h5>
      <h6><em>Dirección: <?php echo $item["direccion"]; ?></em></h6>
      <h6>Barrio: <?php echo $item["barrio"]; ?></h6>
    </div>
  <?php
    }
  ?>
</div>

<div class="container">
  <h4>Filters Form</h4>
  <form action="index.php" method="get">
    <label>Barrio:</label>
    <select name="form_barrio">
      <option value="Pocitos">Pocitos</option>
      <option value="Centro">Centro</option>
      <option value="Malvín">Malvín</option>
      <option value="Parque Batlle">Parque Batlle</option>
    </select>

    <input type="radio" name="form_sexo" id="femenino" value="Femenino" checked>
    <label for="femenino">Femenino</label>

    <input type="radio" name="form_sexo" id="masculino" value="Masculino">
    <label for="masculino">Masculino</label>

    <input type="submit" value="Send">
  </form>
</div>
