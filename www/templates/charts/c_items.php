<?php
// Set Only the month number
  $now_date = new DateTime();
  $this_month = $now_date->format('m') -1;
  $this_year = $now_date->format('y') + 2000;

  $i = 0;

  $chart_height = 250;
?>

<h4 class="c-title"><?php echo $this_year. " <span>" .$b_item['name']. "</span>"; ?></h4>
<svg class="graph" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg" height="<?php echo $chart_height; ?>" width="100%">

<?php
// Chart for totals
  foreach ($m_array as $m_key => $m_name) {
    $b_id = $b_item['id'];
    // Define each month query
    $v = "SELECT SUM(value) FROM income WHERE date $m_key AND business_id='$b_id'";
    $v_query = mysql_query($v);
    $v_item = mysql_fetch_array($v_query);

    if ($b_item['type'] == 1) {
      include "www/inc/values_type1.php";

      // Select each month incomes
      $item = "SELECT * FROM income WHERE date $m_key AND business_id='$b_id'";
      $i_query = mysql_query($item);
      $i_length = mysql_num_rows($i_query);

      // Use Month Shortings
      $m_short_arr = str_split($m_name, 3);
      $m_short = $m_short_arr[0];

      // Include Data
      $x_total = $this_month + 1;
      $x_position = $i * (100 / $x_total) + 5;
      $y_position_total = ($chart_height - 30) - $total_k;
      $y_position_floyd = ($chart_height - 30) - $floyd_k;
      $y_position_taxes = ($chart_height - 30) - $taxes_k;

      echo "<rect class='set-taxes point' x='" .($x_position - 0.33). "%' y='" .($y_position_total + 3). "' width='3' height='" .$taxes_k. "'/>";
      echo "<circle class='set-total point' cx='" .$x_position. "%' cy='" .$y_position_total. "' r='5'></circle>";
      echo "<circle class='set-floyd point' cx='" .$x_position. "%' cy='" .$y_position_floyd. "' r='5'></circle>";

      echo "<text class='label x-label' x='" .$x_position. "%' y='" .($chart_height - 10). "'>" .$m_short. "</text>";

      if ($i++ >= $this_month) {
        echo "<path class='set-total surface' d='M'></path>";
        echo "<path class='set-floyd surface' d='M'></path>";
        break;
      }
    }

    if ($b_item['type'] == 2) {
      include "www/inc/values_type0.php";

      // Select each month incomes
      $item = "SELECT * FROM income WHERE date $m_key AND business_id='$b_id'";
      $i_query = mysql_query($item);
      $i_length = mysql_num_rows($i_query);

      // Use Month Shortings
      $m_short_arr = str_split($m_name, 3);
      $m_short = $m_short_arr[0];

      // Include Data
      $x_total = $this_month + 1;
      $x_position = $i * (100 / $x_total) + 5;
      $y_position_total = ($chart_height - 30) - $total_k;

      echo "<circle class='set-total point' cx='" .$x_position. "%' cy='" .$y_position_total. "' r='5'></circle>";

      echo "<text class='label x-label' x='" .$x_position. "%' y='" .($chart_height - 10). "'>" .$m_short. "</text>";

      if ($i++ >= $this_month) {
        echo "<path class='set-total surface' d='M'></path>";
        break;
      }
    }
  }
?>
</svg>
