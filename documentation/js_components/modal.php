<?php require ($_SERVER['DOCUMENT_ROOT'] . '/www.responsive-me.com/classes/control.php'); ?>
<?php 
  // Go to 'classes/Documentation.class.php' For Info 
  $doc = new Documentation('Modal', 'Modal', 'js_components/dropdown.php', 'js_components/carousel.php');
?>
<?php require ($path_to['layout'] . '/header.php'); ?>

<div class="documentation">
  <?php require ($path_to['layout'] . '/documentation/docs_header.php'); ?>
  <div class="content">
    <div class="res-container">
      <h6 class="subtitle"><?php echo $modal['sub_1']; ?></h6>
      <div class="para">
        <?php echo $modal['para_1']; ?>
        <div class="res-modal" id="modal-id" dir="ltr">
          <div class="content res-col-10">
            <span class="res-close" data-close="modal-id" data-item="modal">&times;</span>
            <div class="header">Modal Header</div>
            <div class="section">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos, voluptatum. Quibusdam in quia aliquid consectetur mollitia? Ut esse omnis, nemo magnam est, ea repellat officiis praesentium, similique adipisci nobis odio!</div>
            <div class="footer">Modal Footer</div>
          </div>
        </div>
      </div>
      <h6 class="subtitle"><?php echo $modal['sub_2']; ?></h6>
      <div class="para">
        <?php echo $modal['para_2']; ?>
        <code class="res-light-code">
          <span class="language">HTML</span>

          <div class="line">
            <span class="comment">&lt;!-- Modal Launcher --&gt;</span>
          </div>

          <div class="line">
            <<span class="tag">button</span>
            <span class="attribute">class</span>
            <span class="ponctuation">=</span>
            <span class="keyword">"res-blue-btn res-launch-modal-btn"</span>
            <span class="attribute">data-modal</span>
            <span class="ponctuation">=</span>
            <span class="keyword">"modal-id"</span>>
            <span class="plain-txt">Launch Modal</span>
            &lt;/<span class="tag">button</span>>
          </div>

          <div class="break"></div>

          <div class="line">
            <span class="comment">&lt;!-- Modal --&gt;</span>
          </div>

          <div class="line">
            <<span class="tag">div</span>
            <span class="attribute">class</span>
            <span class="ponctuation">=</span>
            <span class="keyword">"res-modal"</span>
            <span class="attribute">id</span>
            <span class="ponctuation">=</span>
            <span class="keyword">"modal-id"</span>>
          </div>

          <div class="line">
            &#8197;
            <<span class="tag">div</span>
            <span class="attribute">class</span>
            <span class="ponctuation">=</span>
            <span class="keyword">"content res-col-10"</span>>
          </div>

          <div class="line">
            &#8197;&#8197;
            <span class="comment">&lt;!-- Close Modal Button --&gt;</span>
          </div>

          <div class="line">
            &#8197;&#8197;
            <<span class="tag">span</span>
            <span class="attribute">class</span>
            <span class="ponctuation">=</span>
            <span class="keyword">"res-close"</span>
            <span class="attribute">data-close</span>
            <span class="ponctuation">=</span>
            <span class="keyword">"modal-id"</span>
            <span class="attribute">data-item</span>
            <span class="ponctuation">=</span>
            <span class="keyword">"modal"</span>>
            <span class="plain-txt">&times;</span>
            &lt;/<span class="tag">span</span>>
          </div>

          <div class="break"></div>

          <div class="line">
            &#8197;&#8197;
            <<span class="tag">div</span>
            <span class="attribute">class</span>
            <span class="ponctuation">=</span>
            <span class="keyword">"header"</span>>
            <span class="plain-txt">Modal Header</span>
            &lt;/<span class="tag">div</span>>
          </div>
          <div class="line">
            &#8197;&#8197;
            <<span class="tag">div</span>
            <span class="attribute">class</span>
            <span class="ponctuation">=</span>
            <span class="keyword">"section"</span>>
            <span class="plain-txt">Your Content Goes Here ^_^</span>
            &lt;/<span class="tag">div</span>>
          </div>
          <div class="line">
            &#8197;&#8197;
            <<span class="tag">div</span>
            <span class="attribute">class</span>
            <span class="ponctuation">=</span>
            <span class="keyword">"footer"</span>>
            <span class="plain-txt">Modal Footer</span>
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
      </div>
    </div>
  </div>
  <?php require ($path_to['layout'] . '/documentation/docs_footer.php'); ?>
</div>

<!-- Position Absolute -->
<?php require ($path_to['layout'] . '/documentation/docs_index.php'); ?>
<?php require ($path_to['layout'] . '/choose_lang.php'); ?>

<?php require ($path_to['layout'] . '/footer.php'); ?>