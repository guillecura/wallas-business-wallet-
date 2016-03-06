<?php
if (isset($_GET['b'])) {
  $business_id = $_GET['b'];

  $business_table = "SELECT * FROM `business` WHERE `id`='$business_id'";
  $b = mysql_query($business_table);

  $users_table = "SELECT * FROM `users` ORDER BY `f_name`";
  $u = mysql_query($users_table);

  while ($b_item = mysql_fetch_array($b)) {
    $b_owner_id = $b_item['owner'];
    $b_owner_row = mysql_query("SELECT * FROM `users` WHERE `id`='$b_owner_id'");
    $b_item_rows = mysql_num_rows($b_owner_row);
?>
<section class="section-business-detail">
  <article>
    <div class="business-info">
      <?php include "../www/templates/business/b_image.php"; ?>
      <h2><?php echo $b_item['name']; ?></h2>

      <div>
        <span>RUT: <strong><?php echo $b_item['rut']; ?></strong></span>
        <span>BPS Nº: <strong><?php echo $b_item['number']; ?></strong></span>
        <span>Adress: <strong><?php echo $b_item['address']; ?></strong></span>
        <span>Phone: <strong><?php echo $b_item['phone']; ?></strong></span>
        <span class="owner">Owner: <strong><?php
          while ($owner_item = mysql_fetch_array($b_owner_row)) {
            echo "<a href='user.php?user=" .$owner_item['id']. "'>" .$owner_item['f_name']. " " .$owner_item['l_name']. "</a>";
          }
        ?></strong></span>
      </div>
    </div>
  </article>

  <article>
    <div class="quick-edit">
      <h2>Edit business</h2>
      <form action="../www/inc/admin_edit_business.php" method="post" class="admin-edit-user" enctype="multipart/form-data">
        <input type="hidden" value="<?php echo $b_item['id']; ?>" id="id" name="id">
        <div>
          <input class="logo" type="file" value="<?php echo $b_item['avatar']; ?>" id="avatar" name="avatar">
          <div class="basic-info">
            <input type="text" value="<?php echo $b_item["name"] ?>" id="name" name="name" placeholder="Name..">
            <input type="text" value="<?php echo $b_item["rut"] ?>" id="rut" name="rut" placeholder="RUT Nº..">
            <input type="text" value="<?php echo $b_item["number"] ?>" id="number" name="number" placeholder="BPS Nº..">
            <input type="text" value="<?php echo $b_item["address"] ?>" id="address" name="address" placeholder="Address..">
            <input type="text" value="<?php echo $b_item["phone"] ?>" id="phone" name="phone" placeholder="Phone..">
          </div>
        </div>
        <button type="submit" id="edit" name="edit" value="edit">Save</button>
        </span>
      </form>

      <form action="../www/inc/admin_match_user.php" method="post" class="admin-match-user">
        <input type="hidden" value="<?php echo $b_item['id']; ?>" id="id" name="id">
        <select name="owner">
        <?php
          while ($u_item = mysql_fetch_array($u)) {
        ?>
          <option value="<?php echo $u_item['id']; ?>" <?php if ($u_item['id'] == $b_item['owner']) {
            echo " selected";
          } ?>><?php echo $u_item['f_name']. " " .$u_item['l_name']; ?></option>
        <?php
          }
        ?>
        </select>
        <button type="submit" id="match" name="match" value="match">Match user</button>
      </form>

      <div>
        <form action="../www/inc/admin_delete_business.php" method="post" class="admin-delete-business">
          <input type="hidden" value="<?php echo $b_item['id']; ?>" id="id" name="id">
          <button class="alert" type="submit" id="delete-business" name="delete-business" value="">Delete!</button>
        </form>
      </div>

    </div>
  </article>
</section>
<?php
  }
} else {
?>
<section class="section-business-detail"></section>
<?php
}
?>
