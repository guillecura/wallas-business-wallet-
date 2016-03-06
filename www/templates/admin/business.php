<?php
if (isset($_GET['name'])) {
  $search_business = mysql_real_escape_string($_GET['name']);

  $business_table = "SELECT * FROM `business` WHERE `name` LIKE '%$search_business%' ORDER BY `name`";
} else {
  $business_table = "SELECT * FROM `business` ORDER BY `name`";
}

$types_table = "SELECT * FROM `types`";
$users_table = "SELECT * FROM `users`";

$business = mysql_query($business_table);
$business_rows = mysql_num_rows($business);

$types = mysql_query($types_table);

$users = mysql_query($users_table);
?>

<section class="section-admin-business">
  <article>
    <h2>Manage business and it's settings.</h2>
    <span tabindex="0" class="modal-open" name="modal-add-business">Add new business</span>
    <form class="business-search" method="get">
      <input type="text" name="name" placeholder="Search by name..">
      <button type="submit"><i class="icon-search"></i></button>

      <?php
      if (isset($_GET['name'])) {
        echo "<a href='business.php'>See all</a>";
      }
      ?>
    </form>
    <?php
    if (isset($_GET['name'])) {
      echo "<br><br>";
    }
    ?>
    <div class="table">
      <div class="heading">
        <div><span>Logo</span></div>
        <div><span>Name</span></div>
        <div><span>BPS Nº</span></div>
        <div><span>RUT</span></div>
        <div><span>Type</span></div>
        <div><span>Phone</span></div>
        <div><span>Owner</span></div>
      </div>
      <?php
      if ($business_rows == 0) {
        ?>
        <div calss="row">
          <div>
            <span>No results found!</span>
          </div>
        </div>
        <?php
      } else {
        while ($b_item = mysql_fetch_array($business)) {
          $b_type_id = $b_item['type'];
          $b_type_row = mysql_query("SELECT * FROM `types` WHERE id=$b_type_id");
          $t_item = mysql_fetch_array($b_type_row);

          $b_owner_id = $b_item['owner'];
          $b_owner_row = mysql_query("SELECT * FROM `users` WHERE id=$b_owner_id");
          $u_item = mysql_fetch_array($b_owner_row);
      ?>
      <div class="row">
        <div><?php include "../www/templates/business/b_image.php"; ?></div>
        <div><span><a href="detail.php?b=<?php echo $b_item['id']; ?>"><?php echo $b_item['name']; ?></a></span></div>
        <div><span><?php if ($b_item['number'] == 0) { echo "---"; } else { echo $b_item['number'];} ?></span></div>
        <div><span><?php if ($b_item['rut'] == 0) { echo "---"; } else { echo $b_item['rut']; } ?></span></div>
        <div><span><a href="type.php?t=<?php echo $b_item['type']; ?>"><?php echo $t_item['type']; ?></a></span></div>
        <div><span><?php if ($b_item['phone'] == 0) { echo "---"; } else { echo $b_item['phone']; } ?></span></div>
        <div><span><a href="user.php?user=<?php echo $b_owner_id; ?>"><?php if ($b_owner_id == 0) { echo "Not matched"; } else { echo $u_item['f_name'] . " " . $u_item['l_name']; } ?></a></span></div>
      </div>
      <?php
        }
      }
      ?>
    </div>
  </article>
</section>
