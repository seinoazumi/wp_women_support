$(document).ready(function(){
  /*---------------------------------------------
    サイドメニューを表示
  ---------------------------------------------*/

  var $rightNavBtn = $('#right-nav-btn'),
      $spRightNav = $('aside').find('.sp-right-nav'),
      $navCloseBtn = $('aside').find('#nav-close-btn');

  $rightNavBtn.click(function(){
    $spRightNav.addClass('open');
  });

  $navCloseBtn.click(function(){
    $spRightNav.removeClass('open');
  });
});
