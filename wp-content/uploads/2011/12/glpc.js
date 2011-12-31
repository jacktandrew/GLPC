var $j = jQuery.noConflict();

$j(document).ready(function() {
    
    
function email_out() { $j("#email_box").animate({ "width": "260px" }, "slow"); }
function email_in() { $j("#email_box").animate({ "width": "0px" }, "slow"); }
function phone_out() { $j("#phone_box").animate({ "width": "200px" }, "slow"); }
function phone_in() { $j("#phone_box").animate({ "width": "0px" }, "slow"); }

  $j("#email").click(function() {
    if ($j("#email_box").width() === 0 && $j("#phone_box").width() === 0)
    {
      $j("#email_box").animate({ "width": "260px" }, "slow");
    }
    else if ($j("#phone_box").width() > 0) 
    {
      $j("#phone_box").animate({ "width": "0px" }, "slow");
      $j("#email_box").delay(800).animate({ "width": "260px" }, "slow");
    } 
    else 
    {
      $j("#email_box").animate({ "width": "0px" }, "slow");
    }
  });

  $j("#phone").click(function() {
    if ($j("#phone_box").width() === 0 && $j("#email_box").width() === 0)
      {
        $j("#phone_box").animate({ "width": "200px" }, "slow");
      }
    else if ($j("#email_box").width() > 0 ) 
      {
        $j("#email_box").animate({ "width": "0px" }, "slow");
        $j("#phone_box").delay(800).animate({ "width": "200px" }, "slow");
      } 
    else 
      {
        $j("#phone_box").animate({ "width": "0px" }, "slow");
      }
  });

  // Calendar

    $j.getJSON('http://www.google.com/calendar/feeds/events@crosspointchurches.org/public/full?alt=json-in-script&orderby=starttime&max-results=6&singleevents=true&sortorder=ascending&futureevents=true&callback=?', function(json) {
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

    $j("#black_box").html(html + "<br/><br/><br/><br/>");
  });

});