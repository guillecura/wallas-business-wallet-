<?php
if (isset($_GET['name'])) {
  $search_users = mysql_real_escape_string($_GET['name']);

  $users_table = "SELECT * FROM `users` WHERE `f_name` LIKE '%$search_users%' OR `l_name` LIKE '%$search_users%' ORDER BY `f_name`";
} else {
  $users_table = "SELECT * FROM `users` ORDER BY `f_name`";
}

$business_table = "SELECT * FROM `business`";

$business = mysql_query($business_table);
$business_rows = mysql_num_rows($business);

$users = mysql_query($users_table);
?>

<section class="section-admin-users">
  <article>
    <h2>Manage users.</h2>
    <span tabindex="0" class="modal-open" name="modal-add-user">Add new user</span>
    <form class="users-search" method="get">
      <input type="text" name="name" placeholder="Search by name..">
      <button type="submit"><i class="icon-search"></i></button>

      <?php
      if (isset($_GET['name'])) {
        echo "<a href='users.php'>See all</a>";
      }
      ?>
    </form>
    <?php
    if (isset($_GET['name'])) {
      echo "<br><br>";
    }
    ?>

    <div class="table">
      <?php
        while ($u_item = mysql_fetch_array($users)) {
          $b_owner_id = $u_item['id'];
          $b_owner_row = mysql_query("SELECT * FROM `business` WHERE owner=$b_owner_id");
          $b_item = mysql_fetch_array($b_owner_row);
          $b_item_rows = mysql_num_rows($b_owner_row);
      ?>
      <div>
        <a href="user.php?user=<?php echo $u_item['id']; ?>"></a>
        <div><?php include "../www/templates/accounts/u_image.php"; ?></div>
        <div>
          <span><?php echo $u_item['f_name']. " " .$u_item['l_name']; ?></span>
          <span><?php echo $u_item['email']; ?></span>
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
      <?php
        }
      ?>
    </div>
  </article>
</section>
