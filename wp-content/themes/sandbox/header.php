<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes() ?>>
<head profile="http://gmpg.org/xfn/11">
	<title><?php wp_title( '-', true, 'right' ); echo wp_specialchars( get_bloginfo('name'), 1 ) ?></title>
	<meta http-equiv="content-type" content="<?php bloginfo('html_type') ?>; charset=<?php bloginfo('charset') ?>" />
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url') ?>" />
<?php wp_head() // For plugins ?>
	<link rel="alternate" type="application/rss+xml" href="<?php bloginfo('rss2_url') ?>" title="<?php printf( __( '%s latest posts', 'sandbox' ), wp_specialchars( get_bloginfo('name'), 1 ) ) ?>" />
	<link rel="alternate" type="application/rss+xml" href="<?php bloginfo('comments_rss2_url') ?>" title="<?php printf( __( '%s latest comments', 'sandbox' ), wp_specialchars( get_bloginfo('name'), 1 ) ) ?>" />
	<link rel="pingback" href="<?php bloginfo('pingback_url') ?>" />

<?php wp_enqueue_script("jquery"); ?>
<?php wp_head(); ?>


<script>

var $j = jQuery.noConflict();

$j(document).ready(function() {
    
function slide_it(el, sz) { $j(el).animate({ "width": sz }, 300); }

  $j("#email").click(function() {
    if ($j("#email_box").width() === 0 && $j("#phone_box").width() === 0)
    {
        slide_it("#email_box", "260px");
    }
    else if ($j("#phone_box").width() > 0) 
    {
      slide_it("#phone_box", "0px");
      $j("#email_box").delay(800).animate({ "width": "260px" }, 300);
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
        $j("#phone_box").delay(800).animate({ "width": "200px" }, 300);
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
   
   //     
   // Add Color To The Calendar Feed
   //

	if (theTitle === "Peripateo Gathering") 
        {
          theTitle = "<span style='color: #e5e5e5'>Peripateo Gathering</span>"
        }

	if (theTitle.slice(0,2) === "PG") 
	{
	  theTitle = "<span style='color: #e5e5e5'>" + theTitle + "</span>"
	}

    //
    // Build The Feed
    //

     html += "<div>" + "<h3>" + date.getDate() + "</h3><h4>" + theTitle  + "</h4><h5>" + el.content.$t + "</h5></div>";
    });

    $j("#black_box").html(html + "<br/>");
  });

});
</script>



</head>

<body>
  <div id="wrapper">
    <div id="header">
      <div id="small_links" >
        <a href="#">The City </a><span> | </span> 
        <a href="#">Server </a><span> | </span> 
        <a href="#">Give </a>
      </div>

      <div id="logo">
        <div id="social_media">
          <a href="#"><img src="wp-content/uploads/2011/12/social-twitter.png" /></a>
          <a href="#"><img src="wp-content/uploads/2011/12/social-facebook.png" /></a>
        </div>
    
        <a id="logo_img" href="./"><img src="wp-content/uploads/2011/12/logo.png" /></a>
	
	<div id="contact_methods">
	  <a href="#"><img id="email" src="wp-content/uploads/2011/12/email-black.png" /></a>
          <a href="#"><img id="phone" src="wp-content/uploads/2011/12/phone-black.png" /></a>
	</div>

          <div id="phone_box">
	    <h2>206.789.7320</h2>
	  </div>

          <div id="email_box">
	    <a href="mailto:office@crosspointchurches.org"><h2>office@crosspointchurches.org</h2></a>
	  </div>

      </div>

    </div>   <!-- END HEADER -->

    <div id="nav">
      <ul>
        <li onmouseover="document.pic1.src='wp-content/uploads/2011/12/white-about.png' " onmouseout="document.pic1.src='wp-content/uploads/2011/12/nav_link-about.png' "><a class="main_nav_links" href="./about"><img name="pic1" src="wp-content/uploads/2011/12/nav_link-about.png" /></a>
          <ul>
            <li><a href="#">abou #1</a></li>
            <li><a href="#">abou #2</a></li>
            <li><a href="#">abou #3</a></li>
          </ul>
        </li>

        <li>
          <img class="pipes" src="wp-content/uploads/2011/12/red_pipe.png" />
        </li>

        <li onmouseover="document.pic2.src='wp-content/uploads/2011/12/white-locations.png' " onmouseout="document.pic2.src='wp-content/uploads/2011/12/nav_link-locations.png' ">
          <a class="main_nav_links" href="./locations"><img name="pic2" src="wp-content/uploads/2011/12/nav_link-locations.png" /></a>
          <ul>
            <li><a href="#">loca #1</a></li>
            <li><a href="#">loca #2</a></li>
            <li><a href="#">loca #3</a></li>
          </ul>
        </li>


        <li>
          <img class="pipes" src="wp-content/uploads/2011/12/red_pipe.png" />
        </li>

        <li onmouseover="document.pic3.src='wp-content/uploads/2011/12/white-peripateo.png' " onmouseout="document.pic3.src='wp-content/uploads/2011/12/nav_link-peripateo.png' ">
          <a class="main_nav_links" href="./peripateo"><img name="pic3" src="wp-content/uploads/2011/12/nav_link-peripateo.png" /></a>
          <ul>
            <li><a href="#">reso #1</a></li>
            <li><a href="#">reso #2</a></li>
            <li><a href="#">reso #3</a></li>
          </ul>
        </li>

        <li>
          <img class="pipes" src="wp-content/uploads/2011/12/red_pipe.png" />
        </li>


        <li onmouseover="document.pic4.src='wp-content/uploads/2011/12/white-resources.png' " onmouseout="document.pic4.src='wp-content/uploads/2011/12/nav_link-resources.png' ">
          <a class="main_nav_links" href="./resources"><img name="pic4" src="wp-content/uploads/2011/12/nav_link-resources.png" /></a>
          <ul>
            <li><a href="#">peri #1</a></li>
            <li><a href="#">peri #2</a></li>
            <li><a href="#">peri #3</a></li>
          </ul>
        </li>
      </ul>
    </div>
    

      <div id="search_wrapper">
	<form id="searchform" value="?" class="blog-search" method="get" action="<?php bloginfo('home') ?>">

<input id="s" name="s" type="text" class="text" value="<?php the_search_query() ?>" size="19" tabindex="1" />
<input type="image" class="button" src="wp-content/uploads/2011/12/search-icon-light.png" value="<?php _e( ' &nbsp; ', 'sandbox' ) ?>" tabindex="2" />
	</form>
      </div>
