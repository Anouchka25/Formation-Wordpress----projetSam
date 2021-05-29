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
define( 'DB_NAME', 'projetSam' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

if ( !defined('WP_CLI') ) {
    define( 'WP_SITEURL', $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
    define( 'WP_HOME',    $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
}



/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'KXs4STMnnsxvO7RkKzg5YsxypfL1cOFwae3wFHCqhC3AWdB9FuRjIWouQIkNnYhh' );
define( 'SECURE_AUTH_KEY',  'C8uTlbsEhyAMDQCaul7F3JSwPeOp5WjPthy7NPLWh7BONNQg6KL6xCJKtZkMOoHS' );
define( 'LOGGED_IN_KEY',    'keFSmDRllnNcTuaOQ7A6KxXY6gWYH2kV0X79enhAqGTJevMtQ7US0GGVzMTnKsVx' );
define( 'NONCE_KEY',        'PrAS4aq7CB8jsB90b1Mf4jfEvBCp9IXxwaaxBf7DpTc66Uua1a2X3ZKWeRtSXbIB' );
define( 'AUTH_SALT',        'EMhD9Nfbt3LZv8Fnum5tYI1KLrUeyDW8pIuBkq43p2eJwIQauzhfWinRBIR5HSKz' );
define( 'SECURE_AUTH_SALT', 'dDTMDCumQzSiCF6XJ5nnzet0v30QTJUbBUY3uagknWzedEk7xkGhElOAMFF0h4jS' );
define( 'LOGGED_IN_SALT',   'DJ5ShxlqIuZhjl43B0aCgeqvVtgFVvyylG0UJcS2qSvJzZkoQSfBTxxeOJPm5uHM' );
define( 'NONCE_SALT',       'n9FHVWCB8X3eHdmlYjuzrXfq2hbhuiTadjnXUDpUvnEW6Z6SwUiFfm0qi8bsJ9WY' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
