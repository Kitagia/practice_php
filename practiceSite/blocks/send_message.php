
<div class="row">
  <form class="" action="action_form/check_message.php" method="post">
    <div class="">

      <textarea class="form-control mt-4" name="message" placeholder="Leave your message here" rows="2" v> <?php echo $_COOKIE['message']?></textarea>
    </div>
    <div class="row">
        <div class="col-9">
          <span class="text-danger"> <?=$_COOKIE['error_message'] ?></span>
        </div>
        <input type="hidden" name="id" value="<?=$_COOKIE['id'] ?>">
        <div class="col-3 mt-2 d-flex justify-content-end">
          <?php if($_COOKIE['update'] == false): ?>
          <input class="btn btn-primary fs-5 mb-4" type="submit" name="button" value="Send" >
        <?php else: ?>
            <input class="btn btn-primary fs-5 mb-4" type="submit" name="button" value="Update" >
              <?php endif ?>
        </div>
      </div>
    </form>
</div>
