<?php
if ($b_item['type'] == 1) {
  include "www/inc/values_type1.php";
?>

<div class="single-month-item">
  <h4 class="s-month">
    <?php
    if ($i_length == 0) {
      echo $m_name;
    } else {
      echo $m_name. "<span>" .$i_length. "</span>";
    }
    ?>
  </h4>
  <h5 class="s-total">
    <?php
    if ($i_length == 0) {
      echo "---";
    } else {
      echo "<span>Total</span> $ " .$total;
    }
    ?>
  </h5>
  <h6 class="s-subtotal">
    <?php
    if ($i_length == 0) {
      echo "---";
    } else {
      echo "<span>Subtotal</span> $ " .$subtotal;
    }
    ?>
  </h6>
  <ul>
    <?php
      while ($i_item = mysql_fetch_array($i_query)) {
    ?>
    <li>
      <h6 class="s-income"><?php echo "<span>" .$i_item["date"]. " - " .$i_item["ref"]. "</span> $ " .round($i_item["value"], 2); ?></h6>
    </li>
    <?php
      }
    ?>
  </ul>
</div>
<?php
  }
?>
