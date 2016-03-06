(function($) {
  'use strict';

$(document).on('ready', function() {
  var $graph = $('svg.graph');

  $graph.each(function() {
    var $surfacePathTotal = $(this).find('.set-total.surface');
    var $surfacePathFloyd = $(this).find('.set-floyd.surface');
    var $pointTotal = $(this).find('.set-total.point');
    var $pointFloyd = $(this).find('.set-floyd.point');
    var svgWidth = $(this).width();

    var arrayXPosTotal = [];
    var arrayYPosTotal = [];

    var arrayXPosFloyd = [];
    var arrayYPosFloyd = [];

    $pointTotal.each(function(i) {
      arrayXPosTotal[i] = $(this).attr('cx').slice(0 , -1) * svgWidth / 100;
      arrayYPosTotal[i] = $(this).attr('cy');
    });

    $pointFloyd.each(function(i) {
      arrayXPosFloyd[i] = $(this).attr('cx').slice(0 , -1) * svgWidth / 100;
      arrayYPosFloyd[i] = $(this).attr('cy');
    });

    var $i = 0;
    for ($i = 0; $i <= ($pointTotal.length) / $(this).length -1; $i++) {
      var XYpositionTotal = (arrayXPosTotal[$i] + ',' + arrayYPosTotal[$i]);
      $surfacePathTotal.attr('d', $surfacePathTotal.attr('d') + ' ' + XYpositionTotal);

      var XYpositionFloyd = (arrayXPosFloyd[$i] + ',' + arrayYPosFloyd[$i]);
      $surfacePathFloyd.attr('d', $surfacePathFloyd.attr('d') + ' ' + XYpositionFloyd);
    }
  });
});

}(window.jQuery));
