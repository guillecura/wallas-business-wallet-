<header class="no-logo"></header>
<section class="section-register">
  <form action="www/inc/register.php" method="post" class="register-form" enctype="multipart/form-data">
    <div>
      <input class="logo" type="file" value="<?php echo $u_item['avatar']; ?>" id="avatar" name="avatar" required>
      <input class="u-name" type="text" value="<?php echo $u_item["f_name"] ?>" id="f_name" name="f_name" placeholder="First name.." required>
      <input class="u-name" type="text" value="<?php echo $u_item["l_name"] ?>" id="l_name" name="l_name" placeholder="Last name.." required>
      <input class="u-email" type="email" value="<?php echo $u_item["email"] ?>" id="email" name="email"  placeholder="Email.." required>
      <input class="u-pass" type="password" value="<?php echo $u_item["password"] ?>" id="password" name="password"  placeholder="Password.." required>
      <input class="u-pass" type="password" id="password2" name="password2"  placeholder="Confirm password..">
    </div>
    <button type="submit" id="register" name="register" value="register">Save</button>
  </form>
</section>
<footer class="no-nav"></footer>
