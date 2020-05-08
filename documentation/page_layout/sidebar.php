<?php require ($_SERVER['DOCUMENT_ROOT'] . '/www.responsive-me.com/classes/control.php'); ?>
<?php 
  // Go to 'classes/Documentation.class.php' For Info 
  $doc = new Documentation('Sidebar', 'Sidebar', 'page_layout/pagination.php', 'page_layout/header.php');
?>
<?php require ($path_to['layout'] . '/header.php'); ?>

<div class="documentation">
  <?php require ($path_to['layout'] . '/documentation/docs_header.php'); ?>
  <div class="content">
    <div class="res-container">
      <h6 class="subtitle"><?php echo $layout_sidebar['sub_1'] ?></h6>
      <div class="para">
        <?php echo $layout_sidebar['para_1']; ?>
      </div>
      <h6 class="subtitle"><?php echo $layout_sidebar['sub_2'] ?></h6>
      <div class="para">
        <?php echo $layout_sidebar['para_2']; ?>
        <code class="res-light-code">
          <span class="language">HTML</span>
          <div class="line">
            <<span class="tag">button</span>
            <span class="attribute">class</span>
            <span class="ponctuation">=</span>
            <span class="keyword">"res-btn res-toggle-sidebar-btn"</span>
            <span class="attribute">data-sidebar</span>
            <span class="ponctuation">=</span>
            <span class="keyword">"sidebar_id"</span>>
          </div>
          <div class="line">
            &#8197;
            <span class="plain-txt">Click Me To Toggle SideBar</span> 
          </div>
          <div class="line">
            &lt;/<span class="tag">button</span>>
          </div>
          <div class="break"></div>
          <div class="line">
            <<span class="tag">div</span>
            <span class="attribute">id</span>
            <span class="ponctuation">=</span>
            <span class="keyword">"sidebar_id"</span>
            <span class="attribute">class</span>
            <span class="ponctuation">=</span>
            <span class="keyword">"res-sidebar res-shadow-3"</span>>
          </div>

          <div class="line">
            &#8197;
            <<span class="tag">span</span>
            <span class="attribute">class</span>
            <span class="ponctuation">=</span>
            <span class="keyword">"res-close"</span>
            <span class="attribute">data-close</span>
            <span class="ponctuation">=</span>
            <span class="keyword">"sidebar_id"</span>
            <span class="attribute">data-item</span>
            <span class="ponctuation">=</span>
            <span class="keyword">"sidebar"</span>>
            <span class="plain-txt">&times;</span>
            &lt;/<span class="tag">span</span>>
          </div>

          <div class="break"></div>

          <div class="line">
            &#8197;
            <<span class="tag">div</span>>
          </div>

          <div class="line">
            &#8197;&#8197;
            <span class="plain-txt">Your SideBar Content Goes Here ^_^</span>
          </div>

          <div class="line">
            &#8197;
            &lt;/<span class="tag">div</span>>
          </div>
          <div class="line">
            &lt;/<span class="tag">div</span>>
          </div>
        </code>
        <?php echo $layout_sidebar['para_3']; ?>
      </div>
    </div>
  </div>
  <?php require ($path_to['layout'] . '/documentation/docs_footer.php'); ?>
</div>

<!-- Position Absolute -->
<?php require ($path_to['layout'] . '/documentation/docs_index.php'); ?>
<?php require ($path_to['layout'] . '/choose_lang.php'); ?>

<?php require ($path_to['layout'] . '/footer.php'); ?>