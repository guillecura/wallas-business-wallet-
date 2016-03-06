<?php
$users_table = "SELECT * FROM `users`";
$business_table = "SELECT * FROM `business`";
$incomes_table = "SELECT * FROM `income`";

$users = mysql_query($users_table);
$users_rows = mysql_num_rows($users);

$business = mysql_query($business_table);
$business_rows = mysql_num_rows($business);

$incomes = mysql_query($incomes_table);
$incomes_rows = mysql_num_rows($incomes);
?>

<section class="section-admin-dashboard">
  <article>
    <div class="users">
      <i class="icon-users"></i>
      <span><?php echo $users_rows ?></span>
      <?php
      if ($users_rows == 1) {
        echo "<p>User registered</p>";
      } else {
        echo "<p>Users registered</p>";
      }
      ?>
    </div>

    <div class="business">
      <i class="icon-business"></i>
      <span><?php echo $business_rows ?></span>
      <p>Business registered</p>
    </div>

    <div class="incomes">
      <i class="icon-wallet"></i>
      <span><?php echo $incomes_rows ?></span>
      <?php
      if ($incomes_rows == 1) {
        echo "<p>Income added</p>";
      } else {
        echo "<p>Incomes added</p>";
      }
      ?>
    </div>
  </article>

  <article class="box">
    <h2>Welcome to the Wallas administrator panel.</h2>
    <p>If you need help getting started please contact us via the
      <a href="mailto:hi@guillecura.co" target="_blank">support email</a>. If you'd ratherdrive right in, here are a few
      things most admins do first. We've assembled some links to get you started:</p>
    <ul>
      <li>
        <h3>Basic Settings</h3>
        <a href="settings.php">Edit your settings</a>
        <a href="/">Go to the app</a>
        <a href="users.php">Add new user</a>
        <a href="business.php">Add business</a>
      </li>
      <li>
        <h3>Edit Real Content</h3>
        <a href="users.php">Edit user data</a>
        <a href="business.php">Manage busines types</a>
        <a href="customize.php">Landingpage content</a>
        <a href="business.php">Edit business values</a>
      </li>
      <li>
        <h3>Share with friends</h3>
        <a href="#">Share with Facebook</a>
        <a href="#">Share with Twitter</a>
        <a href="#">Invite friends</a>
      </li>
    </ul>
  </article>
</section>
