var width = $('.about .member .image img').width();

$('.about .member .image img').css('height', width + 'px');

var colors = ['red', 'pink', 'purple', 'blue', 'green', 'yellow', 'orange', 'brown', 'grey'];

colors.forEach(color => {
  $('#colors').append('<div class="color res-col md-4"><div class="res-bg-light-' + color + '">light-' + color + '</div></div>');
  $('#colors').append('<div class="color res-col md-4"><div class="res-bg-' + color + '">' + color + '</div></div>');
  $('#colors').append('<div class="color res-col md-4"><div class="res-bg-dark-' + color + '">dark-' + color + '</div></div>');
});
