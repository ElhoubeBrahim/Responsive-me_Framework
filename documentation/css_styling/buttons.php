<?php require ($_SERVER['DOCUMENT_ROOT'] . '/www.responsive-me.com/classes/control.php'); ?>
<?php 
  // Go to 'classes/Documentation.class.php' For Info 
  $doc = new Documentation('الأزرار', 'Buttons', 'css_styling/code.php', 'css_styling/grid.php');
?>
<?php require ($path_to['layout'] . '/header.php'); ?>

<div class="documentation">
  <?php require ($path_to['layout'] . '/documentation/docs_header.php'); ?>
  <div class="content">
    <div class="res-container">
      <h6 class="subtitle"><?php echo $buttons['sub_1']; ?></h6>
      <div class="para">
        <?php echo $buttons['para_1']; ?>
        <?php echo $buttons['para_2']; ?>
      </div>
      <h6 class="subtitle"><?php echo $buttons['sub_2']; ?></h6>
      <div class="para">
        <?php echo $buttons['para_3']; ?>
        <code class="res-light-code">
          <span class="language">HTML</span>
          <div class="line">
            <<span class="tag">div</span>
            <span class="attribute">class</span>
            <span class="ponctuation">=</span>
            <span class="keyword">"res-btn-gp"</span>>
          </div>
          <div class="line">
            &#8197;
            <<span class="tag">button</span>
            <span class="attribute">class</span>
            <span class="ponctuation">=</span>
            <span class="keyword">"res-btn"</span>>
            <span class="plain-txt">Click Me !</span>
            &lt;/<span class="tag">button</span>>
          </div>
          <div class="line">
            &#8197;
            <<span class="tag">button</span>
            <span class="attribute">class</span>
            <span class="ponctuation">=</span>
            <span class="keyword">"res-btn"</span>>
            <span class="plain-txt">Click Me !</span>
            &lt;/<span class="tag">button</span>>
          </div>
          <div class="line">
            &#8197;
            <<span class="tag">button</span>
            <span class="attribute">class</span>
            <span class="ponctuation">=</span>
            <span class="keyword">"res-btn"</span>>
            <span class="plain-txt">Click Me !</span>
            &lt;/<span class="tag">button</span>>
          </div>
          <div class="line">
            &lt;/<span class="tag">div</span>>
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