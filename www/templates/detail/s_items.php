<?php
  $search_key = mysql_real_escape_string($_GET['month']);

  $get_dates = explode("_", $search_key);
  $m_s_key = $get_dates[0];
  $y_s_key = $get_dates[1];

  $i = 0;

// Print months
  foreach (array_reverse($y_array) as $y_key => $y_name) {
    if ($y_name == $y_s_key) {
      foreach (array_reverse($m_array) as $m_key => $m_name) {
        $b_id = $b_item['id'];
        // Define each month query
        $v = "SELECT SUM(value) FROM `income` WHERE `date` $m_key AND `date` $y_key AND `business_id`='$b_id'";
        $v_query = mysql_query($v);
        $v_item = mysql_fetch_array($v_query);
        // Select each month incomes
        $item = "SELECT * FROM `income` WHERE `date` $m_key AND `business_id`='$b_id'";
        $i_query = mysql_query($item);
        $i_length = mysql_num_rows($i_query);

    // Print only until current month
        if ($m_name == $m_s_key) {
          if ($b_item['type'] == 1) {
            include "www/inc/values_type1.php";
            ?>
              <div class="b-detail">
                <?php include "www/templates/detail/m_single_item.php"; ?>
              </div>
            <?php
          }
          if ($b_item['type'] == 2) {
            include "www/inc/values_type0.php";
            ?>
              <div class="b-detail">
                <?php include "www/templates/detail/vault_single_item.php"; ?>
              </div>
            <?php
          }
        }
      }
    }
  }
?>
