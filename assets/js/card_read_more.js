$(document).ready(function(){
  var $activityImg = $('.activity-card__img'),
      $cardReadMore = $('.card-read-more'),
      duration = 100,
      easing = 'linear';

  $activityImg.mouseover(function(){
    $(this).find($cardReadMore).css({
      position: "absolute",
    });
    $(this).find($cardReadMore).stop(true).animate({
      top: 0
    }, duration, easing);
  });

  $activityImg.mouseleave(function(){
    $(this).find($cardReadMore).stop(true).delay(100).animate({
      top: '200px'
    }, duration, easing);
  });
});
