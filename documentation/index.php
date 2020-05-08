<?php require ($_SERVER['DOCUMENT_ROOT'] . '/www.responsive-me.com/classes/control.php'); ?>
<?php 
  // Go to 'classes/Documentation.class.php' For Info 
  $doc = new Documentation('الرئيسية', 'Home', 'basic.php', '');
?>
<?php require ($path_to['layout'] . '/header.php'); ?>

<div class="documentation">
  <?php require ($path_to['layout'] . '/documentation/docs_header.php'); ?>
  <div class="content">
    <div class="res-container">
      <h6 class="subtitle"><?php echo $index['sub_1']; ?></h6>
      <div class="para"><?php echo $index['para_1']; ?></div>
      <h6 class="subtitle"><?php echo $index['sub_2']; ?></h6>
      <div class="para">
        <?php echo $index['para_2']; ?>
        <code class="res-light-code">
            <span class="language">HTML</span>

            <div class="line">
              &lt;!<span class="tag">DOCTYPE</span>
              <span class="attribute">html</span>>
            </div>

            <div class="line">
              <<span class="tag">html</span>>
            </div>

            <div class="line">
              <<span class="tag">head</span>>
            </div>

            <div class="break"></div>

            <div class="line">
              &#8197;
              <<span class="tag">meta</span>
              <span class="attribute">charset</span>
              <span class="ponctuation">=</span>
              <span class="keyword">"UTF-8"</span>/>
            </div>
            <div class="line">
              &#8197;
              <<span class="tag">meta</span>
              <span class="attribute">name</span>
              <span class="ponctuation">=</span>
              <span class="keyword">"viewport"</span>
              <span class="attribute">content</span>
              <span class="ponctuation">=</span>
              <span class="keyword">"width=device-width, initial-scale=1.0"</span>/>
            </div>
            <div class="line">
              &#8197;
              <<span class="tag">meta</span>
              <span class="attribute">http-equiv</span>
              <span class="ponctuation">=</span>
              <span class="keyword">"X-UA-Compatible"</span>
              <span class="attribute">content</span>
              <span class="ponctuation">=</span>
              <span class="keyword">"ie=edge"</span>/>
            </div>

            <div class="break"></div>

            <div class="line">
              &#8197;
              <<span class="tag">title</span>>
              <span class="plain-txt">Responsive-me Document</span>
              &lt;/<span class="tag">title</span>>
            </div>

            <div class="break"></div>

            <div class="line">
              &#8197;
              <span class="comment">&lt;--! Include Responsive-me.css --&gt;</span>
            </div>

            <div class="line">
              &#8197;
              <<span class="tag">link</span>
              <span class="attribute">rel</span>
              <span class="ponctuation">=</span>
              <span class="keyword">"stylesheet"</span>
              <span class="attribute">link</span>
              <span class="ponctuation">=</span>
              <span class="keyword">"Path/to/responsive-me.min.css"</span>/>
            </div>

            <div class="break"></div>

            <div class="line">
              &lt;/<span class="tag">head</span>>
            </div>

            <div class="break"></div>

            <div class="line">
              <<span class="tag">body</span>>
            </div>

            <div class="line">
              &#8197;
              <<span class="tag">h1</span>>
              <span class="plain-txt">This is a Heading</span>
              &lt;/<span class="tag">h1</span>>
              
            </div>

            <div class="line">
              &#8197;
              <<span class="tag">p</span>>
              <span class="plain-txt">This is a Paragraph</span>
              &lt;/<span class="tag">p</span>>
            </div>

            <div class="break"></div>

            <div class="line">
              &#8197;
              <span class="comment">&lt;--! Include jQuery & Responsive-me.js --&gt;</span>
            </div>

            <div class="line">
              &#8197;
              <<span class="tag">script</span>>
              <span class="attribute">src</span>
              <span class="ponctuation">=</span>
              <span class="keyword">"Path/to/jquery.min.js"</span>
              &lt;<span class="tag">script</span>>
            </div>

            <div class="line">
              &#8197;
              <<span class="tag">script</span>>
              <span class="attribute">src</span>
              <span class="ponctuation">=</span>
              <span class="keyword">"Path/to/responsive-me.js"</span>
              &lt;<span class="tag">script</span>>
            </div>
            <div class="break"></div>

            <div class="line">
              &lt;/<span class="tag">body</span>>
            </div>

            <div class="break"></div>

            <div class="line">
              &lt;/<span class="tag">html</span>>
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