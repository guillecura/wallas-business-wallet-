<?php
  $directoryURI = $_SERVER['REQUEST_URI'];
  $path = parse_url($directoryURI, PHP_URL_PATH);
  $components = explode('/', $path);
  $first_part = $components[1];
  $withoutExt = preg_replace('/\\.[^.\\s]{3,4}$/', '', $first_part);
?>

<footer>
  <nav>
    <ul>
      <li>
        <a href="simulator.php" class="<?php if ($withoutExt == 'simulator') { echo 'active'; } ?>"><i class="icon-joystic"></i></a>
      </li>

      <li>
        <a href="detail.php?months" class="<?php if ($withoutExt == 'detail') { echo 'active'; } ?>"><i class="icon-wallet"></i></a>
      </li>

      <li>
        <a href="index.php" class="nav-main"><i class="icon-tie"></i></a>
      </li>

      <li>
        <a href="charts.php" class="<?php if ($withoutExt == 'charts') { echo 'active'; } ?>"><i class="icon-chart"></i></a>
      </li>

      <li>
        <a href="account.php" class="<?php if ($withoutExt == 'account') { echo 'active'; } ?>"><i class="icon-dashboard"></i></a>
      </li>
    </ul>
  </nav>
</footer>
