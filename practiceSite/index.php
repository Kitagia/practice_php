<?php
$title ="Home";
require "blocks/header.php";
 ?>
<h1 class="text-center"><?php echo $title ?></h1>

<?php
require "blocks/send_message.php";
 ?>
<div class="container-fluid">
  <?php
    require "action_form/publish.php";
    foreach ($messages as $message) {
      require "blocks/message_block.php";
    }
   ?>
</div>



 <?php
 require "blocks/footer.php";
  ?>
