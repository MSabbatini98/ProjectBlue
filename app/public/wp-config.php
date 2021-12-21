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
define('AUTH_KEY',         '1pY6eMoGv5YJbVd3MktTGX2deBYlX53J3N8OHgxs7snmfsENrWu7O47a0S71fSo9Mt4KhtcslynWHU5AQVg8sw==');
define('SECURE_AUTH_KEY',  'oqiDa8CUpY5Ucc4LMWwvmF0yU5Q9ny1yudY+V8kp9az5qSL5rJefpgWI2Wka8asdLacxtc/VLPuSK7rdJ2YFMQ==');
define('LOGGED_IN_KEY',    '4CHJolrP9DK0Y720eGFuSPLAkfTz/T8CEGRL14TCIRCiTSx2fCPOxU2rQhVsnRxJ7TV3RWoXPD3OfnTXLTJQlw==');
define('NONCE_KEY',        'hDrEZiKC2+9oA0APnvZrzrzhty35ZkEdpRB2r+7nxpBdgivFn74JSl2vFFJGgNvG/LgrtjIDZYojWRhgJeOIzg==');
define('AUTH_SALT',        'sMLufRFSd/LGYS299SqCSmA06eiwCZSkUcuK7GV+CNr18CpZG5fKhdvpq+TU33RkUiuPmogh3IYMcHQLJyT7Ig==');
define('SECURE_AUTH_SALT', 'pBVTTsI345azXxR7t/eQyxUU8HbwpUfONAgglN4zfNkT2NE6SjazkAMaM0Dzb37woL6OnotLlTYNpb5hcvfB3w==');
define('LOGGED_IN_SALT',   'MWDJ1WKf5PYTZvu+a7BoLN8yXIVNnDM1WcfF1Hua4oaRZV8QSur1dVLVeBONKWR2fmfyAJK9hj6gxCU3EHhp+Q==');
define('NONCE_SALT',       'HW3E8N08nMsML3SXh9+z1DB0emST/GQOfnkjIs54GqkcZWyaUGjecrvpcv42JFK3cfeCc8qfACKbGUH28smOsw==');

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
