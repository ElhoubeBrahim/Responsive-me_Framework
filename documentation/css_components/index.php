<?php require ($_SERVER['DOCUMENT_ROOT'] . '/www.responsive-me.com/classes/control.php'); ?>
<?php 
  // Go to 'classes/Documentation.class.php' For Info 
  $doc = new Documentation('مكونات CSS', 'CSS Components', 'js_components/accordion.php', 'css_styling/more.php');
?>
<?php require ($path_to['layout'] . '/header.php'); ?>

<div class="documentation">
  <?php require ($path_to['layout'] . '/documentation/docs_header.php'); ?>
  <div class="content">
    <div class="res-container">
      <h6 class="subtitle"><?php echo $css_components['sub_1']; ?></h6>
      <div class="para">
        <?php echo $css_components['para_1']; ?>
      </div>
      <h6 class="subtitle"><?php echo $css_components['sub_2']; ?></h6>
      <div class="para">
        <?php echo $css_components['para_2']; ?>
      </div>
      <h6 class="subtitle"><?php echo $css_components['sub_3']; ?></h6>
      <div class="para">
        <?php echo $css_components['para_3']; ?>
      </div>
      <h6 class="subtitle"><?php echo $css_components['sub_4']; ?></h6>
      <div class="para">
        <?php echo $css_components['para_4']; ?>
      </div>
    </div>
  </div>
  <?php require ($path_to['layout'] . '/documentation/docs_footer.php'); ?>
</div>

<!-- Position Absolute -->
<?php require ($path_to['layout'] . '/documentation/docs_index.php'); ?>
<?php require ($path_to['layout'] . '/choose_lang.php'); ?>

<?php require ($path_to['layout'] . '/footer.php'); ?>