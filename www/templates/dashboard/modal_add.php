<div id='modal-add' class='modal-window'>
  <div>
    <i class="icon-close close-modal"></i>
    <h3 class="modal-title">Add New Income</h3>

    <form action="www/inc/add_value.php" method="post" class="add-value-form">
      <select name="busines-id">
        <?php
        $b = "SELECT * FROM business WHERE owner='$b_owner_id'";
        $b_query = mysql_query($b);
        while ($b_name = mysql_fetch_array($b_query)) {
        ?>
          <option value="<?php echo $b_name['id']; ?>"><?php echo $b_name['name']; ?></option>
        <?php
        }
        ?>
      </select>
      <input type="text" placeholder="Subtotal" id="subtotal_val" name="subtotal_val">
      <input type="date" id="date_val" name="date_val">
      <textarea placeholder="Write a reference.." id="reference_val" name="reference_val"></textarea>
      <button type="submit" id="add" name="add">Add</button>
    </form>

  </div>
</div>
