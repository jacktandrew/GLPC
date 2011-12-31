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

<script src="wp-content/uploads/2011/12/glpc.js" type="text/javascript"></script>

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
        <li onMouseOver="document.pic1.src='wp-content/uploads/2011/12/white-about.png' " onMouseOut="document.pic1.src='wp-content/uploads/2011/12/nav_link-about.png' "><a class="main_nav_links" href="./about"><img name="pic1" src="wp-content/uploads/2011/12/nav_link-about.png" /></a>
          <ul>
            <li><a href="#">abou #1</a></li>
            <li><a href="#">abou #2</a></li>
            <li><a href="#">abou #3</a></li>
          </ul>
        </li>

        <li>
          <img class="pipes" src="wp-content/uploads/2011/12/red_pipe.png" />
        </li>

        <li onMouseOver="document.pic2.src='wp-content/uploads/2011/12/white-locations.png' " onMouseOut="document.pic2.src='wp-content/uploads/2011/12/nav_link-locations.png' ">
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

        <li onMouseOver="document.pic3.src='wp-content/uploads/2011/12/white-peripateo.png' " onMouseOut="document.pic3.src='wp-content/uploads/2011/12/nav_link-peripateo.png' ">
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


        <li onMouseOver="document.pic4.src='wp-content/uploads/2011/12/white-resources.png' " onMouseOut="document.pic4.src='wp-content/uploads/2011/12/nav_link-resources.png' ">
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

<input id="s" name="s" type="text" class="text" value="<?php the_search_query() ?>" size="17" tabindex="1" />
<input type="image" class="button" src="wp-content/uploads/2011/12/search-icon-light.png" value="<?php _e( ' &nbsp; ', 'sandbox' ) ?>" tabindex="2" />
	</form>
      </div>
