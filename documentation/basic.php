<?php require ($_SERVER['DOCUMENT_ROOT'] . '/www.responsive-me.com/classes/control.php'); ?>
<?php 
  // Go to 'classes/Documentation.class.php' For Info 
  $doc = new Documentation('الأساسيات', 'Basics', 'css_styling/typography.php', 'index.php');
?>
<?php require ($path_to['layout'] . '/header.php'); ?>

<div class="documentation">
  <?php require ($path_to['layout'] . '/documentation/docs_header.php'); ?>
  <div class="content">
    <div class="res-container">
      <h6 class="subtitle"><?php echo $basic['sub_1']; ?></h6>
      <div class="para">
        <?php echo $basic['para_1']; ?>
        <code class="res-light-code">
          <span class="language">CSS</span>
          <div class="line">
            <span class="keyword">body</span>
            <span class="ponctuation">{</span>
          </div>
          <div class="line">
            &#8197;
            <span class="attribute">font-family</span>
            <span class="ponctuation">:</span>
            <span class="plain-txt">-apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,Oxygen-Sans,Ubuntu,Cantarell,"Helvetica Neue",sans-serif</span>
            <span class="ponctuation">;</span>
          </div>
          <div class="line">
            &#8197;
            <span class="attribute">font-size</span>
            <span class="ponctuation">:</span>
            <span class="plain-txt">1rem</span>
            <span class="ponctuation">;</span>
          </div>
          <div class="line">
            &#8197;
            <span class="attribute">font-weight</span>
            <span class="ponctuation">:</span>
            <span class="plain-txt">normal</span>
            <span class="ponctuation">;</span>
          </div>
          <div class="line">
            &#8197;
            <span class="attribute">line-height</span>
            <span class="ponctuation">:</span>
            <span class="plain-txt">1.5</span>
            <span class="ponctuation">;</span>
          </div>
          <div class="line">
            &#8197;
            <span class="attribute">color</span>
            <span class="ponctuation">:</span>
            <span class="plain-txt">#444</span>
            <span class="ponctuation">;</span>
          </div>
          <div class="line">
            &#8197;
            <span class="attribute">background-color</span>
            <span class="ponctuation">:</span>
            <span class="plain-txt">transparent</span>
            <span class="ponctuation">;</span>
          </div>
          <div class="line">
            <span class="ponctuation">}</span>
          </div>
        </code>
      </div>
      <h6 class="subtitle"><?php echo $basic['sub_2']; ?></h6>
      <div class="para">
        <?php echo $basic['para_2']; ?>
      </div>
      <h6 class="subtitle"><?php echo $basic['sub_3']; ?></h6>
      <div class="para">
        <?php echo $basic['para_3']; ?>
        <code class="res-light-code">
          <span class="language">HTML</span>
          <div class="line">
            <<span class="tag">blockquote</span>
            <span class="attribute">class</span>
            <span class="ponctuation">=</span>
            <span class="keyword">"res-blockquote"</span>>
          </div>

          <div class="line">
            &#8197; 
            <span class="plain-txt">Hello, Really I Have Nothing To Say Here -_-' </span>
          </div>
          <div class="line">
            &#8197; 
            <<span class="tag">div</span>
            <span class="attribute">class</span>
            <span class="ponctuation">=</span>
            <span class="keyword">"res-blockquote-info"</span>>
            <span class="plain-txt">Said By: Anonymous</span>
            &lt;/<span class="tag">div</span>>
          </div>

          <div class="line">
            &lt;/<span class="tag">blockquote</span>>
          </div>
        </code>
      </div>
      <h6 class="subtitle"><?php echo $basic['sub_4']; ?></h6>
      <div class="para">
        <?php echo $basic['para_4']; ?>
      </div>
      <h6 class="subtitle"><?php echo $basic['sub_5']; ?></h6>
      <div class="para">
        <?php echo $basic['para_5']; ?>
      </div>
    </div>
  </div>
  <?php require ($path_to['layout'] . '/documentation/docs_footer.php'); ?>
</div>

<!-- Position Absolute -->
<?php require ($path_to['layout'] . '/documentation/docs_index.php'); ?>
<?php require ($path_to['layout'] . '/choose_lang.php'); ?>

<?php require ($path_to['layout'] . '/footer.php'); ?> 