var $j = jQuery.noConflict();

$j(document).ready(function() {
    
function slide_it(el, sz) { $j(el).animate({ "width": sz }, "slow"); }

  $j("#email").click(function() {
    if ($j("#email_box").width() === 0 && $j("#phone_box").width() === 0)
    {
        slide_it("#email_box", "260px");
    }
    else if ($j("#phone_box").width() > 0) 
    {
      slide_it("#phone_box", "0px");
      $j("#email_box").delay(800).animate({ "width": "260px" }, "slow");
    } 
    else 
    {
      slide_it("#email_box", "0px");
    }
  });

  $j("#phone").click(function() {
    if ($j("#phone_box").width() === 0 && $j("#email_box").width() === 0)
      {
        slide_it("#phone_box", "200px");
      }
    else if ($j("#email_box").width() > 0 ) 
      {
        slide_it("#email_box", "0px");
        $j("#phone_box").delay(800).animate({ "width": "200px" }, "slow");
      } 
    else 
      {
        slide_it("#phone_box", "0px");
      }
  });

  // Calendar

    $j.getJSON('http://www.google.com/calendar/feeds/events@crosspointchurches.org/public/full?alt=json-in-script&orderby=starttime&max-results=6&singleevents=true&sortorder=ascending&futureevents=true&callback=?', function(json) {
        console.log(json);
        var html = "";

    $j.each(json.feed.entry, function(e, el) {
        var date = new Date(el.gd$when[0].startTime)
        var theTitle = el.title.$t
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
        if (theTitle === "Peripateo Gathering") 
        {
          theTitle = "<span style='color: blue'>Peripateo Gathering</span>"
        }




        html += "<div>" + "<h3>" + date.getDate() + "</h3><h4>" + theTitle  + "</h4><h5>" + el.content.$t + "</h5></div>";
    });

    $j("#black_box").html(html + "<br/><br/><br/><br/>");
  });

});