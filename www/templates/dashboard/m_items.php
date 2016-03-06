<?php
if (isset($_GET['month'])) {
  $month_key = mysql_real_escape_string($_GET['month']);

  $get_dates = explode("_", $month_key);
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
    // Print only current month
        if ($m_name == $m_s_key) {
        ?>
        <div class="b-summary slider">
          <div id="slide-item" class="dragdealer">
            <div class="handle">
              <article>
                <div class="slide-content">
                  <?php include "www/templates/dashboard/m_single_item.php"; ?>
                </div>
                <div class="slide-actions">
                  <span class="edit modal-open" name="modal-edit-income-<?php echo $b_item['id'] ?>">
                    <i class="icon-edit"></i>
                  </span>
                  <span class="detail modal-open" name="modal-detail-<?php echo $b_item['id'] ?>">
                    <i class="icon-search"></i>
                  </span>
                  <span class="helper"></span>
                </div>
              </article>
            </div>
          </div>
        </div>
        <?php
        }
      }
    }
  }
} else {
// Set Only the month number
  $now_date = new DateTime();
  $this_month = $now_date->format('m');
  $months = 12;

  $show_month = ($months - $this_month);

  $i = 0;
// Print months
  foreach (array_reverse($m_array) as $m_key => $m_name) {
    $b_id = $b_item['id'];
    // Define each month query
    $v = "SELECT SUM(value) FROM `income` WHERE `date` $m_key AND `business_id`='$b_id'";
    $v_query = mysql_query($v);
    $v_item = mysql_fetch_array($v_query);
    // Select each month incomes
    $item = "SELECT * FROM `income` WHERE `date` $m_key AND `business_id`='$b_id'";
    $i_query = mysql_query($item);
    $i_length = mysql_num_rows($i_query);

// Print only until current month
    if ($i++ == $show_month) {
    ?>
    <div class="b-summary slider">
      <div id="slide-item" class="dragdealer">
        <div class="handle">
          <article>
            <div class="slide-content">
              <?php include "www/templates/dashboard/m_single_item.php"; ?>
            </div>
            <div class="slide-actions">
              <span class="edit modal-open" name="modal-edit-income-<?php echo $b_item['id'] ?>">
                <i class="icon-edit"></i>
              </span>
              <span class="detail modal-open" name="modal-detail-<?php echo $b_item['id'] ?>">
                <i class="icon-search"></i>
              </span>
              <span class="helper"></span>
            </div>
          </article>
        </div>
      </div>
    </div>
    <?php
    }
  }
}
?>
