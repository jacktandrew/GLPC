<?php
/*
Plugin Name: Google Calendar Widget & Short Code
Plugin URI: http://maisonbisson.com/
Description: Adds a widget and shortcode to display/embed Google Calendars in WordPress
Version: alpha 2
Author: Casey Bisson
Author URI: http://maisonbisson.com/blog/
*/

/* an example embed code:
 * <iframe src="http://www.google.com/calendar/embed?height=600&amp;wkst=1&amp;bgcolor=%23FFFFFF&amp;src=enk2sgfhkhrjqs57kqb5o1rb91r82rbo%40import.calendar.google.com&amp;color=%235A6986&amp;ctz=America%2FNew_York" style=" border-width:0 " width="500" height="600" frameborder="0" scrolling="no"></iframe>
*/

// register shortcode
function wpgcal_init()
{
	add_shortcode( 'gcal' , 'wpgcal_shortcode' );
}
add_action( 'init', 'wpgcal_init', 1 );

// the shortcode
function wpgcal_shortcode( $arg )
{
	// [gcal ]
	$arg = shortcode_atts( array(
		'src' => '',
		'width' => 0,
		'height' => 0,
	    'class' => '',
	    'style' => '',
	    'frameborder' => 0,
	    'scrolling' => 'no'
	), $arg );

	return '<iframe src="' . $arg['src'] . '" width="' . $arg['width'] . '" height="'. $arg['height'] .
	       '" frameborder="' . $arg['frameborder'] . '" scrolling="' . $arg['scrolling'] .
	       '" class=' . $arg['class'] . ' style="' . $arg['style'] . '"></iframe>';
}

// register pre_save filter
function wpgcal_admin_init()
{
	add_filter( 'content_save_pre' , 'wpgcal_content_save_pre' );
}
add_action('admin_init', 'wpgcal_admin_init', 1);

// the pre_save filter
function wpgcal_content_save_pre( $content )
{
	$parsed = wpgcal_sanitizeinput( htmlspecialchars_decode( stripslashes( $content )));
	
	// this needs to check for a specific google calendar iframe
	if( $parsed )
	{
		// THIS WORKS //
		// if( preg_match( '/' . preg_quote(addslashes(htmlspecialchars($parsed['embed'], ENT_NOQUOTES)), '/') . '/' , $content ))
		if( preg_match( '/' . preg_quote( addslashes( htmlspecialchars( $parsed['embed'], ENT_NOQUOTES )), '/') . '/i' , $content ))
		{
            // replace google calendar iframe tag with shortcode
			$content = preg_replace( '/' . preg_quote( addslashes( htmlspecialchars( $parsed['embed'], ENT_NOQUOTES)), '/') . '/i' ,
			    '[gcal src="'. $parsed['src'] .'" width="'. $parsed['width'] .'" height="'. $parsed['height'] .
			    '" frameborder="' . $parsed['frameborder'] . '" scrolling="' . $parsed['scrolling'] .
			    '" style="' . $parsed['style'] . '"]',
			    $content);
		}

	}

	return $content;
}

// register widget
function wpgcal_widgets_init()
{
	register_widget( 'WPgcal_Widget' );
}
add_action('widgets_init', 'wpgcal_widgets_init', 1);

// the widget
class WPgcal_Widget extends WP_Widget
{
	function WPgcal_Widget()
	{
		$widget_ops = array('classname' => 'widget_gcal', 'description' => __( 'Insert a Google calendar') );
		$this->WP_Widget('gcal', __('Google Calendar'), $widget_ops);
	}

	function widget( $args, $instance )
	{
		extract( $args );

		if ( !empty( $instance['src'] ) )
		{
			echo $before_widget;
			if ( $instance['title'] )
				echo $before_title . $instance['title'] . $after_title;
?>
			<iframe src="<?php echo $instance['src'] ?>" width="<?php echo $instance['width'] ?>" height="<?php echo $instance['height'] ?>" frameborder="0" scrolling="no"></iframe>
<?php
			echo $after_widget;
		}
	}

	function update( $new_instance, $old_instance )
	{
		$instance = $old_instance;
		
		$instance['title'] = strip_tags( $new_instance['title'] );

		$parsed = wpgcal_sanitizeinput( $new_instance['embed'] );
		$instance['embed'] = $parsed['embed'];
		$instance['src'] = $parsed['src'];
		$instance['width'] = $parsed['width'];
		$instance['height'] = $parsed['height'];
		$instance['frameborder'] = $parsed['frameborder'];
		$instance['scrolling'] = $parsed['scrolling'];
		$instance['style'] = $parsed['style'];

		return $instance;
	}

	function form( $instance )
	{
		//Defaults
		$instance = wp_parse_args( (array) $instance,
			array(
				'title' => 'My Calendar',
				'embed' => '',
				'src' => '',
				'width' => '',
				'height' => '',
			)
		);

		$title = esc_attr( $instance['title'] );
		$embed = esc_attr( $instance['embed'] );
?>
		<p><label for="<?php echo $this->get_field_id('title'); ?>">
			<?php _e('Title:'); ?></label> <input class="widefat"
			id="<?php echo $this->get_field_id('title'); ?>"
			name="<?php echo $this->get_field_name('title'); ?>" type="text"
			value="<?php echo $title; ?>" /><br />
			<small><?php _e( 'Optional, leave empty to hide.' ); ?></small></p>

		<p><label for="<?php echo $this->get_field_id('embed'); ?>">
			<?php _e('Embed code:'); ?></label> <input class="widefat"
			id="<?php echo $this->get_field_id('embed'); ?>"
			name="<?php echo $this->get_field_name('embed'); ?>" type="text"
			value="<?php echo $embed; ?>" /><br />
			<small><?php _e( 'Get your embed code from the
			<a href="http://www.google.com/calendar/embedhelper" target="_blank">Google Calendar embed helper</a>.' ); ?>
			</small></p>

		<p><label for="<?php echo $this->get_field_id('src'); ?>">
			<?php _e('Source:'); ?></label> <input disabled class="widefat"
			id="<?php echo $this->get_field_id('src'); ?>"
			name="<?php echo $this->get_field_name('src'); ?>" type="text"
			value="<?php echo $instance['src']; ?>" /></p>

		<p><label for="<?php echo $this->get_field_id('width'); ?>">
			<?php _e('Width:'); ?></label> <input disabled class="widefat"
			id="<?php echo $this->get_field_id('width'); ?>"
			name="<?php echo $this->get_field_name('width'); ?>" type="text"
			value="<?php echo $instance['width']; ?>" /></p>

		<p><label for="<?php echo $this->get_field_id('height'); ?>">
			<?php _e('Height:'); ?></label> <input disabled class="widefat"
			id="<?php echo $this->get_field_id('height'); ?>"
			name="<?php echo $this->get_field_name('height'); ?>" type="text"
			value="<?php echo $instance['height']; ?>" /></p>
			
        <p><label for="<?php echo $this->get_field_id('frameborder'); ?>">
            <?php _e('Border:'); ?></label> <input disabled class="widefat"
            id="<?php echo $this->get_field_id('frameborder'); ?>"
            name="<?php echo $this->get_field_name('frameborder'); ?>" type="text"
            value="<?php echo $instance['frameborder']; ?>" /></p>
            
        <p><label for="<?php echo $this->get_field_id('scrolling'); ?>">
            <?php _e('Scroll Bar:'); ?></label> <input disabled class="widefat"
            id="<?php echo $this->get_field_id('scrolling'); ?>"
            name="<?php echo $this->get_field_name('scrolling'); ?>" type="text"
            value="<?php echo $instance['scrolling']; ?>" /></p>

        <p><label for="<?php echo $this->get_field_id('style'); ?>">
            <?php _e('Style:'); ?></label> <input disabled class="widefat"
            id="<?php echo $this->get_field_id('style'); ?>"
            name="<?php echo $this->get_field_name('style'); ?>" type="text"
            value="<?php echo $instance['style']; ?>" /></p>
<?php
	}

}// end WPgcal_Widget

function wpgcal_sanitizeinput( $input )
{
	if( strpos( $input, 'iframe' ))
	{
        /*
         * call from content_save_pre needs to be
         *
         * wpgcal_sanitizeinput( htmlspecialchars_decode( stripslashes( $content )));
         *
         * since content is escaped and has htmlspecial characters
         */
		preg_match( '/<iframe[^>]*google\.com\/calendar\/[^>]*><\/iframe>/i' , $input , $temp );
		$parsed['embed'] = $temp[0];

		/*
		 * changed next three preg_matches to search in $parsed['embed'] not $input
		 */
		preg_match( '/src="([^"]*)"/i' , $parsed['embed'] , $temp );
		$parsed['src'] = sanitize_url( $temp[1] );

		preg_match( '/width="([^"]*)"/i' , $parsed['embed'] , $temp );
		$parsed['width'] = absint( $temp[1] );

		preg_match( '/height="([^"]*)"/i' , $parsed['embed'] , $temp );
		$parsed['height'] = absint( $temp[1] );

		preg_match( '/frameborder="([^"]*)"/i' , $parsed['embed'] , $temp );
        $parsed['frameborder'] = absint( $temp[1] );
        
        preg_match( '/scrolling="([^"]*)"/i' , $parsed['embed'] , $temp );
        $parsed['scrolling'] = $temp[1];
        
        preg_match( '/style="([^"]*)"/i' , $parsed['embed'] , $temp );
        $parsed['style'] = $temp[1];
                
		//check to make sure the code in the iframe tags is google calendar code
        if( preg_match( '/google.com\/calendar(.*)\/embed/i' , $parsed['src'] ))
            return $parsed;
	}

	return array();
}