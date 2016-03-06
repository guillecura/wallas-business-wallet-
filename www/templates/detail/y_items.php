<?php
// Set Only the year number
  $now_date = new DateTime();
  $this_year = $now_date->format('Y');

  $last_year = 2016;
  $show_year = ($last_year - $this_year);

  $i = 0;
// Print years
  foreach (array_reverse($y_array) as $y_key => $y_name) {
    $b_id = $b_item['id'];
    // Define each year query
    $v = "SELECT SUM(value) FROM `income` WHERE `date` $y_key AND `business_id`='$b_id';";
    $v_query = mysql_query($v);
    $v_item = mysql_fetch_array($v_query);
    // Select each year incomes
    $item = "SELECT * FROM `income` WHERE `date` $y_key AND `business_id`='$b_id';";
    $i_query = mysql_query($item);
    $i_length = mysql_num_rows($i_query);

// Print only until current Year
    if ($i++ >= $show_year) {
      if ($b_item['type'] == 1) {
        include "www/inc/values_type1.php";

        if ($total != 0) {
        ?>
          <div class="b-detail">
            <?php include "www/templates/detail/y_single_item.php"; ?>
          </div>
        <?php
        }
      }

      if ($b_item['type'] == 2) {
        include "www/inc/values_type0.php";

        if ($total != 0) {
        ?>
          <div class="b-detail">
            <?php include "www/templates/detail/vault_y_single_item.php"; ?>
          </div>
        <?php
        }
      }
    }
  }
?>
