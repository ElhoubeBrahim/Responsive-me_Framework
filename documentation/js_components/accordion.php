<?php require ($_SERVER['DOCUMENT_ROOT'] . '/www.responsive-me.com/classes/control.php'); ?>
<?php 
  // Go to 'classes/Documentation.class.php' For Info 
  $doc = new Documentation('Accordion', 'Accordion', 'js_components/tabulation.php', 'css_components');
?>
<?php require ($path_to['layout'] . '/header.php'); ?>

<div class="documentation">
  <?php require ($path_to['layout'] . '/documentation/docs_header.php'); ?>
  <div class="content">
    <div class="res-container">
      <h6 class="subtitle"><?php echo $accordion['sub_1']; ?></h6>
      <div class="para">
        <?php echo $accordion['para_1']; ?>
      </div>
      <h6 class="subtitle"><?php echo $accordion['sub_2']; ?></h6>
      <div class="para">
        <?php echo $accordion['para_2']; ?>
        <code class="res-light-code">
          <span class="language">HTML</span>
          <div class="line">
            <<span class="tag">div</span>
            <span class="attribute">class</span>
            <span class="ponctuation">=</span>
            <span class="keyword">"res-accordion res-card res-no-padding"</span>>
          </div>
          <div class="line">
            &#8197;
            <span class="comment">&lt;!-- First Section --&gt;</span>
          </div>
          <div class="line">
            &#8197;
            <<span class="tag">div</span>
            <span class="attribute">class</span>
            <span class="ponctuation">=</span>
            <span class="keyword">"section active"</span>>
          </div>
          <div class="line">
            &#8197;&#8197;
            <<span class="tag">div</span>
            <span class="attribute">class</span>
            <span class="ponctuation">=</span>
            <span class="keyword">"acc-header"</span>>
            <span class="plain-txt">Header 1</span>
            &lt;/<span class="tag">div</span>>
          </div>
          <div class="line">
            &#8197;&#8197;
            <<span class="tag">div</span>
            <span class="attribute">class</span>
            <span class="ponctuation">=</span>
            <span class="keyword">"acc-content"</span>>
            <span class="plain-txt">Your Content Goes Here ^_^</span>
            &lt;/<span class="tag">div</span>>
          </div>
          <div class="line">
            &#8197;
            &lt;/<span class="tag">div</span>>
          </div>

          <div class="break"></div>

          <div class="line">
            &#8197;
            <span class="comment">&lt;!-- Second Section --&gt;</span>
          </div>
          <div class="line">
            &#8197;
            <<span class="tag">div</span>
            <span class="attribute">class</span>
            <span class="ponctuation">=</span>
            <span class="keyword">"section"</span>>
          </div>
          <div class="line">
            &#8197;&#8197;
            <<span class="tag">div</span>
            <span class="attribute">class</span>
            <span class="ponctuation">=</span>
            <span class="keyword">"acc-header"</span>>
            <span class="plain-txt">Header 2</span>
            &lt;/<span class="tag">div</span>>
          </div>
          <div class="line">
            &#8197;&#8197;
            <<span class="tag">div</span>
            <span class="attribute">class</span>
            <span class="ponctuation">=</span>
            <span class="keyword">"acc-content"</span>>
            <span class="plain-txt">Your Content Goes Here ^_^</span>
            &lt;/<span class="tag">div</span>>
          </div>
          <div class="line">
            &#8197;
            &lt;/<span class="tag">div</span>>
          </div>
          <div class="break"></div>

          <div class="line">
            &#8197;
            <span class="comment">&lt;!-- Third Section --&gt;</span>
          </div>
          <div class="line">
            &#8197;
            <<span class="tag">div</span>
            <span class="attribute">class</span>
            <span class="ponctuation">=</span>
            <span class="keyword">"section"</span>>
          </div>
          <div class="line">
            &#8197;&#8197;
            <<span class="tag">div</span>
            <span class="attribute">class</span>
            <span class="ponctuation">=</span>
            <span class="keyword">"acc-header"</span>>
            <span class="plain-txt">Header 3</span>
            &lt;/<span class="tag">div</span>>
          </div>
          <div class="line">
            &#8197;&#8197;
            <<span class="tag">div</span>
            <span class="attribute">class</span>
            <span class="ponctuation">=</span>
            <span class="keyword">"acc-content"</span>>
            <span class="plain-txt">Your Content Goes Here ^_^</span>
            &lt;/<span class="tag">div</span>>
          </div>
          <div class="line">
            &#8197;
            &lt;/<span class="tag">div</span>>
          </div>
          <div class="break"></div>
          <div class="line">
            &lt;/<span class="tag">div</span>>
          </div>
        </code>
        <br>
        <?php echo $accordion['para_3']; ?>
      </div>
    </div>
  </div>
  <?php require ($path_to['layout'] . '/documentation/docs_footer.php'); ?>
</div>

<!-- Position Absolute -->
<?php require ($path_to['layout'] . '/documentation/docs_index.php'); ?>
<?php require ($path_to['layout'] . '/choose_lang.php'); ?>

<?php require ($path_to['layout'] . '/footer.php'); ?>