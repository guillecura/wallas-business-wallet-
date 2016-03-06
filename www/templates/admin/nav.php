<?php
  $directoryURI = $_SERVER['REQUEST_URI'];
  $path = parse_url($directoryURI, PHP_URL_PATH);
  $components = explode('admin/', $path);
  $first_part = $components[1];
  $withoutExt = preg_replace('/\\.[^.\\s]{3,4}$/', '', $first_part);
?>

<nav>
  <ul>
    <li class="<?php if ($withoutExt == 'dashboard') { echo 'active'; } ?>"><a href="dashboard.php"><i class="icon-dashboard"></i></a></li>
    <li class="<?php if ($withoutExt == 'business') { echo 'active'; } ?>"><a href="business.php"><i class="icon-business"></i></a></li>
    <li class="<?php if ($withoutExt == 'users') { echo 'active'; } ?>"><a href="users.php"><i class="icon-users"></i></a></li>
    <li class="<?php if ($withoutExt == 'customize') { echo 'active'; } ?>"><a href="customize.php"><i class="icon-brush"></i></a></li>
  </ul>
</nav>
