<header class="no-logo"></header>
<section class="section-login">
  <?php include "www/inc/logo.php"; ?>
  <form class="login-form" action="www/inc/login.php" method="post">
    <input type="email" id="email_val" name="email_val" placeholder="Email" required>
    <input type="password" id="password_val" name="password_val" placeholder="Password" required>
    <button type="submit" id="login" name="login">Sign in</button>
    <a href="register.php">Not a member yet?</a>
  </form>
</section>
<footer class="no-nav"></footer>
