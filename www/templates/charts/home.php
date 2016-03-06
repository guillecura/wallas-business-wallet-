<section class="section-charts">
  <div class="chart-list">
    <ul>
      <?php
        while ($b_item = mysql_fetch_array($b_query)) {
      ?>
      <li id="chart-<?php echo $b_item['id']; ?>">
        <?php include "www/templates/charts/c_items.php"; ?>
      </li>
      <?php
        }
      ?>
      <div class="chart-labels">
        <ul>
          <li class="label set-floyd">
            <i class="icon-label"></i>
            <span>Net wage</span>
          </li>
          <li class="label set-total">
            <i class="icon-label"></i>
            <span>Total wage</span>
          </li>
        </ul>
      </div>
    </ul>
  </div>
</section>
