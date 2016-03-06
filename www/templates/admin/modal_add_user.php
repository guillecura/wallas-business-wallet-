<div id="modal-add-user" class="modal-window">
  <div>
    <i class="icon-close close-modal"></i>
    <h3 class="modal-title">Add new user</h3>
      <form action="../www/inc/register.php" method="post" class="register-form" enctype="multipart/form-data">
        <div>
          <input class="logo" type="file" value="<?php echo $u_item['avatar']; ?>" id="avatar" name="avatar">
          <input class="u-name" type="text" value="<?php echo $u_item["f_name"] ?>" id="f_name" name="f_name" placeholder="First name..">
          <input class="u-name" type="text" value="<?php echo $u_item["l_name"] ?>" id="l_name" name="l_name" placeholder="Last name..">
          <input class="u-email" type="email" value="<?php echo $u_item["email"] ?>" id="email" name="email"  placeholder="Email..">
          <input class="u-pass" type="password" value="<?php echo $u_item["password"] ?>" id="password" name="password"  placeholder="Password..">
          <input class="u-pass" type="password" id="password2" name="password2"  placeholder="Confirm password..">
        </div>
        <button type="submit" id="add-user" name="add-user" value="add-user">Save</button>
      </form>
  </div>
</div>
