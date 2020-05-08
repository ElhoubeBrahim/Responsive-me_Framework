/*!
 * Responsive v1.0.0 (http://responsive-me.com)
 * Copyright 2020 Elhoube Brahim
 * MIT License 
 */

if (typeof jQuery === 'undefined') {
  throw new Error('Responsive-me requires jQuery. jQuery must be included before responsive-me.js.')
}

/* ========================= Toggle Responsive Navbar ========================= */
$('.res-toggle-nav-btn').click(function () {

  // Get Targeted Navbar id
  var navbar = '#' + $(this).data('navbar');

  // Slide Targeted Navbar
  $(navbar).slideToggle(500);

});

/* ========================= Toggle Sidebar ========================= */
$('.res-toggle-sidebar-btn').click(function () {

  // Get Targeted Sidebar id
  var sidebar = '#' + $(this).data('sidebar');

  // Slide Targeted Sidebar
  $(sidebar).css('transform', 'translateX(0)');

});

/* ========================= Close Overlay On Click ========================= */

$('.res-overlay').on('click', function () {
  $(this).css('transform', 'scale(0)');
});

/* ========================= Close btn ========================= */
$('.res-close').click(function () {

  // Get Targeted Closed Item id
  var component = $(this).data('item');
  var closedID = '#' + $(this).data('close');

  switch (component) {
    // If The Closed Component Is Sidebar
    case 'sidebar':
      if ($(closedID).hasClass('res-right-sidebar')) {
        $(closedID).css('transform', 'translateX(150%)')
      } else {
        $(closedID).css('transform', 'translateX(-150%)')
      }
      break;

      // If The Closed Item Is an Alert
    case 'alert':
      $(closedID).fadeOut(100);
      break;

      // If The Closed Item Is a Modal
    case 'modal':
      $(closedID).css({
        opacity: '0',
        pointerEvents: 'none'
      }).find('.content').css('transform', 'scale(0)');
      break;

    default:
      $(closedID).fadeOut(100);
      break;
  }

});

/* ========================= Accordion ========================= */
$('.res-accordion .section .acc-header').click(function () {

  // Slide Down Currenr Accordion
  var accordion = $(this).next('.acc-content');
  accordion.slideToggle(200).removeClass('active');

  // Slide Up Other Accordions
  var others = $(this).parent('.section').siblings('.section').find('.acc-content');
  others.slideUp(200);

});

$('.res-collapsible .header').click(function () {

  var collapse = '#' + $(this).data('collapse');
  $(collapse).slideToggle(200);

});

/* ========================= Tabulation ========================= */

$('.res-tabulation .tab-header .item').click(function () {

  // Get Targeted Tab
  var tab = '#' + $(this).data('tab');
  // Switch Class Active To Current Header
  $(this).addClass('active').siblings('.item').removeClass('active');
  // Show The Targeted Tab & Hide Others
  $(tab).fadeIn(500).siblings('.item').css('display', 'none');

});

/* ========================= Floating Action Bar ========================= */

$('.res-fl-action-bar .action-btn').click(function () {

  $(this).siblings('.actions').find('.action').toggleClass('show');

});

/* ========================= Carousel ========================= */

$('.res-carousel .dots .dot').click(function () {

  var slide = '#' + $(this).data('slide');

  $(this).addClass('active').siblings('.dot').removeClass('active');
  $(slide).addClass('active').siblings('.item').removeClass('active');

});

setInterval(() => {
  // Start From The Active Slide To The Last One
  $('.res-carousel.automatic .dots .dot.active').next('.dot').addClass('active').siblings('.dot').removeClass('active');
  $('.res-carousel.automatic .slides .item.active').next('.item').addClass('active').siblings('.item').removeClass('active');
}, 5000);

/* ========================= Modal ========================= */

$('.res-launch-modal-btn').click(function () {

  var modal = '#' + $(this).data('modal');
  $(modal).css({
    opacity: '1',
    pointerEvents: 'initial'
  }).find('.content').css('transform', 'scale(1)');

});

/* ========================= Dropdown ========================= */

$('.res-dropdown .dropdown-btn').click(function () {
  $(this).siblings('.dropdown-menu').slideToggle(200);
});