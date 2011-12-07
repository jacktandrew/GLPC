=== Google Calendar Widget & Short Code ===
Contributors: misterbisson
Donate link: http://MaisonBisson.com/
Tags: widget, shortcode, Google Calendar, gcal, widgets, embedding
Requires at least: 2.8.0
Tested up to: 2.9.1
Stable tag: trunk

Adds a widget and shortcode to display or embed Google Calendars in WordPress.

== Description ==

Allows you to display Google Calendar content in widgets or embed it in pages or posts.

Get your <a href="http://www.google.com/calendar/embedhelper">Google Calendar embed code</a> and paste it into a post or page. When you save the post or page, WPgcal will convert the iframe into a shortcode that displays the calendar. Or, paste the embed code into the widget and put it into a sidebar.

For security reasons, this plugin does not allow users to post content in iframes and does not require that your site allow <a href="http://www.w3.org/TR/REC-html40/present/frames.html#h-16.5">iframes</a> in post content. It detects the Google Calendar iframe embed code, parses it, and rewrites it as a <a href="http://codex.wordpress.org/Shortcode_API">shortcode</a>.

== Installation ==

1. Place the plugin folder in your `wp-content/plugins/` directory and activate it.

== Screenshots ==

1. Adding a calendar via the WPgcal widget.
2. Getting the embed code for a Google Calendar
3. The WPgcal widget displayed
4. Pasting the Google Calendar embed iframe into a post.
5. The shortcode generated from the embed code after the post is saved
6. The Google Calendar displayed in a post 