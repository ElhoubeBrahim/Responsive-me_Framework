<?php require ($_SERVER['DOCUMENT_ROOT'] . '/www.responsive-me.com/classes/control.php'); ?>
<?php 
  // Go to 'classes/Documentation.class.php' For Info 
  $doc = new Documentation('القوائم', 'Lists', 'css_styling/forms.php', 'css_styling/typography.php');
?>
<?php require ($path_to['layout'] . '/header.php'); ?>

<div class="documentation">
  <?php require ($path_to['layout'] . '/documentation/docs_header.php'); ?>
  <div class="content">
    <div class="res-container">
      <h6 class="subtitle"><?php echo $lists['sub_1']; ?></h6>
      <div class="para">
        <?php echo $lists['para_1']; ?>
      </div>
      <h6 class="subtitle"><?php echo $lists['sub_2']; ?></h6>
      <div class="para">
        <?php echo $lists['para_2']; ?>
        <code class="res-light-code">
          <span class="language">HTML</span>

          <div class="line">
            <span class="comment">&lt;!-- Replace 3 Dots By One Of Classes In The Table Above --&gt;</span>
          </div>
          <div class="line">
            <<span class="tag">ul</span>
            <span class="attribute">class</span>
            <span class="ponctuation">=</span>
            <span class="keyword">"..."</span>>
          </div>
          <div class="line">
            &#8197;
            <span class="comment">&lt;!-- Without .list-item Class, .res-hoverable-list & .res-bordered-list Won't Work --&gt;</span>
          </div>
          <div class="line">
            &#8197;
            <<span class="tag">li</span>
            <span class="attribute">class</span>
            <span class="ponctuation">=</span>
            <span class="keyword">"list-item"</span>>
            Item 1
            &lt;/<span class="tag">li</span>>
          </div>
          <div class="line">
            &#8197;
            <<span class="tag">li</span>
            <span class="attribute">class</span>
            <span class="ponctuation">=</span>
            <span class="keyword">"list-item"</span>>
            Item 2
            &lt;/<span class="tag">li</span>>
          </div>
          <div class="line">
            &#8197;
            <<span class="tag">li</span>
            <span class="attribute">class</span>
            <span class="ponctuation">=</span>
            <span class="keyword">"list-item"</span>>
            Item 3
            &lt;/<span class="tag">li</span>>
          </div>
          <div class="line">
            &lt;/<span class="tag">ul</span>>
          </div>
        </code>
        <div class="res-tabulation res-bordered res-no-padding" dir="ltr">
          <div class="tab-header">
            <div class="item active" data-tab="id-1">Default List</div>
            <div class="item" data-tab="id-2">Unstyled List</div>
            <div class="item" data-tab="id-3">Inline List</div>
            <div class="item" data-tab="id-4">Bordered List</div>
            <div class="item" data-tab="id-5">Hoverable List</div>
          </div>
          <div class="tab-content res-no-border">
            <div class="item active" id="id-1">
              <ul>
                <li>Item 1</li>
                <li>Item 2</li>
                <li>Item 3</li>
              </ul>
            </div>
            <div class="item" id="id-2">
              <ul class="res-unstyled-list">
                <li>Item 1</li>
                <li>Item 2</li>
                <li>Item 3</li>
              </ul>
            </div>
            <div class="item" id="id-3">
              <ul class="res-inline-list">
                <li>Item 1</li>
                <li>Item 2</li>
                <li>Item 3</li>
              </ul>
            </div>
            <div class="item" id="id-4">
              <ul class="res-bordered-list">
                <li class="list-item">Item 1</li>
                <li class="list-item">Item 2</li>
                <li class="list-item">Item 3</li>
              </ul>
            </div>
            <div class="item" id="id-5">
              <ul class="res-hoverable-list">
                <li class="list-item">Item 1</li>
                <li class="list-item">Item 2</li>
                <li class="list-item">Item 3</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="para">
        <?php echo $lists['para_3']; ?>
        <code class="res-light-code">
          <span class="language">HTML</span>
          <div class="line">
            <span class="comment">&lt;!-- .res-flex class Is Used To Place Items Inside List Horizontally --&gt;</span>
          </div>
          <div class="line">
            <span class="comment">&lt;!-- You Can Use Float Classes If You Want --&gt;</span>
          </div>
          <div class="line">
            <<span class="tag">ul</span>
            <span class="attribute">class</span>
            <span class="ponctuation">=</span>
            <span class="keyword">"res-hoverable-list res-flex"</span>>
          </div>
          <div class="line">
            &#8197;
            <span class="comment">&lt;!-- .list-item Class Is Obligatory --&gt;</span>
          </div>
          <div class="line">
            &#8197;
            <<span class="tag">li</span>
            <span class="attribute">class</span>
            <span class="ponctuation">=</span>
            <span class="keyword">"list-item"</span>>
            Item 1
            &lt;/<span class="tag">li</span>>
          </div>
          <div class="line">
            &#8197;
            <<span class="tag">li</span>
            <span class="attribute">class</span>
            <span class="ponctuation">=</span>
            <span class="keyword">"list-item"</span>>
            Item 2
            &lt;/<span class="tag">li</span>>
          </div>
          <div class="line">
            &#8197;
            <<span class="tag">li</span>
            <span class="attribute">class</span>
            <span class="ponctuation">=</span>
            <span class="keyword">"list-item"</span>>
            Item 3
            &lt;/<span class="tag">li</span>>
          </div>
          <div class="line res-lg-txt">
            &#8197;&#8197;&#8197;&#8197;&#8197;&#8197;&#8197;&#8197;&#8197;&#8197;
            ...
          </div>
          <div class="line">
            &lt;/<span class="tag">ul</span>>
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