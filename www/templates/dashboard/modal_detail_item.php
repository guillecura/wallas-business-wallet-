<h3 class="modal-title"><?php echo $m_name; ?></h3>

<div class="single-month-item-modal">
<?php if ($b_item['type'] == 1) { ?>
  <div>
    <div>
      <h4 class="s-month"><?php echo "$" .$total; ?></h4>

      <div class="s-avg
      <?php
        if ($avg >= 36 && $avg <= 44) {
          echo 'color-3';
        } else if ($avg >= 21 && $avg <= 35) {
          echo 'color-2';
        } else if ($avg <= 20 && $avg >= 1) {
          echo 'color-1';
        } else if ($avg >= 45) {
          echo 'color-4';
        } else if ($avg == 0) {
          echo '';
        }
      ?>
      "><span><?php echo $avg. "%"; ?></span></div>
    </div>

    <div class="s-taxes">
      <?php
        echo "<h6><span>IVA </span> $" .$iva. "</h6>";
        echo "<h6><span>IRPF </span> $" .$irpf. "</h6>";
        echo "<h6><span>FONASA </span> $" .$fonasa. "</h6>";
        echo "<h6><span>BPS </span> $" .$bps. "</h6>";
        echo "<h6 class='s-floyd'><i class='icon-oinc'></i> $" .$floyd. "</h6>";
      ?>
    </div>
  </div>

  <div class="s-income">
    <form action="www/inc/edit_income.php" method="post">
    <?php
      while ($is_item = mysql_fetch_array($i_query)) {
        echo "<div class='s-in'>" .$is_item["date"]. " - " .$is_item["ref"]. "<span>$ " .(round($is_item["value"], 2). "</span></div>");

        echo "<div class='s-ed' style='display: none;'>
          <input type='date' value='".$is_item["date"]."' name='date' id='date'>
          <input type='text' value='".$is_item["ref"]."' name='ref' id='ref'>
          <input type='text' value='".$is_item["value"]."' name='value' id='value'>
          <input type='hidden' value='".$is_item["id"]."' name='id' id='id'>
        </div>";

        echo "<div class='s-de' style='display: none;'>" .$is_item["date"]. " - " .$is_item["ref"]. "
          <input type='radio' value='".$is_item["id"]."' name='income-id'>
          <span>$ " .(round($is_item["value"], 2). "</span>
        </div>");
      }
    ?>
      <button type="submit" name="edit-income" id="edit-income" style="display: none;">Save</button>
      <button type="submit" name="delete-income" id="delete-income" style="display: none;">Detele!</button>
      <span tabindex="0" class="button alert" id="cancel-edit-income" style="display: none;">Cancel</span>
    </form>
  </div>

  <ul class="u-nav">
    <li><span tabindex="0" class="add-income-modal modal-open" name="modal-add"><i class="icon-plus"></i></span></li>
    <li><span tabindex="0" class="edit-income"><i class="icon-edit"></i></span></li>
    <li><span tabindex="0" class="delete-income"><i class="icon-delete"></i></span></li>
  </ul>
<?php
}

if ($b_item['type'] == 2) { ?>
  <div>
    <div>
      <h4 class="s-month"><?php echo "$" .$total; ?></h4>
    </div>
  </div>

  <div class="s-income">
    <form action="www/inc/edit_income.php" method="post">
    <?php
      while ($is_item = mysql_fetch_array($i_query)) {
        echo "<div class='s-in'>" .$is_item["date"]. " - " .$is_item["ref"]. "<span>$ " .(round($is_item["value"], 2). "</span></div>");

        echo "<div class='s-ed' style='display: none;'>
          <input type='date' value='".$is_item["date"]."' name='date' id='date'>
          <input type='text' value='".$is_item["ref"]."' name='ref' id='ref'>
          <input type='text' value='".$is_item["value"]."' name='value' id='value'>
          <input type='hidden' value='".$is_item["id"]."' name='id' id='id'>
        </div>";

        echo "<div class='s-de' style='display: none;'>" .$is_item["date"]. " - " .$is_item["ref"]. "
          <input type='radio' value='".$is_item["id"]."' name='income-id'>
          <span>$ " .(round($is_item["value"], 2). "</span>
        </div>");
      }
    ?>
      <button type="submit" name="edit-income" id="edit-income" style="display: none;">Save</button>
      <button type="submit" name="delete-income" id="delete-income" style="display: none;">Detele!</button>
      <span tabindex="0" class="button alert" id="cancel-edit-income" style="display: none;">Cancel</span>
    </form>
  </div>

  <ul class="u-nav">
    <li><span tabindex="0" class="add-income-modal modal-open" name="modal-add"><i class="icon-plus"></i></span></li>
    <li><span tabindex="0" class="edit-income"><i class="icon-edit"></i></span></li>
    <li><span tabindex="0" class="delete-income"><i class="icon-delete"></i></span></li>
  </ul>
<?php } ?>
</div>
