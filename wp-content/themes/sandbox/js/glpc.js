var $j = jQuery.noConflict();

$j(document).ready(function() {
  $j(".hoverable").mouseenter(function() {
    $j(this).animate().addClass("hovering");
  }).mouseleave(function() {
    $j(this).delay(200).animate().removeClass("hovering");
  });
  
  
  
  $j("#email").stop().click(function() {
    if ($j("#phone_box").width() === 0)
      {
        $j("#phone").animate({ "margin-top": "35px"}, "slow" );
        $j("#email_box").delay(500).animate({ "width": "260px", "left": "970px" }, "slow");
      }else{
        $j('#phone_box').animate({ "left": "980px", "width": "0px" }, "slow");
        $j("#phone").delay(500).animate({ "margin-top": "35px"}, "slow" );
        $j("#email_box").delay(1000).animate({ "width": "260px", "left": "970px" }, "slow");
      };
  });
  
  $j("#email_box").stop().click(function() {  
    $j('#email_box').animate({"left": "940px", "width": "0px" }, "slow");
    $j("#phone").delay(800).animate({ "margin-top": "65px"}, "slow" );
  });
  
  $j("#phone").stop().click(function() {
    if ($j("#email_box").width() === 0)
      {
        $j('#phone_box').animate({ "left": "990px", "width": "120px" }, "slow");
      }else{ 
        $j('#email_box').animate({"left": "940px", "width": "0px" }, "slow");
        $j("#phone").delay(700).animate({ "margin-top": "65px"}, "slow" );
        $j('#phone_box').delay(1300).animate({ "left": "990px", "width": "120px" }, "slow");
      };
  });
  
  $j("#phone_box").stop(true, true).click(function() {
    $j('#phone_box').animate({ "left": "980px", "width": "0px" }, "slow");
  });
  
});