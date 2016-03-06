<div id="modal-settings" class="modal-window">
  <div>
    <i class="icon-close close-modal"></i>
    <h3 class="modal-title">Settings</h3>

    <form action="www/inc/change_password.php" method="post" class="change-password-form">
      <h6>Change password</h6>
      <input type="hidden" value="" id="id" name="id">
      <input class="u-password" type="password" value="" id="password-1" name="password-1" placeholder="New password..">
      <input class="u-password" type="password" value="" id="password-2" name="password-2" placeholder="Confirm password..">
      <button type="submit" id="edit" name="change-pass" value="change-pass">Change</button>
    </form>

    <form action="www/inc/logout.php" method="post" class="logout-form">
      <h6>Log out</h6>
      <button type="submit" id="close" name="close" value="">Seeya!</button>
    </form>

    <form action="www/inc/delete_account.php" method="post" class="delete-account-form">
      <h6>Delete account</h6>
      <input type="hidden" value="" id="id" name="id">
      <button class="alert" type="submit" id="delete-account" name="delete-account" value="">Good bye :'(</button>
    </form>

  </div>
</div>
