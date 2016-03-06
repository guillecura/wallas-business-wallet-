<section class="section-admin-feedback">
  <article>
    <h2>Send us your feedback!</h2>

    <form action="../www/inc/send_mail.php" method="post" class="send-feedback">
      <input type="hidden" value="<?php echo $adm_item["f_name"] ?>" name="f_name">
      <input type="hidden" value="<?php echo $adm_item["l_name"] ?>" name="l_name">
      <input type="hidden" value="<?php echo $adm_item["email"] ?>" name="email">

      <script>
        tinymce.init({
          selector:'.textarea',
          resize: false,
          statusbar: false,
          toolbar: false,
          height : 400,
          menu: {
            edit: {title: 'Edit', items: 'undo redo | cut copy paste pastetext | selectall'},
            format: {title: 'Format', items: 'bold italic underline strikethrough superscript subscript | formats | removeformat'},
            tools: {title: 'Tools', items: 'spellchecker code'}
          }
        });
      </script>
      <textarea class="textarea" name="message"></textarea>

      <span class="actions">
        <button type="submit" id="send" name="send" value="send">Send!</button>
        <a class="button alert" href="dashboard.php">Cancel</a>
      </span>
    </form>

  </article>
</section>
