(function($) {
  'use strict';

  var $section = $('.section-detail');
  var $sitem = $section.find('.b-detail > .single-month-item');
  var $sbusiness = $section.find('.business-list > ul > li');
  var $firstbusiness = $section.find('.business-list > ul > li:first-of-type');

  if ($sbusiness.length == 1) {
    $sbusiness.addClass('active');
  } else {
    $firstbusiness.addClass('active');
  // See more Business info
    $sbusiness.on('click tap', function(e) {
      var $target = $(this);
      var isActive = $target.hasClass('active');

      if (isActive) {
        $(document).on('click tap', function(e) {
          if (!$(e.target).parents('body .business-list li').length) {
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

  // Select month
  // var $monthInput = $section.find('#select-month');
  //
  // $monthInput.on('change', searchMonth);
  //
  // function searchMonth () {
  //   $.ajax({
  //     url: "/www/inc/load-months.php",
  //     success: selectMonths,
  //     type: 'GET',
  //     data: {
  //       month: $monthInput.val();
  //     }
  //   });
  // }
  //
  // function selectMonths (content) {
  //   $monthInput.html(content);
  // }

}(window.jQuery));
