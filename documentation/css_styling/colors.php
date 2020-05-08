<?php require ($_SERVER['DOCUMENT_ROOT'] . '/www.responsive-me.com/classes/control.php'); ?>
<?php 
  // Go to 'classes/Documentation.class.php' For Info 
  $doc = new Documentation('الألوان', 'Colors', 'css_styling/grid.php', 'css_styling/tables.php');
?>
<?php require ($path_to['layout'] . '/header.php'); ?>

<div class="documentation">
  <?php require ($path_to['layout'] . '/documentation/docs_header.php'); ?>
  <div class="content">
    <div class="res-container">
      <h6 class="subtitle"><?php echo $colors['sub_1']; ?></h6>
      <div class="para">
        <?php echo $colors['para_1']; ?>
      </div>
      <h6 class="subtitle"><?php echo $colors['sub_2']; ?></h6>
      <div class="para">
        <?php echo $colors['para_2']; ?>
        <code class="res-light-code">
          <span class="language">HTML</span>

          <div class="line">
            <<span class="tag">div</span>
            <span class="attribute">class</span>
            <span class="ponctuation">=</span>
            <span class="keyword">"res-bg-light-brown res-card"</span>>
          </div>
          <div class="line">
            &#8197;
            <span class="plain-txt">Hello From The Light Brown Alert</span>
          </div>
          <div class="line">
            &lt;/<span class="tag">div</span>>
          </div>
        </code>
        <?php echo $colors['para_3']; ?>
      </div>
      <h6 class="subtitle"><?php echo $colors['sub_3']; ?></h6>
      <div class="para">
        <?php echo $colors['para_4']; ?>
        <code class="res-light-code">
          <span class="language">HTML</span>

          <div class="line">
            <<span class="tag">div</span>
            <span class="attribute">class</span>
            <span class="ponctuation">=</span>
            <span class="keyword">"res-txt-white res-bg-dark-purple res-card"</span>>
          </div>
          <div class="line">
            &#8197;
            <span class="plain-txt">This is a White Text In a Dark Purple Background</span>
          </div>
          <div class="line">
            &lt;/<span class="tag">div</span>>
          </div>
        </code>
        <?php echo $colors['para_5']; ?>
      </div>
      <h6 class="subtitle"><?php echo $colors['sub_4']; ?></h6>
      <div class="para">
        <?php echo $colors['para_6']; ?>
      </div>
      <h6 class="subtitle"><?php echo $colors['sub_5']; ?></h6>
      <div class="para">
        <?php echo $colors['para_7']; ?>
      </div>
    </div>
  </div>
  <?php require ($path_to['layout'] . '/documentation/docs_footer.php'); ?>
</div>

<!-- Position Absolute -->
<?php require ($path_to['layout'] . '/documentation/docs_index.php'); ?>
<?php require ($path_to['layout'] . '/choose_lang.php'); ?>

<?php require ($path_to['layout'] . '/footer.php'); ?>