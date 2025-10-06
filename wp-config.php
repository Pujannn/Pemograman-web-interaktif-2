<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'db_wp' );

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
define( 'AUTH_KEY',         '9pyp9@M4A[2fI(5!BnE>-E%Oyn368=MfmC&<-lQo>0y/Okf%@(RH,:s{&J*&WTZ5' );
define( 'SECURE_AUTH_KEY',  'zftgv!qHkP}zx4#<+GC)G}dS%a(LRz>>JN|xegF4/pi5E7o3[4`9O)9l9WB6a9g/' );
define( 'LOGGED_IN_KEY',    '[7^&.9LO}AW~.xHhCvQ@hE:*VFB]&`ntQa? q-Uo_;:6cM4li&[?N3HicrtbXnGG' );
define( 'NONCE_KEY',        'Wc! /w3%2C_d]i%1Z(`xkNFBE%Y8&z=/DOC64,?M.5su3w4J)e}e0GkArdsIhEm1' );
define( 'AUTH_SALT',        'W,#Nas*aWvLRWA%#2`XTd)HcTR1gwNJQov_32uT!E+!OM6>0liEH]TJ8oyQVk069' );
define( 'SECURE_AUTH_SALT', 'ohHS8SZB=uO*O*z)H-|>wZ$a?*t/,T2>iOuG2IcN4i0:.Hbl-ibArQ|4+a1cY.,S' );
define( 'LOGGED_IN_SALT',   'asyM@RfE,j4OFY4l>BLnrRi}+ta.y-OU?c!P^onS$E@T~VDev35}=,jdP0)KMrl?' );
define( 'NONCE_SALT',       '0orv?q8)8r;]ixX}+XQD_<XMLh[b(<TZ0V{*BAR(nTJR}:*:AV|=!G:7d#so.C^O' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
