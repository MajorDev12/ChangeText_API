<?php
session_start();
require_once "../view/header.php"; ?>
<div class="landing-page">

  <h1><?php
      if (isset($_POST["change"])) {
        echo '';
      } else {
        echo 'Copy your text here';
        echo '<b/><span class="span">( ChangeText is case sensitive e.g Major and major are two different words )</span>';
      } ?></h1>
  <div class="textarea">
    <?php require_once "form.php"; ?>
  </div>
</div>
<?php require_once "footer.php"; ?>