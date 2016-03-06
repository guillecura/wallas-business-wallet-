<section class="section-public-profile">
  <div class="user-profile" data-value="<?php echo $u_item["id"]; ?>">
    <div class="avatar">
      <?php include "www/templates/accounts/u_image.php"; ?>
    </div>
    <div class="info">
      <span class="u-name"><?php echo $u_item["f_name"]. " " .$u_item["l_name"]; ?></span>

      <ul class="u-nav">
        <li><span tabindex="0" class="modal-open" name="modal-edit-user"><i class="icon-edit"></i></span></li>
        <li><span tabindex="0" class="modal-open" name="modal-settings"><i class="icon-settings"></i></span></li>
        <li><span><i class="icon-business"></i>
          <?php
            if ($b_length > 0) {
              echo '<span class="num">' .$b_length. '</span>';
            }
          ?>
        </span></li>
        <?php if ($b_length <= 1) { ?>
          <li><span tabindex="0" class="modal-open" name="modal-add-business"><i class="icon-plus"></i></span></li>
        <?php } ?>
      </ul>
    </div>
  </div>

  <div class="user-business">
    <ul>
      <?php
        while ($b_item = mysql_fetch_array($b_query)) {
          $b_type_id = $b_item['type'];
          $b_type_row = mysql_query("SELECT * FROM `types` WHERE id=$b_type_id");
          $t_item = mysql_fetch_array($b_type_row);
          if ($b_item['type'] == 1) {
          ?>
            <li class="single-business" data-value="<?php echo $b_item['id']; ?>"><?php include "www/templates/accounts/single_business.php"; ?></li>
          <?php
          }

          if ($b_item['type'] == 2) {
          ?>
            <li class="single-business" data-value="<?php echo $b_item['id']; ?>"><?php include "www/templates/accounts/single_vault.php"; ?></li>
          <?php
          }
        }
      ?>
    </ul>
  </div>
</section>
