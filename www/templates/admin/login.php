<header class="no-logo"></header>
<section class="section-login">
  <?php include "../www/inc/logo.php"; ?>
  <form class="login-form" action="/www/inc/login.php" method="post">
    <span>Administrator panel</span>
    <input type="email" id="email_val" name="email_val" placeholder="Email" required>
    <input type="password" id="password_val" name="password_val" placeholder="Password" required>
    <button type="submit" id="admin-login" name="admin-login">Sign in</button>
  </form>
</section>
<footer class="no-nav"></footer>
