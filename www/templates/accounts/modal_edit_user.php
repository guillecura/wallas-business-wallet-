<div id="modal-edit-user" class="modal-window">
  <div>
    <i class="icon-close close-modal"></i>
    <h3 class="modal-title">Edit User</h3>

    <form action="www/inc/edit_user.php" method="post" class="edit-user-form" enctype="multipart/form-data">
      <input type="hidden" value="" id="id" name="id">
      <div>
        <input class="logo" type="file" value="<?php echo $u_item['avatar']; ?>" id="avatar" name="avatar">

        <div class="basic-info">
          <input class="u-name" type="text" value="<?php echo $u_item["f_name"] ?>" id="f_name" name="f_name" placeholder="First name..">
          <input class="u-name" type="text" value="<?php echo $u_item["l_name"] ?>" id="l_name" name="l_name" placeholder="Last name..">
          <input class="u-email" type="email" value="<?php echo $u_item["email"] ?>" id="email" name="email"  placeholder="Email..">
        </div>
      </div>

      <span class="actions">
        <i class="icon-edit"></i>
        <button type="submit" id="edit" name="edit" value="edit">Save</button>
      </span>
    </form>

  </div>
</div>
