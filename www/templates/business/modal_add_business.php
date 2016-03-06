<div id="modal-add-business" class="modal-window">
  <div>
    <i class="icon-close close-modal"></i>
    <h3 class="modal-title">Add new business</h3>

    <form action="../www/inc/admin_add_business.php" method="post" class="add-business" enctype="multipart/form-data">
      <div>
        <input class="logo" type="file" id="avatar" name="avatar">
        <div class="basic-info">
          <?php if ($u_item['level'] == 0) { ?>
            <input type="hidden" name="busines-id" value="1">
          <?php } ?>
          <?php if ($u_item['level'] != 0 || $adm_item['level'] != 0) { ?>
          <select name="busines-id">
            <?php
            $t = "SELECT * FROM types";
            $t_query = mysql_query($t);
            while ($t_name = mysql_fetch_array($t_query)) {
            ?>
              <option value="<?php echo $t_name['id']; ?>"><?php echo $t_name['type']; ?></option>
            <?php
              }
            }
            ?>
          </select>
          <input type="text" id="name" name="name" placeholder="Name..">
          <input type="text" id="rut" name="rut" placeholder="RUT Nº..">
          <input type="text" id="number" name="number" placeholder="BPS Nº..">
          <input type="text" id="address" name="address" placeholder="Address..">
          <input type="text" id="phone" name="phone" placeholder="Phone..">
          <?php if ($u_item['level'] == 0) { ?>
            <input type="hidden" name="owner" value="<?php echo $u_item['id']; ?>">
          <?php } ?>
          <?php if ($u_item['level'] != 0 || $adm_item['level'] != 0) { ?>
          <select name="owner">
            <option value="0">None</option>
            <?php
              $users_table = "SELECT * FROM `users`";
              $u = mysql_query($users_table);
              while ($u_item = mysql_fetch_array($u)) {
            ?>
              <option value="<?php echo $u_item['id']; ?>"><?php echo $u_item['f_name']. " " .$u_item['l_name']; ?></option>
            <?php
            }
          }
          ?>
          </select>
        </div>
      </div>
      <button type="submit" id="create" name="create" value="create">Save</button>
      </span>
    </form>
  </div>
</div>
