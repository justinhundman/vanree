/*;
(function() {
  "use strict";

  var $slider = $('#slider'),
    $previousButton = $('#slider_previuos'),
    $nextButton = $('#slider_next'),
    step = 100,
    act = 0;
  if (!$slider.length) return;

  $nextButton.unbind('click.nextSlide').bind('click.nextSlide', function(e) {
    e.preventDefault();
    act--;
    $slider.css('left', act * step + '%');
    if (act >= 0) {
      $previousButton.addClass('disabled');
    } else if (act <= -4) {
      $nextButton.addClass('disabled');
    } else {
      $previousButton.removeClass('disabled');
      $nextButton.removeClass('disabled');
    }
  });
  $previousButton.unbind('click.previousSlide').bind('click.previousSlide', function(e) {
    e.preventDefault();
    act++;
    $slider.css('left', act * step + '%');
    if (act >= 0) {
      $previousButton.addClass('disabled');
    } else if (act <= -4) {
      $nextButton.addClass('disabled');
    } else {
      $previousButton.removeClass('disabled');
      $nextButton.removeClass('disabled');
    }
  });
})();
*/
