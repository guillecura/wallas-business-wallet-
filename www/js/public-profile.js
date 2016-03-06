(function($) {
  'use strict';

  var $sbusiness = $('.section-public-profile').find('.user-business > ul > li');
  var $ebusiness = $('.section-public-profile').find('.actions .edit-business');
  var $eform = $('.edit-info');
  var $esubmit = $eform.find('#edit');

  var $gInfo = $eform.parent($sbusiness).find('.general-info');
  var $mInfo = $eform.parent($sbusiness).find('.more-info');

  if ($sbusiness.length == 1) {
    $sbusiness.addClass('active');
  } else {
  // See more Business info
    $sbusiness.on('click tap', function(e) {
      var $target = $(this);
      var isActive = $target.hasClass('active');

      if (isActive) {
        $(document).on('click tap', function(e) {
          if (!$(e.target).parents('body .user-business li').length) {
            $target.removeClass('active');
          }
        });
      } else {
        $target.addClass('active');
        $target.siblings('li').each(function(index, element) {
          var $element = $(element);
          $element.removeClass('active');
        });
      }
    });
  }

  $ebusiness.on('click tap', function(e) {
    e.preventDefault();

    $(e.target).closest('.single-business').find($eform).show();
    $(e.target).closest('.single-business').find($eform).addClass('active');

    if ($eform.hasClass('active') && $eform.parent($sbusiness).hasClass('active')) {
      $gInfo.hide();
      $mInfo.hide();

      $eform.find('.icon-close').on('click tap', function() {
        $eform.hide();
        $gInfo.show();
        $mInfo.show();
      });

    } else {
      $eform.hide();
      $gInfo.show();
      $mInfo.show();
    }
  });

}(window.jQuery));
