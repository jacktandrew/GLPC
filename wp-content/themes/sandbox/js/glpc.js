var $j = jQuery.noConflict();

$j(document).ready(function() {
  $j(".hoverable").mouseenter(function() {
    $j(this).animate().addClass("hovering");
  }).mouseleave(function() {
    $j(this).delay(200).animate().removeClass("hovering");
  });
  
  // Slide email out
  
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
  
  // Slide email back in
  
  $j("#email_box").stop().click(function() {  
    $j('#email_box').animate({"left": "940px", "width": "0px" }, "slow");
    $j("#phone").delay(800).animate({ "margin-top": "65px"}, "slow" );
  });
  
  // Slide phone out
  
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
  
  // Slide phone back in
  
  $j("#phone_box").stop(true, true).click(function() {
    $j('#phone_box').animate({ "left": "980px", "width": "0px" }, "slow");
  });
  
  // Calendar

    $j.getJSON('http://www.google.com/calendar/feeds/jacktandrew@gmail.com/public/full?alt=json-in-script&orderby=starttime&max-results=15&singleevents=true&sortorder=ascending&futureevents=true&callback=?', function(json) {
        console.log(json);
        var html = "";

    $j.each(json.feed.entry, function(e, el) {
        var date = new Date(el.gd$when[0].startTime)
        // if(date.getHours() <= 12) {
        //   var theHours = date.getHours()
        // } else {
        //   var theHours = date.getHours() - 12
        // };
        // 
        // if(date.getMinutes() === 0) {
        //   var theMinutes = "00"
        // } else {
        //   var theMinutes = date.getMinutes()
        // };
        // html += "<div>" + "<h3>" + date.getDate() + "</h3><h4>" + el.title.$t + "</h4><h5>" + theHours + ":" + theMinutes +"</h5></div>";
        
        html += "<div>" + "<h3>" + date.getDate() + "</h3><h4>" + el.title.$t + "</h4><h5>" + el.content.$t + "</h5></div>";
    });

    $j("#black_box").html(html + "<br/><br/><br/><br/><br/><br/><br/><br/>");
  });

});