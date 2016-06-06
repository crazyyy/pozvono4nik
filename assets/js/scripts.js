// Avoid `console` errors in browsers that lack a console.
(function () {
  var method;
  var noop = function () {};
  var methods = ['assert', 'clear', 'count', 'debug', 'dir', 'dirxml', 'error', 'exception', 'group', 'groupCollapsed', 'groupEnd', 'info', 'log', 'markTimeline', 'profile', 'profileEnd', 'table', 'time', 'timeEnd', 'timeline', 'timelineEnd', 'timeStamp', 'trace', 'warn'];
  var length = methods.length;
  var console = (window.console = window.console || {});

  while (length--) {
    method = methods[length];

    // Only stub undefined methods.
    if (!console[method]) {
        console[method] = noop;
    }
}
}());
if (typeof jQuery == 'undefined') {
  console.warn('jQuery hasn\'t loaded');
} else {
  console.log('jQuery has loaded');
}
// Place any jQuery/helper plugins in here.
$(document).ready(function() {

  if ( $('body').hasClass('single-post') ) {
    var $comments = $('.comments');
    var commentsHeight = $comments.height();
    var offset = $comments.offset();
    var top = offset.top + 'px'
    $('body').append('<div class="comment-bg"></div>');
    $('.comment-bg').height(commentsHeight);
    $('.comment-bg').css('top', top);
  }


});
