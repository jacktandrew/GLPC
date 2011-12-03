<?php get_header() ?>
<!--	<div id="container">
		<div id="content">
-->










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
    
        <img src="wp-content/uploads/2011/12/logo.png" />

        <div id="contact_methods">
          <a href="#"><img src="wp-content/uploads/2011/12/email-black.png" /></a>
          <a href="#"><img src="wp-content/uploads/2011/12/phone-black.png" /></a>
        </div>
      </div>

    </div>   <!-- END HEADER -->

    <div id="nav">
      <ul>
        <li class="hoverable" onMouseOver="document.pic1.src='wp-content/uploads/2011/12/white-about.png' " onMouseOut="document.pic1.src='wp-content/uploads/2011/12/nav_link-about.png' ">
          <a href="#"><img name="pic1" src="wp-content/uploads/2011/12/nav_link-about.png" /></a>
          <ul>
            <li><a href="#">abou #1</a></li>
            <li><a href="#">abou #2</a></li>
            <li><a href="#">abou #3</a></li>
          </ul>
        </li>

        <li>
          <img src="wp-content/uploads/2011/12/red_pipe.png" />
        </li>

        <li class="hoverable" onMouseOver="document.pic2.src='wp-content/uploads/2011/12/white-locations.png' " onMouseOut="document.pic2.src='wp-content/uploads/2011/12/nav_link-locations.png' ">
          <a href="#"><img name="pic2" src="wp-content/uploads/2011/12/nav_link-locations.png" /></a>
          <ul>
            <li><a href="#">loca #1</a></li>
            <li><a href="#">loca #2</a></li>
            <li><a href="#">loca #3</a></li>
          </ul>
        </li>


        <li>
          <img src="wp-content/uploads/2011/12/red_pipe.png" />
        </li>

        <li class="hoverable" onMouseOver="document.pic3.src='wp-content/uploads/2011/12/white-peripateo.png' " onMouseOut="document.pic3.src='wp-content/uploads/2011/12/nav_link-peripateo.png' ">
          <a href="#"><img name="pic3" src="wp-content/uploads/2011/12/nav_link-peripateo.png" /></a>
          <ul>
            <li><a href="#">reso #1</a></li>
            <li><a href="#">reso #2</a></li>
            <li><a href="#">reso #3</a></li>
          </ul>
        </li>

        <li>
          <img src="wp-content/uploads/2011/12/red_pipe.png" />
        </li>


        <li class="hoverable" onMouseOver="document.pic4.src='wp-content/uploads/2011/12/white-resources.png' " onMouseOut="document.pic4.src='wp-content/uploads/2011/12/nav_link-resources.png' ">
          <a href="#"><img name="pic4" src="wp-content/uploads/2011/12/nav_link-resources.png" /></a>
          <ul>
            <li><a href="#">peri #1</a></li>
            <li><a href="#">peri #2</a></li>
            <li><a href="#">peri #3</a></li>
          </ul>
        </li>
      </ul>
    </div>
    

      <div id="search_wrapper">
        <input type="text" />
        <div id="search_icon">
          <a href="#">
            <img src="wp-content/uploads/2011/12/search-icon-light.png" />
          </a>
        </div>
      </div>
    
    
    <div id="main_body">
      <div id="two_column_wrapper">
        <img id="welcome" src="wp-content/uploads/2011/12/welcome.png" />

          <div id="all_caps">VIVAMUS VEL METUS SED QUAM FRINGILLA CONGUE. FUSCE BLANDIT, MASSA UT CONGUE MOLESTIE, TURPIS NULLA CURSUS TORTOR</div>
          <div id="splash_paragraph">
            <p>Donec porta laoreet felis, at tempus diam euismod et. Etiam luctus, enim eu ultrices fringilla, velit quam porttitor urna, ut porttitor erat urna in lectus. Vivamus vitae dui eu eros auctor tempus a quis urna. Ut posuere, tortor ut volutpat blandit, nisl risus laoreet lacus, in pharetra justo ipsum at massa. Vestibulum ligula augue, condimentum a vestibulum fringilla, placerat eget ipsum. Curabitur in nisi nec metus vehicula consectetur vel sed nisl.</p> 
        
            <p>Duis gravida, lectus at consequat dignissim, nunc nibh commodo risus, a fringilla nisl orci convallis leo. Phasellus a libero vitae arcu semper viverra. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Nunc nec turpis nisi, quis imperdiet magna. Curabitur et ante massa, vitae malesuada diam. Sed aliquam nisi vitae tortor mollis dignissim.</p>
          </div>

      </div>
    
      <div id="black_box">
        <div>
          <h3>12</h3>
          <h4>Men's Peripateo Gathering</h4>
        </div>
      
        <div>
          <h3>18</h3>
          <h4>Fun Times</h4>
        </div>
      
        <div>
          <h3>19</h3>
          <h4>Worship Service</h4>
          <h5>Green Lake: 10:30</h5>
          <h5>Ascension: 9:30</h5>
        </div>
      
        <br/><br/><br/><br/><br/><br/><br/><br/>
    
      </div>
      <img id="scroll" src="wp-content/uploads/2011/12/scroll.png" />
    </div>











			<div id="nav-above" class="navigation">
				<div class="nav-previous"><?php next_posts_link(__( '<span class="meta-nav">&laquo;</span> Older posts', 'sandbox' )) ?></div>
				<div class="nav-next"><?php previous_posts_link(__( 'Newer posts <span class="meta-nav">&raquo;</span>', 'sandbox' )) ?></div>
			</div>

<?php while ( have_posts() ) : the_post() ?>

			<div id="post-<?php the_ID() ?>" class="<?php sandbox_post_class() ?>">
				<h2 class="entry-title"><a href="<?php the_permalink() ?>" title="<?php printf( __('Permalink to %s', 'sandbox'), the_title_attribute('echo=0') ) ?>" rel="bookmark"><?php the_title() ?></a></h2>
				<div class="entry-date"><abbr class="published" title="<?php the_time('Y-m-d\TH:i:sO') ?>"><?php unset($previousday); printf( __( '%1$s &#8211; %2$s', 'sandbox' ), the_date( '', '', '', false ), get_the_time() ) ?></abbr></div>
				<div class="entry-content">
<?php the_content( __( 'Read More <span class="meta-nav">&raquo;</span>', 'sandbox' ) ) ?>

				<?php wp_link_pages('before=<div class="page-link">' . __( 'Pages:', 'sandbox' ) . '&after=</div>') ?>
				</div>
				<div class="entry-meta">
					<span class="author vcard"><?php printf( __( 'By %s', 'sandbox' ), '<a class="url fn n" href="' . get_author_link( false, $authordata->ID, $authordata->user_nicename ) . '" title="' . sprintf( __( 'View all posts by %s', 'sandbox' ), $authordata->display_name ) . '">' . get_the_author() . '</a>' ) ?></span>
					<span class="meta-sep">|</span>
					<span class="cat-links"><?php printf( __( 'Posted in %s', 'sandbox' ), get_the_category_list(', ') ) ?></span>
					<span class="meta-sep">|</span>
					<?php the_tags( __( '<span class="tag-links">Tagged ', 'sandbox' ), ", ", "</span>\n\t\t\t\t\t<span class=\"meta-sep\">|</span>\n" ) ?>
<?php edit_post_link( __( 'Edit', 'sandbox' ), "\t\t\t\t\t<span class=\"edit-link\">", "</span>\n\t\t\t\t\t<span class=\"meta-sep\">|</span>\n" ) ?>
					<span class="comments-link"><?php comments_popup_link( __( 'Comments (0)', 'sandbox' ), __( 'Comments (1)', 'sandbox' ), __( 'Comments (%)', 'sandbox' ) ) ?></span>
				</div>
			</div><!-- .post -->

<?php comments_template() ?>

<?php endwhile; ?>

			<div id="nav-below" class="navigation">
				<div class="nav-previous"><?php next_posts_link(__( '<span class="meta-nav">&laquo;</span> Older posts', 'sandbox' )) ?></div>
				<div class="nav-next"><?php previous_posts_link(__( 'Newer posts <span class="meta-nav">&raquo;</span>', 'sandbox' )) ?></div>
			</div>

		</div><!-- #content -->
	</div><!-- #container -->

<?php get_sidebar() ?>
<?php get_footer() ?>