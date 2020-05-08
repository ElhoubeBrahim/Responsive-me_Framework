<?php require ($_SERVER['DOCUMENT_ROOT'] . '/www.responsive-me.com/classes/control.php'); ?>
<?php 
  // Go to 'classes/Documentation.class.php' For Info 
  $doc = new Documentation('Dropdown', 'Dropdown', 'page_layout/header.php', 'js_components/modal.php');
?>
<?php require ($path_to['layout'] . '/header.php'); ?>

<div class="documentation">
  <?php require ($path_to['layout'] . '/documentation/docs_header.php'); ?>
  <div class="content">
    <div class="res-container">
      <h6 class="subtitle"><?php echo $dropdown['sub_1']; ?></h6>
      <div class="para">
        <?php echo $dropdown['para_1']; ?>
      </div>
      <h6 class="subtitle"><?php echo $dropdown['sub_2']; ?></h6>
      <div class="para">
        <?php echo $dropdown['para_2']; ?>
        <code class="res-light-code">
          <span class="language">HTML</span>
          <div class="line">
            <<span class="tag">div</span>
            <span class="attribute">class</span>
            <span class="ponctuation">=</span>
            <span class="keyword">"res-dropdown res-col-3"</span>>
          </div>
          <div class="line">
            &#8197;
            <<span class="tag">div</span>
            <span class="attribute">class</span>
            <span class="ponctuation">=</span>
            <span class="keyword">"dropdown-btn"</span>>
            <span class="plain-txt">Click Me !</span>
            &lt;/<span class="tag">div</span>>
          </div>
          <div class="line">
            &#8197;
            <<span class="tag">ul</span>
            <span class="attribute">class</span>
            <span class="ponctuation">=</span>
            <span class="keyword">"dropdown-menu res-unstyled-list res-hoverable-list"</span>>
          </div>
          <div class="line">
            &#8197;&#8197;
            <<span class="tag">li</span>
            <span class="attribute">class</span>
            <span class="ponctuation">=</span>
            <span class="keyword">"list-item"</span>>
            <span class="plain-txt">item 1</span>
            &lt;/<span class="tag">li</span>>
          </div>
          <div class="line">
            &#8197;&#8197;
            <<span class="tag">li</span>
            <span class="attribute">class</span>
            <span class="ponctuation">=</span>
            <span class="keyword">"list-item"</span>>
            <span class="plain-txt">item 2</span>
            &lt;/<span class="tag">li</span>>
          </div>
          <div class="line">
            &#8197;&#8197;
            <<span class="tag">li</span>
            <span class="attribute">class</span>
            <span class="ponctuation">=</span>
            <span class="keyword">"list-item"</span>>
            <span class="plain-txt">item 3</span>
            &lt;/<span class="tag">li</span>>
          </div>
          <div class="line">
            &#8197;
            &lt;/<span class="tag">ul</span>>
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