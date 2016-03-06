<div class="container">
  <h1>Clase 1</h1>
  <?php
      $name = Guille;

      if ($name == "Guille") {
          echo "<h2>Mi nombre es ".$name."</h2>";
          echo "<p>Tiene ".strlen($name)." letras.</p>";
      } else {
          echo "<h2>Mi nombre no es ".$name."</h2>";
      }

      $numbers = array(1, 2, 3, 4);
      echo "<p>ejemplo de array</p>";
      var_dump($numbers); // Print array content
      echo "<p>Elemento en pos. 2: <strong>".$numbers[2]."</strong></p>"; // Access an array element

      foreach($numbers as $value) // Go trough the array and save the elements in the $value variable
      {
        echo $value."<br>";
      }

      $userData = array(
        "name" => "Guille",
        "age" => 25,
        "address" => "Velazco 1388",
        "phone" => "099117369"
      );

      foreach ($userData as $key => $value) {
        echo "<p>".$key." => ".$value."</p>"; // To show array content and key name
      }

      echo "<h5>".$userData["name"]."</h5>"; // Show a specific key
  ?>
</div>

<div class="container">
  <h1>Forms</h1>
  <form action="www/clases/clase1/clase1-mail.php" method="get">
    <!-- Name -->
    <label for="name">
      <input type="text" name="name" id="name" placeholder="Name">
    </label>
    <!-- Last Name -->
    <label for="last-name">
      <input type="text" name="last-name" id="last-name" placeholder="Last Name">
    </label>
    <!-- Address -->
    <label for="address">
      <input type="text" name="address" id="address" placeholder="Address">
    </label>
    <!-- Phone -->
    <label for="phone">
      <input type="text" name="phone" id="phone" placeholder="Phone">
    </label>
    <!-- Message -->
    <label for="message">
      <textarea name="message" id="message" placeholder="Message.."></textarea>
    </label>
    <!-- Gender -->
    Gender
    <label for="male">
      Male <input type="radio" name="gender" id="male" value="Male">
    </label>
    <label for="female">
      Female <input type="radio" name="gender" id="female" value="Female">
    </label>
    <!-- Country -->
    <label for="country">
      Country
      <select name="country">
        <option value="Argentina">Argentina</option>
        <option value="Brasil">Brasil</option>
        <option value="Chile">Chile</option>
        <option value="Paraguay">Paraguay</option>
        <option value="Uruguay">Uruguay</option>
      </select>
    </label>
    <!-- Send -->
    <input type="submit" value="send">
  </form>
</div>
