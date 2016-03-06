<?php
  $name = $_GET["name"];
  $lastName = $_GET["last-name"];
  $address = $_GET["address"];
  $phone = $_GET["phone"];
  $message = $_GET["message"];
  $gender = $_GET["gender"];
  $country = $_GET["country"];

  echo "<h1>Hola ".$name." ".$lastName.".</h1>";
  echo "<h1>Genero: ".$gender.".</h1>";
  echo "<p>Tu direccion es: ".$address.", ".$country.".</p>";
  echo "<p>Telefono de contacto: ".$phone.".</p>";
  echo "<p>Envio el siguiente mensaje<br><em>".$message."</em></p>";
?>
