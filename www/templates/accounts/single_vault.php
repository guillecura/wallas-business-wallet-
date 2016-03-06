<div class=general-info>
  <div class=logo>
    <?php include "www/templates/business/b_image.php"; ?>
  </div>
  <div class=basic-info>
    <span class="b-name"><?php echo $b_item["name"]; ?></span>
  </div>
</div>
<div class="more-info">
  <div class="b-info">
    <span class="b-type">Type: <strong><?php echo $t_item['type']; ?></strong></span>
    <span class="b-phone">Phone: <strong><?php echo $b_item["phone"]; ?></strong></span>
    <span class="b-address">Address: <strong><?php echo $b_item["address"]; ?></strong></span>
  </div>
  <ul class="actions">
    <li>
      <span tabindex=0 class="edit-business"><i class="icon-edit"></i></span>
    </li>
    <li>
      <span tabindex=0 class="modal-open" name="modal-delete-item"><i class="icon-delete"></i></span>
    </li>
  </ul>
</div>

<div class="edit-info" style="display: none;">
  <form action="www/inc/edit_business.php" method="post" class="edit-business-form" enctype="multipart/form-data">
    <input type="hidden" value="<?php echo $b_item["id"]; ?>" id="id" name="id">
    <div>
      <input class="logo" type="file" id="avatar" name="avatar">

      <div class="basic-info">
        <input class="b-name" type="text" value="<?php echo $b_item["name"]; ?>" id="name" name="name" placeholder="Business name..">
      </div>
    </div>

    <div class="info">
      <label class="b-phone" for="phone"><span>Phone: </span><input type="text" value="<?php echo $b_item["phone"]; ?>" id="phone" name="phone" placeholder="Business phone.."></label>
      <label class="b-address" for="address"><span>Address: </span><input type="text" value="<?php echo $b_item["address"]; ?>" id="address" name="address" placeholder="Business address.."></label>
    </div>

    <span class="actions">
      <i class="icon-edit"></i>
      <button type="submit" id="edit" name="edit" value="edit">Save</button>
    </span>

    <i class="icon-close"></i>
  </form>
</div>
