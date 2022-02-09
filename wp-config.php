<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'italoman_wp_bm' );

/** Database username */
define( 'DB_USER', 'italoman_wp_bm' );

/** Database password */
define( 'DB_PASSWORD', '2QS6)U(pP8' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'j2pu2az7ift8d1flkkjfqzrfwrtld8q4i5bkhip3ydzxfkbge2mbnre9uxakrcn1' );
define( 'SECURE_AUTH_KEY',  'hx6kmofcdlmoluteiz1f6rbcrocxji1uz7j8t19fay9cfmc5shlieryqp1ymol7i' );
define( 'LOGGED_IN_KEY',    'rxmwg7asgobcaliuz5jquubpekoh3zbrxig3wwlqg5cgytfldsnk4mb3ticcdxu0' );
define( 'NONCE_KEY',        'lgp2ktrzsjjepk3o2icfgtwrswkl665qwdl3g5oge7ec1k72k3wenmyrvnmfdt9k' );
define( 'AUTH_SALT',        '7sv0re8vdl5tugjzy7ktoer9goajksdx5v3aezppehna78wjvt6jd4ex56xxhwsv' );
define( 'SECURE_AUTH_SALT', 'jror4midfn2ygozc6wqj3ksxhtvvjtcyo5rpkcqrk8jzyzbvt6wbsnkopld2xy8d' );
define( 'LOGGED_IN_SALT',   'xo1irycuquwathrls5o8th5nsbunbv8msjauwah20crna0rqywbayyruwplyy2mx' );
define( 'NONCE_SALT',       'nagqezcm9deeeglk77s7iyb9nt2bw48iwui2vxte8edein8w89majoswxhwwbfbs' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp0r_';

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

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
