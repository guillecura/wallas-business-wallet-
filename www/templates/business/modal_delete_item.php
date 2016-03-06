<div id="modal-delete-item" class="modal-window">
  <div>
    <i class="icon-close close-modal"></i>
    <h3 class="modal-title">Delete Item</h3>
    <p>Are you sure you want to delete this item?</p>
    <em>This action cannot be undone</em>

    <form action="www/inc/delete_business.php" method="post" class="delete-business-form">
      <input type="hidden" value="" id="id" name="id">
      <button class="alert" type="submit" id="delete" name="delete" value="">Yes, delete.</button>
    </form>

  </div>
</div>
