<?php require ($_SERVER['DOCUMENT_ROOT'] . '/www.responsive-me.com/classes/control.php'); ?>
<?php 
  // Go to 'classes/Documentation.class.php' For Info 
  $doc = new Documentation('Carousel', 'Carousel', 'js_components/modal.php', 'js_components/fl_action_bar.php');
?>
<?php require ($path_to['layout'] . '/header.php'); ?>

<div class="documentation">
  <?php require ($path_to['layout'] . '/documentation/docs_header.php'); ?>
  <div class="res-carousel">
    <div class="slides">
      <div id="1" class="item active res-bg-red"></div>
      <div id="2" class="item res-bg-blue"></div>
      <div id="3" class="item res-bg-dark-yellow"></div>
      <div id="4" class="item res-bg-brown"></div>
      <div id="5" class="item res-bg-green"></div>
    </div>
    <div class="dots">
      <span class="dot active" data-slide="1"></span>
      <span class="dot" data-slide="2"></span>
      <span class="dot" data-slide="3"></span>
      <span class="dot" data-slide="4"></span>
      <span class="dot" data-slide="5"></span>
    </div>
  </div> 
  <div class="content">
    <div class="res-container">
      <h6 class="subtitle"><?php echo $carousel['sub_1']; ?></h6>
      <div class="para">
        <?php echo $carousel['para_1']; ?>
        <code class="res-light-code">
          <span class="language">HTML</span>
          <div class="line">
            <<span class="tag">div</span>
            <span class="attribute">class</span>
            <span class="ponctuation">=</span>
            <span class="keyword">"res-carousel"</span>>
          </div>
          <div class="line">
            &#8197;
            <span class="comment">&lt;!-- Slides Content --&gt;</span>
          </div>
          <div class="line">
            &#8197;
            <<span class="tag">div</span>
            <span class="attribute">class</span>
            <span class="ponctuation">=</span>
            <span class="keyword">"slides"</span>>
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

          <div class="break"></div>

          <div class="line">
            &#8197;
            <span class="comment">&lt;!-- Dots . . . --&gt;</span>
          </div>
          <div class="line">
            &#8197;
            <<span class="tag">div</span>
            <span class="attribute">class</span>
            <span class="ponctuation">=</span>
            <span class="keyword">"dots"</span>>
          </div>
          <div class="line">
            &#8197;&#8197;
            <<span class="tag">span</span>
            <span class="attribute">data-slide</span>
            <span class="ponctuation">=</span>
            <span class="keyword">"id-1"</span>
            <span class="attribute">class</span>
            <span class="ponctuation">=</span>
            <span class="keyword">"dot active"</span>>
            &lt;/<span class="tag">span</span>>
          </div>
          <div class="line">
            &#8197;&#8197;
            <<span class="tag">span</span>
            <span class="attribute">data-slide</span>
            <span class="ponctuation">=</span>
            <span class="keyword">"id-2"</span>
            <span class="attribute">class</span>
            <span class="ponctuation">=</span>
            <span class="keyword">"dot"</span>>
            &lt;/<span class="tag">span</span>>
          </div>
          <div class="line">
            &#8197;&#8197;
            <<span class="tag">span</span>
            <span class="attribute">data-slide</span>
            <span class="ponctuation">=</span>
            <span class="keyword">"id-3"</span>
            <span class="attribute">class</span>
            <span class="ponctuation">=</span>
            <span class="keyword">"dot"</span>>
            &lt;/<span class="tag">span</span>>
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
        <?php echo $carousel['para_2']; ?>
      </div>
    </div>
  </div>
  <?php require ($path_to['layout'] . '/documentation/docs_footer.php'); ?>
</div>

<!-- Position Absolute -->
<?php require ($path_to['layout'] . '/documentation/docs_index.php'); ?>
<?php require ($path_to['layout'] . '/choose_lang.php'); ?>

<?php require ($path_to['layout'] . '/footer.php'); ?>