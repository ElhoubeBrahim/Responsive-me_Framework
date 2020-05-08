<?php require ($_SERVER['DOCUMENT_ROOT'] . '/www.responsive-me.com/classes/control.php'); ?>
<?php 
  // Go to 'classes/Documentation.class.php' For Info 
  $doc = new Documentation('Footer', 'Footer', 'page_layout/footer.php', 'page_layout/pagination.php');
?>
<?php require ($path_to['layout'] . '/header.php'); ?>

<div class="documentation">
  <?php require ($path_to['layout'] . '/documentation/docs_header.php'); ?>
  <div class="content">
    <div class="res-container">
      <h6 class="subtitle"><?php echo $layout_footer['sub_1']; ?></h6>
      <div class="para">
        <?php echo $layout_footer['para_1']; ?>
      </div>
      <h6 class="subtitle"><?php echo $layout_footer['sub_2']; ?></h6>
      <div class="para">
        <?php echo $layout_footer['para_2']; ?>
        <code class="res-light-code">
          <span class="language">HTML</span>
          <div class="line">
            <<span class="tag">footer</span>
            <span class="attribute">class</span>
            <span class="ponctuation">=</span>
            <span class="keyword">"res-footer"</span>>
          </div>
          <div class="line">
            &#8197;
            <span class="plain-txt">
              Your Footer Content Goes Here ^_^
            </span>
          </div>
          <div class="line">
            &lt;/<span class="tag">footer</span>>
          </div>
        </code>
      </div>
    </div>
  </div>
  <?php require ($path_to['layout'] . '/documentation/docs_footer.php'); ?>
</div>

<!-- Position Absolute -->
<?php require ($path_to['layout'] . '/documentation/docs_index.php'); ?>
<?php require ($path_to['layout'] . '/choose_lang.php'); ?>

<?php require ($path_to['layout'] . '/footer.php'); ?>