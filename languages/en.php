<?php

// Websit Header Vocabulary
$header = array(
  'home'      => 'Home',
  'docs'      => 'Documentation',
  'examples'  => 'Examples',
  'themes'    => 'Themes'
);

// Websit Intro Part Vocabulary
$intro = array(
  'title'       => 'RESPONSIVE-ME',
  'description' => 'Another Front end Framework To Make Your Website Sooo Beautiful & Responsive, Without a Lot Of CSS Coding ^_^ ',
  'download'    => 'Download',
  'get_started' => 'Get Started',
  'support'     => 'Support Us'
);

// Websit Why Us Part Vocabulary
$why_us = array(
  'title' => 'Why Responsive-me',

  'subtitle-1' => 'Multilanguage Websites',
  'subtitle-2' => 'Easy To Learn',
  'subtitle-3' => 'Responsive Layout',

  'desc-1' => 'You Can Use res-me To Create a Multilanguage Website Without Adding Any Files Or Additionnal Classes',
  'desc-2' => 'Res-me Is Just a Collection of Some Useful Classes, So Check Out The Documentation For More Clarification',
  'desc-3' => 'You Can Use res-me To Build a Resposive Websites, Comatible With All Sizes.',
);

// Websit About the Team Vocabulary
$the_team = array(
  'title'     => 'Meet The Team',
  'my_name'   => 'Elhoube Brahim',
  'about_me'  => 'Hello World! My Name Is Elhoube Brahim, I Have 17 Years Old, I am a Web Developper, I Love Mathematics & Programming a Lot, I Can Spent All Day Writing Codes Without Boaring. <br/>
                If You Like This Project, You Can Support Me On Patreon, Or Help To Improve It On Github. <br/>
                Thank You For Visit. Happy Coding ^_^ ',
  'alert'     => 'If You Want To Be on The Team , Please Visit 
                  <a href="https://github.com/ElhoubeBrahim/Responsive-me_Framework" class="res-txt-dark-blue">The Github Repositry</a>, There Are a Lot of
                  Bugs Waiting Someone To Fix Them ^_^'
);

// Websit Last Part Vocabulary
$actions = array(
  'title'       => 'What Do You want To Do?',
  'get_started' => 'Get Started',
  'support'     => 'Help us Grow',
  'help'        => 'Help To Improve'
);

// Websit General Vocabulary
$dict = array(
  'prev' => 'Previous',
  'next' => 'Next'
);

// Website Documentation Transtlation System

// $page_name['index_of_subtitle'], $page_name['index_of_paragraph']
// sub_i = Subtitle Index
// para_i = Praragraph Index

$index = array(
  // Subtitles
  'sub_1' => 'What is Responsive-me :',
  'sub_2' => 'Installation :',

  // Praragraphs
  'para_1' => 'Responsive-me is an Open Source front end Libruary, I Create it For Testing My Front end Skills,
              You Can Also Show me Yours, By Joining The <a href="https://github.com/ElhoubeBrahim/Responsive-me_Framework">Github Repositry</a>, & Adding New Features,
              Or Fixing Bugs. I Will Be Thankfull If You Did it ^_^
              <br>
              <br>
              You Can Use Responsive-me In All Your Project If You Want Without Paying Anything. Just If You Can Mention This
              Website ^_^.',
  'para_2' => 'To Use Responsive-me You Have To <a href="' . $website_url . 'responsive-me.rar" target="_blank">Download It</a>, 
              extract The Files, & Put Them On You Project Folder.
              <br>
              After You Did it Please Paste The Following Code On Your Index File: <br> <br>'
);

$basic = array(
  // Subtitles
  'sub_1' => 'Page Resets :',
  'sub_2' => 'Links :',
  'sub_3' => 'Quotations (Blockquote) :',
  'sub_4' => 'Images :',
  'sub_5' => 'Helpers :',

  // Paragraphs
  'para_1' => 'In This Framework I Use <a href="https://necolas.github.io/normalize.css/">normalize.css</a> To Reset 
              css & prevent Any Browser Conflicts, Also To Correct The Display Of Some Tags in IE.
              <br>
              <br>
              Concerning The Body Default Styling, It Looks Like That: <br> <br>',
  'para_2' => 'Links in Responsive-me Are <a>blue</a> <code class="res-light-code inline-code">#115cd0</code>, When Hover They Become Darker & Underlined,
              additionally Responsive-me Gives To You 5 Creative Links to Use in Your Designs:
              <span class="res-flex" style="justify-content: space-between; padding: 10px 50px 10px 50px">
                <a href="#">Click Here!</a>
                <a href="#" class="res-link-1 res-txt-red">Click Here!</a>
                <a href="#" class="res-link-2 res-txt-green">Click Here!</a>
                <a href="#" class="res-link-3 res-txt-yellow">Click Here!</a>
                <a href="#" class="res-link-4 res-txt-black">Click Here!</a>
              </span>
              Just Add One Of Classes Below To Your Link 
              <code class="res-light-code inline-code">
                &lt;<span class="tag">a</span> <span class="attribute">class</span>="<span class="keyword">res-link-1</span>">...&lt;/<span class="tag">a</span>>
                </code>&nbsp;
                That\'s it ^_^ <br> <br>
              <div class="res-responsive-table">
                <table class="res-table">
                  <thead>
                    <tr>
                        <th>Class</th>
                        <th>Output</th>
                    </tr>
                  </thead>

                  <tbody>
                    <tr>
                      <td><code class="res-light-code inline-code">.res-link-1</code></td>
                      <td><a href="" class="res-link-1 res-txt-red">Click Here!</a></td>
                    </tr>
                    <tr>
                      <td><code class="res-light-code inline-code">.res-link-2</code></td>
                      <td><a href="" class="res-link-2 res-txt-green">Click Here!</a></td>
                    </tr>
                    <tr>
                      <td><code class="res-light-code inline-code">.res-link-3</code></td>
                      <td><a href="" class="res-link-3 res-txt-yellow">Click Here!</a></td>
                    </tr>
                    <tr>
                      <td><code class="res-light-code inline-code">.res-link-4</code></td>
                      <td><a href="" class="res-link-4 res-txt-black">Click Here!</a></td>
                    </tr>
                    <tr>
                      <td>
                        <code class="res-light-code inline-code">.res-muted-link</code> 
                        <br><span class="res-txt-light-grey res-sm-txt"># remove Link\'s Style</span>
                      </td>
                      <td><a href="" class="res-muted-link">Click Here!</a></td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <div class="res-alert res-bg-light-green res-txt-white">
                If You Want Add New Creative Links, Please Visit <a href="https://github.com/ElhoubeBrahim/Responsive-me_Framework" class="res-txt-dark-blue">The Github Repositry</a>
              </div>',
  'para_3' => '<blockquote class="res-blockquote">
                Hello, Really I Have Nothing To Say Here -_-\'
                <div class="res-blockquote-info">Said By: Anonymous</div>
              </blockquote> <br>
              As You Can See Above, Quotations Have Their Own Styles: Italic, light & hightlighted.
              To Do it Just Write This Code In Your Editor: <br> <br>',
  'para_4' => 'Image Is a Powerfull Tool To Express Ideas Clearly, We - As Web Designers - Had Bad Stories 
              With images Styling =_=, But Responsive-me Gives You 3 Classes To Skip all Those Problems: <br> <br>
              <div class="res-responsive-table">
                <table class="res-table">
                  <thead>
                    <tr>
                        <th>Class</th>
                        <th>Explaining</th>
                    </tr>
                  </thead>

                  <tbody>
                    <tr>
                      <td><code class="res-light-code inline-code">.res-img</code></td>
                      <td>Makes an image responsive According To His Parent Node.</td>
                    </tr>
                    <tr>
                      <td><code class="res-light-code inline-code">.res-circle-img</code></td>
                      <td>Shapes The Image To Circle</td>
                    </tr>
                    <tr>
                      <td><code class="res-light-code inline-code">.res-thumbnail-img</code></td>
                      <td>Shapes the image to a thumbnail</td>
                    </tr>
                  </tbody>
                </table>
              </div>

              The Examples Bellow Shows The Effect Of Those Classes On a Big Size Image (5066&times;3377),
              
              <div class="res-row" style="justify-content: space-between;align-items: center;">
                <div class="res-col sm-3 res-txt-center">
                  <img src="' . $website_url . 'assets/images/me.jpg" class="res-img" alt="">
                  <code class="res-light-code inline-code">.res-img</code>
                </div>
                <div class="res-col sm-3 res-txt-center">
                  <img src="' . $website_url . 'assets/images/me.jpg" class="res-thumbnail-img" alt="">
                  <code class="res-light-code inline-code">.res-thumbnail-img</code>
                </div>
                <div class="res-col sm-3 res-txt-center">
                  <img src="' . $website_url . 'assets/images/me.jpg" class="res-circle-img" alt="">
                  <code class="res-light-code inline-code">.res-circle-img</code>
                </div>
              </div>',
  'para_5' => 'In The Table Below Are a Collection Of Helper Classes, You Can Use Them For Quick Styles: <br> <br>
              <div class="res-responsive-table">
                <table class="res-table">
                  <thead>
                    <tr>
                        <th>Class</th>
                        <th>Explaining</th>
                    </tr>
                  </thead>

                  <tbody>
                    <tr>
                      <td><code class="res-light-code inline-code">.res-flex</code></td>
                      <td>Make The Element Flexible.</td>
                    </tr>
                    <tr>
                      <td><code class="res-light-code inline-code">.res-overlay</code></td>
                      <td>
                        Shows That transparent Wrapper, <a class="show-overlay">Click Here</a> To See Example
                        <div class="res-overlay"></div>
                      </td>
                    </tr>
                    <tr>
                      <td><code class="res-light-code inline-code">.res-no-margin</code></td>
                      <td>Remove Element Margins</td>
                    </tr>
                    <tr>
                      <td><code class="res-light-code inline-code">.res-no-border</code></td>
                      <td>Remove Element Borders</td>
                    </tr>
                    <tr>
                      <td><code class="res-light-code inline-code">.res-no-padding</code></td>
                      <td>Remove Element Paddings</td>
                    </tr>
                    <tr>
                      <td><code class="res-light-code inline-code">.res-bordered</code></td>
                      <td>Add Border To The Element</td>
                    </tr>
                  </tbody>
                </table>
              </div>',
);

$typography = array(
  // Subtitles
  'sub_1' => 'Headers :',
  'sub_2' => 'Text Sizes :',
  'sub_3' => 'Helpers :',

  // Paragraphs
  'para_1' => 'Headers Are Important In Each Website, They Helps To Order Content In Groups
              Also They Are Important In SEO (Search Engine Optimization),
              So Responsive-me Provides Basic Styling On Header Tags : <br> <br>
              <div class="res-card">
                <h1>Heading 1</h1>
                <h2>Heading 2</h2>
                <h3>Heading 3</h3>
                <h4>Heading 4</h4>
                <h5>Heading 5</h5>
                <h6>Heading 6</h6>
              </div>
              To Use Those Classes Just Add One of Them To Your Content Wrapper : <br> <br>
              <div class="res-responsive-table">
                <table class="res-table">
                  <thead>
                    <th>Heading Class</th>
                    <th>Size</th>
                  </thead>
                  <tbody>
                    <tr>
                      <td><code class="res-light-code inline-code">.h1</code></td>
                      <td>3rem</td>
                    </tr>
                    <tr>
                      <td><code class="res-light-code inline-code">.h2</code></td>
                      <td>2.75rem</td>
                    </tr>
                    <tr>
                      <td><code class="res-light-code inline-code">.h3</code></td>
                      <td>2.5rem</td>
                    </tr>
                    <tr>
                      <td><code class="res-light-code inline-code">.h4</code></td>
                      <td>2.25rem</td>
                    </tr>
                    <tr>
                      <td><code class="res-light-code inline-code">.h5</code></td>
                      <td>1rem</td>
                    </tr>
                    <tr>
                      <td><code class="res-light-code inline-code">.h6</code></td>
                      <td>1.75rem</td>
                    </tr>
                  </tbody>
                </table>
              </div>',
  'para_2' => 'Those Are Some Useful Classes To Control Content Size : <br> <br>
              <div class="res-responsive-table">
                <table class="res-table">
                  <thead>
                    <th>Class</th>
                    <th>Size</th>
                  </thead>
                  <tbody>
                    <tr>
                      <td><code class="res-light-code inline-code">.res-sm-txt</code></td>
                      <td>.75rem</td>
                    </tr>
                    <tr>
                      <td><code class="res-light-code inline-code">.res-md-txt</code></td>
                      <td>1rem</td>
                    </tr>
                    <tr>
                      <td><code class="res-light-code inline-code">.res-lg-txt</code></td>
                      <td>2rem</td>
                    </tr>
                    <tr>
                      <td><code class="res-light-code inline-code">.res-xlg-txt</code></td>
                      <td>3rem</td>
                    </tr>
                  </tbody>
                </table>
              </div>',
  'para_3' => 'You Can Take This Collection Also To Put Your Content Undercontrol : <br> <br>
              <div class="res-responsive-table">
                <table class="res-table">
                  <thead>
                    <th>Class</th>
                    <th>Explaining</th>
                  </thead>
                  <tbody>
                    <tr>
                      <td><code class="res-light-code inline-code">.res-mark-txt</code></td>
                      <td>This Class Is Used to <span class="res-mark-txt">highlight text</span></td>
                    </tr>
                    <tr>
                      <td><code class="res-light-code inline-code">.res-txt-right</code></td>
                      <td class="res-txt-right">Align The Text On The Right</td>
                    </tr>
                    <tr>
                      <td><code class="res-light-code inline-code">.res-txt-left</code></td>
                      <td class="res-txt-left">Align The Text On The Left</td>
                    </tr>
                    <tr>
                      <td><code class="res-light-code inline-code">.res-txt-center</code></td>
                      <td class="res-txt-center">Align The Text On The Center</td>
                    </tr>
                    <tr>
                      <td><code class="res-light-code inline-code">.res-txt-upper</code></td>
                      <td class="res-txt-upper">Indicates Uppercased Text</td>
                    </tr>
                    <tr>
                      <td><code class="res-light-code inline-code">.res-txt-lower</code></td>
                      <td class="res-txt-lower">Indicates Lowercased Text</td>
                    </tr>
                  </tbody>
                </table>
              </div>'
);

$lists = array(
  // Subtitles
  'sub_1' => 'Lists :',
  'sub_2' => 'Examples :',

  // Paragraphs
  'para_1' => 'If You Want To Show Some Related Data To The User, Your Will Choose Lists To Do That,
          So Responsive-me Offers To You Some Classes To Make Beautiful Lists : <br> <br>
          <div class="res-responsive-table">
            <table class="res-table">
              <thead>
                <th>Class</th>
                <th>Explaining</th>
              </thead>
              <tbody>
                <tr>
                  <td><code class="res-light-code inline-code">.res-unstyled-list</code></td>
                  <td>Remove Those Black Dots & Padding From The List Items</td>
                </tr>
                <tr>
                  <td><code class="res-light-code inline-code">.res-inline-list</code></td>
                  <td>Places All List Items On a Single Line</td>
                </tr>
                <tr>
                  <td><code class="res-light-code inline-code">.res-bordered-list</code></td>
                  <td>Add padding & Border To The List Items</td>
                </tr>
                <tr>
                  <td><code class="res-light-code inline-code">.res-hoverable-list</code></td>
                  <td>Add Effect To The List Items When The Mouse Is Placed Above One Of Them</td>
                </tr>
              </tbody>
            </table>
          </div>',
  'para_2' => 'Please Read The Code Below & Try To Write It Yourself In Order To Grasp It : <br> <br>',
  'para_3' => 'In This Part I Will Show You How To Make List Group Using List & Flex Classes, Just Like That : <br> <br>
              <ul class="res-hoverable-list res-flex">
                <li class="list-item active">Item 1</li>
                <li class="list-item">Item 2</li>
                <li class="list-item">Item 3</li>
                <li class="list-item">Item 4</li>
                <li class="list-item">Item 5</li>
                <li class="list-item">Item 6</li>
                <li class="list-item">Item 7</li>
                <li class="list-item">Item 8</li>
                <li class="list-item">Item 9</li>
                <li class="list-item">Item 10</li>
                <li class="list-item">Item 11</li>
              </ul>'
);

$forms = array(
  // Subtitles
  'sub_1' => 'Inputs :',
  'sub_2' => 'Input Groups :',
  'sub_3' => 'Input With Icon :',
  'sub_4' => 'Responsive-me Styled Inputs :',

  // Paragraphs
  'para_1' => 'Forms In General Gives You The Ability To Interact With Users,
              When You Are Dealing With Forms It\'s Better To Keep Them Bigger & Attractive,
              So What Will Responsive-me Offer To Us? Let\'s Discover it: <br> <br>',
  'para_2' => 'The Transitions And Smoothness Of Input Elements Are Imporatant,
              I Don\'t Need To Explain Why, It\'s Clear ^_^ They Are Anywhere :
              <br> <br>
              <div class="res-responsive-table">
                <table class="res-table">
                  <thead>
                    <th>Class</th>
                    <th>Explaining</th>
                    <th>Output</th>
                  </thead>
                  <tbody>
                    <tr>
                      <td><code class="res-light-code inline-code">.res-input</code></td>
                      <td>The Default res-me Input</td>
                      <td><input type="text" class="res-input"></td>
                    </tr>
                    <tr>
                      <td><code class="res-light-code inline-code">.res-valid-input</code></td>
                      <td>When The Entered Values Are Correct</td>
                      <td><input type="text" class="res-input res-valid-input"></td>
                    </tr>
                    <tr>
                      <td><code class="res-light-code inline-code">.res-non-valid-input</code></td>
                      <td>When The Entered Values Are Incorrect</td>
                      <td><input type="text" class="res-input res-non-valid-input"></td>
                    </tr>
                  </tbody>
                </table>
              </div>',
  'para_3' => 'If You Want To Set Label Above The Input Element, In Order To Clarify Your Purpose To The User,
              You Should Use Wrapper With The Class <code class="res-light-code inline-code">.res-input-gp</code>,
              There Is An Example : <br> <br>

              <div class="res-input-gp">
                <label for="id">Username :</label>
                <input type="text" class="res-input">
              </div>',
  'para_4' => '<div class="res-alert res-bg-light-green res-txt-white">
                It\'s Better To Use <code class="res-light-code inline-code">.res-input-gp</code>
                In All Your Input Fields To Make Your Code Ordered & Categorized.
              </div>',
  'para_5' => 'If You Want To Add An Icon To Your Input Field Like The Example,
              Just Copy & Paste The Code Below & Change Just The Content Not The Structure,
              Because He Won\'t Work If You Do : <br> <br>
              <div class="res-input-with-icon">
                <label for="pwd">Password : <span class="res-sm-txt">(Click On The Eye Icon)</span></label>
                <div class="res-input">
                  <i class="ri-eye-close-line" id="sh" style="cursor: pointer;"></i>
                  <input type="password" id="pwd" value="1234">
                </div>
              </div>',
  'para_6' => 'Responsive-me Provide Some Default Styling Inputs To Use Directly In Your Design : <br> <br>
              <div class="res-input-gp-1">
                <input type="text" id="pwd">
                <label for="pwd">Password:</label>
                <span></span>
              </div>  
              To Use Input Above 
              <code class="res-light-code inline-code">ctrl+c</code> 
              <code class="res-light-code inline-code">ctrl+v</code> The Code Below: <br> <br>',
  'para_7' => '<div class="res-alert res-bg-light-green res-txt-white">
                If You Want Add New Creative Inputs, Please Visit <a href="https://github.com/ElhoubeBrahim/Responsive-me_Framework" class="res-txt-dark-blue">The Github Repositry</a>
              </div>',

);

$tables = array(
  // Subtitles
  'sub_1' => 'Responsive-me Table :',
  'sub_2' => 'Striped Table :',
  'sub_3' => 'Hoverable Table :',
  'sub_4' => 'Responsive Table :',

  // Paragraphs
  'para_1' => 'Tables Are Made To Organize & To Show Data In a Clear Way.
                Responsive-me Provides Some Useful Classes To Style Your Tbales 
                & Make Them Easy To Analyse',
  'para_2' => 'The Table Below, Is The Default Table Styling In Responsive-me. To Use It Just Add 
              <code class="res-light-code inline-code">.res-table</code> <br> <br>
              <table class="res-table">
                <thead>
                  <tr>
                    <th>id</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Email</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>1</td>
                    <td>Brahim</td>
                    <td>Elhoube</td>
                    <td>brahim.elhoube@gmail.com</td>
                  </tr>
                  <tr>
                    <td>2</td>
                    <td>Ahmed</td>
                    <td>Mahmoud</td>
                    <td>ahmed@gmail.com</td>
                  </tr>
                  <tr>
                    <td>3</td>
                    <td>Alex</td>
                    <td>Joe</td>
                    <td>alexjoe@gmail.com</td>
                  </tr>
                </tbody>
              </table>',
  'para_3' => 'We Use Striped Tabe To Show Contrast Between Its Rows, To Use It Just Add Class
            <code class="res-light-code inline-code">.res-striped-table</code> To Your Table Tag: <br> <br>
            <table class="res-striped-table">
              <thead>
                <tr>
                  <th>id</th>
                  <th>First Name</th>
                  <th>Last Name</th>
                  <th>Email</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>1</td>
                  <td>Brahim</td>
                  <td>Elhoube</td>
                  <td>brahim.elhoube@gmail.com</td>
                </tr>
                <tr>
                  <td>2</td>
                  <td>Ahmed</td>
                  <td>Mahmoud</td>
                  <td>ahmed@gmail.com</td>
                </tr>
                <tr>
                  <td>3</td>
                  <td>Alex</td>
                  <td>Joe</td>
                  <td>alexjoe@gmail.com</td>
                </tr>
              </tbody>
            </table>',
  'para_4' => 'We Use Hoverable Tabe To Add Some Activity & Smoothness To Its Rows, To Use It Just Add Class
            <code class="res-light-code inline-code">.res-hoverable-table</code> To Your Table Tag: <br> <br>
            <table class="res-hoverable-table">
              <thead>
                <tr>
                  <th>id</th>
                  <th>First Name</th>
                  <th>Last Name</th>
                  <th>Email</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>1</td>
                  <td>Brahim</td>
                  <td>Elhoube</td>
                  <td>brahim.elhoube@gmail.com</td>
                </tr>
                <tr>
                  <td>2</td>
                  <td>Ahmed</td>
                  <td>Mahmoud</td>
                  <td>ahmed@gmail.com</td>
                </tr>
                <tr>
                  <td>3</td>
                  <td>Alex</td>
                  <td>Joe</td>
                  <td>alexjoe@gmail.com</td>
                </tr>
              </tbody>
            </table>',
  'para_5' => 'Sometimes We Want To Save Some Big Data In a Table, But in Small Screens
            The Table Does not Look Good, But We Have The Solution, You Can Make Your Table 
            Scrollable By Using a Wrapper with <code class="res-light-code inline-code">.res-responsive-table</code>:
            <br> <br>
            <div class="res-responsive-table">
              <table class="res-table">
                <thead>
                  <tr>
                    <th>January</th>
                    <th>February</th>
                    <th>March</th>
                    <th>April</th>
                    <th>May</th>
                    <th>June</th>
                    <th>July</th>
                    <th>August</th>
                    <th>September</th>
                    <th>November</th>
                    <th>October</th>
                    <th>December</th>
                    <th>January</th>
                    <th>February</th>
                    <th>March</th>
                    <th>April</th>
                    <th>May</th>
                    <th>June</th>
                    <th>July</th>
                    <th>August</th>
                    <th>September</th>
                    <th>November</th>
                    <th>October</th>
                    <th>December</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>20 mm</td>
                    <td>200 mm</td>
                    <td>30 mm</td>
                    <td>20 mm</td>
                    <td>20 mm</td>
                    <td>400 mm</td>
                    <td>5 mm</td>
                    <td>90 mm</td>
                    <td>0 mm</td>
                    <td>180 mm</td>
                    <td>19 mm</td>
                    <td>2 mm</td>
                    <td>20 mm</td>
                    <td>200 mm</td>
                    <td>30 mm</td>
                    <td>20 mm</td>
                    <td>20 mm</td>
                    <td>400 mm</td>
                    <td>5 mm</td>
                    <td>90 mm</td>
                    <td>0 mm</td>
                    <td>180 mm</td>
                    <td>19 mm</td>
                    <td>2 mm</td>
                  </tr>
                </tbody>
              </table>
            </div> <br>',
);

$colors = array(
  // Subtitles
  'sub_1' => 'Responsive-me Colors :',
  'sub_2' => 'Background Colors :',
  'sub_3' => 'Text Colors :',
  'sub_4' => 'Hover Colors :',
  'sub_5' => 'Border Colors :',

  // Paragraphs
  'para_1' => 'Responsive-me Offers You 30 Color Class To Use Them In Your Design,
              So From Now Don\'t Wory About "Witch Color Should I Use ?".
              All Colors Are Choosen Carefully : <br> <br>
              <div id="colors" class="res-row res-txt-white"></div>',
  'para_2' => 'To Add Background Color To an Element From The Colors Above, Use The Class 
              <code class="res-light-code inline-code">.res-bg-<span class="comment">color</span></code>
              & Replace \'color\' With His Name : <br> <br>',
  'para_3' => '<div class = "res-bg-light-brown res-alert">
                Hello From The Light Brown Alert
              </div>
              In Addition, There Is Three More Classes That Will Be Useful Sometimes : <br> <br>
              <table class="res-table">
                <thead>
                  <tr>
                    <th>Class</th>
                    <th>Explaining</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td><code class="res-light-code inline-code">.res-bg-black</code></td>
                    <td>Black Background</td>
                  </tr>
                  <tr>
                    <td><code class="res-light-code inline-code">.res-bg-white</code></td>
                    <td>White Background</td>
                  </tr>
                  <tr>
                    <td><code class="res-light-code inline-code">.res-bg-transparent</code></td>
                    <td>Transparent Background</td>
                  </tr>
                </tbody>
              </table>',
  'para_4' => 'To Add Text Color To an Element From The Colors Above, Use The Class 
              <code class="res-light-code inline-code">.res-txt-<span class="comment">color</span></code>
              & Replace \'color\' With His Name : <br> <br>',
  'para_5' => '<div class = "res-txt-white res-bg-dark-purple res-alert">
                This is a White Text In a Dark Purple Background
              </div>',
  'para_6' => 'You Can Also Add Some Hover Effects To Your Elements, By Changing Their Background Colors,
              Add This Class To The Targeted Element
              <code class="res-light-code inline-code">.res-<span class="comment">color</span>-hover</code>
              <br> <br>
              <div class="res-flex">
                <button class="res-btn res-red-hover">Hover Me</button> &nbsp;
                <button class="res-btn res-dark-blue-hover">Hover Me</button> &nbsp;
                <button class="res-btn res-orange-hover">Hover Me</button> &nbsp;
              </div>',
  'para_7' => 'Costomize Your Elements By Adding Some Borders & Color Them, Using The Classes
              <code class="res-light-code inline-code">.res-<span class="comment">color</span>-border</code> & 
              <code class="res-light-code inline-code">.res-bordered</code>
              <br> <br>
              <div class="res-alert res-bg-white res-txt-red res-bordered res-blue-border">
                This a Red Text On White Background, With Blue Border.
              </div>',
);

$grid = array(
  // Subtitles
  'sub_1' => 'Containers :',
  'sub_2' => 'Grid System :',
  'sub_3' => 'Responsive Layout :',
  'sub_4' => 'Offsets :',
  'sub_5' => 'Push & Pull :',

  // Paragraphs
  'para_1' => 'Responsive-me Uses The Standard 12 Columns For Responsive Layout,
            That Makes The Control Of Your Layout Very Easy, You Can By Adding Some Classes 
            Make Your Website Responsive With All Screens : <span class="res-sm-txt">(Resize The Screen To See The Effect)</span> <br> <br>
            <div class="res-row">
              <div class="res-col sm-1 grid_test">1</div>
              <div class="res-col sm-1 grid_test">2</div>
              <div class="res-col sm-1 grid_test">3</div>
              <div class="res-col sm-1 grid_test">4</div>
              <div class="res-col sm-1 grid_test">5</div>
              <div class="res-col sm-1 grid_test">6</div>
              <div class="res-col sm-1 grid_test">7</div>
              <div class="res-col sm-1 grid_test">8</div>
              <div class="res-col sm-1 grid_test">9</div>
              <div class="res-col sm-1 grid_test">10</div>
              <div class="res-col sm-1 grid_test">11</div>
              <div class="res-col sm-1 grid_test">12</div>
            </div>',
  'para_2' => 'The Container Is The Wrapper Who Gather The Page Content In The Center,
              He Gives a Nice Look For Web Pages : <br> <br>
              <div class="res-row container_test res-txt-center">
                <div class="res-col sm-6">
                  <p>With Container</p>
                  <div>
                    <div class="res-container">
                      <div class="tip"></div>
                      <div class="tip"></div>
                      <div class="tip"></div>
                    </div>
                  </div>
                </div>
                <div class="res-col sm-6">
                  <p>Witout Container</p>
                  <div>
                    <div class="tip"></div>
                    <div class="tip"></div>
                    <div class="tip"></div>
                  </div>
                </div>
              </div>
              To Use Container Just Add The Class <code class="res-light-code inline-code">.res-container</code>
              To Your Content Wrapper.',
  'para_3' => 'As We Said Before The Grid System Devide The Page In 12 Columns,
              To Do That Just Follow The Structure Below, Read The Code & Comments : <br> <br>',
  'para_4' => '<code class="res-light-code inline-code">.res-col-<span class="comment">num</span></code> with num is between 1 & 12
              Helps You To Fix The Width Of Your Element In All Screens, Per Example The Grid Below,
              If You Resize The Screen Nothing Will Change, Elements Will Conserve Their Widths: <br> <br>
              <div class="res-row">
                <div class="res-col-3 grid_test">.res-col-3</div>
                <div class="res-col-3 grid_test">.res-col-3</div>
                <div class="res-col-3 grid_test">.res-col-3</div>
                <div class="res-col-3 grid_test">.res-col-3</div>
              </div>
              <br>
              <div class="res-row">
                <div class="res-col-4 grid_test">.res-col-4</div>
                <div class="res-col-4 grid_test">.res-col-4</div>
                <div class="res-col-4 grid_test">.res-col-4</div>
              </div>
              <br>
              <div class="res-row">
                <div class="res-col-6 grid_test">.res-col-6</div>
                <div class="res-col-6 grid_test">.res-col-6</div>
              </div>
              <br>
              <div class="res-row">
                <div class="res-col-12 grid_test">.res-col-12</div>
              </div>',
  'para_5' => 'Maybe You Were Asking: \'What About If I Want To Make My Layout Responsive?\', 
            For That Read The Table Below For More Information: <br> <br>
            <div class="res-responsive-table">
              <table class="res-table">
                <thead>
                  <tr>
                    <th>Class</th>
                    <th>Screen</th>
                    <th>Explaining</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td><code class="res-light-code inline-code">.xs-<span class="comment">num</span></code></td>
                    <td>Extra Small Screens (<=800px)</td>
                    <td>Control The Element\'s Size On Extra Small Screens Only</td>
                  </tr>
                  <tr>
                    <td><code class="res-light-code inline-code">.sm-<span class="comment">num</span></code></td>
                    <td>Small Screens (>=801px)</td>
                    <td>Control The Element\'s Size On Small Screens & Above</td>
                  </tr>
                  <tr>
                    <td><code class="res-light-code inline-code">.md-<span class="comment">num</span></code></td>
                    <td>Medium Screens (>=992px)</td>
                    <td>Control The Element\'s Size On Medium Screens & Above</td>
                  </tr>
                  <tr>
                    <td><code class="res-light-code inline-code">.lg-<span class="comment">num</span></code></td>
                    <td>Large Screens (>=1200px)</td>
                    <td>Control The Element\'s Size On Large Screens & Above</td>
                  </tr>
                </tbody>
              </table>
            </div> <br> <br>
            If You Resize The Screen You Will See That The Grid Below Will Be Responsive : <br> <br>
            <div class="res-row">
              <div class="res-col sm-3 grid_test">.sm-3</div>
              <div class="res-col sm-3 grid_test">.sm-3</div>
              <div class="res-col sm-3 grid_test">.sm-3</div>
              <div class="res-col sm-3 grid_test">.sm-3</div>
            </div>
            <br>
            <div class="res-row">
              <div class="res-col xs-4 sm-5 md-6 lg-12 grid_test">.xs-4 .sm-5 .md-6 .lg-12</div>
            </div>',
  'para_6' => 'Offset Classes Gives You The Ability To Translate An Element With a Number Of Columns: <br> <br>
            <div class="res-row">
              <div class="res-col-6 res-offset-2 grid_test">This Is a 4 Columns Element, With 2 Columns Offset</div>
            </div> <br>
            To Translate Your Element Add The Class
            <code class="res-light-code inline-code">.res-offset-<span class="comment">num</span></code>
            With num Is Between 1 & 12.
            You Can Also Make Your Offsets Responsive With All Screens By using The Class
            <code class="res-light-code inline-code">.res-offset-<span class="comment">screen</span>-<span class="comment">num</span></code>
            By replacing The Screen With xs, sm , md or lg',
  'para_7' => 'Push & Pull Are Like Offset, The Only Difference Is That Push Translate The Element From Left,
              & Pull Translate It From Right.
              To Use Those Features Just Add Class 
              <code class="res-light-code inline-code">.res-push-<span class="comment">num</span></code> or
              <code class="res-light-code inline-code">.res-pull-<span class="comment">num</span></code>
              You Can Also Make Pull & Push Responsive With Screen Like Offset By Adding Class
              <code class="res-light-code inline-code">.res-push-<span class="comment">screen</span>-<span class="comment">num</span></code> or
              <code class="res-light-code inline-code">.res-pull-<span class="comment">screen</span>-<span class="comment">num</span></code>',
);

$buttons = array(
  // Subtitles
  'sub_1' => 'Buttons Style :',
  'sub_2' => 'Button Group :',

  // Paragraphs
  'para_1' => 'Responsive-me Offers You Some Beatiful Buttons, They Attract The User To Click Them ^_^,
              The Default Button Looks Like This : <br> <br>
              <div class="res-btn-gp res-txt-center">
                <button class="res-btn">Click Me !</button>
                <button class="res-btn">
                  <i class="ri-account-circle-fill"></i>
                  This is a Button With Icon
                </button>
              </div>
              I Know That The Buttons Above Are Not Very Beutiful But if We Use Color Classes We Can Make Them Attrectives, Like This :
              <br> <br>
              <div class="res-btn-gp">
                <button type="submit" class="res-btn">
                  <i class="ri-account-circle-fill"></i>
                  Submit
                </button>
                <button type="submit" class="res-brown-btn shadow">
                  <i class="ri-account-circle-fill"></i>
                  Submit
                </button>
                <button type="submit" class="res-red-btn shadow">
                  <i class="ri-account-circle-fill"></i>
                  Submit
                </button>
                <button type="submit" class="res-blue-btn shadow">
                  <i class="ri-account-circle-fill"></i>
                  Submit
                </button>
                <button type="submit" class="res-green-btn shadow">
                  <i class="ri-account-circle-fill"></i>
                  Submit
                </button>
                <button type="submit" class="res-yellow-btn shadow">
                  <i class="ri-account-circle-fill"></i>
                  Submit
                </button>
              </div>
              So Let\'s Explore The responsive-me Buttons Classes : <br> <br>
              <div class="res-responsive-table">
                <table class="res-table">
                  <thead>
                    <tr>
                      <th>Class</th>
                      <th>Explaining</th>
                      <th>Output</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td><code class="res-light-code inline-code">.res-btn</code></td>
                      <td>The Default Button Style</td>
                      <td><button class="res-btn">Click Me !</button></td>
                    </tr>
                    <tr>
                      <td><code class="res-light-code inline-code">.res-<span class="comment">color</span>-btn</code></td>
                      <td>
                        Color The Button With One Of The
                        <a href="<?php echo $website_url ?>documentation/css_styling/colors.php">Res-me Colors</a>
                      </td>
                      <td><button class="res-blue-btn">Click Me !</button></td>
                    </tr>
                    <tr>
                      <td><code class="res-light-code inline-code">.shadow</code></td>
                      <td>Add a Beatifull Shadow Below The Button</td>
                      <td><button class="res-blue-btn shadow">Click Me !</button></td>
                    </tr>
                    <tr>
                      <td>disabled button</td>
                      <td>Add Some Style To Disabled Buttons</td>
                      <td><button class="res-btn" disabled>Click Me !</button></td>
                    </tr>
                  </tbody>
                </table>
              </div> <br>',
  'para_2' => '<div class="res-alert res-bg-light-green res-txt-white">
                Those Are Some Important Notes : <br> <br>
                <ul>
                  <li>The Responsive-me Button Is Displayed As Flexible Element.</li>
                  <li>
                    Res-me Background Colors Works On Buttons Also, But It\'s Better To Use
                    Res-me Buttons Color.
                  </li>
                  <li>
                    Buttons Shadows Does Not Work On Yellow & Light Colors.
                  </li>
                  <li>
                    If You Want To Make Some Button Disabled Just Add attribute "disabled" To it.
                  </li>
                </ul>
              </div>',
  'para_3' => 'Because Responsive-me Buttons Are Flexible, It\'s Hard To Put Them In The Same Line,
              So For That Responsive-me Offers You The Class 
              <code class="res-light-code inline-code">.res-btn-gp</code> To Display Buttons In One Line : <br> <br>
              <div class="res-btn-gp">
                <button type="submit" class="res-btn">
                  <i class="ri-account-circle-fill"></i>
                  Submit
                </button>
                <button type="submit" class="res-brown-btn shadow">
                  <i class="ri-account-circle-fill"></i>
                  Submit
                </button>
                <button type="submit" class="res-red-btn shadow">
                  <i class="ri-account-circle-fill"></i>
                  Submit
                </button>
                <button type="submit" class="res-blue-btn shadow">
                  <i class="ri-account-circle-fill"></i>
                  Submit
                </button>
                <button type="submit" class="res-green-btn shadow">
                  <i class="ri-account-circle-fill"></i>
                  Submit
                </button>
                <button type="submit" class="res-yellow-btn shadow">
                  <i class="ri-account-circle-fill"></i>
                  Submit
                </button>
              </div>
              Here Is The Code : <br> <br>'                
);

$code = array(
  // Subtitles
  'sub_1' => 'Responsive-me Code :',
  'sub_2' => 'Res-me Code Element :',
  'sub_3' => 'Light Code Style :',
  'sub_4' => 'Atom Code Style :',
  'sub_5' => 'Hacker Code Style :',
  'sub_6' => 'Res-me Code Structure :',

  // Paragraphs
  'para_1' => 'Responsive-me Has some Styles & Structure For Code Tag.
              The Default Code Area Looks Like This : <br> <br>
              <code class="res-code">
                <span class="language">PHP</span>

                <div class="line">
                  <<span class="tag">?php</span>
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
              <br>
              To Use It Just Add The Class <code class="res-light-code inline-code">.res-code</code>
              To The &lt;code&gt; Tag.',
  'para_2' => 'Before Discovering The Res-me Code Styles, I Loved To Show You The Elements Of a Res-me Code Area,
              So Read The Table Below In Order To Understand It (All Classes Below Should Be Used With span Tag) : <br> <br>
              <div class="res-responsive-table">
                <table class="res-table">
                  <thead>
                    <tr>
                      <th>Class</th>
                      <th>Explaining</th>
                      <th>Output</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>
                        <code class="res-light-code inline-code">.language</code>
                      </td>
                      <td>
                        The Language Name, it Will Be Displayed In The Top Right Corner.
                      </td>
                      <td>
                        <code class="res-light-code">
                          <span class="language">python</span>
                          <div class="break"></div>
                        </code>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <code class="res-light-code inline-code">.plain-txt</code>
                      </td>
                      <td>
                        Indicate Plain Texts (Not Codes)
                      </td>
                      <td>
                        <code class="res-light-code res-no-padding res-txt-center">
                          <span class="plain-txt">Hello World !</span>
                        </code>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <code class="res-light-code inline-code">.keyword</code>
                      </td>
                      <td>
                        Indicate Language Keywords (var, function, class, const, for, while, if, else ...)
                      </td>
                      <td>
                        <code class="res-light-code res-no-padding res-txt-center">
                          <span class="keyword">function</span>()
                        </code>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <code class="res-light-code inline-code">.ponctuation</code>
                      </td>
                      <td>
                        Indicate Ponctuation (: , ; / = + ...)
                      </td>
                      <td>
                        <code class="res-light-code res-no-padding res-txt-center">
                          <span class="ponctuation">: ; , = + - * /</span>
                        </code>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <code class="res-light-code inline-code">.comment</code>
                      </td>
                      <td>
                        Indicate Language Comment
                      </td>
                      <td>
                        <code class="res-light-code res-no-padding res-txt-center">
                          <span class="comment"># This a Python Comment</span>
                        </code>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <code class="res-light-code inline-code">.string</code>
                      </td>
                      <td>
                        Indicate Strings
                      </td>
                      <td>
                        <code class="res-light-code res-no-padding res-txt-center">
                          <span class="string">\'Hello String !\'</span>
                        </code>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <code class="res-light-code inline-code">.function</code>
                      </td>
                      <td>
                        Indicate Function\'s Name
                      </td>
                      <td>
                        <code class="res-light-code res-no-padding res-txt-center">
                          <span class="function">say_hello</span>()
                        </code>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <code class="res-light-code inline-code">.class</code>
                      </td>
                      <td>
                        Indicate Class\'s Name (OOP)
                      </td>
                      <td>
                        <code class="res-light-code res-no-padding res-txt-center">
                          <span class="keyword">new</span>
                          <span class="function">Object</span>()
                        </code>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <code class="res-light-code inline-code">.variable</code>
                      </td>
                      <td>
                        Indicate Variable\'s Name
                      </td>
                      <td>
                        <code class="res-light-code res-no-padding res-txt-center">
                          <span class="variable">$username</span>
                          <span class="ponctuation">=</span>
                          <span class="string">\'Brahim\'</span>
                        </code>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <code class="res-light-code inline-code">.tag</code>
                      </td>
                      <td>
                        Indicate Tag Name In Tagged Languages
                      </td>
                      <td>
                        <code class="res-light-code res-no-padding res-txt-center">
                          <<span class="tag">html</span>>
                          <span class="plain-txt">...</span>
                          &lt;/<span class="tag">html</span>>
                        </code>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <code class="res-light-code inline-code">.attribute</code>
                      </td>
                      <td>
                        Indicate Attribute Name In Tagged Languages
                      </td>
                      <td>
                        <code class="res-light-code res-no-padding res-txt-center">
                          <<span class="tag">div</span>
                          <span class="attribute">attribute</span>>
                        </code>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <code class="res-light-code inline-code">.break</code>
                      </td>
                      <td>
                        Add Some Space Between Lines
                      </td>
                      <td class="res-txt-center">
                        ^_^
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <br>
              Don\'t Worry Now We Will Know How To Use All Stuff Above, Just Keep It In Your mind.',
  'para_3' => 'The Light Code Style Is What You See Below, To Do It Use The Class 
              <code class="res-light-code inline-code">.res-light-code</code>
              In The &lt;code&gt; Tag.<br> <br>',
  'para_4' => 'The Atom Code Style Is What You See Below, To Do It Use The Class 
              <code class="res-light-code inline-code">.res-atom-code</code>
              In The &lt;code&gt; Tag.<br> <br>',
  'para_5' => 'The Hacker Code Style Is What You See Below, To Do It Use The Class 
              <code class="res-light-code inline-code">.res-hacker-code</code>
              In The &lt;code&gt; Tag.<br> <br>',
  'para_6' => 'To Create a Code Area In Your Website Using Responsive-me, Just Copy/Paste The Code Below : <br> <br>
              <code class="res-light-code">
                <span class="language">HTML</span>
                <div class="line">
                  <span class="comment">&lt;--! Replace The Dots By one Of Code Style Classes Above --&gt;</span>
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
                  &lt;/<span class="tag">code</span>>
                </div>
              </code>
              <br>
              Let\'s Add Some Content Inside Code Tag : <br> <br>',
  'para_7' => '<div class="res-alert res-bg-light-green res-txt-white">
                To Avoid Any Syntax Problems Use <a href="http://www.w3schools.com" class="res-txt-blue">HTML Entities & Symbols</a>
              </div>
              In General Responsive-me Code Line Should Looks Like This : <br> <br>',
);

$more = array(
  // Subtitles
  'sub_1' => 'Floats :',
  'sub_2' => 'Visibility :',
  'sub_3' => 'Shadows :',

  // Paragraphs
  'para_1' => 'Responsive-me Uses Flexible Elements To Build The Layout,
              But It Doesn\'t Mean That We Canceled The Floating, Those Are The 3 Float Classes : <br> <br>
              <div class="res-responsive-table">
                <table class="res-table">
                  <thead>
                    <tr>
                      <th>Class</th>
                      <th>Explaining</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>
                        <code class="res-light-code inline-code">.res-fl-left</code>
                      </td>
                      <td>
                        Float The Element On The Left
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <code class="res-light-code inline-code">.res-fl-right</code>
                      </td>
                      <td>
                        Float The Element On The Right
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <code class="res-light-code inline-code">.res-fl-clear</code>
                      </td>
                      <td>
                        Avoid Floats Problems
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>',
  'para_2' => 'To Show Elements Or Hide Them In General Use One Of Those Classes, 
              <code class="res-light-code inline-code">.res-show</code>
              Or <code class="res-light-code inline-code">.res-show</code>
              But if You Want To Control The Visibility According To The Screen Size, 
              In Other Words To Make Visibility Responsive Read The Table Below : <br> <br>
              <div class="res-responsive-table">
                <table class="res-table">
                  <thead>
                    <tr>
                      <th>Class</th>
                      <th>Explaining</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>
                        <code class="res-light-code inline-code">.res-xs-show</code>
                      </td>
                      <td>
                        Show The Element In Extra Small Screens Only (<=800px)
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <code class="res-light-code inline-code">.res-xs-hide</code>
                      </td>
                      <td>
                        Hide The Element In Extra Small Screens Only (<=800px)
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <code class="res-light-code inline-code">.res-sm-show</code>
                      </td>
                      <td>
                        Show The Element In Small Screens & Up (>=801px)
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <code class="res-light-code inline-code">.res-sm-hide</code>
                      </td>
                      <td>
                        Hide The Element In Small Screens & Up (>=801px)
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <code class="res-light-code inline-code">.res-md-show</code>
                      </td>
                      <td>
                        Show The Element In Medium Screens & Up (>=992px)
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <code class="res-light-code inline-code">.res-md-hide</code>
                      </td>
                      <td>
                        Hide The Element In Medium Screens & Up (>=992px)
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <code class="res-light-code inline-code">.res-lg-show</code>
                      </td>
                      <td>
                        Show The Element In Large Screens & Up (>=1200px)
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <code class="res-light-code inline-code">.res-lg-hide</code>
                      </td>
                      <td>
                        Hide The Element In Large Screens & Up (>=1200px)
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div> <br>
              In The Table Below You Will Find Other Visibility Classes, You Will Need Them : <br> <br>
              <div class="res-responsive-table">
                <table class="res-table">
                  <thead>
                    <tr>
                      <th>Class</th>
                      <th>Explaining</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>
                        <code class="res-light-code inline-code">.res-sm-md-show</code>
                      </td>
                      <td>
                        Show The Element In Small Screens Only (>=801px & <=992px)
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <code class="res-light-code inline-code">.res-sm-md-hide</code>
                      </td>
                      <td>
                        Hide The Element In Small Screens Only (>=801px & <=992px)
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <code class="res-light-code inline-code">.res-md-lg-show</code>
                      </td>
                      <td>
                        Show The Element In Medium Screens Only (>=992px & <=1200px)
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <code class="res-light-code inline-code">.res-md-lg-hide</code>
                      </td>
                      <td>
                        Hide The Element In Medium Screens Only (>=992px & <=1200px)
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>',
  'para_3' => 'Responsive-me Provide 6 Classes To Express The Depth Of Your Elements : <br> <br>
              <div class="res-row">
                <div class="res-col sm-2 res-shadow-0 res-no-border grid_test">.res-shadow-0</div>
                <div class="res-col sm-2 res-shadow-1 res-no-border grid_test">.res-shadow-1</div>
                <div class="res-col sm-2 res-shadow-2 res-no-border grid_test">.res-shadow-2</div>
                <div class="res-col sm-2 res-shadow-3 res-no-border grid_test">.res-shadow-3</div>
                <div class="res-col sm-2 res-shadow-4 res-no-border grid_test">.res-shadow-4</div>
                <div class="res-col sm-2 res-shadow-5 res-no-border grid_test">.res-shadow-5</div>
              </div>',
);

$css_components = array(
  // Subtitles
  'sub_1' => 'Cards :',
  'sub_2' => 'Alerts :',
  'sub_3' => 'Tags :',
  'sub_4' => 'Progress Bars :',

  // Paragraphs
  'para_1' => 'Cards Are Containers Of Some Content, They Have Shadow & Rounded Corners,
              To Display a Card Just Use The Class <code class="res-light-code inline-code">.res-card</code> : <br> <br>
              <div class="res-card">
                <div class="res-container">
                  <h4 class="res-txt-center res-txt-blue">Log In</h4>
                  <form>
                    <div class="res-input-gp">
                      <label for="email">Email :</label>
                      <input class="res-input" type="text" id="email" placeholder="example@example.com">
                    </div>
                    <div class="res-input-gp">
                      <label for="pwd">Password :</label>
                      <input class="res-input" type="password" id="pwd">
                    </div>
                    <button class="res-btn res-light-green-btn res-col-4 xs-12">
                      <i class="ri-login-circle-line"></i>
                      Login
                    </button>
                  </form>
                </div>
              </div>',
  'para_2' => 'Alerts Are Cards, The Only Difference Is That Alerts Are Dismissible,
              To Show A Dismissible Alert To The User, Write This Code On Your Text editor : <br> <br>
              <code class="res-light-code">
                <span class="language">HTML</span>
                <div class="line">
                  <<span class="tag">div</span>
                  <span class="attribute">class</span>
                  <span class="ponctuation">=</span>
                  <span class="keyword">"res-alert res-bg-light-green res-txt-white"</span>
                  <span class="attribute">id</span>
                  <span class="ponctuation">=</span>
                  <span class="keyword">"alert-id"</span>>
                </div>
                <div class="line">
                  &#8197;
                  <<span class="tag">span</span>
                  <span class="attribute">class</span>
                  <span class="ponctuation">=</span>
                  <span class="keyword">"res-close"</span>
                  <span class="attribute">data-close</span>
                  <span class="ponctuation">=</span>
                  <span class="keyword">"alert-id"</span>
                  <span class="attribute">data-item</span>
                  <span class="ponctuation">=</span>
                  <span class="keyword">"alert"</span>>
                  <span class="plain-txt">&times;</span>
                  &lt;/<span class="tag">span</span>>
                </div>
                <div class="line">
                  &#8197;
                  <span class="plain-txt">You\'ve Been Logged Successfully</span>
                </div>
                <div class="line">
                  &lt;/<span class="tag">div</span>>
                </div>
              </code> <br>
              Those Are Examples Of Alerts : <br> <br>
              <div>
                <div class="res-alert res-bg-light-green res-txt-white" id="alert-success-id">
                  <span class="res-close" data-close="alert-success-id" data-item="alert">&times;</span>
                  You\'ve Been Logged Successfully
                </div>
            
                <div class="res-alert res-bg-red res-txt-white res-col-9" id="alert-wrong-id">
                  <span class="res-close" data-close="alert-wrong-id" data-item="alert">&times;</span>
                  Oops, Please Try Again Later
                </div>
            
                <div class="res-alert res-bg-light-purple res-txt-white res-col-6" id="alert-info-id">
                  <span class="res-close" data-close="alert-info-id" data-item="alert">&times;</span>
                  Click The Refresh Icon To Get News
                </div>
              </div>',
  'para_3' => '<span class="res-tag res-bg-red res-txt-white">Tags</span> Are Used in Notification Systems,
              To Add a Tag Just use The Class 
              <code class="res-light-code inline-code">.res-tag</code>,
              And With Background Color Classes You Can Give Your Tag a Color, This Is An Example Of Using Tag :
              <br> <br>
              <ul class="res-hoverable-list">
                <li class="list-item">
                  News
                  <span class="res-tag res-bg-red res-txt-white res-fl-right">48</span>
                </li>
                <li class="list-item">
                  Messages
                  <span class="res-tag res-bg-blue res-txt-white res-fl-right">48</span>
                </li>
                <li class="list-item">
                  Notifications
                  <span class="res-tag res-bg-green res-txt-white res-fl-right">48</span>
                </li>
              </ul>',
  'para_4' => 'When The User Is Waiting For Some Action, You Should Give Him Feedback,
              To Know How Far Along He Is In a Process,
              The Code Below Is How To Make a Progress Bar With Responsive-me : <br> <br>
              <code class="res-light-code">
                <span class="language">HTML</span>
                <div class="line">
                  <<span class="tag">div</span>
                  <span class="attribute">class</span>
                  <span class="ponctuation">=</span>
                  <span class="keyword">"res-progress"</span>>
                </div>
                <div class="line">
                  &#8197;
                  <<span class="tag">div</span>
                  <span class="attribute">class</span>
                  <span class="ponctuation">=</span>
                  <span class="keyword">"progress-bar res-bg-light-blue res-txt-white"</span>
                  <span class="attribute">width</span>
                  <span class="ponctuation">=</span>
                  <span class="keyword">"50%"</span>>
                  <span class="plain-txt">50%</span>
                  &lt;/<span class="tag">div</span>>
                </div>
                <div class="line">
                  &lt;/<span class="tag">div</span>>
                </div>
              </code>
              <div class="res-progress">
                <div class="progress-bar res-bg-light-blue res-txt-white" style="width: 75%">75%</div>
              </div>
              <div class="res-progress">
                <div class="progress-bar res-bg-red res-txt-white" style="width: 50%">50%</div>
              </div>
              <div class="res-progress">
                <div class="progress-bar res-bg-light-green res-txt-white" style="width: 25%">25%</div>
              </div>',
);

$accordion = array(
  // Subtitles
  'sub_1' => 'What Is An Accordion :',
  'sub_2' => 'Responsive-me Accordion :',

  // Paragraphs
  'para_1' => 'Accordion Is An Element Which Allows You To Hide & Show Some Related Content,
              Here Is An Example Of Responsive-me Accordion : <br> <br>
              <div class="res-accordion res-card res-no-padding">
                <div class="section active">
                  <div class="acc-header">Header 1</div>
                  <div class="acc-content active">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium atque pariatur ipsam! Qui recusandae incidunt quo ipsa fugiat cupiditate rem deleniti at? Quas, itaque voluptate odit amet praesentium porro. Soluta?
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium atque pariatur ipsam! Qui recusandae incidunt quo ipsa fugiat cupiditate rem deleniti at? Quas, itaque voluptate odit amet praesentium porro. Soluta?
                  </div>
                </div>
                <div class="section">
                  <div class="acc-header">Header 2</div>
                  <div class="acc-content">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium atque pariatur ipsam! Qui recusandae incidunt quo ipsa fugiat cupiditate rem deleniti at? Quas, itaque voluptate odit amet praesentium porro. Soluta?
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium atque pariatur ipsam! Qui recusandae incidunt quo ipsa fugiat cupiditate rem deleniti at? Quas, itaque voluptate odit amet praesentium porro. Soluta?
                  </div>
                </div>
                <div class="section">
                  <div class="acc-header">Header 3</div>
                  <div class="acc-content">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium atque pariatur ipsam! Qui recusandae incidunt quo ipsa fugiat cupiditate rem deleniti at? Quas, itaque voluptate odit amet praesentium porro. Soluta?
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium atque pariatur ipsam! Qui recusandae incidunt quo ipsa fugiat cupiditate rem deleniti at? Quas, itaque voluptate odit amet praesentium porro. Soluta?
                  </div>
                </div>
              </div>',
  'para_2' => 'To Build a Responsive-me Accordion, Follow The Following Code : <br> <br>',
  'para_3' => 'If You Want To Make Some Section Visible, Just Add Class
              <code class="res-light-code inline-code">.active</code>
              To The Section div',
);

$tabulation = array(
  // Subtitles
  'sub_1' => 'What Is Tabulations :',
  'sub_2' => 'Responsive-me Tabulations :',

  // Paragraphs
  'para_1' => 'Tabulations (Tabs) Have Headers, Each Header Is Related With Some Content With Id In The Tab Body
              When You Click The Header, The Related Content Only Becomes Visible : <br> <br>
              <div class="res-tabulation res-card res-no-padding">
                <div class="tab-header">
                  <div class="item active" data-tab="id-1">Tab 1</div>
                  <div class="item" data-tab="id-2">Tab 2</div>
                  <div class="item" data-tab="id-3">Tab 3</div>
                  <div class="item" data-tab="id-4">Tab 4</div>
                </div>
                <div class="tab-content res-no-border">
                  <div class="item active" id="id-1">
                    <h3>Tab 1</h3>
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tenetur tempore voluptas vero in id odit? Fugit, nihil earum inventore repellat nisi sed id placeat blanditiis. Nisi eligendi nobis consectetur alias?
                  </div>
                  <div class="item" id="id-2">
                    <h3>Tab 2</h3>
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tenetur tempore voluptas vero in id odit? Fugit, nihil earum inventore repellat nisi sed id placeat blanditiis. Nisi eligendi nobis consectetur alias?
                  </div>
                  <div class="item" id="id-3">
                    <h3>Tab 3</h3>
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tenetur tempore voluptas vero in id odit? Fugit, nihil earum inventore repellat nisi sed id placeat blanditiis. Nisi eligendi nobis consectetur alias?
                  </div>
                  <div class="item" id="id-4">
                    <h3>Tab 4</h3>
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tenetur tempore voluptas vero in id odit? Fugit, nihil earum inventore repellat nisi sed id placeat blanditiis. Nisi eligendi nobis consectetur alias?
                  </div>
                </div>
              </div>',
  'para_2' => 'To Build a Responsive-me Tabulations, Follow The Following Code : <br> <br>',
  'para_3' => 'If You Want To Make Some Section Visible, Just Add Class
              <code class="res-light-code inline-code">.active</code>
              To The Section div',
);

$fl_action_bar = array(
  // Subtitles
  'sub_1' => 'What Is Floating Action Bar :',
  'sub_2' => 'Responsive-me Floating Action Bar :',

  // Paragraphs
  'para_1' => 'As You Can See In The Bottom Right Corner, There Is a Language Switch Button,
              That Button Is Called Floating Action Bar.
              You Can Use Them In Order To Collect Some Shortcuts In Your Web App To The User,
              Like: Dark Mode Setting, Some Settings, Share, Choose Language ... <br> <br>',
  'para_2' => 'To Build a Responsive-me Floating Action Bar, Follow The Following Code : <br> <br>',
);

$carousel = array(
  // Subtitles
  'sub_1' => 'Responsive-me Carousel :',

  // Paragraphs
  'para_1' => 'As You Can See Above, Carousel Is a Slide Show, You Can Use In The Top Of Your Landing Page,
               By Adding The Following Code : <br> <br>',
  'para_2' => 'If You Want To Make Your Carousel Automatic, Each 5s The Next Slide Will Be Visible,
              Just Use The Class 
              <code class="res-light-code inline-code">.automatic</code> In The Carousel div.',
);

$modal = array(
  // Subtitles
  'sub_1' => 'What Is Modal :',
  'sub_2' => 'Responsive-me Modal :',

  // Paragraphs
  'para_1' => 'Modal is Used To Show Dialog Boxes, Confirmations, Prompts ..., Press The Button Below To See Example : <br> <br>
              <button class="res-blue-btn shadow res-launch-modal-btn" data-modal="modal-id">Launch Modal</button>',
  'para_2' => 'To Use Responsive-me Modal In Your Website, copy/paste The Following Code: <br> <br>',
);

$dropdown = array(
  // Subtitles
  'sub_1' => 'What Is Dropdown :',
  'sub_2' => 'Responsive-me Dropdown :',

  // Paragraphs
  'para_1' => 'A dropdown menu is a toggleable menu that allows the user to choose one value from a predefined list,
              Like The Example Below : <br> <br>
              <div class="res-dropdown res-col-3">
                <div class="dropdown-btn res-txt-center">Click Me !</div>
                <ul class="dropdown-menu res-unstyled-list res-hoverable-list">
                  <li class="list-item">item 1</li>
                  <li class="list-item">item 2</li>
                  <li class="list-item">item 3</li>
                </ul>
              </div>',
  'para_2' => 'Dropdowns Are Used In Rooted Header Links also, If You Want To Do it, 
              Please Follow The Following Code : <br> <br>',
);

$layout_header = array(
  // Subtitles
  'sub_1' => 'What Is a Header :',
  'sub_2' => 'Responsive-me Header :',

  // Paragraphs
  'para_1' => 'Every Website Should Have a Header, It Is The First Thing That Visitors See,
              For That It\'s Important To Make It Attractive.
              The Main Parts Of a Website Header Are Brand (Logo) & Navigation Links.
              Those Are Some Responsive-me Headers, Resize The Browser To See The Effect : <br> <br>
              <header class="res-header res-shadow-2 res-bg-red res-txt-white">
                <div class="res-container res-flex">
                  <a href="#" class="brand res-col-2">Logo</a>
                  <button class="res-btn res-bordered res-bg-red res-toggle-nav-btn res-sm-hide" data-navbar="test_1">
                    <i class="ri-menu-line"></i>
                  </button>
                  <nav class="res-nav res-flex res-col-10 xs-12 res-txt-center" id="test_1">
                    <ul class="nav-gp res-unstyled-list res-col res-flex res-col-7 xs-12">
                      <a href="#" class="item res-txt-dark-red">
                        <li>Home</li>
                      </a>
                      <a href="#" class="item">
                        <li>Portfolio</li>
                      </a>
                      <a href="#" class="item">
                        <li>About</li>
                      </a>
                      <a href="#" class="item">
                        <li>Blog</li>
                      </a>
                    </ul>
                  </nav>
                </div>
              </header>',
  'para_2' => 'This Snippet Of Code Is How Responsive-me Header Looks In Backend : <br> <br>',
  'para_3' => 'You Can Also Use Classes <code class="res-light-code inline-code">.fixed-top</code> & 
              <code class="res-light-code inline-code">.fixed-bottom</code>
              To Pin Your Header In The Top Or The Bottom Of Your Website.',
);

$layout_sidebar = array(
  // Subtitles
  'sub_1' => 'What Is SideBar :',
  'sub_2' => 'Responsive-me SideBar :',

  // Paragraphs
  'para_1' => 'Responsive-me Documentation Uses SideBar To Gather The Docs Index,
              In Other Word a SideBar Is That Side Menu Out 
              Which Can Be Toggled Inside & Outside The Page.',
  'para_2' => 'To Create a SideBar In Your Website, Read The Folowing Code : <br> <br>',
  'para_3' => 'The Default SideBar Is Made For ltr Direction, If You Want To Make It rtl Direction
              Add Class <code class="res-light-code inline-code">.res-right-sidebar</code> 
              Instead Of <code class="res-light-code inline-code">.res-sidebar</code>.'
);

$layout_pagination = array(
  // Subtitles
  'sub_1' => 'What Is a Pagination :',
  'sub_2' => 'Resposive-me Pagination :',

  // Paragraphs
  'para_1' => 'If You Have long content On Your Web Page, It\'s Better To Split Up It into shorter, By Using Pagination : <br> <br>
              <div class="res-pagination">
                <a class="item">1</a>
                <a class="item">2</a>
                <a class="item">3</a>
                <a class="item">4</a>
                <a class="item">5</a>
              </div> <br>
              This Is The Default Responsive-me Pagination, There Is Also The Bordered Pagination : <br> <br>
              <div class="res-bordered-pagination">
                <a class="item">1</a>
                <a class="item">2</a>
                <a class="item">3</a>
                <a class="item">4</a>
                <a class="item">5</a>
              </div>',
  'para_2' => 'Read The Code Below, This Is The Responsive-me Pagination Code : <br> <br>',
  'para_3' => 'The Bordered Pagination Is Build By Using The Class
              <code class="res-light-code inline-code">.res-bordered-pagination</code> Instead Of
              <code class="res-light-code inline-code">.res-pagination</code>',
);

$layout_footer = array(
  // Subtitles
  'sub_1' => 'What is a Footer :',
  'sub_2' => 'Responsive-me Footer :',

  // Paragraphs
  'para_1' => 'a Footer Is The Section In The Bottom Of Your Website,
              It Contains Some Secondary Links, Copyrights, & The Owner Of This Website,
              Responsive-me Footer Has Minimum Height <code class="res-light-code inline-code">30px</code>
              & It Is Possible To Fix it Just In The Bottom Of Your Website By Adding The Class
              <code class="res-light-code inline-code">.fixed-bottom</code>.',
  'para_2' => 'responsive-me Footer Is Very Simple, Just Add The Class <code class="res-light-code inline-code">.res-footer</code>
              To Your HTML5 footer tag : <br> <br>',
);