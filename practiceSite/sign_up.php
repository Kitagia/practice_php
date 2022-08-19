<?php
$title ="Sign up";
require "blocks/header.php";
 ?>
 <div class="text-center">
   <svg xmlns="http://www.w3.org/2000/svg" width="72" height="57" role="img" fill="currentColor" class="bi bi-chat-right-quote-fill mb-4" viewBox="0 0 16 16">
   <path d="M16 2a2 2 0 0 0-2-2H2a2 2 0 0 0-2 2v8a2 2 0 0 0 2 2h9.586a1 1 0 0 1 .707.293l2.853 2.853a.5.5 0 0 0 .854-.353V2zM7.194 4.766c.087.124.163.26.227.401.428.948.393 2.377-.942 3.706a.446.446 0 0 1-.612.01.405.405 0 0 1-.011-.59c.419-.416.672-.831.809-1.22-.269.165-.588.26-.93.26C4.775 7.333 4 6.587 4 5.667 4 4.747 4.776 4 5.734 4c.271 0 .528.06.756.166l.008.004c.169.07.327.182.469.324.085.083.161.174.227.272zM11 7.073c-.269.165-.588.26-.93.26-.958 0-1.735-.746-1.735-1.666 0-.92.777-1.667 1.734-1.667.271 0 .528.06.756.166l.008.004c.17.07.327.182.469.324.085.083.161.174.227.272.087.124.164.26.228.401.428.948.392 2.377-.942 3.706a.446.446 0 0 1-.613.01.405.405 0 0 1-.011-.59c.42-.416.672-.831.81-1.22z"/>
   </svg>
  <h1 ><?php echo $title ?></h1>
 </div>


<form class="mt-5" action="action_form/check_sign_up_form.php" method="post">
  <div class="row mt-4">
    <div class="col-2">
      <label class="label ms-5" for="">Name</label>
    </div>
    <div class="col-5">
      <input class="form-control" type="text" name="name" value="<?= $_COOKIE['name'] ?>" placeholder="Your Name:">
    </div>
    <div class="col-5">
      <span class="text-danger"><?=$_COOKIE['error_name'] ?></span>
    </div>
  </div>
  <div class="row mt-4">
    <div class="col-2">
      <label class="label ms-5" for="">Nickname</label>
    </div>
    <div class="col-5">
      <input class="form-control" type="text" name="nickname" value="<?=$_COOKIE['nickname'] ?>" placeholder="Your Nickname:">
    </div>
    <div class="col-5">
      <span class="text-danger"><?=$_COOKIE['error_nickname'] ?></span>
    </div>
  </div>
  <div class="row mt-4">
    <div class="col-2">
      <label class="label ms-5" for="">Email:</label>
    </div>
    <div class="col-5">
      <input class="form-control" type="email" name="email" value="<?=$_COOKIE['email'] ?>" placeholder="Exemple@mail.com">
    </div>
    <div class="col-5">
      <span class="text-danger"><?=$_COOKIE['error_email'] ?></span>
    </div>
  </div>
  <div class="row mt-4">
    <div class="col-2">
      <label class="label ms-5" for="">Date of birth:</label>
    </div>
    <div class="col-5">
      <input class="form-control" type="date" name="date_of_birth" value="<?=$_COOKIE['date_of_birth'] ?>">
    </div>
    <div class="col-5">
      <span class="text-danger"><?=$_COOKIE['error_date_of_birth'] ?></span>
    </div>
  </div>
  <div class="row mt-4">
    <div class="col-2">
      <label class="label ms-5" for="">Password:</label>
    </div>
    <div class="col-5">
      <input class="form-control" type="password" name="password" value="<?=$_COOKIE['password'] ?>">
    </div>
    <div class="col-5">
      <span class="text-danger"><?=$_COOKIE['error_password'] ?></span>
    </div>
  </div>
  <div class="row mt-4">
    <div class="col-12 mt-5 d-flex justify-content-center">
      <input class="btn btn-primary fs-4" type="submit" value="<?php echo $title ?>">
    </div>
  </div>
</form>


 <?php
 require "blocks/footer.php";
  ?>
