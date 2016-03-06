<?php
if (isset($_GET['user'])) {
  $user_id = $_GET['user'];

  $users_table = "SELECT * FROM `users` WHERE `id`='$user_id'";
  $users = mysql_query($users_table);
  $users_rows = mysql_num_rows($users);

  while ($u_item = mysql_fetch_array($users)) {
    $b_owner_id = $u_item['id'];
    $b_owner_row = mysql_query("SELECT * FROM `business` WHERE `owner`='$b_owner_id'");
    $b_item_rows = mysql_num_rows($b_owner_row);
?>
<section class="section-user-detail">
  <article>
    <div class="user-info">
      <?php include "../www/templates/accounts/u_image.php"; ?>
      <h2><?php echo $u_item['f_name']. " " .$u_item['l_name']; ?></h2>

      <div>
        <span><a href="mailto:<?php echo $u_item['email']; ?>" target="_blank"><?php echo $u_item['email']; ?></a></span>
        <span class="author">
          <?php
          if ($u_item['level'] == 0) {
            echo "Common";
          } elseif ($u_item['level'] == 1) {
            echo "Administrator";
          }
          ?>
        </span>
        <span><i class="icon-business"></i> <b><?php echo $b_item_rows; ?></b></span>
      </div>
    </div>
  </article>

  <article>
    <div class="quick-edit">
      <h2>Edit user</h2>
      <form action="../www/inc/admin_edit_user.php" method="post" class="admin-edit-user" enctype="multipart/form-data">
        <input type="hidden" value="<?php echo $u_item['id']; ?>" id="id" name="id">
        <div>
          <input class="logo" type="file" value="<?php echo $u_item['avatar']; ?>" id="avatar" name="avatar">
          <div class="basic-info">
            <input class="u-name" type="text" value="<?php echo $u_item["f_name"] ?>" id="f_name" name="f_name" placeholder="First name..">
            <input class="u-name" type="text" value="<?php echo $u_item["l_name"] ?>" id="l_name" name="l_name" placeholder="Last name..">
            <input class="u-email" type="email" value="<?php echo $u_item["email"] ?>" id="email" name="email"  placeholder="Email..">
          </div>
        </div>
        <button type="submit" id="edit" name="edit" value="edit">Save</button>
        </span>
      </form>

      <form action="../www/inc/admin_level.php" method="post" class="admin-level">
        <input type="hidden" value="<?php echo $u_item['id']; ?>" id="id" name="id">
        <label for="b-admin">
          <?php
          if ($u_item['level'] == 0) {
            echo "<span>Make user Admin</span><input type='checkbox' name='level' id='b-admin' value='1'>";
          } else {
            echo "<span>Remove admin level</span><input type='checkbox' name='level' id='b-admin' value='0'>";
          }
          ?>
        </label>
        <button type="submit" id="update" name="update" value="update">Update</button>
      </form>

      <?php if ($b_item_rows != 0) { ?>
      <form action="../www/inc/admin_unmatch_business.php" method="post" class="admin-unmatch-business">
        <?php
          while ($b_item = mysql_fetch_array($b_owner_row)) {
        ?>
          <label for="b-<?php echo $b_item['name']; ?>">
            <a href="detail.php?b=<?php echo $b_item['id']; ?>"><?php echo $b_item['name']; ?></a>
            <input type="checkbox" name="business" id="b-<?php echo $b_item['name']; ?>" value="<?php echo $b_item['id']; ?>">
          </label>
        <?php
          }
        ?>
        <button type="submit" id="unmatch" name="unmatch" value="unmatch">Remove</button>
      </form>
      <?php } ?>

      <form action="../www/inc/admin_change_password.php" method="post" class="admin-change-password">
        <input type="hidden" value="<?php echo $u_item['id']; ?>" id="id" name="id">
        <input class="u-password" type="password" value="" id="password-1" name="password-1" placeholder="New password..">
        <input class="u-password" type="password" value="" id="password-2" name="password-2" placeholder="Confirm password..">
        <button type="submit" id="edit" name="change-pass" value="change-pass">Change</button>
      </form>

      <?php if ($u_item['level'] != 1) { ?>
      <div>
        <form action="../www/inc/admin_delete_user.php" method="post" class="admin-delete-user">
          <input type="hidden" value="<?php echo $u_item['id']; ?>" id="id" name="id">
          <button class="alert" type="submit" id="delete-user" name="delete-user" value="">Delete user</button>
        </form>
      </div>
      <?php } ?>

    </div>
  </article>
</section>
<?php
  }
} else {
?>
<section class="user-detail"></section>
<?php
}
?>
