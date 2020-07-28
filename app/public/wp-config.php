<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'n47iJ4GUVy99Hgx7wnKA2d0tI2E0IBKQe61hA4qfeE0P4322PN8fPS2xBNWvJQ1XQeuOLsQWCknEfBCLjqerKA==');
define('SECURE_AUTH_KEY',  '7Gk/F2CedEmhPUEw3lqtuR2olNT76A75OPxs4J1MpoqewEEVlH0GylgbBkcNdjEgyD3ahkZzmki7zrxXeWrFHA==');
define('LOGGED_IN_KEY',    'X9wkI8Lwr/NTUWXNNI8MeoND6yovWkJYvLV+YJE2mGRAK05lffIz0mOIoJb4WEdMTTNlZDvLibngc8agH5GGpw==');
define('NONCE_KEY',        'sgJK0MbZSkJOSGZIOMnUvl/3/W7moPIqLQgIWU9l6pOvbO2m+mviOkjBwjFU2L3VrKYCKwQkc0GAO1ClM3KH/g==');
define('AUTH_SALT',        'QP38JsIpiJTHl6nYcNNEJT264rfd1CBrpCuBaT3l8PWDvLaCxZ3m7yY2VSnrflaSm35d3iQF3hZJkZFWRkdOJQ==');
define('SECURE_AUTH_SALT', 'USEtfG/v1WPnCiRettJmSB6DJGgpb1eU5aY3MU9P8Sx8Rj/01FojzmYrpgS8vtVV1njI5lN7Haa+kg4GLGLorw==');
define('LOGGED_IN_SALT',   '0kESvsjnT521YXq47pPlK9KejsGjCATVYWXOZ+muJhx9u9I/Okwin1Aa66WdPW9aFh7iun2UvOFg78eT+8FSbQ==');
define('NONCE_SALT',       'tWQkAukcxsNlYnPuM265rXl+avU6en2b2FztX4ixBIBlmjZ+dAMF51b01/m2xfzkOjxMOY4oMe64sVT4Z8KdaA==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
