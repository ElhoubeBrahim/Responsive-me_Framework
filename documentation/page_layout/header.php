<?php require ($_SERVER['DOCUMENT_ROOT'] . '/www.responsive-me.com/classes/control.php'); ?>
<?php 
  // Go to 'classes/Documentation.class.php' For Info 
  $doc = new Documentation('Header', 'Header', 'page_layout/sidebar.php', 'js_components/dropdown.php');
?>
<?php require ($path_to['layout'] . '/header.php'); ?>

<div class="documentation">
  <?php require ($path_to['layout'] . '/documentation/docs_header.php'); ?>
  <div class="content">
    <div class="res-container">
      <h6 class="subtitle"><?php echo $layout_header['sub_1']; ?></h6>
      <div class="para">
        <?php echo $layout_header['para_1']; ?>
      </div>
      <h6 class="subtitle"><?php echo $layout_header['sub_2']; ?></h6>
      <div class="para">
        <?php echo $layout_header['para_2']; ?>
        <code class="res-light-code">
          <span class="language">HTML</span>
          <div class="line">
            <<span class="tag">header</span>
            <span class="attribute">class</span>
            <span class="ponctuation">=</span>
            <span class="keyword">"res-header res-shadow-2 res-bg-red res-txt-white"</span>>
          </div>
          <div class="line">
            &#8197;
            <<span class="tag">div</span>
            <span class="attribute">class</span>
            <span class="ponctuation">=</span>
            <span class="keyword">"res-container res-flex"</span>>
          </div>

          <div class="break"></div>

          <div class="line">
            &#8197;&#8197;
            <<span class="tag">button</span>
            <span class="attribute">class</span>
            <span class="ponctuation">=</span>
            <span class="keyword">"res-btn res-bordered res-bg-red res-toggle-nav-btn res-sm-hide"</span>
            <span class="attribute">data-navbar</span>
            <span class="ponctuation">=</span>
            <span class="keyword">"navbar_id"</span>>
          </div>
          <div class="line">
            &#8197;&#8197;&#8197;
            <span class="comment">&lt;!-- Your Icon Tag Here --&gt;</span>
          </div>
          <div class="line">
            &#8197;&#8197;
            &lt;/<span class="tag">button</span>>
          </div>

          <div class="break"></div>

          <div class="line">
            &#8197;&#8197;
            <<span class="tag">a</span>
            <span class="attribute">href</span>
            <span class="ponctuation">=</span>
            <span class="keyword">"#"</span>
            <span class="attribute">class</span>
            <span class="ponctuation">=</span>
            <span class="keyword">"brand res-col-2"</span>>
            <span class="plain-txt">Logo</span>
            &lt;/<span class="tag">a</span>>
          </div>

          <div class="break"></div>

          <div class="line">
            &#8197;&#8197;
            <<span class="tag">nav</span>
            
            <span class="attribute">id</span>
            <span class="ponctuation">=</span>
            <span class="keyword">"navbar_id"</span>
            <span class="attribute">class</span>
            <span class="ponctuation">=</span>
            <span class="keyword">"res-nav res-flex res-col-10 xs-12 res-txt-center"</span>>
          </div>

          <div class="line">
            &#8197;&#8197;&#8197;
            <<span class="tag">ul</span>
            <span class="attribute">class</span>
            <span class="ponctuation">=</span>
            <span class="keyword">"nav-gp res-unstyled-list res-col res-flex xs-12"</span>>
          </div>

          <div class="line">
            &#8197;&#8197;&#8197;&#8197;
            <<span class="tag">a</span>
            <span class="attribute">href</span>
            <span class="ponctuation">=</span>
            <span class="keyword">"#"</span>
            <span class="attribute">class</span>
            <span class="ponctuation">=</span>
            <span class="keyword">"item"</span>>
            <span class="plain-txt">Home</span>
            &lt;/<span class="tag">a</span>>
          </div>
          <div class="line">
            &#8197;&#8197;&#8197;&#8197;
            <<span class="tag">a</span>
            <span class="attribute">href</span>
            <span class="ponctuation">=</span>
            <span class="keyword">"#"</span>
            <span class="attribute">class</span>
            <span class="ponctuation">=</span>
            <span class="keyword">"item"</span>>
            <span class="plain-txt">Portfolio</span>
            &lt;/<span class="tag">a</span>>
          </div>
          <div class="line">
            &#8197;&#8197;&#8197;&#8197;
            <<span class="tag">a</span>
            <span class="attribute">href</span>
            <span class="ponctuation">=</span>
            <span class="keyword">"#"</span>
            <span class="attribute">class</span>
            <span class="ponctuation">=</span>
            <span class="keyword">"item"</span>>
            <span class="plain-txt">Contact</span>
            &lt;/<span class="tag">a</span>>
          </div>
          <div class="line">
            &#8197;&#8197;&#8197;&#8197;
            <<span class="tag">a</span>
            <span class="attribute">href</span>
            <span class="ponctuation">=</span>
            <span class="keyword">"#"</span>
            <span class="attribute">class</span>
            <span class="ponctuation">=</span>
            <span class="keyword">"item"</span>>
            <span class="plain-txt">Blog</span>
            &lt;/<span class="tag">a</span>>
          </div>

          <div class="line">
            &#8197;&#8197;&#8197;
            &lt;/<span class="tag">ul</span>>
          </div>
          <div class="line">
            &#8197;&#8197;
            &lt;/<span class="tag">nav</span>>
          </div>

          <div class="break"></div>

          <div class="line">
            &#8197;
            &lt;/<span class="tag">div</span>>
          </div>
          <div class="line">
            &lt;/<span class="tag">header</span>>
          </div>
        </code> <br>
        <?php echo $layout_header['para_3']; ?>
      </div>
    </div>
  </div>
  <?php require ($path_to['layout'] . '/documentation/docs_footer.php'); ?>
</div>

<!-- Position Absolute -->
<?php require ($path_to['layout'] . '/documentation/docs_index.php'); ?>
<?php require ($path_to['layout'] . '/choose_lang.php'); ?>

<?php require ($path_to['layout'] . '/footer.php'); ?>