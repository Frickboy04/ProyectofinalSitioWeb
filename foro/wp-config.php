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
define( 'DB_NAME', 'store' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'B&$ylEP-`2I5bF?68wTKi21bC7U}^F.31n^:qud^Y5aXr>Od<8V=Su-K@sd|H(My' );
define( 'SECURE_AUTH_KEY',  '29qcqt+kcM%jWZsCxg{}>Z^!P~N&y0_1BHTMc< Q%-0u7-veV.?K-=7U${+0xZnI' );
define( 'LOGGED_IN_KEY',    'hsrRJBP(xvr3x;/+5=l5gp.RdA`afwxOWWs;o%-oI)l /#]e80a3}b `T?-Y$Vpd' );
define( 'NONCE_KEY',        ',tq.8<:y6Smgd=|6@bb8X*YX&hthSnWY7QF!EIwhB(B`osep/ICip[ Dy${Xpim>' );
define( 'AUTH_SALT',        'p}-/AO.[sXqvmfQ2/6Q 0Ae#.jln;iS@Oow%bzJcY5VvO^ygDHJgl| e%)>.eakW' );
define( 'SECURE_AUTH_SALT', '#D1p_CM_oPvx%<%LAA=usT[2V*$%Ir]R/ow3lYk7b}>r, }.fP]l1AmZ~1AoVZ1#' );
define( 'LOGGED_IN_SALT',   '8q!fE(S3C6/6A[S%5rt:QcP:ZHk5Q(KPOEX]|m)yf[ve7hfj|6*@vE0tHT,VZ^9K' );
define( 'NONCE_SALT',       '+>:;dqM!7G:hJGXj}-65Y`6-Dl8mg/ .m=QQyL{{w98+/ALdj[{0}~5_z`t75Yz,' );

/**#@-*/

/**
 * WordPress database table prefix.
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

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
