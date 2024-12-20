<?php $this->view('head.php', null, CoreView::CORE); ?>
<div class="container p-3 flex-fill d-flex flex-column">
  <div class="row flex-fill d-flex flex-column">
    <div class="col-auto mt-3 border-bottom pb-4">
    <div class="d-flex flex-row align-items-end">
      <img src="<?php echo $this->asset('images/mgm.png'); ?>" style="width:180px;" class="me-4" alt="MGM: Media, Game, and Mobile Laboratory" />
      <?php $this->view('nav.php'); ?>
    </div>
    </div>

    <div><?php echo $content ? $content->content : ''; ?></div>

  </div>
  <?php echo $this->view('footer.php'); ?>
</div>

<?php $this->view('foot.php', null, CoreView::CORE);
