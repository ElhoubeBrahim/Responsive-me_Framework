<?php require ($_SERVER['DOCUMENT_ROOT'] . '/www.responsive-me.com/classes/control.php'); ?>
<?php 
  // Go to 'classes/Documentation.class.php' For Info 
  $doc = new Documentation('الشيفرات', 'Code', 'css_styling/more.php', 'css_styling/buttons.php');
?>
<?php require ($path_to['layout'] . '/header.php'); ?>

<div class="documentation">
  <?php require ($path_to['layout'] . '/documentation/docs_header.php'); ?>
  <div class="content">
    <div class="res-container">
      <h6 class="subtitle"><?php echo $code['sub_1']; ?></h6>
      <div class="para">
        <?php echo $code['para_1']; ?>
      </div>
      <h6 class="subtitle"><?php echo $code['sub_2']; ?></h6>
      <div class="para">
        <?php echo $code['para_2']; ?>
      </div>
      <h6 class="subtitle"><?php echo $code['sub_3']; ?></h6>
      <div class="para">
        <?php echo $code['para_3']; ?>
        <code class="res-light-code">
          <span class="language">PHP</span>

          <div class="line">
            <<span class="tag">?php</span>
          </div>

          <div class="line">
            &#8197;
            <span class="string">"Hello World"</span>
          </div>

          <div class="line">
            &#8197;
            <span class="comment">// Hey, This Is a Comment</span>
          </div>

          <div class="line">
            &#8197;
            <span class="keyword">class</span>
            <span class="class">User</span>
            <span class="ponctuation">{</span>
          </div>

          <div class="break"></div>

          <div class="line">
            &#8197;&#8197;
            <span class="keyword">protected</span>
            <span class="variable">$username</span>
            <span class="ponctuation">;</span>
          </div>

          <div class="line">
            &#8197;&#8197;
            <span class="keyword">protected</span>
            <span class="variable">$useremail</span>
            <span class="ponctuation">;</span>
          </div>

          <div class="break"></div>

          <div class="line">
            &#8197;&#8197;
            <span class="keyword">public</span>
            <span class="keyword">function</span>
            <span class="function">__construct</span>
            (<span class="variable">$name</span>, <span class="variable">$email</span>)
            <span class="ponctuation">{</span>
          </div>

          <div class="line">
            &#8197;&#8197;&#8197;
            <span class="variable">$this->username</span>
            <span class="ponctuation">=</span>
            <span class="variable">$name</span>
            <span class="ponctuation">;</span>
          </div>

          <div class="line">
            &#8197;&#8197;&#8197;
            <span class="variable">$this->useremail</span>
            <span class="ponctuation">=</span>
            <span class="variable">$email</span>
            <span class="ponctuation">;</span>
          </div>

          <div class="line">
            &#8197;&#8197;
            <span class="ponctuation">}</span>
          </div>

          <div class="break"></div>

          <div class="line">
            &#8197;
            <span class="ponctuation">}</span>
          </div>

          <div class="line">
            <span class="tag">?</span>>
          </div>

        </code>
      </div>
      <h6 class="subtitle"><?php echo $code['sub_4']; ?></h6>
      <div class="para">
        <?php echo $code['para_4']; ?>
        <code class="res-atom-code">
          <span class="language">PHP</span>

          <div class="line">
            <<span class="tag">?php</span>
          </div>

          <div class="line">
            &#8197;
            <span class="string">"Hello World"</span>
          </div>

          <div class="line">
            &#8197;
            <span class="comment">// Hey, This Is a Comment</span>
          </div>

          <div class="line">
            &#8197;
            <span class="keyword">class</span>
            <span class="class">User</span>
            <span class="ponctuation">{</span>
          </div>

          <div class="break"></div>

          <div class="line">
            &#8197;&#8197;
            <span class="keyword">protected</span>
            <span class="variable">$username</span>
            <span class="ponctuation">;</span>
          </div>

          <div class="line">
            &#8197;&#8197;
            <span class="keyword">protected</span>
            <span class="variable">$useremail</span>
            <span class="ponctuation">;</span>
          </div>

          <div class="break"></div>

          <div class="line">
            &#8197;&#8197;
            <span class="keyword">public</span>
            <span class="keyword">function</span>
            <span class="function">__construct</span>
            (<span class="variable">$name</span>, <span class="variable">$email</span>)
            <span class="ponctuation">{</span>
          </div>

          <div class="line">
            &#8197;&#8197;&#8197;
            <span class="variable">$this->username</span>
            <span class="ponctuation">=</span>
            <span class="variable">$name</span>
            <span class="ponctuation">;</span>
          </div>

          <div class="line">
            &#8197;&#8197;&#8197;
            <span class="variable">$this->useremail</span>
            <span class="ponctuation">=</span>
            <span class="variable">$email</span>
            <span class="ponctuation">;</span>
          </div>

          <div class="line">
            &#8197;&#8197;
            <span class="ponctuation">}</span>
          </div>

          <div class="break"></div>

          <div class="line">
            &#8197;
            <span class="ponctuation">}</span>
          </div>

          <div class="line">
            <span class="tag">?</span>>
          </div>

        </code>
      </div>
      <h6 class="subtitle"><?php echo $code['sub_5']; ?></h6>
      <div class="para">
        <?php echo $code['para_5']; ?>
        <code class="res-hacker-code">
          <div class="language">bash</div>
          <div class="line">
            <span class="comment">// This is a comment</span>
          </div>
          <div class="line">
            npm <span class="keyword">install</span> packages
          </div>
        </code>
      </div>
      <h6 class="subtitle"><?php echo $code['sub_6']; ?></h6>
      <div class="para">
        <?php echo $code['para_6']; ?>
        <code class="res-light-code">
          <span class="language">HTML</span>
          <div class="line">
            <span class="comment">&lt;!-- Replace The Dots By one Of Code Style Classes Above --&gt;</span>
          </div>
          <div class="line">
            <<span class="tag">code</span>
            <span class="attribute">class</span>
            <span class="ponctuation">=</span>
            <span class="keyword">"..."</span>>
          </div>
          <div class="line">
            &#8197;
            <<span class="tag">span</span>
            <span class="attribute">class</span>
            <span class="ponctuation">=</span>
            <span class="keyword">"language"</span>>
            <span class="plain-txt">HTML</span>
            &lt;/<span class="tag">span</span>>
          </div>
          <div class="line">
            &#8197;
            <span class="comment">&lt;!-- .line Class Help To Organize Your Code Content --&gt;</span>
          </div>
          <div class="line">
            &#8197;
            <<span class="tag">div</span>
            <span class="attribute">class</span>
            <span class="ponctuation">=</span>
            <span class="keyword">"line"</span>>
          </div>
          <div class="line">
            &#8197;&#8197;
            &lt;<<span class="tag">span</span>
            <span class="attribute">class</span>
            <span class="ponctuation">=</span>
            <span class="keyword">"tag"</span>>
            <span class="plain-txt">div</span>
            &lt;/<span class="tag">span</span>>
          </div>
          <div class="line">
            &#8197;&#8197;
            &lt;<span class="tag">span</span>
            <span class="attribute">class</span>
            <span class="ponctuation">=</span>
            <span class="keyword">"attribute"</span>>
            <span class="plain-txt">class</span>
            &lt;/<span class="tag">span</span>>
          </div>
          <div class="line">
            &#8197;&#8197;
            &lt;<span class="tag">span</span>
            <span class="attribute">class</span>
            <span class="ponctuation">=</span>
            <span class="keyword">"ponctuation"</span>>
            <span class="plain-txt">=</span>
            &lt;/<span class="tag">span</span>>
          </div>
          <div class="line">
            &#8197;&#8197;
            &lt;<span class="tag">span</span>
            <span class="attribute">class</span>
            <span class="ponctuation">=</span>
            <span class="keyword">"string"</span>>
            <span class="plain-txt">"..."</span>
            &lt;/<span class="tag">span</span>>
          </div>
          <div class="line">
            &#8197;
            &lt;/<span class="tag">div</span>>
          </div>
          <div class="line">
            &#8197;
            <<span class="tag">div</span>
            <span class="attribute">class</span>
            <span class="ponctuation">=</span>
            <span class="keyword">"line"</span>>
          </div>
          <div class="line">
            &#8197;&#8197;
            <<span class="tag">span</span>
            <span class="attribute">class</span>
            <span class="ponctuation">=</span>
            <span class="keyword">"plain-txt"</span>>
            <span class="plain-txt">The Content Goes Here</span>
            &lt;/<span class="tag">span</span>>
          </div>
          <div class="line">
            &#8197;
            &lt;/<span class="tag">div</span>>
          </div>
          <div class="line">
            &#8197;
            <<span class="tag">div</span>
            <span class="attribute">class</span>
            <span class="ponctuation">=</span>
            <span class="keyword">"line"</span>>
          </div>
          <div class="line">
            &#8197;&#8197;
            &lt;/<<span class="tag">span</span>
            <span class="attribute">class</span>
            <span class="ponctuation">=</span>
            <span class="keyword">"tag"</span>>
            <span class="plain-txt">div</span>
            &lt;/<span class="tag">span</span>>>
          </div>
          <div class="line">
            &#8197;
            &lt;/<span class="tag">div</span>>
          </div>
          <div class="line">
            &lt;/<span class="tag">code</span>>
          </div>
        </code> <br>
        <?php echo $code['para_7']; ?>
        <code class="res-light-code">
          <div class="line">
            <<span class="tag">code</span>
            <span class="attribute">class</span>
            <span class="ponctuation">=</span>
            <span class="keyword">"..."</span>>
          </div>
          <div class="line">
            &#8197;
            <<span class="tag">span</span>
            <span class="attribute">class</span>
            <span class="ponctuation">=</span>
            <span class="keyword">"language"</span>>
            <span class="plain-txt">HTML</span>
            &lt;/<span class="tag">span</span>>
          </div>
          <div class="line">
            &#8197;
            <<span class="tag">div</span>
            <span class="attribute">class</span>
            <span class="ponctuation">=</span>
            <span class="keyword">"line"</span>>
          </div>
          <div class="line">
            &#8197;&#8197;
            &lt;<span class="tag">span</span>
            <span class="attribute">class</span>
            <span class="ponctuation">=</span>
            <span class="keyword">"..."</span>>
            &lt;/<span class="tag">span</span>>
          </div>
          <div class="line">
            &#8197;
            &lt;/<span class="tag">div</span>>
          </div>
          <div class="line">
            &lt;/<span class="tag">code</span>>
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