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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
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
define('AUTH_KEY',         'URqLxAXIvoQbSEXn4WWZUGPEAJuSMi6vVW8Oc273Mv0m9mzM5UruAzi92ESHK/5MgXfOI+iv6HWvdGzlMhaDZw==');
define('SECURE_AUTH_KEY',  'bUMFXuwldcn3TQOUecphG93HzVecfnLY/jx3hxFsS8GjDQuECdnTUmIhfRtNEohfcUEM5/ilMCxHe3xVZyF1vg==');
define('LOGGED_IN_KEY',    'BVosqCYypIUN6zKi5F60/JEGp0NymFLitKIWdEPeyyoYre2VD1cdrC88txQse3DqdYI0NSwJLzOWbmRyrecSKQ==');
define('NONCE_KEY',        'yV15BOabHMtdtuG2x+V82/HWixnEbSkNJFomIqompZ2GPqARyKy7g5p7KDe53qxPMgxFJWm8ZVjohBlF875PVw==');
define('AUTH_SALT',        'DO8AvywbsUB4dkYeffcuj8stHARrau4wVlJZTAyJ+6wWpmA1HYtzwCZ/NZBorLCOx7RmTXZ2TQQJZH5KimdXhw==');
define('SECURE_AUTH_SALT', 'SoIlUha4BPhY5IYqSEclZ45w9UyxDHqje/PrqC9sI+3v8D6Iqhx66OWDWb111UuT+RJgE9gbG9LLZdOJgObNTg==');
define('LOGGED_IN_SALT',   'b7KMocpCE6sSxPlOf+S/NiJGI1mZoa0Z+GbCqY/PlaPnKSSn2iS1fzX9A0GawjDEn/TjDz49hb5a6BoltDOa7w==');
define('NONCE_SALT',       'a61PjGpnUYnwtvIA+9mwfjBCvYcyef0Vihiruw+VBGAfN9VMVOyjOqEejvh3h+sfavqyu7auLCjnQ6jiVfg0gg==');

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
