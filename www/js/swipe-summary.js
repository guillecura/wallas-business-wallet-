(function($) {
  'use strict';

  var $slideSummary = $('.business-list').find('.b-summary');
  var $slideMonth = $('.slide-content');
  var contentWidth = $slideSummary.width();

  $slideMonth.width(contentWidth);

  var i = 1;
  $slideSummary.each(function(e) {
    var $item = $(this).find('.dragdealer');
    var $itemId = $(this).parent('li').attr('class').slice(8);

    var $handle = $item.find('.handle');
    var itemHeight = $(this).find($slideMonth).height();

    $(this).height(itemHeight);

    $item.attr('id', 'slide-item-' + i);

    new Dragdealer('slide-item-' + i++, {
      x: 0,
      horizontal: true,
      steps: 3,
      loose: true,
      css3: false,
      callback: function(x) {
        if (x == 1) {
          var detail_modal = 'modal-detail-'+$itemId;

          show_detail_modal(detail_modal);

          $('body').addClass('modal-is-open');

          this.setStep(1);
        }
      }
    });
  });

  function show_detail_modal(detail_modal) {
    $('.mask').css({ 'display' : 'block', opacity : 0 });
    $('.mask').fadeTo(150, 0.5);
    $('#'+detail_modal).fadeIn(150);
  }

}(window.jQuery));
