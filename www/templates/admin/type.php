<?php
if (isset($_GET['t'])) {
  $type_id = $_GET['t'];

  $type_table = "SELECT * FROM `types` WHERE `id`='$type_id'";
  $t = mysql_query($type_table);

  while ($t_item = mysql_fetch_array($t)) {
  ?>
  <section class="section-business-type">
    <article>
      <h2><?php echo $t_item['type']; ?></h2>

      <div>
        <form class="type-info" action="../www/inc/admin_business_type.php" method="post">
          <input type="hidden" name="id" value="<?php echo $t_item['id'] ?>">
          <div class="table">
            <div class="heading">
              <div><span>BASE (%)</span></div>
              <div><span>IVA (%)</span></div>
              <div><span>FONASA ($)</span></div>
              <div><span>FONASA (%)</span></div>
              <div><span>BPS ($)</span></div>
            </div>
            <div class="row">
              <div><input type="text" name="c_base" value="<?php echo $t_item['c_base'] ?>" placeholder="Base for taxes.."></div>
              <div><input type="text" name="iva" value="<?php echo $t_item['iva'] ?>" placeholder="IVA %.."></div>
              <div><input type="text" name="fonasa_1" value="<?php echo $t_item['fonasa_1'] ?>" placeholder="FONASA fixed.."></div>
              <div><input type="text" name="fonasa_2" value="<?php echo $t_item['fonasa_2'] ?>" placeholder="FONASA %.."></div>
              <div><input type="text" name="bps" value="<?php echo $t_item['bps'] ?>" placeholder="BPS fixed.."></div>
            </div>
          </div>

          <div class="irpf">
            <div class="heading">
              <div><span>IRPF Ranges ($)</span></div>
              <div><span>IRPF (%)</span></div>
            </div>
            <div class="row">
              <div><input type="text" name="irpf_1" value="<?php echo $t_item['irpf_1'] ?>" placeholder="IRPF range #1.."></div>
              <div><input type="text" name="irpf_1_val" value="<?php echo $t_item['irpf_1_val'] ?>" placeholder="IRPF % #1.."></div>
            </div>
            <div class="row">
              <div><input type="text" name="irpf_2" value="<?php echo $t_item['irpf_2'] ?>" placeholder="IRPF range #2.."></div>
              <div><input type="text" name="irpf_2_val" value="<?php echo $t_item['irpf_2_val'] ?>" placeholder="IRPF % #2.."></div>
            </div>
            <div class="row">
              <div><input type="text" name="irpf_3" value="<?php echo $t_item['irpf_3'] ?>" placeholder="IRPF range #3.."></div>
              <div><input type="text" name="irpf_3_val" value="<?php echo $t_item['irpf_3_val'] ?>" placeholder="IRPF % #3.."></div>
            </div>
            <div class="row">
              <div><input type="text" name="irpf_4" value="<?php echo $t_item['irpf_4'] ?>" placeholder="IRPF range #4.."></div>
              <div><input type="text" name="irpf_4_val" value="<?php echo $t_item['irpf_4_val'] ?>" placeholder="IRPF % #4.."></div>
            </div>
            <div class="row">
              <div><input type="text" name="irpf_5" value="<?php echo $t_item['irpf_5'] ?>" placeholder="IRPF range #5.."></div>
              <div><input type="text" name="irpf_5_val" value="<?php echo $t_item['irpf_5_val'] ?>" placeholder="IRPF % #5.."></div>
            </div>
            <div class="row">
              <div><input type="text" name="irpf_6" value="<?php echo $t_item['irpf_6'] ?>" placeholder="IRPF range #6.."></div>
              <div><input type="text" name="irpf_6_val" value="<?php echo $t_item['irpf_6_val'] ?>" placeholder="IRPF % #6.."></div>
            </div>
          </div>
          <button type="submit" name="update-type">Update</button>
        </form>
      </div>
    </article>
  </section>
  <?php
  }
} else {
?>
<section class="section-business-type"></section>
<?php
}
?>
