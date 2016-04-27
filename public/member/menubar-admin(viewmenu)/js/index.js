// Comment out the following function call to manually use the menu toggle grippy
var $interval = function(){         menuToggleClickHandler(); };

var $menuToggle = $('.menu-toggle'), $body = $('body');

function menuToggleClickHandler() {
  $body.toggleClass('panel-open');
  $menuToggle.toggleClass('open');
}

$menuToggle.click(function() {
  menuToggleClickHandler();
  clearInterval($interval);
});

$('.hidden-panel-close').click(function() {
  $body.removeClass('panel-open');
  $menuToggle.removeClass('open');
});
