<?php
  $total_y = 0;
  foreach (array_reverse($m_array) as $m_key => $m_name) {
    $b_id = $b_item['id'];
    $v = "SELECT SUM(value) FROM `income` WHERE `date` $m_key AND `date` $y_key AND `business_id`='$b_id'";
    $v_query = mysql_query($v);
    $v_item = mysql_fetch_array($v_query);

    if ($b_item['type'] == 2) {
      include "www/inc/values_type0.php";
      $total_y += $total;
    }
  }
?>

<div class="single-item">
  <h4 class="s-month"><?php echo $y_name. " <span>$" .$total_y. "</span>"; ?></h4>
</div>
