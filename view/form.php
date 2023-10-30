<form action="../controller/formValidate.php" method="post" class="form">
  <?php
  if (isset($_GET["error"])) {
    if ($_GET["error"] == "nosuchword") {
      echo '<p class="error">No Such Word</p>';
    } else if ($_GET["error"] == "emptyinputs") {
      echo '<p class="error">Please fill in all fields</p>';
    } elseif ($_GET["error"] == "toomanywords") {
      echo '<p class="error">Words too many, enter one word</p>';
    }
  }
  ?>


  <textarea name="text" maxlength="1000" class="text" id="" cols="50" rows="10" placeholder="Enter the paragraph here"></textarea>

  <div class="word word1">
    <input type="text" name="dirty" placeholder="E.g   Customa">
    <input type="text" name="clean" placeholder="Customer">
  </div>



  <input type="submit" name="change" class="submit" value="Change">
</form>