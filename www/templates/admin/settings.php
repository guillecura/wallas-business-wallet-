<section class="section-admin-user-settings">
  <article>
    <h2>Edit Administrator</h2>

    <form action="../www/inc/edit_admin_user.php" method="post" class="edit-admin-form" enctype="multipart/form-data">
      <h3>Basic Info</h3>
      <input type="hidden" value="<?php echo $adm_item['id']; ?>" id="id" name="id">
      <div>
        <input class="logo" type="file" value="<?php echo $adm_item['avatar']; ?>" id="avatar" name="avatar">

        <div class="basic-info">
          <input class="u-name" type="text" value="<?php echo $adm_item["f_name"] ?>" id="f_name" name="f_name" placeholder="First name..">
          <input class="u-name" type="text" value="<?php echo $adm_item["l_name"] ?>" id="l_name" name="l_name" placeholder="Last name..">
          <input class="u-email" type="email" value="<?php echo $adm_item["email"] ?>" id="email" name="email"  placeholder="Email..">
        </div>
      </div>

      <span class="actions">
        <i class="icon-edit"></i>
        <button type="submit" id="edit" name="edit" value="edit">Save</button>
      </span>
    </form>

    <div>
      <form action="../www/inc/change_admin_password.php" method="post">
        <h3>Change password</h3>
        <input type="hidden" value="" id="id" name="id">
        <input class="u-password" type="password" value="" id="password-1" name="password-1" placeholder="New password..">
        <input class="u-password" type="password" value="" id="password-2" name="password-2" placeholder="Confirm password..">
        <button type="submit" id="edit" name="change-pass" value="change-pass">Change</button>
      </form>
      <div>
        <form action="../www/inc/admin_logout.php" method="post">
          <h3>Log out</h3>
          <button type="submit" id="close" name="close" value="">Seeya!</button>
        </form>

        <form action="../www/inc/delete_admin_account.php" method="post">
          <h3>Delete account</h3>
          <input type="hidden" value="" id="id" name="id">
          <button class="alert" type="submit" id="delete-account" name="delete-account" value="">Good bye :'(</button>
        </form>
      </div>
    </div>
  </article>
</section>
