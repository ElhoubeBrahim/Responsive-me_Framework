<?php require '../classes/control.php'; // get The Config File ?>
<?php require ($path_to['layout'] . '/header.php'); ?>

<?php $ex = new Examples($path_to['examples'] . '/examples'); ?>

<div class="ex-header res-txt-center ">
  <h2 class="res-txt-blue">Responsive-me Examples</h2>
  <p>Those Are Some Popular Web Pages Built By Responsive-me</p>
</div>

<div class="examples res-container">
  <div class="res-row">
    <?php foreach ($ex->get_examples() as $example) : ?>
      <?php if($ex->check_example_files($example)) : ?>
        <div class="example res-col sm-4 xs-12">
          <div class="picture">
            <?php $ex->get_example_picture($example); ?>
          </div>
          <h6 class="title res-txt-blue"><?php $ex->get_example_title($example); ?></h6>
          <div class="actions res-row">
            <?php $ex->get_example_download_link($example); ?>
            <?php $ex->get_example_demo_link($example); ?>
          </div>
        </div>
      <?php endif; ?>
    <?php endforeach; ?>
  </div>
</div>

<?php require ($path_to['layout'] . '/footer.php'); ?>
