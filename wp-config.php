<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'Cc5u;N?[!IG9J|=O3~n=[uy9|%mVPgN <(?f(0ZH>T,##LmWhwB!<yhAxTMm<?Ql');
define('SECURE_AUTH_KEY',  '9KIDA1^% EL:32g:KYD#y;6d{WiIRA3#v(tj#a>|F($J<{TgTvC6384uG]SwzzZx');
define('LOGGED_IN_KEY',    ']!^d!,x;Cpw^K8~L~>YmV|;QtJ_lC?$bcp;lokXqA~ZQmO^#OMaQm=[bbbS!BmAD');
define('NONCE_KEY',        'mG2G2c1Z>YHSk4L!/{fvLxpVr[vY~#U}8vjikETYqRO/.>.&NB9T!a=;/YwA#KEZ');
define('AUTH_SALT',        '[O&k7-cK8uXYm2rH)s?D0w0Y;},6Bvr*_2d5y]bM_]%Ls67I.uiqLxa@fldt,*AA');
define('SECURE_AUTH_SALT', '_iC/])D*/;TorNsp4ecQZEf?89P@ CUWaQ/Sc6+Xvpctik*N/>l)c;CUpcXI=bfj');
define('LOGGED_IN_SALT',   'cnmp#C<3)NzxAs.G,-c<=_v/&BnzDG`YrvB*hvV(YgewjS6n!s5JuDs]8;*knBwj');
define('NONCE_SALT',       '%JlL3WiH(m.0f/|D2!5gWz~k;[vV)df$/x@bZKDCh*2-k~pfMQ2j6i#8MSSv[=}u');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
