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
define( 'DB_NAME', 'web-site' );

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
define( 'AUTH_KEY',         '?UrJvjt//s9binfA27r>Yx&*1#yyb$v+)f${35kvHV}kO]W|,2wNod{7@ke<7>He' );
define( 'SECURE_AUTH_KEY',  'dS7#M#2f{Xglos:Y4RI{.>x`MEM2xr^SnIVez)4rVEzD<%g&<]Zh6XUrUl37(ZML' );
define( 'LOGGED_IN_KEY',    '{kGy6x rq0j$+A_(Xj[D{`0}hw]2sa_bdPv8Oo_A+TC%A]T5#HTQ`+1w|Gi6nn6&' );
define( 'NONCE_KEY',        '([E%Cd;@9?D-6DSns;-w<9Y4bt7iFaPT_L$7;9pa1bN00~p_Eg*  n4F#Y(beM$u' );
define( 'AUTH_SALT',        '}->#F:i4t6M^v(x:?/V=HxnCl+-zy$kRQ9sTAu{aLEOP@GrebE3qCYT@v0h!vknc' );
define( 'SECURE_AUTH_SALT', 'v*P~pGS&C~8X:P1Mu.BBj<lyu[xif:W`p.>2+bZtGz@;3/mK]Xy0BSUsv3O:x!<{' );
define( 'LOGGED_IN_SALT',   'pd-<B7XReKor,]V^B?QX7eXH$zE}=W7AnO=;@#XYi!0:zCoPp>~2+A.rtiDGVaoh' );
define( 'NONCE_SALT',       'pr.|0 k0c@;7|+Dl/I7Nr!z=jQTEIg:V;fUSU2KHFFMf}wqWpE]yG1[FRkMSCh=R' );

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
