jQuery(function ($) {
// Sticky Header
$(window).scroll(function () {
  if ($(window).scrollTop() > 100) {
    $('.main_h').addClass('sticky');
  } else {
    $('.main_h').removeClass('sticky');
  }
});

// スマホメニュー
$('.mobile-toggle').click(function () {
  if ($('.main_h').hasClass('open-nav')) {
    $('.main_h').removeClass('open-nav');
  } else {
    $('.main_h').addClass('open-nav');
  }
});

$('.main_h li a').click(function () {
  if ($('.main_h').hasClass('open-nav')) {
    $('.navigation').removeClass('open-nav');
    $('.main_h').removeClass('open-nav');
  }
});

// スクロールした際の終了位置
$('nav a').click(function (event) {
var id = $(this).attr("href");
var offset = 100;
var target = $(id).offset().top - offset;
$('html, body').animate({
  scrollTop: target
}, 500);
event.preventDefault();
});
});