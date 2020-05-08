<?php require ($_SERVER['DOCUMENT_ROOT'] . '/www.responsive-me.com/classes/control.php'); ?>
<?php 
  // Go to 'classes/Documentation.class.php' For Info 
  $doc = new Documentation('نظام الشبكة', 'Grid System', 'css_styling/buttons.php', 'css_styling/colors.php');
?>
<?php require ($path_to['layout'] . '/header.php'); ?>

<div class="documentation">
  <?php require ($path_to['layout'] . '/documentation/docs_header.php'); ?>
  <div class="content">
    <div class="res-container">
      <div class="para">
        <?php echo $grid['para_1']; ?>
      </div>
      <h6 class="subtitle"><?php echo $grid['sub_1']; ?></h6>
      <div class="para">
        <?php echo $grid['para_2']; ?>
      </div>
      <h6 class="subtitle"><?php echo $grid['sub_2']; ?></h6>
      <div class="para">
        <?php echo $grid['para_3']; ?>
        <code class="res-light-code">
          <span class="language">HTML</span>
          <div class="line">
            <span class="comment">
              &lt;--! The Row Wrapper Is Important, He Gives Some Flexibility To Columns Inside --&gt;
            </span>
          </div>
          <div class="line">
            <<span class="tag">div</span>
            <span class="attribute">class</span>
            <span class="ponctuation">=</span>
            <span class="keyword">"res-row"</span>>
          </div>
          <div class="line">
            &#8197;
            <span class="comment">
              &lt;--! The Col Wrapper Indicate That We Are Building a Grid --&gt;
            </span>
          </div>
          <div class="line">
            &#8197;
            <span class="comment">
              &lt;--! In The Place Of 3 Dots We Will Put Some Other Classes To Control The Size Of Column, & Make Them Responsives --&gt;
            </span>
          </div>
          <div class="line">
            &#8197;
            <<span class="tag">div</span>
            <span class="attribute">class</span>
            <span class="ponctuation">=</span>
            <span class="keyword">"res-col ..."</span>>
            &lt;/<span class="tag">div</span>>
          </div>
          <div class="line">
            &lt;/<span class="tag">div</span>>
          </div>
        </code>
        <?php echo $grid['para_4']; ?>
      </div>
      <h6 class="subtitle"><?php echo $grid['sub_3']; ?></h6>
      <div class="para">
        <?php echo $grid['para_5']; ?>
      </div>
      <h6 class="subtitle"><?php echo $grid['sub_4']; ?></h6>
      <div class="para">
        <?php echo $grid['para_6']; ?>
      </div>
      <h6 class="subtitle"><?php echo $grid['sub_5']; ?></h6>
      <div class="para">
        <?php echo $grid['para_7']; ?>
      </div>
    </div>
  </div>
  <?php require ($path_to['layout'] . '/documentation/docs_footer.php'); ?>
</div>

<!-- Position Absolute -->
<?php require ($path_to['layout'] . '/documentation/docs_index.php'); ?>
<?php require ($path_to['layout'] . '/choose_lang.php'); ?>

<?php require ($path_to['layout'] . '/footer.php'); ?>