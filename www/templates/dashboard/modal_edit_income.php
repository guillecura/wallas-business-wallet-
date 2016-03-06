<div id='modal-edit-income-<?php echo $b_item['id'] ?>' class='modal-window'>
  <div>
    <i class="icon-close close-modal"></i>

    <?php
    // Set Only the month number
      $now_date = new DateTime();
      $this_month = ($now_date->format('m') - 1);

      $i = 0;
    // Print months
      foreach ($m_array as $m_key => $m_name) {
        $b_id = $b_item['id'];
        // Select each month incomes
        $item = "SELECT * FROM `income` WHERE `date` $m_key AND `business_id`='$b_id'";
        $i_query = mysql_query($item);
        $i_length = mysql_num_rows($i_query);
    // Print only current month
        if ($i++ === $this_month) {
    ?>
    <h3 class="modal-title"><?php echo $m_name; ?></h3>

    <div class="single-month-item-modal">
      <div>
        <div>
          <h4 class="s-month"><?php echo "$" .$total; ?></h4>
        </div>
      </div>

      <div class="s-income">
        <form action="www/inc/edit_income.php" method="post">
        <?php
          while ($i_item = mysql_fetch_array($i_query)) {
            echo "<div class='s-ed''>
              <input type='date' value='".$i_item["date"]."' name='date' id='date'>
              <input type='text' value='".$i_item["ref"]."' name='ref' id='ref'>
              <input type='text' value='".$i_item["value"]."' name='value' id='value'>
              <input type='hidden' value='".$i_item["id"]."' name='id' id='id'>
            </div>";
          }
        ?>
          <button type="submit" name="edit-income" id="edit-income">Save</button>
        </form>
      </div>
    </div>
    <?php
      }
    }
    ?>
  </div>
</div>
