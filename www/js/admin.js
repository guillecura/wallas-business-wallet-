(function($) {
  'use strict';

  var $userActions = $('header').find('.user-actions');
  var $menuActions = $('header').find('menu');
  var actionsIsActive = $userActions.hasClass('active');

  $(document).on('ready', function() {
    $menuActions.on('click tap', function(e) {
      e.stopPropagation();
      $userActions.fadeIn(100).addClass('active');
    });

    $(document).on('click tap', function(e) {
      $userActions.fadeOut(100).removeClass('active');
    });
  });

}(window.jQuery));
