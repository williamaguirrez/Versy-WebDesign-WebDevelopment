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
define( 'DB_NAME', 'wtechno1_wp621' );

/** MySQL database username */
define( 'DB_USER', 'wtechno1_wp621' );

/** MySQL database password */
define( 'DB_PASSWORD', '5@7SA@21tp' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '4jd0wncv4hb723alvu3c6wvwo2kd2zl8yfrpluvep4jwdlpabmqdspmidkqxy6uy' );
define( 'SECURE_AUTH_KEY',  't5tgvzcimvkdwrtwh4kuyljwsi1hgot9m27m06twzevpzueewjeozavzxnjbggrr' );
define( 'LOGGED_IN_KEY',    'duhhwz8rrxnssjaemldnowodckx19uodcbya8val4be5f6btjb4yt6uuaxuznwy0' );
define( 'NONCE_KEY',        'kjjiuvkotgtmzh9gjdbt6savfzn4jowg3x1n9l3rpux6qhwfb05hjbcfgyeldobl' );
define( 'AUTH_SALT',        'jz1jti2uxrysmei4lcijkqyvciv43n7vwi5ik2ixsseq6tfpcj50d0ugjzj2kd7y' );
define( 'SECURE_AUTH_SALT', 'xv8wbaeify0lvi3pftwsmj3k0pts7mhx33ivqzla5elqmeuazi0tdjkc0vnct1ze' );
define( 'LOGGED_IN_SALT',   '20iessqrkyyzy8km7ihplu8b2x0gkvj8xjnrcppyidvtfbn1a5nhvogoub0ywini' );
define( 'NONCE_SALT',       'bvsmj5bre6rfwbtkkrqmkvgdotlvagbqivvzlnc6mhf4ekubxy7f6bmz6bkpathm' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp1t_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
