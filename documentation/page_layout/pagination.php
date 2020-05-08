<?php require ($_SERVER['DOCUMENT_ROOT'] . '/www.responsive-me.com/classes/control.php'); ?>
<?php 
  // Go to 'classes/Documentation.class.php' For Info 
  $doc = new Documentation('Pagination', 'Pagination', 'page_layout/footer.php', 'page_layout/sidebar.php');
?>
<?php require ($path_to['layout'] . '/header.php'); ?>

<div class="documentation">
  <?php require ($path_to['layout'] . '/documentation/docs_header.php'); ?>
  <div class="content">
    <div class="res-container">
      <h6 class="subtitle"><?php echo $layout_pagination['sub_1']; ?></h6>
      <div class="para">
        <?php echo $layout_pagination['para_1']; ?>
      </div>
      <h6 class="subtitle"><?php echo $layout_pagination['sub_2']; ?></h6>
      <div class="para">
        <?php echo $layout_pagination['para_2']; ?>
        <code class="res-light-code">
          <span class="language">HTML</span>
          <div class="line">
            <<span class="tag">div</span>
            <span class="attribute">class</span>
            <span class="ponctuation">=</span>
            <span class="keyword">"res-pagination"</span>>
          </div>
          <div class="line">
            &#8197;
            <<span class="tag">a</span>
            <span class="attribute">class</span>
            <span class="ponctuation">=</span>
            <span class="keyword">"list-item"</span>>
            <span class="plain-txt">1</span>
            &lt;/<span class="tag">a</span>>
          </div>
          <div class="line">
            &#8197;
            <<span class="tag">a</span>
            <span class="attribute">class</span>
            <span class="ponctuation">=</span>
            <span class="keyword">"list-item"</span>>
            <span class="plain-txt">2</span>
            &lt;/<span class="tag">a</span>>
          </div>
          <div class="line">
            &#8197;
            <<span class="tag">a</span>
            <span class="attribute">class</span>
            <span class="ponctuation">=</span>
            <span class="keyword">"list-item"</span>>
            <span class="plain-txt">3</span>
            &lt;/<span class="tag">a</span>>
          </div>
          <div class="line">
            &#8197;
            <<span class="tag">a</span>
            <span class="attribute">class</span>
            <span class="ponctuation">=</span>
            <span class="keyword">"list-item"</span>>
            <span class="plain-txt">4</span>
            &lt;/<span class="tag">a</span>>
          </div>
          <div class="line">
            &#8197;
            <<span class="tag">a</span>
            <span class="attribute">class</span>
            <span class="ponctuation">=</span>
            <span class="keyword">"list-item"</span>>
            <span class="plain-txt">5</span>
            &lt;/<span class="tag">a</span>>
          </div>
          <div class="line">
            &lt;/<span class="tag">div</span>>
          </div>
        </code> <br>
        <?php echo $layout_pagination['para_3']; ?>
      </div>
    </div>
  </div>
  <?php require ($path_to['layout'] . '/documentation/docs_footer.php'); ?>
</div>

<!-- Position Absolute -->
<?php require ($path_to['layout'] . '/documentation/docs_index.php'); ?>
<?php require ($path_to['layout'] . '/choose_lang.php'); ?>

<?php require ($path_to['layout'] . '/footer.php'); ?>