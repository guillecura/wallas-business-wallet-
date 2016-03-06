<?php
  if(isset($_POST['send'])) {
  	$email = mysql_real_escape_string($_POST["email"]);
  	$f_name = mysql_real_escape_string($_POST["f_name"]);
    $l_name = mysql_real_escape_string($_POST["l_name"]);

  	$mensaje  = "Este mensaje fue enviado por " . $F_name . " " . $l_name . " \r\n";
    $mensaje .= "Su e-mail es: " . $email . " \r\n";
    $mensaje .= "Mensaje: " . mysql_real_escape_string($_POST["message"]) . " \r\n";
    $mensaje .= "Enviado el " . date("d/m/Y", time());

  	$dest   = "hi@guillecura.co";
  	$subject = "Wallas | Feedback";

  	$headers = "From: " . $email;

  	mail($dest, $subject, $mensaje, $headers);

    header('Location: /admin/dashboard.php?feed');
  }
?>
