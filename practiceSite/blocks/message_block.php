
<div class="row mb-4">
  <div class="card-body">
    <p class="card-text">
      <div class="row">


      <div class="col-md-9">
        <small class="text-muted"><?=$message['nickname'] ?></small>
      </div>
      <?php if($_COOKIE['user'] == $message['nickname']): ?>
      <div class="col-md-3 text-end">
        <form  action="action_form/check_message.php" method="post">
          <input type="hidden" name="m_id" value="<?=$message['id']?>">
          <button type="submit" class="btn btn-light me-2" name="button" value="Edit">Edit</button>
        </form>
      </div>
    <?php endif; ?>
    </div>
    </p>
    <p class="card-text"><?=$message['message'] ?> </p>
    <p class="card-text"><small class="text-muted"><?=$message['date'] ?></small></p>
  </div>
</div>
