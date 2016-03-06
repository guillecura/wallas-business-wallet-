<section class="section-dashboard">
  <div class="business-list">
    <ul>
      <?php
        while ($b_item = mysql_fetch_array($b_query)) {
          if ($b_item['type'] == 1) {
          ?>
          <li class="busines-<?php echo $b_item['id']; ?>">
            <div class="b-heading">
              <div class="logo">
                <?php include "www/templates/business/b_image.php"; ?>
              </div>
              <div class="info">
                <span class="b-name"><?php echo $b_item["name"]; ?></span>
                <span class="b-rut"><?php echo "RUT <strong>" .$b_item["rut"]. "</strong>"; ?></span>
              </div>
            </div>
            <?php
              include "www/templates/dashboard/m_items.php";
              include "www/templates/dashboard/modal_detail.php";
              include "www/templates/dashboard/modal_edit_income.php";
            ?>
          </li>
          <?php
          }

          if ($b_item['type'] == 2) {
          ?>
          <li class="busines-<?php echo $b_item['id']; ?>">
            <div class="b-heading">
              <div class="logo">
                <?php include "www/templates/business/b_image.php"; ?>
              </div>
              <div class="info">
                <span class="b-name"><?php echo $b_item["name"]; ?></span>
                <em>Add the money saved but don't billed.</em>
              </div>
            </div>
            <?php
              include "www/templates/dashboard/vault_items.php";
              include "www/templates/dashboard/modal_detail.php";
              include "www/templates/dashboard/modal_edit_income.php";
            ?>
          </li>
          <?php
          }
        }
      ?>
    </ul>
    <form class="change-month" method="get">
      <select name="month">
        <?php
        if (!isset($_GET['month'])) {
        ?>
          <option value="no results matched" selected>Change month?</option>
        <?php
        }

        $now_date = new DateTime();
        $this_year = $now_date->format('Y');
        $this_month = $now_date->format('m');

        $last_year = 2016;
        $show_year = ($last_year - $this_year);

        $months = 12;
        $show_month = ($months - $this_month);

        $i = 0;

        foreach (array_reverse($y_array) as $y_key => $y_name) {
          if ($i++ >= $show_year) {
            foreach (array_reverse($m_array) as $m_key => $m_name) {
              if ($i++ >= $show_month) {
              ?>
                <option value="<?php echo $m_name. "_" .$y_name; ?>"
                <?php if ($_GET['month'] == $m_name. "_" .$y_name) { echo "selected"; } ?>
                ><?php echo $m_name. " " .$y_name; ?></option>
              <?php
              }
            }
          }
        }
        ?>
      </select>
      <button type="submit" name="search" value="month"><i class="icon-search"></i></button>
    </form>
  </div>
  <span tabindex="0" class="add-income icon-plus modal-open" name="modal-add"></span>
</section>
