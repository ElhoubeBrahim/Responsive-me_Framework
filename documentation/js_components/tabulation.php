<?php require ($_SERVER['DOCUMENT_ROOT'] . '/www.responsive-me.com/classes/control.php'); ?>
<?php 
  // Go to 'classes/Documentation.class.php' For Info 
  $doc = new Documentation('Tabulation', 'Tabulation', 'js_components/fl_action_bar.php', 'js_components/accordion.php');
?>
<?php require ($path_to['layout'] . '/header.php'); ?>

<div class="documentation">
  <?php require ($path_to['layout'] . '/documentation/docs_header.php'); ?>
  <div class="content">
    <div class="res-container">
      <h6 class="subtitle"><?php echo $tabulation['sub_1']; ?></h6>
      <div class="para">
        <?php echo $tabulation['para_1']; ?>
      </div>
      <h6 class="subtitle"><?php echo $tabulation['sub_2']; ?></h6>
      <div class="para">
        <?php echo $tabulation['para_2']; ?>
        <code class="res-light-code">
          <span class="language">HTML</span>
          <div class="line">
            <<span class="tag">div</span>
            <span class="attribute">class</span>
            <span class="ponctuation">=</span>
            <span class="keyword">"res-tabulation res-card res-no-padding"</span>>
          </div>
          <div class="line">
            &#8197;
            <span class="comment">&lt;!-- Tabulation Header --&gt;</span>
          </div>
          <div class="line">
            &#8197;
            <<span class="tag">div</span>
            <span class="attribute">class</span>
            <span class="ponctuation">=</span>
            <span class="keyword">"tab-header"</span>>
          </div>
          <div class="line">
            &#8197;&#8197;
            <<span class="tag">div</span>
            <span class="attribute">data-tab</span>
            <span class="ponctuation">=</span>
            <span class="keyword">"id-1"</span>
            <span class="attribute">class</span>
            <span class="ponctuation">=</span>
            <span class="keyword">"item active"</span>>
            <span class="plain-txt">Tab 1</span>
            &lt;/<span class="tag">div</span>>
          </div>
          <div class="line">
            &#8197;&#8197;
            <<span class="tag">div</span>
            <span class="attribute">data-tab</span>
            <span class="ponctuation">=</span>
            <span class="keyword">"id-2"</span>
            <span class="attribute">class</span>
            <span class="ponctuation">=</span>
            <span class="keyword">"item"</span>>
            <span class="plain-txt">Tab 2</span>
            &lt;/<span class="tag">div</span>>
          </div>
          <div class="line">
            &#8197;&#8197;
            <<span class="tag">div</span>
            <span class="attribute">data-tab</span>
            <span class="ponctuation">=</span>
            <span class="keyword">"id-3"</span>
            <span class="attribute">class</span>
            <span class="ponctuation">=</span>
            <span class="keyword">"item"</span>>
            <span class="plain-txt">Tab 3</span>
            &lt;/<span class="tag">div</span>>
          </div>
          <div class="line">
            &#8197;
            &lt;/<span class="tag">div</span>>
          </div>

          <div class="break"></div>

          <div class="line">
            &#8197;
            <span class="comment">&lt;!-- Tabulation Content --&gt;</span>
          </div>
          <div class="line">
            &#8197;
            <<span class="tag">div</span>
            <span class="attribute">class</span>
            <span class="ponctuation">=</span>
            <span class="keyword">"tab-content res-no-border"</span>>
          </div>
          <div class="line">
            &#8197;&#8197;
            <<span class="tag">div</span>
            <span class="attribute">id</span>
            <span class="ponctuation">=</span>
            <span class="keyword">"id-1"</span>
            <span class="attribute">class</span>
            <span class="ponctuation">=</span>
            <span class="keyword">"item active"</span>>
            <span class="plain-txt">Your Content Goes Here ^_^</span>
            &lt;/<span class="tag">div</span>>
          </div>
          <div class="line">
            &#8197;&#8197;
            <<span class="tag">div</span>
            <span class="attribute">id</span>
            <span class="ponctuation">=</span>
            <span class="keyword">"id-2"</span>
            <span class="attribute">class</span>
            <span class="ponctuation">=</span>
            <span class="keyword">"item"</span>>
            <span class="plain-txt">Your Content Goes Here ^_^</span>
            &lt;/<span class="tag">div</span>>
          </div>
          <div class="line">
            &#8197;&#8197;
            <<span class="tag">div</span>
            <span class="attribute">id</span>
            <span class="ponctuation">=</span>
            <span class="keyword">"id-3"</span>
            <span class="attribute">class</span>
            <span class="ponctuation">=</span>
            <span class="keyword">"item"</span>>
            <span class="plain-txt">Your Content Goes Here ^_^</span>
            &lt;/<span class="tag">div</span>>
          </div>
          <div class="line">
            &#8197;
            &lt;/<span class="tag">div</span>>
          </div>

          <div class="line">
            &lt;/<span class="tag">div</span>>
          </div>
        </code>
        <br>
        <?php echo $tabulation['para_3']; ?>
      </div>
    </div>
  </div>
  <?php require ($path_to['layout'] . '/documentation/docs_footer.php'); ?>
</div>

<!-- Position Absolute -->
<?php require ($path_to['layout'] . '/documentation/docs_index.php'); ?>
<?php require ($path_to['layout'] . '/choose_lang.php'); ?>

<?php require ($path_to['layout'] . '/footer.php'); ?>