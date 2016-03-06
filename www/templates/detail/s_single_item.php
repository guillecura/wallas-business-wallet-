<div class="single-item">
  <h4 class="s-month"><?php echo $m_name. " " .$y_name. " <span>$" .$total. "</span>"; ?></h4>

  <div>
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
    ">
      <span>
        <?php
          echo $avg. "%";
        ?>
      </span>
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
</div>
