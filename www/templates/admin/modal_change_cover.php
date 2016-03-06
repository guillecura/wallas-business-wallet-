<div id="modal-change-cover" class="modal-window">
  <div>
    <i class="icon-close close-modal"></i>
    <h3 class="modal-title">Change cover image</h3>
    <form action="../www/inc/edit_landing.php" method="post" class="admin-change-cover"  enctype="multipart/form-data">
      <input type="hidden" value="<?php echo $landing['id']; ?>" id="id" name="id">
      <input type="hidden" value="<?php echo $landing['abstract']; ?>" id="abstract" name="abstract">
      <input class="image" type="file" value="<?php echo $landing['hero_img']; ?>" id="hero-img" name="hero-img">
      <button class="button" type="submit" id="save" name="save" value="">Save</button>
    </form>
  </div>
</div>
