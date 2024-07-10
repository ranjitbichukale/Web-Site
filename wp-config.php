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
define( 'DB_NAME', 'portfolioweb' );

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
define( 'AUTH_KEY',         '-n5dfoGw@C$W4ql{N9,Kp<t/Lfv}C%f{kE4H.ajZeJa:J^><WaE:WOZ2[bv<`<?6' );
define( 'SECURE_AUTH_KEY',  '`KUAA[}}mPK:`BNPf}w?H(Evb6_G>T?+1>L4$;gBkp=Tj<25A7]U!d|ZdldXd.W/' );
define( 'LOGGED_IN_KEY',    '?>`(2p`c1XygQ*0]5o{#G=xI pGdw$cFI[iT]%`f)B1Zm%Z>1kF5,l62q.h[Nvr}' );
define( 'NONCE_KEY',        'o@v4fv6FVUd?U63)B^r@?_y#1OeZ[=h:H5q+x]*EWW-TY<3,TG#_1@Rpdp`$mQ~?' );
define( 'AUTH_SALT',        'Q3(0q}3U%qm^v~Q{(ePk3,_+dlBAc;wkPGA%$G|Xy^mI5t kXwC:hO!eia,_+u /' );
define( 'SECURE_AUTH_SALT', 'd9IPEbMTe]kf|zikrL3=Z-9@g4}~e&m1uI>--mnL^Y}v/q* ~!OAm]>t+ >LR687' );
define( 'LOGGED_IN_SALT',   'tzd(c/W.jD=ypf{,pyvOw`Q.D?/*cw&miGbJ@=5Y3f-EAM]dA#EwTf@`P:_1htjz' );
define( 'NONCE_SALT',       '0dde7[N89CvU<iX2z}t^eU|)Ae_g}xyV7Jm0_s.dHhg 5fN3%#oEzVDmLMI:IWXo' );

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
