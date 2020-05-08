<?php require ($_SERVER['DOCUMENT_ROOT'] . '/www.responsive-me.com/classes/control.php'); ?>
<?php 
  // Go to 'classes/Documentation.class.php' For Info 
  $doc = new Documentation('الجداول', 'Tables', 'css_styling/colors.php', 'css_styling/forms.php');
?>
<?php require ($path_to['layout'] . '/header.php'); ?>

<div class="documentation">
  <?php require ($path_to['layout'] . '/documentation/docs_header.php'); ?>
  <div class="content">
    <div class="res-container">
      <div class="para">
        <?php echo $tables['para_1']; ?>
      </div>
      <h6 class="subtitle"><?php echo $tables['sub_1']; ?></h6>
      <div class="para">
        <?php echo $tables['para_2']; ?>
        <code class="res-light-code">
          <span class="language">HTML</span>

          <div class="line">
            <<span class="tag">table</span>
            <span class="attribute">class</span>
            <span class="ponctuation">=</span>
            <span class="keyword">"res-table"</span>>
          </div>
          <div class="break"></div>
          <div class="line">
            &#8197;
            <<span class="tag">thead</span>>
          </div>
          <div class="line">
            &#8197;&#8197;&#8197;
            <<span class="tag">tr</span>>
          </div>
          <div class="line">
            &#8197;&#8197;&#8197;&#8197;&#8197;
            <<span class="tag">th</span>>
            <span class="plain-txt">id</span>
            &lt;/<span class="tag">th</span>>
          </div>
          <div class="line">
            &#8197;&#8197;&#8197;&#8197;&#8197;
            <<span class="tag">th</span>>
            <span class="plain-txt">first name</span>
            &lt;/<span class="tag">th</span>>
          </div>
          <div class="line">
            &#8197;&#8197;&#8197;&#8197;&#8197;
            <<span class="tag">th</span>>
            <span class="plain-txt">last name</span>
            &lt;/<span class="tag">th</span>>
          </div>
          <div class="line">
            &#8197;&#8197;&#8197;&#8197;&#8197;
            <<span class="tag">th</span>>
            <span class="plain-txt">email name</span>
            &lt;/<span class="tag">th</span>>
          </div>
          <div class="line">
            &#8197;&#8197;&#8197;
            &lt;/<span class="tag">tr</span>>
          </div>
          <div class="line">
            &#8197;
            &lt;/<span class="tag">thead</span>>
          </div>
          <div class="break"></div>
          <div class="line">
            &#8197;
            <<span class="tag">tbody</span>>
          </div>
          <div class="line">
            &#8197;&#8197;&#8197;
            <<span class="tag">tr</span>>
          </div>
          <div class="line">
            &#8197;&#8197;&#8197;&#8197;&#8197;
            <<span class="tag">td</span>>
            <span class="plain-txt">1</span>
            &lt;/<span class="tag">td</span>>
          </div>
          <div class="line">
            &#8197;&#8197;&#8197;&#8197;&#8197;
            <<span class="tag">td</span>>
            <span class="plain-txt">Brahim</span>
            &lt;/<span class="tag">td</span>>
          </div>
          <div class="line">
            &#8197;&#8197;&#8197;&#8197;&#8197;
            <<span class="tag">td</span>>
            <span class="plain-txt">Elhoube</span>
            &lt;/<span class="tag">td</span>>
          </div>
          <div class="line">
            &#8197;&#8197;&#8197;&#8197;&#8197;
            <<span class="tag">td</span>>
            <span class="plain-txt">brahim.elhoube@gmail.com</span>
            &lt;/<span class="tag">td</span>>
          </div>
          <div class="line">
            &#8197;&#8197;&#8197;
            &lt;/<span class="tag">tr</span>>
          </div>
          <div class="line">
            &#8197;
            &lt;/<span class="tag">tbody</span>>
          </div>
          <div class="break"></div>
          <div class="line">
            &lt;/<span class="tag">table</span>>
          </div>
        </code>
      </div>
      <h6 class="subtitle"><?php echo $tables['sub_2']; ?></h6>
      <div class="para">
        <?php echo $tables['para_3']; ?>
        <code class="res-light-code">
          <span class="language">HTML</span>

          <div class="line">
            <<span class="tag">table</span>
            <span class="attribute">class</span>
            <span class="ponctuation">=</span>
            <span class="keyword">"res-striped-table"</span>>
          </div>
          <div class="break"></div>
          <div class="line">
            &#8197;
            <<span class="tag">thead</span>>
          </div>
          <div class="line">
            &#8197;&#8197;&#8197;
            <<span class="tag">tr</span>>
          </div>
          <div class="line">
            &#8197;&#8197;&#8197;&#8197;&#8197;
            <<span class="tag">th</span>>
            <span class="plain-txt">id</span>
            &lt;/<span class="tag">th</span>>
          </div>
          <div class="line">
            &#8197;&#8197;&#8197;&#8197;&#8197;
            <<span class="tag">th</span>>
            <span class="plain-txt">first name</span>
            &lt;/<span class="tag">th</span>>
          </div>
          <div class="line">
            &#8197;&#8197;&#8197;&#8197;&#8197;
            <<span class="tag">th</span>>
            <span class="plain-txt">last name</span>
            &lt;/<span class="tag">th</span>>
          </div>
          <div class="line">
            &#8197;&#8197;&#8197;&#8197;&#8197;
            <<span class="tag">th</span>>
            <span class="plain-txt">email name</span>
            &lt;/<span class="tag">th</span>>
          </div>
          <div class="line">
            &#8197;&#8197;&#8197;
            &lt;/<span class="tag">tr</span>>
          </div>
          <div class="line">
            &#8197;
            &lt;/<span class="tag">thead</span>>
          </div>
          <div class="break"></div>
          <div class="line">
            &#8197;
            <<span class="tag">tbody</span>>
          </div>
          <div class="line">
            &#8197;&#8197;&#8197;
            <<span class="tag">tr</span>>
          </div>
          <div class="line">
            &#8197;&#8197;&#8197;&#8197;&#8197;
            <<span class="tag">td</span>>
            <span class="plain-txt">1</span>
            &lt;/<span class="tag">td</span>>
          </div>
          <div class="line">
            &#8197;&#8197;&#8197;&#8197;&#8197;
            <<span class="tag">td</span>>
            <span class="plain-txt">Brahim</span>
            &lt;/<span class="tag">td</span>>
          </div>
          <div class="line">
            &#8197;&#8197;&#8197;&#8197;&#8197;
            <<span class="tag">td</span>>
            <span class="plain-txt">Elhoube</span>
            &lt;/<span class="tag">td</span>>
          </div>
          <div class="line">
            &#8197;&#8197;&#8197;&#8197;&#8197;
            <<span class="tag">td</span>>
            <span class="plain-txt">brahim.elhoube@gmail.com</span>
            &lt;/<span class="tag">td</span>>
          </div>
          <div class="line">
            &#8197;&#8197;&#8197;
            &lt;/<span class="tag">tr</span>>
          </div>
          <div class="line">
            &#8197;&#8197;&#8197;
            <<span class="tag">tr</span>>
          </div>
          <div class="line">
            &#8197;&#8197;&#8197;&#8197;&#8197;
            <<span class="tag">td</span>>
            <span class="plain-txt">2</span>
            &lt;/<span class="tag">td</span>>
          </div>
          <div class="line">
            &#8197;&#8197;&#8197;&#8197;&#8197;
            <<span class="tag">td</span>>
            <span class="plain-txt">Ahmed</span>
            &lt;/<span class="tag">td</span>>
          </div>
          <div class="line">
            &#8197;&#8197;&#8197;&#8197;&#8197;
            <<span class="tag">td</span>>
            <span class="plain-txt">Mahmoud</span>
            &lt;/<span class="tag">td</span>>
          </div>
          <div class="line">
            &#8197;&#8197;&#8197;&#8197;&#8197;
            <<span class="tag">td</span>>
            <span class="plain-txt">ahmed@gmail.com</span>
            &lt;/<span class="tag">td</span>>
          </div>
          <div class="line">
            &#8197;&#8197;&#8197;
            &lt;/<span class="tag">tr</span>>
          </div>
          <div class="line">
            &#8197;
            &lt;/<span class="tag">tbody</span>>
          </div>
          <div class="break"></div>
          <div class="line">
            &lt;/<span class="tag">table</span>>
          </div>
        </code>
      </div>
      <h6 class="subtitle"><?php echo $tables['sub_3']; ?></h6>
      <div class="para">
        <?php echo $tables['para_4']; ?>
        <code class="res-light-code">
          <span class="language">HTML</span>

          <div class="line">
            <<span class="tag">table</span>
            <span class="attribute">class</span>
            <span class="ponctuation">=</span>
            <span class="keyword">"res-hoverable-table"</span>>
          </div>
          <div class="break"></div>
          <div class="line">
            &#8197;
            <<span class="tag">thead</span>>
          </div>
          <div class="line">
            &#8197;&#8197;&#8197;
            <<span class="tag">tr</span>>
          </div>
          <div class="line">
            &#8197;&#8197;&#8197;&#8197;&#8197;
            <<span class="tag">th</span>>
            <span class="plain-txt">id</span>
            &lt;/<span class="tag">th</span>>
          </div>
          <div class="line">
            &#8197;&#8197;&#8197;&#8197;&#8197;
            <<span class="tag">th</span>>
            <span class="plain-txt">first name</span>
            &lt;/<span class="tag">th</span>>
          </div>
          <div class="line">
            &#8197;&#8197;&#8197;&#8197;&#8197;
            <<span class="tag">th</span>>
            <span class="plain-txt">last name</span>
            &lt;/<span class="tag">th</span>>
          </div>
          <div class="line">
            &#8197;&#8197;&#8197;&#8197;&#8197;
            <<span class="tag">th</span>>
            <span class="plain-txt">email name</span>
            &lt;/<span class="tag">th</span>>
          </div>
          <div class="line">
            &#8197;&#8197;&#8197;
            &lt;/<span class="tag">tr</span>>
          </div>
          <div class="line">
            &#8197;
            &lt;/<span class="tag">thead</span>>
          </div>
          <div class="break"></div>
          <div class="line">
            &#8197;
            <<span class="tag">tbody</span>>
          </div>
          <div class="line">
            &#8197;&#8197;&#8197;
            <<span class="tag">tr</span>>
          </div>
          <div class="line">
            &#8197;&#8197;&#8197;&#8197;&#8197;
            <<span class="tag">td</span>>
            <span class="plain-txt">1</span>
            &lt;/<span class="tag">td</span>>
          </div>
          <div class="line">
            &#8197;&#8197;&#8197;&#8197;&#8197;
            <<span class="tag">td</span>>
            <span class="plain-txt">Brahim</span>
            &lt;/<span class="tag">td</span>>
          </div>
          <div class="line">
            &#8197;&#8197;&#8197;&#8197;&#8197;
            <<span class="tag">td</span>>
            <span class="plain-txt">Elhoube</span>
            &lt;/<span class="tag">td</span>>
          </div>
          <div class="line">
            &#8197;&#8197;&#8197;&#8197;&#8197;
            <<span class="tag">td</span>>
            <span class="plain-txt">brahim.elhoube@gmail.com</span>
            &lt;/<span class="tag">td</span>>
          </div>
          <div class="line">
            &#8197;&#8197;&#8197;
            &lt;/<span class="tag">tr</span>>
          </div>
          <div class="line">
            &#8197;&#8197;&#8197;
            <<span class="tag">tr</span>>
          </div>
          <div class="line">
            &#8197;&#8197;&#8197;&#8197;&#8197;
            <<span class="tag">td</span>>
            <span class="plain-txt">2</span>
            &lt;/<span class="tag">td</span>>
          </div>
          <div class="line">
            &#8197;&#8197;&#8197;&#8197;&#8197;
            <<span class="tag">td</span>>
            <span class="plain-txt">Ahmed</span>
            &lt;/<span class="tag">td</span>>
          </div>
          <div class="line">
            &#8197;&#8197;&#8197;&#8197;&#8197;
            <<span class="tag">td</span>>
            <span class="plain-txt">Mahmoud</span>
            &lt;/<span class="tag">td</span>>
          </div>
          <div class="line">
            &#8197;&#8197;&#8197;&#8197;&#8197;
            <<span class="tag">td</span>>
            <span class="plain-txt">ahmed@gmail.com</span>
            &lt;/<span class="tag">td</span>>
          </div>
          <div class="line">
            &#8197;&#8197;&#8197;
            &lt;/<span class="tag">tr</span>>
          </div>
          <div class="line">
            &#8197;
            &lt;/<span class="tag">tbody</span>>
          </div>
          <div class="break"></div>
          <div class="line">
            &lt;/<span class="tag">table</span>>
          </div>
        </code>
      </div>
      <h6 class="subtitle"><?php echo $tables['sub_4']; ?></h6>
      <div class="para">
        <?php echo $tables['para_5']; ?>
        <code class="res-light-code">
          <span class="language">HTML</span>

          <div class="line">
            <<span class="tag">div</span>
            <span class="attribute">class</span>
            <span class="ponctuation">=</span>
            <span class="keyword">"res-responsive-table"</span>>
          </div>
          <div class="line">
            &#8197;
            <<span class="tag">table</span>
            <span class="attribute">class</span>
            <span class="ponctuation">=</span>
            <span class="keyword">"..."</span>>
          </div>
          <div class="line">
            &#8197;
            &lt;/<span class="tag">table</span>>
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