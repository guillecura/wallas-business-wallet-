<?php
  $total_y = 0;
  $iva_y = 0;
  $irpf_y = 0;
  $fonasa_y = 0;
  $bps_y = 0;
  $floyd_y = 0;
  foreach (array_reverse($m_array) as $m_key => $m_name) {
    $b_id = $b_item['id'];
    $v = "SELECT SUM(value) FROM `income` WHERE `date` $m_key AND `date` $y_key AND `business_id`='$b_id'";
    $v_query = mysql_query($v);
    $v_item = mysql_fetch_array($v_query);

    if ($b_item['type'] == 1) {
      include "www/inc/values_type1.php";
      $total_y += $total;
      $iva_y += $iva;
      $irpf_y += $irpf;
      $fonasa_y += $fonasa;
      $bps_y = round(($bps * 12), 2);
      $floyd_y += $floyd;
    }
  }

  if ($total_y == 0) {
    $avg_y = 0;
  } else {
    $avg_y = round((100 - ($floyd_y * 100 / $total_y)), 0);
  }
?>

<div class="single-item">
  <h4 class="s-month"><?php echo $y_name. " <span>$" .$total_y. "</span>"; ?></h4>
  <div>
    <div class="s-avg
    <?php
      if ($avg_y >= 36 && $avg_y <= 44) {
        echo 'color-3';
      } else if ($avg_y >= 21 && $avg_y <= 35) {
        echo 'color-2';
      } else if ($avg_y <= 20 && $avg_y >= 1) {
        echo 'color-1';
      } else if ($avg_y >= 45) {
        echo 'color-4';
      } else if ($avg_y == 0) {
        echo '';
      }
    ?>
    ">
      <span>
        <?php
          echo $avg_y. "%";
        ?>
      </span>
    </div>

    <div class="s-taxes">
      <?php
        echo "<h6><span>IVA </span> $" .$iva_y. "</h6>";
        echo "<h6><span>IRPF </span> $" .$irpf_y. "</h6>";
        echo "<h6><span>FONASA </span> $" .$fonasa_y. "</h6>";
        echo "<h6><span>BPS </span> $" .$bps_y. "</h6>";
        echo "<h6 class='s-floyd'><i class='icon-oinc'></i> $" .$floyd_y. "</h6>";
      ?>
    </div>
  </div>
</div>
