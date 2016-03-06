(function($) {
  'use strict';

  $(document).ready(function() {

    var window_width = $(window).width();
    var window_height = $(window).height();

    $('.modal-window').each(function() {
      var modal_height = $(this).outerHeight();
      var modal_width = $(this).outerWidth();
      var top = (window_height-modal_height) / 2;
      var left = (window_width-modal_width) / 2;

      $(this).css({ 'top' : top , 'left' : left });
    });

    $('.modal-open').click(function(e){
      var modal_id = $(this).attr('name');

      show_modal(modal_id);
      $('body').addClass('modal-is-open');

      if (modal_id === 'modal-delete-item') {
        var id_parent = $(e.target).closest('.single-business');
        var id_field = $('#'+modal_id).find('#id');
        var id = id_parent.data('value');

        id_field.val(id);
      }

      if (modal_id === 'modal-edit-user') {
        var id_parent = $(e.target).closest('.user-profile');
        var id_field = $('#'+modal_id).find('#id');
        var id = id_parent.data('value');

        id_field.val(id);
      }

      if (modal_id === 'modal-settings') {
        var id_parent = $(e.target).closest('.user-profile');
        var id_field = $('#'+modal_id).find('#id');
        var id = id_parent.data('value');

        id_field.val(id);
      }
    });

    $('.close-modal').click(function(){
      close_modal();
      $('body').removeClass('modal-is-open');
    });
  });

  //THE FUNCTIONS
  function close_modal() {
    $('.mask').fadeOut(150);
    $('.modal-window').fadeOut(150);
  }

  function show_modal(modal_id) {
    $('.mask').css({ 'display' : 'block', opacity : 0 });
    $('.mask').fadeTo(150, 0.5);
    $('.modal-window').fadeOut(150);
    $('#'+modal_id).fadeIn(150);
  }

}(window.jQuery));
