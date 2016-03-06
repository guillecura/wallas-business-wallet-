<header>
  <a href="/admin" class="header-logo">
    <?php include "../www/inc/logo.php"; ?>
    <span>panel</span>
  </a>
  <menu>
    <span class="user"><?php echo $adm_item["f_name"]; ?></span>
    <?php include "../www/templates/admin/u_image.php"; ?>
    <ul class="user-actions" style="display: none;">
      <li><a href="settings.php"><i class="icon-settings"></i><span>Settings</span></a></li>
      <li><a href="feedback.php"><i class="icon-send"></i><span>Feedback</span></a></li>
      <li><a href="/www/inc/admin_logout.php" class="logout"><i class="icon-logout"></i><span>Logout</span></a></li>
      <li><span>Last activity<br><?php echo $_SESSION["logged"]; ?></span></li>
    </ul>
  </menu>
</header>
