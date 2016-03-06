(function($) {
  'use strict';

  var modalDetail = $('div[id*=modal-detail]');

  var $sincome = $(modalDetail).find('.s-income .s-in');
  var $eincome = $(modalDetail).find('.s-income .s-ed');
  var $dincome = $(modalDetail).find('.s-income .s-de');

  var $navBtn = $(modalDetail).find('.u-nav');
  var $editBtn = $(modalDetail).find('.edit-income');
  var $saveBtn = $(modalDetail).find('#edit-income');
  var $delBtn = $(modalDetail).find('#delete-income');
  var $deleteBtn = $(modalDetail).find('.delete-income');
  var $cancelBtn = $(modalDetail).find('#cancel-edit-income');

  $editBtn.on('click tap', function() {
    $sincome.hide();
    $dincome.hide();
    $navBtn.hide();
    $saveBtn.show();
    $delBtn.hide();
    $cancelBtn.show();
    $eincome.show();
  });

  $deleteBtn.on('click tap', function() {
    $sincome.hide();
    $dincome.show();
    $navBtn.hide();
    $saveBtn.hide();
    $delBtn.show();
    $cancelBtn.show();
    $eincome.hide();
  });

  $cancelBtn.on('click tap', function() {
    $sincome.show();
    $dincome.hide();
    $navBtn.show();
    $saveBtn.hide();
    $delBtn.hide();
    $cancelBtn.hide();
    $eincome.hide();
  });

}(window.jQuery));
