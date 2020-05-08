<?php require ($_SERVER['DOCUMENT_ROOT'] . '/www.responsive-me.com/classes/control.php'); ?>
<?php 
  // Go to 'classes/Documentation.class.php' For Info 
  $doc = new Documentation('Floating Action Bar', 'Floating Action Bar', 'js_components/carousel.php', 'js_components/tabulation.php');
?>
<?php require ($path_to['layout'] . '/header.php'); ?>

<div class="documentation">
  <?php require ($path_to['layout'] . '/documentation/docs_header.php'); ?>
  <div class="content">
    <div class="res-container">
      <h6 class="subtitle"><?php echo $fl_action_bar['sub_1']; ?></h6>
      <div class="para">
        <?php echo $fl_action_bar['para_1']; ?>
      </div>
      <h6 class="subtitle"><?php echo $fl_action_bar['sub_2']; ?></h6>
      <div class="para">
        <?php echo $fl_action_bar['para_2']; ?>
        <code class="res-light-code">
          <span class="language">HTML</span>
          <div class="line">
            <<span class="tag">div</span>
            <span class="attribute">class</span>
            <span class="ponctuation">=</span>
            <span class="keyword">"res-fl-action-bar"</span>>
          </div>
          <div class="line">
            &#8197;
            <span class="comment">&lt;!-- Actions Content --&gt;</span>
          </div>
          <div class="line">
            &#8197;
            <<span class="tag">ul</span>
            <span class="attribute">class</span>
            <span class="ponctuation">=</span>
            <span class="keyword">"actions res-unstyled-list"</span>>
          </div>
          <div class="line">
            &#8197;&#8197;
            <<span class="tag">li</span>
            <span class="attribute">class</span>
            <span class="ponctuation">=</span>
            <span class="keyword">"action"</span>>
            <span class="plain-txt">Action 1</span>
            &lt;/<span class="tag">li</span>>
          </div>
          <div class="line">
            &#8197;&#8197;
            <<span class="tag">li</span>
            <span class="attribute">class</span>
            <span class="ponctuation">=</span>
            <span class="keyword">"action"</span>>
            <span class="plain-txt">Action 2</span>
            &lt;/<span class="tag">li</span>>
          </div>
          <div class="line">
            &#8197;&#8197;
            <<span class="tag">li</span>
            <span class="attribute">class</span>
            <span class="ponctuation">=</span>
            <span class="keyword">"action"</span>>
            <span class="plain-txt">Action 3</span>
            &lt;/<span class="tag">li</span>>
          </div>
          <div class="line">
            &#8197;
            &lt;/<span class="tag">ul</span>>
          </div>

          <div class="break"></div>

          <div class="line">
            &#8197;
            <span class="comment">&lt;!-- Action Button --&gt;</span>
          </div>
          <div class="line">
            &#8197;
            <<span class="tag">div</span>
            <span class="attribute">class</span>
            <span class="ponctuation">=</span>
            <span class="keyword">"action-btn"</span>>
            <span class="plain-txt">Toggle Button</span>
            &lt;/<span class="tag">div</span>>
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