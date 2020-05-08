<?php require ($_SERVER['DOCUMENT_ROOT'] . '/www.responsive-me.com/classes/control.php'); ?>
<?php 
  // Go to 'classes/Documentation.class.php' For Info 
  $doc = new Documentation('النماذج', 'Forms', 'css_styling/tables.php', 'css_styling/lists.php');
?>
<?php require ($path_to['layout'] . '/header.php'); ?>

<div class="documentation">
  <?php require ($path_to['layout'] . '/documentation/docs_header.php'); ?>
  <div class="content">
    <div class="res-container">
      <div class="para">
        <?php echo $forms['para_1']; ?>
      </div>
      <h6 class="subtitle"><?php echo $forms['sub_1']; ?></h6>
      <div class="para">
        <?php echo $forms['para_2']; ?>
      </div>
      <h6 class="subtitle"><?php echo $forms['sub_2']; ?></h6>
      <div class="para">
        <?php echo $forms['para_3']; ?>
        
        <code class="res-light-code">
          <span class="language">HTML</span>

          <div class="line">
            <<span class="tag">div</span>
            <span class="attribute">class</span>
            <span class="ponctuation">=</span>
            <span class="keyword">"res-input-gp"</span>>
          </div>
          <div class="line">
            &#8197;
            <<span class="tag">label</span>
            <span class="attribute">for</span>
            <span class="ponctuation">=</span>
            <span class="keyword">"id"</span>>
            <span class="plain-txt">Username</span>
            &lt;/<span class="tag">label</span>>
          </div>
          <div class="line">
            &#8197; 
            <<span class="tag">input</span>
            <span class="attribute">type</span>
            <span class="ponctuation">=</span>
            <span class="keyword">"text"</span>
            <span class="attribute">class</span>
            <span class="ponctuation">=</span>
            <span class="keyword">"res-input"</span>
            <span class="attribute">id</span>
            <span class="ponctuation">=</span>
            <span class="keyword">"id"</span>/&gt;
          </div>
          <div class="line">
            &lt;/<span class="tag">div</span>>
          </div>
        </code>

        <?php echo $forms['para_4']; ?>
      </div>
      <h6 class="subtitle"><?php echo $forms['sub_3']; ?></h6>
      <div class="para">
        <?php echo $forms['para_5']; ?>

        <code class="res-light-code">
          <span class="language">HTML</span>

          <div class="line">
            <<span class="tag">div</span>
            <span class="attribute">class</span>
            <span class="ponctuation">=</span>
            <span class="keyword">"res-input-with-icon"</span>>
          </div>
          <div class="line">
            &#8197;
            <<span class="tag">label</span>
            <span class="attribute">for</span>
            <span class="ponctuation">=</span>
            <span class="keyword">"pwd"</span>>
            <span class="plain-txt">Password</span>
            &lt;/<span class="tag">label</span>>
          </div>
          <div class="line">
            &#8197;
            <<span class="tag">div</span>
            <span class="attribute">class</span>
            <span class="ponctuation">=</span>
            <span class="keyword">"res-input"</span>>
          </div>
          <div class="line">
            &#8197;&#8197;&#8197;
            <span class="comment">&lt;!-- Replace The 3 Dots By The Icon Class From Your Icon Libruary --&gt;</span>
          </div>
          <div class="line">
            &#8197;&#8197;&#8197;
            <<span class="tag">i</span>
            <span class="attribute">class</span>
            <span class="ponctuation">=</span>
            <span class="keyword">"..."</span>>
            &lt;/<span class="tag">i</span>>
          </div>
          <div class="line">
            &#8197;&#8197;&#8197;
            <<span class="tag">input</span>
            <span class="attribute">type</span>
            <span class="ponctuation">=</span>
            <span class="keyword">"password"</span>
            <span class="attribute">id</span>
            <span class="ponctuation">=</span>
            <span class="keyword">"pwd"</span>/&gt;
          </div>
          <div class="line">
            &#8197;
            &lt;/<span class="tag">div</span>>
          </div>
          <div class="line">
            &lt;/<span class="tag">div</span>>
          </div>
        </code>
      </div>
      <h6 class="subtitle"><?php echo $forms['sub_4']; ?></h6>
      <div class="para">
        <?php echo $forms['para_6']; ?>
        <code class="res-light-code">
          <span class="language">HTML</span>

          <div class="line">
            <<span class="tag">div</span>
            <span class="attribute">class</span>
            <span class="ponctuation">=</span>
            <span class="keyword">"res-input-gp-1"</span>>
          </div>
          <div class="line">
            &#8197;
            <<span class="tag">input</span>
            <span class="attribute">type</span>
            <span class="ponctuation">=</span>
            <span class="keyword">"text"</span>
            <span class="attribute">id</span>
            <span class="ponctuation">=</span>
            <span class="keyword">"user"</span>/&gt;
          </div>
          <div class="line">
            &#8197;
            <<span class="tag">label</span>
            <span class="attribute">for</span>
            <span class="ponctuation">=</span>
            <span class="keyword">"user"</span>>
            <span class="plain-txt">Username</span>
            &lt;/<span class="tag">label</span>>
          </div>
          <div class="line">
            &#8197;
            <<span class="tag">span</span>>
            &lt;/<span class="tag">span</span>>
          </div>
          <div class="line">
            &lt;/<span class="tag">div</span>>
          </div>
        </code>
        <?php echo $forms['para_7']; ?>
      </div>
    </div>
  </div>
  <?php require ($path_to['layout'] . '/documentation/docs_footer.php'); ?>
</div>

<!-- Position Absolute -->
<?php require ($path_to['layout'] . '/documentation/docs_index.php'); ?>
<?php require ($path_to['layout'] . '/choose_lang.php'); ?>

<?php require ($path_to['layout'] . '/footer.php'); ?> 