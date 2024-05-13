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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'animated' );

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
define( 'AUTH_KEY',         '8!pQS.*5[@0Y2`nxJ9SrlW_S]Yo%nslf@T~;f/Nz{|y<B0EV_0xkf6I/,D0E_L`o' );
define( 'SECURE_AUTH_KEY',  'y&s;gA8qSCOdUX(>?nzgERd)%ra;Yz#I6 b+@i!d8^r=/]MM!{PA2dhWFV!+tSey' );
define( 'LOGGED_IN_KEY',    '.l1A1M)dK>Z9YDFtv/,[#%Xo9;ap&U]7l^aF}Ge>$?t+i;/_yn^2X1wDSD$C]]#Y' );
define( 'NONCE_KEY',        'AMlx@o>,`zDh.4Fm?K5-^p)+o#h@H!vu_W@.%TtX{UF(Lpp`-V3)fEChVx}44 ]+' );
define( 'AUTH_SALT',        'D| MfcXkt%&4c([ffP9=,5hj`4k|7!o/+^:Mqs[:gQjMw_n)j>sja3V7%P02#n$T' );
define( 'SECURE_AUTH_SALT', ' GF`>3vQ+B=3z@@CLq$M;T&mF17/Rmtmk(xP.ag?<92eDw`G7UTc]3j.xDf9B?De' );
define( 'LOGGED_IN_SALT',   '|@hW]usPTnFl6sxa&kvsbch/0y(.|H9FEp{es0<ceU 14Z$v$c8pFrRtXeti,Z*4' );
define( 'NONCE_SALT',       '7t$}n_WHTz)]UzhwwR%EVcbHF9ih8E6L2!!bjf&x~>##}>z&@=%c5Jwz0-#aV3qZ' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
