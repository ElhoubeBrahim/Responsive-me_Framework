<!DOCTYPE html>
<html lang="<?php echo $lang->get_language(); ?>" dir="<?php echo $lang->get_document_direction(); ?>">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Responsive-me</title>

  <link rel="stylesheet" href="<?php echo $website_url ?>assets/libs/responsive-me/responsive-me.css">
  <link rel="stylesheet" href="<?php echo $website_url ?>assets/libs/remix_icons/remixicon.css">
  <link rel="stylesheet" href="<?php echo $website_url ?>assets/css/style.css">

</head>

<body>

  <header class="res-header fixed-top res-bg-light-blue res-txt-white">
    <div class="res-container res-flex">
      <a href="<?php echo $website_url ?>" class="brand res-col-3">Res-Me</a>
      <button class="res-blue-btn res-toggle-nav-btn res-sm-hide" data-navbar="navbar">
        <i class="ri-menu-line"></i>
      </button>
      <nav class="res-nav res-flex res-col-9 xs-12 res-txt-center" id="navbar">
        <ul class="nav-gp res-unstyled-list res-col res-flex res-col-5 xs-12">
          <a href="<?php echo $website_url ?>" class="item">
            <li>
              <?php echo $header['home']; ?>
            </li>
          </a>
          <a href="<?php echo $website_url ?>documentation" class="item">
            <li>
              <?php echo $header['docs']; ?>
            </li>
          </a>
          <a href="<?php echo $website_url ?>examples" class="item">
            <li>
              <?php echo $header['examples']; ?>
            </li>
          </a>
        </ul>
        <hr class="res-sm-hide">
        <ul class="nav-gp res-unstyled-list res-col res-flex res-col-2 xs-12">
          <a href="https://www.facebook.com/elhoube.brahim">
            <li>
              <i class="ri-facebook-fill ri-fw" aria-hidden="true"></i>
            </li>
          </a>
          <a href="https://twitter.com/BrahimElhoube">
            <li>
              <i class="ri-twitter-fill ri-fw" aria-hidden="true"></i>
            </li>
          </a>
          <a href="https://github.com/ElhoubeBrahim/Responsive-me_Framework">
            <li>
              <i class="ri-github-fill ri-fw" aria-hidden="true"></i>
            </li>
          </a>
        </ul>
      </nav>
    </div>
  </header>
  <br>
  <br>
