<?php
$land = "SELECT * FROM landing";
$land_query = mysql_query($land);
$landing = mysql_fetch_array($land_query);
?>

<section class="section-admin-landing">
  <figure class="preview-landing">
    <section style="background-image: url('/www/img/<?php echo $landing['hero_img']; ?>');">
      <div class="overlay">
        <span class="button modal-open" tabindex="0" name="modal-change-cover">Change cover image</span>
      </div>
      <?php include "../www/inc/logo.php"; ?>
    </section>
    <article>
      <div class="overlay">
        <span class="button modal-open" tabindex="0" name="modal-change-abstract">Change abstract</span>
      </div>
      <?php echo $landing['abstract']; ?>
    </article>
    <footer>
      <div>
        <ul>
          <li><a>Register!</a></li>
          <li><a>Sing in</a></li>
          <li><a>Contact us</a></li>
        </ul>
        <div>
          <?php include "../www/inc/logo.php"; ?>
        </div>
        <div>
          <a class="button">App coming soon!</a>
        </div>
      </div>
      <span>&copy; <?php echo date("Y") ?> guillecura.co - all rights reserved.</span>
    </footer>
  </figure>
</section>
