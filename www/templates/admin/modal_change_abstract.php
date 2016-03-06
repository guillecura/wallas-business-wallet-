<div id="modal-change-abstract" class="modal-window">
  <div>
    <i class="icon-close close-modal"></i>
    <h3 class="modal-title">Change main abstract</h3>
    <p>Take into account that the form supports html.</p>
    <form action="../www/inc/edit_landing.php" method="post" class="admin-change-abstract">
      <input type="hidden" value="<?php echo $landing['id']; ?>" id="id" name="id">
      <input type="hidden" value="<?php echo $landing['hero_img']; ?>" id="hero-img" name="hero-img">
      <script>
        tinymce.init({
          selector:'textarea',
          resize: false,
          statusbar: false,
          toolbar: false,
          height : 250,
          menu: {
            edit: {title: 'Edit', items: 'undo redo | cut copy paste pastetext | selectall'},
            format: {title: 'Format', items: 'bold italic underline strikethrough superscript subscript | formats | removeformat'},
            tools: {title: 'Tools', items: 'spellchecker code'}
          }
        });
      </script>
      <textarea id="abstract" name="abstract"><?php echo $landing['abstract']; ?></textarea>
      <button class="button" type="submit" id="save" name="save" value="">Save</button>
    </form>
  </div>
</div>
