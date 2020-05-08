<?php

// Change The Position Of The Sidebar According To The Choosen Language
if($_SESSION['language'] == 'ar') {
  $sidebar = 'res-right-sidebar';
} else {
  $sidebar = 'res-sidebar';
}

?>

<div class="<?php echo $sidebar; ?> res-bg-white res-no-padding res-shadow-3" id="docs_index">
  <span class="res-close" data-close="docs_index" data-item="sidebar">
    <i class="ri-close-line"></i>
  </span>

  <!-- For More Clarification Go To 'classes/Documentation.class.php' -->
  <div class="res-accordion res-no-border">
    <?php echo $doc->generate_index('البداية' ,'Get Started', 'index.php'); ?>
    <?php echo $doc->generate_index('الأساسيات' ,'Basic', 'basic.php'); ?>

    <?php echo $doc->generate_index('تنسيقات CSS' ,'CSS Styling', '', true, [
      'ar' => [
        'النصوص'        => 'css_styling/typography.php',
        'القوائم'       => 'css_styling/lists.php',
        'النماذج'       => 'css_styling/forms.php',
        'الجداول'       => 'css_styling/tables.php',
        'الألوان'        => 'css_styling/colors.php',
        'نظام الشبكة'   => 'css_styling/grid.php',
        'الأزرار'        => 'css_styling/buttons.php',
        'الشيفرات code' => 'css_styling/code.php',
        'المزيد'        => 'css_styling/more.php',
      ],
      'en' => [
        'Typography'          => 'css_styling/typography.php',
        'Lists'               => 'css_styling/lists.php',
        'Forms'               => 'css_styling/forms.php',
        'Tables'              => 'css_styling/tables.php',
        'Colors'              => 'css_styling/colors.php',
        'Grid'                => 'css_styling/grid.php',
        'Buttons'             => 'css_styling/buttons.php',
        'code'                => 'css_styling/code.php',
        'More'                => 'css_styling/more.php',
      ]
    ]); ?>

    <?php echo $doc->generate_index('مكونات css' ,'CSS Components', 'css_components')?>

    <?php echo $doc->generate_index('مكونات js' ,'JS Components', '', true, [
      'ar' => [
        'Accordion'           => 'js_components/accordion.php',
        'Tabulation'          => 'js_components/tabulation.php',
        'Floating Action Bar' => 'js_components/fl_action_bar.php',
        'Carousel'            => 'js_components/carousel.php',
        'Modal'               => 'js_components/modal.php',
        'Dropdown'            => 'js_components/dropdown.php',
      ],
      'en' => [
        'Accordion'           => 'js_components/accordion.php',
        'Tabulation'          => 'js_components/tabulation.php',
        'Floating Action Bar' => 'js_components/fl_action_bar.php',
        'Carousel'            => 'js_components/carousel.php',
        'Modal'               => 'js_components/modal.php',
        'Dropdown'            => 'js_components/dropdown.php',
      ]

    ]); ?>

    <?php echo $doc->generate_index('بنية الصفحة' ,'Page Layout', '', true, [
      'ar' => [
        'Header'     => 'page_layout/header.php',
        'Sidebar'    => 'page_layout/sidebar.php',
        'Pagination' => 'page_layout/pagination.php',
        'footer'     => 'page_layout/footer.php',
      ],
      'en' => [
        'Header'     => 'page_layout/header.php',
        'Sidebar'    => 'page_layout/sidebar.php',
        'Pagination' => 'page_layout/pagination.php',
        'footer'     => 'page_layout/footer.php',
      ]
    ]); ?>

  </div>
</div>

