<?php

// Websit Header Vocabulary
$header = array(
  'home'     => 'الرئيسة',
  'docs'     => 'التوثيق',
  'examples' => 'أمثلة',
  'themes'   => 'القوالب'
);

// Websit Intro Part Vocabulary
$intro = array(
  'title'       => 'RESPONSIVE-ME',
  'description' => 'مكتبة أخرى لتصميم واجهات المستخدم، وإضافة بعض الجمال والتجاوب إلى موقعك ^_^',
  'download'    => 'تحميل',
  'get_started' => 'لنبدأ',
  'support'     => 'إدعمنا'
);

// Websit Why Us Part Vocabulary
$why_us = array(
  'title' => 'لماذا responsive-me؟',

  'subtitle-1' => 'مواقع متعددة الغات',
  'subtitle-2' => 'سهلة التعلم',
  'subtitle-3' => 'موقع متجاوب',

  'desc-1' => 'يمكنك استعمال res-me من أجل إنشاء مواقع متعددة اللغات بدون إستدعاء أي ملف أو استعمال كلاسات إضافية.',
  'desc-2' => 'res-me عبارة عن تجميعة من الكلاسات التي يسهل تذكرها والعمل بها. وللمزيد من التوضيح زر صفحة التوثيق',
  'desc-3' => 'يحتوي res-me على نظام شبكة يمكنك من إنشاء مواقع متجاوبة مع جميع أحجام الشاشات.',
);

// Websit About the Team Vocabulary
$the_team = array(
  'title'     => 'تعرف على الفريق',
  'my_name'   => 'إبراهيم الحوب',
  'about_me'  => 'أهلا بالعالم! إسمي إبراهيم الحوب، أبلغ من العمر 17 سنة، مطور ويب، أحب الرياضيات والبرمجة لدرجة أني أستطيع أن أقضي يومي كله في كتابة الأكواد دون الشعور بالملل. <br/>
                إذا أعجبك هذا المشروع فإني أدعوك لدعمي، أو مساعدتي في تطويره وإضافة مميزات جديدة. <br/>
                أنا ممتن جدا لزيارتك ^_^.',
  'alert'     => 'مرحبا بك في الفريق، إذا أردت أن تصبح واحدا منا فيمكنك ذلك عن طريق زيارة 
                  <a href="https://github.com/ElhoubeBrahim/Responsive-me_Framework" class="res-txt-dark-blue">Github Repositry</a>،
                  هناك العديد من الأخطاء تنتظر من يصلحها ^_^'
);

// Websit Last Part Vocabulary
$actions = array(
  'title'       => 'ماذا تود أن تفعل؟',
  'get_started' => 'لنبدأ',
  'support'     => 'ساعدنا على النمو',
  'help'        => 'أساعد في التطوير'
);

// Websit General Vocabulary
$dict = array(
  'prev' => 'السابق',
  'next' => 'التالي'
);

// $page_name['index_of_subtitle'], $page_name['index_of_paragraph']
// sub_i = Subtitle Index
// para_i = Praragraph Index

$index = array(
  // Subtitles
  'sub_1' => 'تعرف على Responsive-me :',
  'sub_2' => 'التثبيت :',

  // Praragraphs
  'para_1' => 'Responsive-me مكتبة مفتوحة المصدر، قمت ببنائها لكي أمتحن مهاراتي في تصميم الويب،
              بأمكانك أنت أيضا أن تعرض مهاراتك من خلال زيارتك لـ <a href="https://github.com/ElhoubeBrahim/Responsive-me_Framework">Github Repositry</a>, وإضافة مميزات جديدة للمكتبة,
              أو التقاط بعض البق. سأكون شاكرا إذا قمت بذلك ^_^
              <br>
              <br>
              يمكنك استعمال Responsive-me في جميع مشاريعك مجانا، المطلب الوحيد هو ذكر هذا الموقع لو كان ذلك في الإمكان ^_^.',
  'para_2' => 'لاستعمال Resposive-me فقط قم <a href="' . $website_url . 'responsive-me.rar" target="_blank">بتحميلها</a>, 
              ثم استخرج ملفات المكتبة وضعها في ملف المشروع الخاص بك.
              <br>
              بعد التحميل قم بكتابة الكود التالي في ملف index.html : <br> <br>'
);

$basic = array(
  // Subtitles
  'sub_1' => 'الإعداد العام للصفحة :',
  'sub_2' => 'الروابط :',
  'sub_3' => 'الإقتباسات :',
  'sub_4' => 'الصور :',
  'sub_5' => 'إضافات مساعدة :',

  // Paragraphs
  'para_1' => 'Responsive-me إستعانت بمكتبة <a href="https://necolas.github.io/normalize.css/">normalize.css</a> لإعداد الصفحة
              وتجنب أخطاء التوافقية، إضافة إلى تصحيح ظهور بعض الوسوم في متصفح IE.
              <br>
              <br>
              وفيما يلي الإعداد الخاص بوسم body -جسم صفحة الويب- : <br> <br>',
  'para_2' => 'الروابط في Responsive-me <a>زرقاء اللون</a> <code class="res-light-code inline-code">#115cd0</code>,
              وتصبح زرقاء غامقة ومسطرة في حال مرور مؤشر الفأرة عليها,
              إضافة إلى ذلك Responsive-me تقدم لك تجميعة من الروابط بإمكانك استخدامها في تصاميمك:
              <span class="res-flex" style="justify-content: space-between; padding: 10px 50px 10px 50px">
                <a href="#">إضغط هنا !</a>
                <a href="#" class="res-link-1 res-txt-red">إضغط هنا !</a>
                <a href="#" class="res-link-2 res-txt-green">إضغط هنا !</a>
                <a href="#" class="res-link-3 res-txt-yellow">إضغط هنا !</a>
                <a href="#" class="res-link-4 res-txt-black">إضغط هنا !</a>
              </span>
              يكفي إضافة كلاس من الكلاسات المتواجدة في الأسفل للرابط 
              <code class="res-light-code inline-code">
                &lt;<span class="tag">a</span> <span class="attribute">class</span>="<span class="keyword">res-link-1</span>">...&lt;/<span class="tag">a</span>>
              </code>&nbsp;
                هذا كل شيء ^_^ <br> <br>
              <div class="res-responsive-table">
                <table class="res-table">
                  <thead>
                    <tr>
                        <th>الكلاس</th>
                        <th>النتيجة</th>
                    </tr>
                  </thead>

                  <tbody>
                    <tr>
                      <td><code class="res-light-code inline-code">.res-link-1</code></td>
                      <td><a href="" class="res-link-1 res-txt-red">إضغط هنا !</a></td>
                    </tr>
                    <tr>
                      <td><code class="res-light-code inline-code">.res-link-2</code></td>
                      <td><a href="" class="res-link-2 res-txt-green">إضغط هنا !</a></td>
                    </tr>
                    <tr>
                      <td><code class="res-light-code inline-code">.res-link-3</code></td>
                      <td><a href="" class="res-link-3 res-txt-yellow">إضغط هنا !</a></td>
                    </tr>
                    <tr>
                      <td><code class="res-light-code inline-code">.res-link-4</code></td>
                      <td><a href="" class="res-link-4 res-txt-black">إضغط هنا !</a></td>
                    </tr>
                    <tr>
                      <td>
                        <code class="res-light-code inline-code">.res-muted-link</code> 
                        <br><span class="res-txt-light-grey res-sm-txt"># remove Link\'s Style</span>
                      </td>
                      <td><a href="" class="res-muted-link">إضغط هنا !</a></td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <div class="res-alert res-bg-light-green res-txt-white">
                إذا رغبت في إضافة روابط إبداعية جديدة للمكتبة، تفضل بزيارة <a href="https://github.com/ElhoubeBrahim/Responsive-me_Framework" class="res-txt-dark-blue">The Github Repositry</a>
              </div>',
  'para_3' => '<blockquote class="res-blockquote">
                مرحبا، صراحة لا أملك أي شيء لأقوله هنا -_-\'
                <div class="res-blockquote-info">القائل: مجهول الهوية</div>
              </blockquote> <br>
              كما ترى في الأعلى، الإقتباسات في Responsive-me مهيأة بشكل مختلف: خط مائل، رقيق ومظلل،
              لإضافة مساحة للاقتباسات، أضف الكود التالي إلى محرر النصوص : <br> <br>',
  'para_4' => 'الصور أدوات قوية للتعبير عن الأفكار، فالصورة بألف كلمة كما يقال. لكن مصممي الويب 
              لديهم ذكريات موحشة مع الصور =_= ولذلك خصصت Responsive-me كلاسات لتحكم أكبر بالصور،
              ولتجاوز بعض المشاكل المعتادة : <br> <br>
              <div class="res-responsive-table">
                <table class="res-table">
                  <thead>
                    <tr>
                        <th>الكلاس</th>
                        <th>الشرح</th>
                    </tr>
                  </thead>

                  <tbody>
                    <tr>
                      <td><code class="res-light-code inline-code">.res-img</code></td>
                      <td>تجعل الصورة متجاوبة في العرض والطول مع الحاوي الذي يحويها.</td>
                    </tr>
                    <tr>
                      <td><code class="res-light-code inline-code">.res-circle-img</code></td>
                      <td>جعل الصورة دائرية.</td>
                    </tr>
                    <tr>
                      <td><code class="res-light-code inline-code">.res-thumbnail-img</code></td>
                      <td>إضافة إطار على الصورة.</td>
                    </tr>
                  </tbody>
                </table>
              </div> <br>

              المثال أسفله يبين تأثير الكلاسات أعلاه على صورة كبيرة الحجم (5066×3377) :
              
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
  'para_5' => 'في الجدول أسفله تجميعة من الكلاسات التي تساعدك في تسريع عملية التصميم : <br> <br>
              <div class="res-responsive-table">
                <table class="res-table">
                  <thead>
                    <tr>
                        <th>الكلاس</th>
                        <th>الشرح</th>
                    </tr>
                  </thead>

                  <tbody>
                    <tr>
                      <td><code class="res-light-code inline-code">.res-flex</code></td>
                      <td>جعل العنصر Flexible.</td>
                    </tr>
                    <tr>
                      <td><code class="res-light-code inline-code">.res-overlay</code></td>
                      <td>
                        تغطية الصفحة بغطاء شفاف, <a class="show-overlay">إضغط هنا</a> لرؤية مثال
                        <div class="res-overlay"></div>
                      </td>
                    </tr>
                    <tr>
                      <td><code class="res-light-code inline-code">.res-no-margin</code></td>
                      <td>حذف الهوامش الخارجية للعنصر.</td>
                    </tr>
                    <tr>
                      <td><code class="res-light-code inline-code">.res-no-border</code></td>
                      <td>حذف تأطير العنصر.</td>
                    </tr>
                    <tr>
                      <td><code class="res-light-code inline-code">.res-no-padding</code></td>
                      <td>حذف الهوامش الداخلية للعنصر.</td>
                    </tr>
                    <tr>
                      <td><code class="res-light-code inline-code">.res-bordered</code></td>
                      <td>تأطير العنصر.</td>
                    </tr>
                  </tbody>
                </table>
              </div>',
);

$typography = array(
  // Subtitles
  'sub_1' => 'العناوين :',
  'sub_2' => 'أحجام النصوص :',
  'sub_3' => 'كلاسات مساعدة :',

  // Paragraphs
  'para_1' => 'العناوين مهمة جدا في المواقع، فهي تساعد على ترتيب المحتوى وفصله،
              كما تسهم في جعل الموقع صديقا لمحركات البحث (SEO)،
              ولذا فإن Responsive-me توفر بعض التهييئات للعناوين : <br> <br>
              <div class="res-card">
                <h1>العنوان 1</h1>
                <h2>العنوان 2</h2>
                <h3>العنوان 3</h3>
                <h4>العنوان 4</h4>
                <h5>العنوان 5</h5>
                <h6>العنوان 6</h6>
              </div>
              لاستعمال هذه الكلاسات فقط أضفها للمحتوى : <br> <br>
              <div class="res-responsive-table">
                <table class="res-table">
                  <thead>
                    <th>الكلاس</th>
                    <th>الحجم</th>
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
  'para_2' => 'هذه بعض الكلاسات المفيدة للتحكم في حجم النصوص داخل موقعك : <br> <br>
              <div class="res-responsive-table">
                <table class="res-table">
                  <thead>
                    <th>الكلاس</th>
                    <th>الحجم</th>
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
  'para_3' => 'هذه مجموعة أخرى من الكلاسات، يمكنك استعمالها لسيطرة أكبر على النصوص دون كتابة أكواد CSS : <br> <br>
              <div class="res-responsive-table">
                <table class="res-table">
                  <thead>
                    <th>الكلاس</th>
                    <th>الشرح</th>
                  </thead>
                  <tbody>
                    <tr>
                      <td><code class="res-light-code inline-code">.res-mark-txt</code></td>
                      <td>هذه الكلاس تستخدم <span class="res-mark-txt">لتظليل النص</span></td>
                    </tr>
                    <tr>
                      <td><code class="res-light-code inline-code">.res-txt-right</code></td>
                      <td class="res-txt-right">محاذاة النص لليمين</td>
                    </tr>
                    <tr>
                      <td><code class="res-light-code inline-code">.res-txt-left</code></td>
                      <td class="res-txt-left">محاذاة النص للشمال</td>
                    </tr>
                    <tr>
                      <td><code class="res-light-code inline-code">.res-txt-center</code></td>
                      <td class="res-txt-center">محاذاة النص في الوسط</td>
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
  'sub_1' => 'القوائم :',
  'sub_2' => 'أمثلة :',

  // Paragraphs
  'para_1' => 'تعتبر القوائم الخيار الأول من أجل عرض المعلومات المترتبطة بشكل منظم,
              لذا Responsive-me تقدم لك بعض الكلاسات لتزيين القوائم في موقعك : <br> <br>
              <div class="res-responsive-table">
                <table class="res-table">
                  <thead>
                    <th>الكلاس</th>
                    <th>الشرح</th>
                  </thead>
                  <tbody>
                    <tr>
                      <td><code class="res-light-code inline-code">.res-unstyled-list</code></td>
                      <td>حذف النقط السوداء في بداية عناصر القائمة</td>
                    </tr>
                    <tr>
                      <td><code class="res-light-code inline-code">.res-inline-list</code></td>
                      <td>عرض عناصر القائمة في سطر أفقي واحد</td>
                    </tr>
                    <tr>
                      <td><code class="res-light-code inline-code">.res-bordered-list</code></td>
                      <td>تأطير وتبطين عناصر القائمة</td>
                    </tr>
                    <tr>
                      <td><code class="res-light-code inline-code">.res-hoverable-list</code></td>
                      <td>إضافة تأثير على عناصر القائمة وقت مرور مؤشر الفأرة عليها</td>
                    </tr>
                  </tbody>
                </table>
              </div>',
  'para_2' => 'رجاء إقرأ الكود أسفله بتأن من أجل فهمه : <br> <br>',
  'para_3' => 'في هذا الجزء سنحاول بناء ما يسمى list group باستعمال كلاسات القوائم وكلاس flex : <br> <br>
              <ul class="res-hoverable-list res-flex">
                <li class="list-item active">العنصر 1</li>
                <li class="list-item">العنصر 2</li>
                <li class="list-item">العنصر 3</li>
                <li class="list-item">العنصر4</li>
                <li class="list-item">العنصر5</li>
                <li class="list-item">العنصر6</li>
                <li class="list-item">العنصر7</li>
                <li class="list-item">العنصر8</li>
                <li class="list-item">العنصر9</li>
                <li class="list-item">العنصر10</li>
              </ul>'
);

$forms = array(
  // Subtitles
  'sub_1' => 'حقول الإدخال :',
  'sub_2' => 'مجموعات الحقول :',
  'sub_3' => 'حقول الإدخال والأيقونات :',
  'sub_4' => 'حقول الإدخال المهيأة :',

  // Paragraphs
  'para_1' => 'النماذج وسيلة للتفاعل مع المستخدم واستقبال البيانات منه,
              لذا يجب علينا أن نجعلها جذابة وذلك بإضافة بعض التأثيرات البصرية كالظلال والحركات،
              هيا بنا لنكتشف مفاجآت responsive-me بخصوص النماذج : <br> <br>',
  'para_2' => 'الإنتقالات والحركات اللطيفة ضرورية لبناء حقول إدخال صديقة للمستخدم،
              أظن أن السبب واضح لا يحتاج إلى شرح ^_^ فحقول الإدخال في كل مكان :
              <br> <br>
              <div class="res-responsive-table">
                <table class="res-table">
                  <thead>
                    <th>الكلاس</th>
                    <th>الشرح</th>
                    <th>النتيجة</th>
                  </thead>
                  <tbody>
                    <tr>
                      <td><code class="res-light-code inline-code">.res-input</code></td>
                      <td>حقل الإدخال الرئيسي</td>
                      <td><input type="text" class="res-input"></td>
                    </tr>
                    <tr>
                      <td><code class="res-light-code inline-code">.res-valid-input</code></td>
                      <td>عند إدخال بيانات صحيحة من طرف المستخدم</td>
                      <td><input type="text" class="res-input res-valid-input"></td>
                    </tr>
                    <tr>
                      <td><code class="res-light-code inline-code">.res-non-valid-input</code></td>
                      <td>عند إدخال بيانات غير صحيحة من طرف المستخدم</td>
                      <td><input type="text" class="res-input res-non-valid-input"></td>
                    </tr>
                  </tbody>
                </table>
              </div>',
  'para_3' => 'إذا رغبت في إضافة نص فوق حقل الإدخال يبين محتواه، 
              من أجل توجيه المستخدم وتوضيح البيانات المطلوبة منه،
              فعليك أن تضع حقل الإدخال داخل حاوية بكلاس <code class="res-light-code inline-code">.res-input-gp</code>,
              مثال للتوضيح : <br> <br>

              <div class="res-input-gp">
                <label for="id">الإسم الكامل :</label>
                <input type="text" class="res-input">
              </div>',
  'para_4' => '<div class="res-alert res-bg-light-green res-txt-white">
                ينصح باستعمال الكلاس <code class="res-light-code inline-code">.res-input-gp</code>
                في جميع حقول الإدخال من أجل تنظيم الكود الخاص بك.
              </div>',
  'para_5' => 'إذا أردت إضافة أيقونة لحقل الإدخال كالمثال أسفله,
              قم بنسخ الكود أسفله وتغيير المحتوى وليس البنية,
              Because He Won\'t Work If You Do : <br> <br>
              <div class="res-input-with-icon">
                <label for="pwd">كلمة السر : <span class="res-sm-txt">(إضغط على أيقونة العين)</span></label>
                <div class="res-input">
                  <i class="ri-eye-close-line" id="sh" style="cursor: pointer;"></i>
                  <input type="password" id="pwd" value="1234">
                </div>
              </div>',
  'para_6' => 'Responsive-me توفر لك بعض الحقول المهيأة مسبقا من أجل استخدامها في تصاميمك : <br> <br>
              <div class="res-input-gp-1">
                <input type="text" id="pwd">
                <label for="pwd">كلمة السر :</label>
                <span></span>
              </div>  
              لاستخدام الحقل أعلاه قم بـ
              <code class="res-light-code inline-code">ctrl+c</code> 
              <code class="res-light-code inline-code">ctrl+v</code> الكود أسفله: <br> <br>',
  'para_7' => '<div class="res-alert res-bg-light-green res-txt-white">
                في حال رغبت بإضافة تصميم لحقول إبداعية جديدة، فقط قم بزيارة <a href="https://github.com/ElhoubeBrahim/Responsive-me_Framework" class="res-txt-dark-blue">The Github Repositry</a>
              </div>',

);

$tables = array(
  // Subtitles
  'sub_1' => 'الجداول في Responsive-me :',
  'sub_2' => 'الجداول المشرطة :',
  'sub_3' => 'الجداول والتأثيرات :',
  'sub_4' => 'الجداول المتجاوبة :',

  // Paragraphs
  'para_1' => 'الجداول وسائل فعالة جدااا لعرض المعلومات وتنظيمها.
                لهذا Responsive-me توفر لك مجموعة من الكلاسات لتزيين جداولك
                وجعلها سهلة التحليل والقراءة :',
  'para_2' => 'الجدول أسفله هو الجدول الرئيسي في Responsive-me. لإضافته استخدم الكلاس  
              <code class="res-light-code inline-code">.res-table</code> <br> <br>
              <table class="res-table">
                <thead>
                  <tr>
                    <th>ر.ت</th>
                    <th>الإسم الأول</th>
                    <th>الإسم الأخير</th>
                    <th>البريد الإلكتروني</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>1</td>
                    <td>إبراهيم</td>
                    <td>الحوب</td>
                    <td>brahim.elhoube@gmail.com</td>
                  </tr>
                  <tr>
                    <td>2</td>
                    <td>أحمد</td>
                    <td>محمود</td>
                    <td>ahmed@gmail.com</td>
                  </tr>
                  <tr>
                    <td>3</td>
                    <td>أليكس</td>
                    <td>جو</td>
                    <td>alexjoe@gmail.com</td>
                  </tr>
                </tbody>
              </table>',
  'para_3' => 'تستعمل الجداول المشرطة ^_^ لإظهار التباين بين صفوف الجدول, لإنشاء جدول مشرط ^_^ أضف الكلاس
            <code class="res-light-code inline-code">.res-striped-table</code> : <br> <br>
            <table class="res-striped-table">
              <thead>
                <tr>
                  <th>ر.ت</th>
                  <th>الإسم الأول</th>
                  <th>الإسم الأخير</th>
                  <th>البريد الإلكتروني</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>1</td>
                  <td>إبراهيم</td>
                  <td>الحوب</td>
                  <td>brahim.elhoube@gmail.com</td>
                </tr>
                <tr>
                  <td>2</td>
                  <td>أحمد</td>
                  <td>محمود</td>
                  <td>ahmed@gmail.com</td>
                </tr>
                <tr>
                  <td>3</td>
                  <td>أليكس</td>
                  <td>جو</td>
                  <td>alexjoe@gmail.com</td>
                </tr>
              </tbody>
            </table>',
  'para_4' => 'تستعمل التأثيرات لإضافة بعض الحيوية للجدول، لإضافة تأثير على صفوف الجدول أثناء مرور مؤشر الفأرة إستعمل الكلاس
            <code class="res-light-code inline-code">.res-hoverable-table</code> <br> <br>
            <table class="res-hoverable-table">
              <thead>
                <tr>
                  <th>ر.ت</th>
                  <th>الإسم الأول</th>
                  <th>الإسم الأخير</th>
                  <th>البريد الإلكتروني</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>1</td>
                  <td>إبراهيم</td>
                  <td>الحوب</td>
                  <td>brahim.elhoube@gmail.com</td>
                </tr>
                <tr>
                  <td>2</td>
                  <td>أحمد</td>
                  <td>محمود</td>
                  <td>ahmed@gmail.com</td>
                </tr>
                <tr>
                  <td>3</td>
                  <td>أليكس</td>
                  <td>جو</td>
                  <td>alexjoe@gmail.com</td>
                </tr>
              </tbody>
            </table>',
  'para_5' => 'في بعض الأحيان، قد نرغب في عرض بيانات كثيرة داخل الجدول، 
            لكن البيانات تصبح متداخلة في الشاشات الصغيرة مما يجعل قراءتها وتتبعها صعبا
            لحل هذا المشكل responsive-me تقدم لك الكلاس 
            <code class="res-light-code inline-code">.res-responsive-table</code>
            لجعل الجدول scrollable، يكفي فقط إضافتها إلى حاوي الجدول كما نرى في الكود:
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
  'sub_1' => 'الألوان في Responsive-me :',
  'sub_2' => 'الخلفيات :',
  'sub_3' => 'النصوص :',
  'sub_4' => 'التأثيرات :',
  'sub_5' => 'الإطارات :',

  // Paragraphs
  'para_1' => 'Responsive-me تقدم لك 30 لونا لتستخدمها في تصاميمك وتلون بها مواقعك، 
              لذلك لن تضطر في التأخر أثناء اختيار ألوان موقعك.
              لقد تم اختيار جميع الألوان بعناية : <br> <br>
              <div id="colors" class="res-row res-txt-white"></div>',
  'para_2' => 'لتلوين خلفية عنصر ما فقط قم بإضافة الكلاس 
              <code class="res-light-code inline-code">.res-bg-<span class="comment">color</span></code>
              وغير الكلمة \'color\' بإسم اللون الذي اخترته : <br> <br>',
  'para_3' => '<div class = "res-bg-light-brown res-alert">
                مرحبا بك، هذا هو اللون البني الفاتح
              </div>
              هذه بعض الكلاسات الإضافية التي قد تحتاجها : <br> <br>
              <table class="res-table">
                <thead>
                  <tr>
                    <th>الكلاس</th>
                    <th>الشرح</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td><code class="res-light-code inline-code">.res-bg-black</code></td>
                    <td>خلفية سوداء</td>
                  </tr>
                  <tr>
                    <td><code class="res-light-code inline-code">.res-bg-white</code></td>
                    <td>خلفية بيضاء</td>
                  </tr>
                  <tr>
                    <td><code class="res-light-code inline-code">.res-bg-transparent</code></td>
                    <td>خلفية شفافة</td>
                  </tr>
                </tbody>
              </table>',
  'para_4' => 'لتلوين النصوص بلون معين، قم بإضافة الكلاس التالي 
              <code class="res-light-code inline-code">.res-txt-<span class="comment">color</span></code>
              وغير الكلمة \'color\' باسم اللون الذي اخترته : <br> <br>',
  'para_5' => '<div class = "res-txt-white res-bg-dark-purple res-alert">
                هذا نص أبيض في خلفية بنفسجية غامقة
              </div>',
  'para_6' => 'لتغيير خلفية عنصر أثناء مرور مؤشر الفأرة عليه قم بإضافة الكلاس التالي  
              <code class="res-light-code inline-code">.res-<span class="comment">color</span>-hover</code>
              إلى العنصر <br> <br>
              <div class="res-flex">
                <button class="res-btn res-red-hover">Hover Me</button> &nbsp;
                <button class="res-btn res-dark-blue-hover">Hover Me</button> &nbsp;
                <button class="res-btn res-orange-hover">Hover Me</button> &nbsp;
              </div>',
  'para_7' => 'يمكنك أيضا تأطير عناصرك وتلوين الإطارات باستعمال 
              <code class="res-light-code inline-code">.res-<span class="comment">color</span>-border</code> و 
              <code class="res-light-code inline-code">.res-bordered</code>
              <br> <br>
              <div class="res-alert res-bg-white res-txt-red res-bordered res-blue-border">
                نص أحمر في خلفية بيضاء، مع إطار أزرق
              </div>',
);

$grid = array(
  // Subtitles
  'sub_1' => 'الحاويات :',
  'sub_2' => 'نظام الشبكة :',
  'sub_3' => 'البنية المتجاوبة :',
  'sub_4' => 'الإزاحة :',
  'sub_5' => 'إدفع/إسحب :',

  // Paragraphs
  'para_1' => 'Responsive-me تستعمل نظام الشبكة ذات الـ 12 عمود كأغلب المكتبات،
            ما يجعل التحكم في بنية الموقع أكثر سهولة،
            إذ يمكنك بإضافة كلاسات بسيطة جعل موقعك متجاوبا مع جميع الشاشات : 
            <span class="res-sm-txt">(قم بتغيير حجم الشاشة لترى التأثير)</span> <br> <br>
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
  'para_2' => 'الحاوية هي عنصر يقوم بتجميع العناصر داخله في وسط الشاشة، وذلك لجعل منظر الموقع جميلا,
              He Gives a Nice Look For Web Pages : <br> <br>
              <div class="res-row container_test res-txt-center">
                <div class="res-col sm-6">
                  <p>باستعمال الحاوية</p>
                  <div>
                    <div class="res-container">
                      <div class="tip"></div>
                      <div class="tip"></div>
                      <div class="tip"></div>
                    </div>
                  </div>
                </div>
                <div class="res-col sm-6">
                  <p>بدون استعمال الحاوية</p>
                  <div>
                    <div class="tip"></div>
                    <div class="tip"></div>
                    <div class="tip"></div>
                  </div>
                </div>
              </div>
              فقط قم بأضافة الكلاس
              <code class="res-light-code inline-code">.res-container</code>
              لحاوية المحتوى.',
  'para_3' => 'كما قلنا سابقا، فنظام الشبكة المستعمل هو نظام الـ 12 عمود,
              لتقسيم صفحتك، قم بقراءة الكود والتعليقات أسفله : <br> <br>',
  'para_4' => 'الكلاس <code class="res-light-code inline-code">.res-col-<span class="comment">num</span></code> مع تغيير num بين 1 و 12
              يساعد في تثبيت حجم عنصر معين في جميع الشاشات، على سبيل المثال في الشبكة أسفله,
              إذا قمت بتغيير حجم الشاشة فلا شيء سيتغير، ستحافظ العناصر على عرضها : <br> <br>
              <div class="res-row" dir="ltr">
                <div class="res-col-3 grid_test">.res-col-3</div>
                <div class="res-col-3 grid_test">.res-col-3</div>
                <div class="res-col-3 grid_test">.res-col-3</div>
                <div class="res-col-3 grid_test">.res-col-3</div>
              </div>
              <br>
              <div class="res-row" dir="ltr">
                <div class="res-col-4 grid_test">.res-col-4</div>
                <div class="res-col-4 grid_test">.res-col-4</div>
                <div class="res-col-4 grid_test">.res-col-4</div>
              </div>
              <br>
              <div class="res-row" dir="ltr">
                <div class="res-col-6 grid_test">.res-col-6</div>
                <div class="res-col-6 grid_test">.res-col-6</div>
              </div>
              <br>
              <div class="res-row" dir="ltr">
                <div class="res-col-12 grid_test">.res-col-12</div>
              </div>',
  'para_5' => 'ربما قد تتساءل : \'ماذا إن أردت أن أجعل موقعي متجاوبا ؟\', 
              للإجابة على السؤال قم بقراء الجدول أسفله : <br> <br>
              <div class="res-responsive-table">
                <table class="res-table">
                  <thead>
                    <tr>
                      <th>الكلاس</th>
                      <th>الشاشة</th>
                      <th>الشرح</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td><code class="res-light-code inline-code">.xs-<span class="comment">num</span></code></td>
                      <td>الشاشات الصغيرة جدا (<=800px)</td>
                      <td>التحكم في حجم العنصر، في الشاشات الصغيرة جدا فقط</td>
                    </tr>
                    <tr>
                      <td><code class="res-light-code inline-code">.sm-<span class="comment">num</span></code></td>
                      <td>الشاشات الصغيرة (>=801px)</td>
                      <td>التحكم في حجم العنصر، في الشاشات الصغيرة فما فوق</td>
                    </tr>
                    <tr>
                      <td><code class="res-light-code inline-code">.md-<span class="comment">num</span></code></td>
                      <td>الشاشات المتوسطة (>=992px)</td>
                      <td>التحكم في حجم العنصر، في الشاشات المتوسطة فما فوق</td>
                    </tr>
                    <tr>
                      <td><code class="res-light-code inline-code">.lg-<span class="comment">num</span></code></td>
                      <td>الشاشات الكبيرة (>=1200px)</td>
                      <td>التحكم في حجم العنصر، في الشاشات الكبيرة فما فوق</td>
                    </tr>
                  </tbody>
                </table>
              </div> <br> <br>
              إذا قمت بتغيير حجم الشاشة فستلاحظ تجاوب الشبكة أسفله : <br> <br>
              <div class="res-row" dir="ltr">
                <div class="res-col sm-3 grid_test">.sm-3</div>
                <div class="res-col sm-3 grid_test">.sm-3</div>
                <div class="res-col sm-3 grid_test">.sm-3</div>
                <div class="res-col sm-3 grid_test">.sm-3</div>
              </div>
              <br>
              <div class="res-row" dir="ltr">
                <div class="res-col xs-4 sm-5 md-6 lg-12 grid_test">.xs-4 .sm-5 .md-6 .lg-12</div>
              </div>',
  'para_6' => 'يمكنك إزاحة عنصر ما بمقدار عدد معين من الأعمدة : <br> <br>
              <div class="res-row">
                <div class="res-col-6 res-offset-2 grid_test">هذا عنصر مكون من 4 أعمدة، بإزاحة عمودين</div>
              </div> <br>
              لإزاحة عنصر قم باستعمال الكلاس
              <code class="res-light-code inline-code">.res-offset-<span class="comment">num</span></code>
              مع تغيير num بين 1 و 12
              يمكنك أيضا جعل الإزاحة متجاوبة مع حجم الشاشة باستعمال الكلاس
              <code class="res-light-code inline-code">.res-offset-<span class="comment">screen</span>-<span class="comment">num</span></code>
              مع تبديل screen بواحدة من الشاشات xs، sm، md أو lg',
  'para_7' => 'يمكنك أيضا تخصيص جهة الإزاحة باستعمال push و pull، 
              الفرق بينهما أن push يقوم بالإزاحة من اليسار، و pull من اليمين.
              لاستعمال هاتين الميزتين أضف أحد الكلاسات التالية  
              <code class="res-light-code inline-code">.res-push-<span class="comment">num</span></code> أو
              <code class="res-light-code inline-code">.res-pull-<span class="comment">num</span></code>
              يمكنك أيضا تخصيص push و pull حسب حجم الشاشة كالتالي 
              <code class="res-light-code inline-code">.res-push-<span class="comment">screen</span>-<span class="comment">num</span></code> أو
              <code class="res-light-code inline-code">.res-pull-<span class="comment">screen</span>-<span class="comment">num</span></code>',
);

$buttons = array(
  // Subtitles
  'sub_1' => 'الأزرار :',
  'sub_2' => 'مجموعات الأزرار :',

  // Paragraphs
  'para_1' => 'Responsive-me توفر مجموعة من الأزرار الجميلة، التي تجذب المستخدم ليضغط عليها ^_^,
              الزر أسفله هو الزر الرئيسي في Responsive-me : <br> <br>
              <div class="res-btn-gp res-txt-center">
                <button class="res-btn">إضغط علي</button>
                <button class="res-btn">
                  <i class="ri-account-circle-fill"></i>
                  زر مع أيقونة
                </button>
              </div>
              أنا أعترف بأن الأزرار أعلاه ليست جميلة بما يكفي لجذب المستخدم، لكن مع إضافة كلاسات الألوان ستكون كذلك :
              <br> <br>
              <div class="res-btn-gp">
                <button type="إرسال" class="res-btn">
                  <i class="ri-account-circle-fill"></i>
                  إرسال
                </button>
                <button type="إرسال" class="res-brown-btn shadow">
                  <i class="ri-account-circle-fill"></i>
                  إرسال
                </button>
                <button type="إرسال" class="res-red-btn shadow">
                  <i class="ri-account-circle-fill"></i>
                  إرسال
                </button>
                <button type="إرسال" class="res-blue-btn shadow">
                  <i class="ri-account-circle-fill"></i>
                  إرسال
                </button>
                <button type="إرسال" class="res-green-btn shadow">
                  <i class="ri-account-circle-fill"></i>
                  إرسال
                </button>
                <button type="إرسال" class="res-yellow-btn shadow">
                  <i class="ri-account-circle-fill"></i>
                  إرسال
                </button>
              </div>
              إذن هيا بنا لنكتشف كلاسات الأزرار في Responsive-me : <br> <br>
              <div class="res-responsive-table">
                <table class="res-table">
                  <thead>
                    <tr>
                      <th>الكلاس</th>
                      <th>الشرح</th>
                      <th>النتيجة</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td><code class="res-light-code inline-code">.res-btn</code></td>
                      <td>الزر الرئيسي</td>
                      <td><button class="res-btn">إضغط هنا</button></td>
                    </tr>
                    <tr>
                      <td><code class="res-light-code inline-code">.res-<span class="comment">color</span>-btn</code></td>
                      <td>
                        لون الزر بأحد 
                        <a href="<?php echo $website_url ?>documentation/css_styling/colors.php">ألوان Res-me</a>
                      </td>
                      <td><button class="res-blue-btn">إضغط هنا</button></td>
                    </tr>
                    <tr>
                      <td><code class="res-light-code inline-code">.shadow</code></td>
                      <td>أضف ظلا ظريفا على الزر</td>
                      <td><button class="res-blue-btn shadow">إضغط هنا</button></td>
                    </tr>
                    <tr>
                      <td>disabled button</td>
                      <td>تميز الأزرار الغير مفعلة</td>
                      <td><button class="res-btn" disabled>إضغط هنا</button></td>
                    </tr>
                  </tbody>
                </table>
              </div> <br>',
  'para_2' => '<div class="res-alert res-bg-light-green res-txt-white">
                هذه بعض الملاحظات المهمة : <br> <br>
                <ul>
                  <li>الأزرار في Responsive-me عبارة عن عناصر Flex.</li>
                  <li>
                    ألوان الخلفية تعمل على الأزرار، لكن يستحسن إستعمال كلاسات الأزرار لتلوينها.
                  </li>
                  <li>
                    الظلال لا تعمل في الألوان الفاتحة كالأصفر.
                  </li>
                  <li>
                    إذا أردت أن تجعل زرا غير مفعل فقط أضف الخاصية "disabled" لوسم الزر.
                  </li>
                </ul>
              </div>',
  'para_3' => 'يصعب وضع الأزرار في خط واحد لأنها عبارة عن عناصر flex، لذلك قدمت Res-me الكلاس
              <code class="res-light-code inline-code">.res-btn-gp</code> لفعل ذلك : <br> <br>
              <div class="res-btn-gp">
                <button type="إرسال" class="res-btn">
                  <i class="ri-account-circle-fill"></i>
                  إرسال
                </button>
                <button type="إرسال" class="res-brown-btn shadow">
                  <i class="ri-account-circle-fill"></i>
                  إرسال
                </button>
                <button type="إرسال" class="res-red-btn shadow">
                  <i class="ri-account-circle-fill"></i>
                  إرسال
                </button>
                <button type="إرسال" class="res-blue-btn shadow">
                  <i class="ri-account-circle-fill"></i>
                  إرسال
                </button>
                <button type="إرسال" class="res-green-btn shadow">
                  <i class="ri-account-circle-fill"></i>
                  إرسال
                </button>
                <button type="إرسال" class="res-yellow-btn shadow">
                  <i class="ri-account-circle-fill"></i>
                  إرسال
                </button>
              </div>
              ها هو الكود : <br> <br>'                
);

$code = array(
  // Subtitles
  'sub_1' => 'الشيفرات في Responsive-me :',
  'sub_2' => 'عناصر الشيفرة :',
  'sub_3' => 'الشيفرة الفاتحة :',
  'sub_4' => 'الشيفرة الداكنة Atom :',
  'sub_5' => 'شيفرة الإختراق :',
  'sub_6' => 'بنية الشيفرة :',

  // Paragraphs
  'para_1' => 'Responsive-me توفر بعض التنسيقات لوسم code حيث تكتب الشيفرات البرمجية،
              التنسيق الإفتراضي للشيفرات كالتالي : <br> <br>
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
              لاستعمال الشيفرة الإفتراضية أضف الكلاس <code class="res-light-code inline-code">.res-code</code>
              لوسم &lt;code&gt;.',
  'para_2' => 'قبل أن نكتشف بنية الشيفرة، أود أن أشير إلى عناصرها،
              لذا إقرأ الجدول أسفله لاستيعابه (جميع الكلاسات أسفله يجب أن تكون في وسم span) : <br> <br>
              <div class="res-responsive-table">
                <table class="res-table">
                  <thead>
                    <tr>
                      <th>الكلاس</th>
                      <th>الشرح</th>
                      <th>النتيجة</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>
                        <code class="res-light-code inline-code">.language</code>
                      </td>
                      <td>
                        إسم اللغة، ويتم عرضه في الزاوية العليا من اليمين.
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
                        عرض النصوص العادية
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
                        عرض الكلمات المفتاحية (var, function, class, const, for, while, if, else ...)
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
                        عرض علامات الترقيم (: , ; / = + ...)
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
                        عرض التعليقات في اللغة
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
                        عرض السلاسل النصية
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
                        عرض اسماء الدوال
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
                        عرض أسماء الكائنات (OOP)
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
                        عرض أسماء المتغيرات
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
                        عرض أسماء الوسوم
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
                        عرض أسماء الخصائص
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
                        إضافة فراغ بين الأسطر
                      </td>
                      <td class="res-txt-center">
                        ^_^
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <br>
              لا تقلق بشأن ما يوجد في الجدول، فقط خزنه في بالك، سنعود إليه لا حقا',
  'para_3' => 'لاستعمال الشيفرة الفاتحة اللون، قم بإضافة الكلاس  
              <code class="res-light-code inline-code">.res-light-code</code>
              إلى وسم &lt;code&gt;.<br> <br>',
  'para_4' => 'لاستعمال الشيفرة الداكنة اللون، قم بإضافة الكلاس  
              <code class="res-light-code inline-code">.res-atom-code</code>
              إلى وسم &lt;code&gt;.<br> <br>',
  'para_5' => 'لاستعمال الشيفرة الخاصة بالإختراق، قم بإضافة الكلاس  
              <code class="res-light-code inline-code">.res-hacker-code</code>
              إلى وسم &lt;code&gt;.<br> <br>',
  'para_6' => 'لإنشاء مساحة للأكواد في موقعك قم بكتابة الكود أسفله : <br> <br>
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
              لنقم بأضافة بعض المحتوى داخل المساحة المخصصة للشيفرات : <br> <br>',
  'para_7' => '<div class="res-alert res-bg-light-green res-txt-white">
                لتجنب مشاكل الكتابة والتداخل إستعمل <a href="http://www.w3schools.com" class="res-txt-blue">الرموز في Html</a>
              </div>
              بصفة عامة مساحة الشيفرات في Responsive-me يجب أن تكون على الشكل التالي : <br> <br>',
);

$more = array(
  // Subtitles
  'sub_1' => 'التعويم :',
  'sub_2' => 'الإظهار والإخفاء :',
  'sub_3' => 'الظلال :',

  // Paragraphs
  'para_1' => 'Responsive-me تستعمل عناصر Flex،
              لكن هذا لا يعني إلغاء الـ Floats، ها هي بعض الكلاسات في حال رغبت في استعمالها : <br> <br>
              <div class="res-responsive-table">
                <table class="res-table">
                  <thead>
                    <tr>
                      <th>الكلاس</th>
                      <th>الشرح</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>
                        <code class="res-light-code inline-code">.res-fl-left</code>
                      </td>
                      <td>
                        تعويم العنصر على اليسار
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <code class="res-light-code inline-code">.res-fl-right</code>
                      </td>
                      <td>
                        تعويم العنصر على اليمين
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <code class="res-light-code inline-code">.res-fl-clear</code>
                      </td>
                      <td>
                        تجنب مشاكل التداخل بعد التعويم
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>',
  'para_2' => 'لإظهار عنصر أو إخفائه من الشاشة نستعمل الكلاسين  
              <code class="res-light-code inline-code">.res-show</code>
              أو <code class="res-light-code inline-code">.res-show</code>
              لكن في حالة أردت أن يكون الظهور والإخفاء متجاوبا مع حجم الشاشة،
              فالجدول أسفله سيفيدك : <br> <br>
              <div class="res-responsive-table">
                <table class="res-table">
                  <thead>
                    <tr>
                      <th>الكلاس</th>
                      <th>الشرح</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>
                        <code class="res-light-code inline-code">.res-xs-show</code>
                      </td>
                      <td>
                        عرض العنصر في الشاشات الصغيرة جدا فقط (<=800px)
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <code class="res-light-code inline-code">.res-xs-hide</code>
                      </td>
                      <td>
                        إخفاء العنصر في الشاشات الصغيرة جدا فقط (<=800px)
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <code class="res-light-code inline-code">.res-sm-show</code>
                      </td>
                      <td>
                        عرض العنصر في الشاشات الصغيرة فما فوق (>=801px)
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <code class="res-light-code inline-code">.res-sm-hide</code>
                      </td>
                      <td>
                        إخفاء العنصر في الشاشات الصغيرة فما فوق (>=801px)
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <code class="res-light-code inline-code">.res-md-show</code>
                      </td>
                      <td>
                        عرض العنصر في الشاشات المتوسطة فما فوق (>=992px)
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <code class="res-light-code inline-code">.res-md-hide</code>
                      </td>
                      <td>
                        إخفاء العنصر في الشاشات المتوسطة فما فوق (>=992px)
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <code class="res-light-code inline-code">.res-lg-show</code>
                      </td>
                      <td>
                        عرض العنصر في الشاشات الكبيرة فما فوق (>=1200px)
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <code class="res-light-code inline-code">.res-lg-hide</code>
                      </td>
                      <td>
                        إخفاء العنصر في الشاشات الكبيرة فما فوق (>=1200px)
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div> <br>
              في الجدول أسفله تجميعة من الكلاسات التي قد تحتاجها : <br> <br>
              <div class="res-responsive-table">
                <table class="res-table">
                  <thead>
                    <tr>
                      <th>الكلاس</th>
                      <th>الشرح</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>
                        <code class="res-light-code inline-code">.res-sm-md-show</code>
                      </td>
                      <td>
                        عرض العنصر في الشاشات الصغيرة فقط (>=801px & <=992px)
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <code class="res-light-code inline-code">.res-sm-md-hide</code>
                      </td>
                      <td>
                        إخفاء العنصر في الشاشات الصغيرة فقط (>=801px & <=992px)
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <code class="res-light-code inline-code">.res-md-lg-show</code>
                      </td>
                      <td>
                        عرض العنصر في الشاشات المتوسطة فقط (>=992px & <=1200px)
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <code class="res-light-code inline-code">.res-md-lg-hide</code>
                      </td>
                      <td>
                        إخفاء العنصر في الشاشات المتوسطة فقط (>=992px & <=1200px)
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>',
  'para_3' => 'Responsive-me توفر مجموعة من الكلاسات للتعبير عن عمق العناصر : <br> <br>
              <div class="res-row" dir="ltr">
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
  'sub_1' => 'البطاقات :',
  'sub_2' => 'التنبيهات :',
  'sub_3' => 'الوسوم :',
  'sub_4' => 'عرض التقدم :',

  // Paragraphs
  'para_1' => 'البطاقات هي حاويات للمحتوى، تتميز بزواياها المنحنية، وبالظل الخفيف الذي يحيط بها،
              لعرض بطاقة داخل موقعك إستعمل الكلاس <code class="res-light-code inline-code">.res-card</code> : <br> <br>
              <div class="res-card">
                <div class="res-container">
                  <h4 class="res-txt-center res-txt-blue">تسجيل الدخول</h4>
                  <form>
                    <div class="res-input-gp">
                      <label for="email">البريد الإلكتروني :</label>
                      <input class="res-input" type="text" id="email" placeholder="example@example.com">
                    </div>
                    <div class="res-input-gp">
                      <label for="pwd">كلمة السر :</label>
                      <input class="res-input" type="password" id="pwd">
                    </div>
                    <button class="res-btn res-light-green-btn res-col-4 xs-12">
                      <i class="ri-login-circle-line"></i>
                      تسجيل الدخول
                    </button>
                  </form>
                </div>
              </div>',
  'para_2' => 'التنبيهات هي نفسها البطاقات، الإختلاف الوحيد أن التنبيهات يمكن إزالتها،
              لعرض تنبيه للمستخدم أكتب الكود التالي : <br> <br>
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
              هذه بعض أمثلة للتنبيهات : <br> <br>
              <div>
                <div class="res-alert res-bg-light-green res-txt-white" id="alert-success-id">
                  <span class="res-close" data-close="alert-success-id" data-item="alert">&times;</span>
                  لقد تم تسجيل الدخول بنجاح ^_^
                </div>
            
                <div class="res-alert res-bg-red res-txt-white res-col-9" id="alert-wrong-id">
                  <span class="res-close" data-close="alert-wrong-id" data-item="alert">&times;</span>
                  للأسف، حدثت مشكلة غير متوقعة، حاول مجددا
                </div>
            
                <div class="res-alert res-bg-light-purple res-txt-white res-col-6" id="alert-info-id">
                  <span class="res-close" data-close="alert-info-id" data-item="alert">&times;</span>
                  إسحب للأسفل لعرض أحداث جديدة
                </div>
              </div>',
  'para_3' => '<span class="res-tag res-bg-red res-txt-white">الوسوم</span> تستعمل في أنظمة الإشعارات،
              لإضافة وسم نستعمل الكلاس  
              <code class="res-light-code inline-code">.res-tag</code>,
              ومع كلاسات ألوان الخلفية يمكنك تلوين الوسم، كالمثال التالي :
              <br> <br>
              <ul class="res-hoverable-list">
                <li class="list-item">
                  الأحداث
                  <span class="res-tag res-bg-red res-txt-white res-fl-left">48</span>
                </li>
                <li class="list-item">
                  الرسائل
                  <span class="res-tag res-bg-blue res-txt-white res-fl-left">48</span>
                </li>
                <li class="list-item">
                  الإشعارات
                  <span class="res-tag res-bg-green res-txt-white res-fl-left">48</span>
                </li>
              </ul>',
  'para_4' => 'لتحسين تجربة المستخدم في موقعك، عليك أن تعرض تقدم المهمات أثناء انتظار المستخدم،
              ليعرف كم يفصله عن نهايتها،
              الكود أسفله يبين كيف تبني عرض التقدم مع Responsive-me : <br> <br>
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
  'sub_1' => 'ما هو الـ Accordion :',
  'sub_2' => 'إنشاء الـ Accordion :',

  // Paragraphs
  'para_1' => 'Accordion هو عنصر يمكنك من إخفاء بعض المحتوى، وإظهاره في حالة الضغط عليه،
              وللتوضيح يمكنك رؤية المثال : <br> <br>
              <div class="res-accordion res-card res-no-padding">
                <div class="section active">
                  <div class="acc-header">الرأس 1</div>
                  <div class="acc-content active">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium atque pariatur ipsam! Qui recusandae incidunt quo ipsa fugiat cupiditate rem deleniti at? Quas, itaque voluptate odit amet praesentium porro. Soluta?
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium atque pariatur ipsam! Qui recusandae incidunt quo ipsa fugiat cupiditate rem deleniti at? Quas, itaque voluptate odit amet praesentium porro. Soluta?
                  </div>
                </div>
                <div class="section">
                  <div class="acc-header">الرأس 2</div>
                  <div class="acc-content">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium atque pariatur ipsam! Qui recusandae incidunt quo ipsa fugiat cupiditate rem deleniti at? Quas, itaque voluptate odit amet praesentium porro. Soluta?
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium atque pariatur ipsam! Qui recusandae incidunt quo ipsa fugiat cupiditate rem deleniti at? Quas, itaque voluptate odit amet praesentium porro. Soluta?
                  </div>
                </div>
                <div class="section">
                  <div class="acc-header">الرأس 3</div>
                  <div class="acc-content">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium atque pariatur ipsam! Qui recusandae incidunt quo ipsa fugiat cupiditate rem deleniti at? Quas, itaque voluptate odit amet praesentium porro. Soluta?
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium atque pariatur ipsam! Qui recusandae incidunt quo ipsa fugiat cupiditate rem deleniti at? Quas, itaque voluptate odit amet praesentium porro. Soluta?
                  </div>
                </div>
              </div>',
  'para_2' => 'لبناء Accordion مع Responsive-me إتبع الكود التالي : <br> <br>',
  'para_3' => 'لإظهار جزء من الـ Accordion فقط قم بإضافة الكلاس
              <code class="res-light-code inline-code">.active</code>
              إلى section',
);

$tabulation = array(
  // Subtitles
  'sub_1' => 'ما هي الـ Tabulations :',
  'sub_2' => 'إنشاء الـ Tabulations :',

  // Paragraphs
  'para_1' => 'Tabulations (Tabs) عبارة عن محتوى متعلق برأس header، في حالة الضغط على الرأس
              يصبح المحتوى المتعلق به ظاهرا، بينما يختفي كل المحتوى الآخر : <br> <br>
              <div class="res-tabulation res-card res-no-padding" dir="ltr">
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
  'para_2' => 'لبناء Responsive-me Tabulation إتبع الكود التالي : <br> <br>',
  'para_3' => 'لإظهار جزء من الـ Tabulation فقط قم بإضافة الكلاس
              <code class="res-light-code inline-code">.active</code>
              إلى section',
);

$fl_action_bar = array(
  // Subtitles
  'sub_1' => 'ما هو الـ Floating Action Bar :',
  'sub_2' => 'إنشاء الـ Floating Action Bar :',

  // Paragraphs
  'para_1' => 'كما ترى في الزاوية السفلى من اليمين، زر تغيير اللغة،
              هذا ما يسمى بـ Floating Action Bar.
              يستخدم الـ Floating Action Bar لجمع مجموعة من الإختصارات من أجل المستخدم،
              مثل: إعدادات الوضع الليلي، بعض الإعدادات، المشاركة، إختيار اللغة ...  <br> <br>',
  'para_2' => 'لبناء Responsive-me Floating Action Bar، إتبع الكود التالي: <br> <br>',
);

$carousel = array(
  // Subtitles
  'sub_1' => 'إنشاء Carousel مع Responsive-me :',

  // Paragraphs
  'para_1' => 'الـ Carousel عبارة عن عرض شرائح، كما في الأعلى، كل شريحة
              مرتبطة بنقطة من النقاط البيضاء، لإنشاء Carousel في موقعك إتبع الكود التالي: <br> <br>',
  'para_2' => 'إذا أردت أتمتة عرض الشرائح، بحيث في كل 5 ثوان تظهر الشريحة الموالية إلى أن تنتهي كل الشرائح،
              قم بإضافة الكلاس <code class="res-light-code inline-code">.automatic</code> في Carousel div.',
);

$modal = array(
  // Subtitles
  'sub_1' => 'ما هو الـ Modal :',
  'sub_2' => 'إنشاء الـ Modal :',

  // Paragraphs
  'para_1' => 'يستعمل الـ Modal لإظهار رسائل التأكيد والتنبيهات للمستخدم، إضغط على الزر لرؤية مثال :<br> <br>
              <button class="res-blue-btn shadow res-launch-modal-btn" data-modal="modal-id">أظهر المثال</button>',
  'para_2' => 'لإنشاء Modal مع Responsive-me، اتبع الكود التالي: <br> <br>',
);

$dropdown = array(
  // Subtitles
  'sub_1' => 'ما هو الـ Dropdown :',
  'sub_2' => 'إنشاء الـ Dropdown :',

  // Paragraphs
  'para_1' => 'Dropdown هي قائمة منسدلة تستعمل لعرض مجموعة من العناصر للمستخدم، تحت تصنيف معين : <br> <br>
              <div class="res-dropdown res-col-3">
                <div class="dropdown-btn res-txt-center">إضغط هنا !</div>
                <ul class="dropdown-menu res-unstyled-list res-hoverable-list">
                  <li class="list-item">العنصر 1</li>
                  <li class="list-item">العنصر 2</li>
                  <li class="list-item">العنصر 3</li>
                </ul>
              </div>',
  'para_2' => 'تستخدم القوائم المنسدلة بكثرة في الروابط المتشعبة، لإضافة قائمة منسدلة
              اتبع الكود التالي : <br> <br>',
);

$layout_header = array(
  // Subtitles
  'sub_1' => 'ما هو الـ Header :',
  'sub_2' => 'إنشاء الـ Header :',

  // Paragraphs
  'para_1' => 'يجب أن يتوفر كل موقع على Header، لأنه الشيء الأول الذي يشاهده الزائر، ويساعده في اتخاذ القرار بإكمال التصفح،
              لهذا فإنه من الأهمية بمكان أن نجعله جذابا ومتجاوبا.
              أهم مكونات الـ Header في المواقع هي: الشعار والروابط.
              Those Are Some Responsive-me Headers, Resize The Browser To See The Effect : <br> <br>
              <header class="res-header res-shadow-2 res-bg-red res-txt-white">
                <div class="res-container res-flex">
                  <a href="#" class="brand res-col-2">الشعار</a>
                  <button class="res-btn res-bordered res-bg-red res-toggle-nav-btn res-sm-hide" data-navbar="test_1">
                    <i class="ri-menu-line"></i>
                  </button>
                  <nav class="res-nav res-flex res-col-10 xs-12 res-txt-center" id="test_1">
                    <ul class="nav-gp res-unstyled-list res-col res-flex res-col-7 xs-12">
                      <a href="#" class="item res-txt-dark-red">
                        <li>الرئيسية</li>
                      </a>
                      <a href="#" class="item">
                        <li>معرض الأعمال</li>
                      </a>
                      <a href="#" class="item">
                        <li>حول</li>
                      </a>
                      <a href="#" class="item">
                        <li>المدونة</li>
                      </a>
                    </ul>
                  </nav>
                </div>
              </header>',
  'para_2' => 'الكود المسؤول عن الـ Header في Responsive-me يبدوا كالتالي : <br> <br>',
  'para_3' => 'بإمكانك أيضا إستعمال الكلاس <code class="res-light-code inline-code">.fixed-top</code> أو 
              <code class="res-light-code inline-code">.fixed-bottom</code>
              لتثبيت الـ Header في موقعك.',
);

$layout_sidebar = array(
  // Subtitles
  'sub_1' => 'ما هو الـ SideBar :',
  'sub_2' => 'إنشاء الـ SideBar :',

  // Paragraphs
  'para_1' => 'الـ SideBar هو القائمة الجانبية، كتلك التي نستعملها الآن في فهرسة التوثيق documentation، 
              وتستعمل في إدراج الروابط أو جعل القائمة العلوية متجاوبة في شاشة الهاتف.',
  'para_2' => 'لإنشاء قائمة جانبية، اتبع الكود التالي : <br> <br>',
  'para_3' => 'اتجاه القائمة الجانبية الإفتراضية هو من اليسار إلى اليمين، لعكس الإتجاه
              استعمل الكلاس <code class="res-light-code inline-code">.res-right-sidebar</code> 
              بدل الكلاس <code class="res-light-code inline-code">.res-sidebar</code>.'
);

$layout_pagination = array(
  // Subtitles
  'sub_1' => 'ما هي الـ Pagination :',
  'sub_2' => 'إنشاء الـ Pagination :',

  // Paragraphs
  'para_1' => 'ينصح دائما بتقسيم المحتوى الكثير على عدة صفحات، والربط بينها باستعمال الـ Pagination : <br> <br>
              <div class="res-pagination">
                <a class="item">1</a>
                <a class="item">2</a>
                <a class="item">3</a>
                <a class="item">4</a>
                <a class="item">5</a>
              </div> <br>
              هذه هي الـ Pagination الإفتراضية، يمكنك أيضا إستعمال الـ Pagination المؤطرة : <br> <br>
              <div class="res-bordered-pagination">
                <a class="item">1</a>
                <a class="item">2</a>
                <a class="item">3</a>
                <a class="item">4</a>
                <a class="item">5</a>
              </div>',
  'para_2' => 'لإنشاء Pagination مع Responsive-me اتبع الكود التالي : <br> <br>',
  'para_3' => 'لإنشاء Pagination مؤطرة إستعمل الكلاس
              <code class="res-light-code inline-code">.res-bordered-pagination</code> بدل
              <code class="res-light-code inline-code">.res-pagination</code>',
);

$layout_footer = array(
  // Subtitles
  'sub_1' => 'ما هو الـ Footer :',
  'sub_2' => 'إنشاء الـ Footer :',

  // Paragraphs
  'para_1' => 'الـ Footer هو الجزء الذي يكون أسفل الموقع،
              ويحتوي على حقوق النسخ وبعض الروابط المهمة،
              يبلغ أقصى طول الـ Footer في Responsive-me <code class="res-light-code inline-code">30px</code>
              ويمكنك تثبيته في أسفل موقعك باستعمال الكلاس 
              <code class="res-light-code inline-code">.fixed-bottom</code>.',
  'para_2' => 'لإنشاء Footer بسيط باستعمال Responsive-me اتبع الكود التالي <br> <br>',
);
