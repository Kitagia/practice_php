<?php
$title ="Profile";
require "blocks/header.php";
 ?>
<h1 class="mb-4"><?php echo $_COOKIE['user'] ?></h1>
<div class="container-fluid">
  <?php
  require "action_form/publish.php";
  foreach ($messages as $message) {
    if ($message['nickname'] == $_COOKIE['user']) {
      require "blocks/message_block.php";
    }

  }
   ?>
</div>

<?php
require "blocks/footer.php";
?>
