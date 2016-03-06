<?php
session_start();

if (isset($_SESSION['admin'])) {
  $lastLogin = $_SESSION['logged'];
  $actualTime = date("Y-n-j H:i:s");
  $timePassed = strtotime($actualTime) - strtotime($lastLogin);

  if ($timePassed > 3600) {
    $_SESSION = array();
    session_destroy();

    header('Location: /admin/index.php?expired');
  } else {
    $_SESSION['logged'] = $actualTime;
  }
}
?>
