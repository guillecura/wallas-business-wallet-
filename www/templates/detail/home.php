<section class="section-detail">
  <div class="business-list">
    <ul>
      <?php
        while ($b_item = mysql_fetch_array($b_query)) {
      ?>
      <li>
        <div class="b-heading">
          <div class="logo">
            <?php include "www/templates/business/b_image.php"; ?>
          </div>
          <div class="info">
            <span class="b-name"><?php echo $b_item["name"]; ?></span>

            <ul class="u-nav">
              <li><a href="?months">All Months</a></li>
              <li><a href="?years">All Years</a></li>
              <li>
                <form method="get">
                  <select name="month" id="select-month">
                    <?php
                    if (!isset($_GET['month'])) {
                    ?>
                      <option value="no results matched" selected>Select month</option>
                    <?php
                    }

                    foreach (array_reverse($y_array) as $y_key => $y_name) {
                      foreach (array_reverse($m_array) as $m_key => $m_name) {
                    ?>
                      <option value="<?php echo $m_name. "_" .$y_name; ?>"
                      <?php if ($_GET['month'] == $m_name. "_" .$y_name) { echo "selected"; } ?>
                      ><?php echo $m_name. " " .$y_name; ?></option>
                    <?php
                      }
                    }
                    ?>
                  </select>
                  <button type="submit" name="search" value="month"><i class="icon-search"></i></button>
                </form>
              </li>
            </ul>
          </div>
        </div>
        <?php
          if (isset($_GET['months'])) {
            include "www/templates/detail/m_items.php";
          } else if (isset($_GET['years'])) {
            include "www/templates/detail/y_items.php";
          } else if (isset($_GET['month'])) {
            include "www/templates/detail/s_items.php";
          }
        ?>
      </li>
      <?php
        }
      ?>
    </ul>
  </div>
</section>
