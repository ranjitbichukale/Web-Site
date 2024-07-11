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
define( 'DB_NAME', 'ranjit' );

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
define( 'AUTH_KEY',         'oIu3kxO,/m{}[Qs.Zoyd6Mydz>G5F5m89R]!UifQQ2.DDj+AMirP#YQf+1h$9dI#' );
define( 'SECURE_AUTH_KEY',  '3y.]d;@SM9w?ssycBSpNNO]c|;:!!v*]cbdxksP.>Z.DL~/ToIX$x:8n+[E&T/xz' );
define( 'LOGGED_IN_KEY',    'yalFV-]6H1N{J0#B=+lW$Lsg= ifv,wUi%xe48&#v>Qg}3O)HxZO>tE&$0U!}3wI' );
define( 'NONCE_KEY',        'U@WyR&ti^%.MUmrWXL.4yH.Q!B/}r~um78+>~9k<V5c<-Zl)@O>1K/i?&T *J.Wy' );
define( 'AUTH_SALT',        '{mY<~/S5T==?Vydr^ 12Vt3Mx:4!yR]@&P~i-5Hw]Y`F&j9:VFGMG.>p[>*S$&2v' );
define( 'SECURE_AUTH_SALT', '>y[otcU^T@hFZqL86#+qa.@#&QJep?>6m.1O9f$.Be6d1d9pO}C<#a>L%N+++&CQ' );
define( 'LOGGED_IN_SALT',   '69Tbbej$s=mVqJT7m{mT|^4xPsrR.3+hKk/]8$&~kB-||wlQi-{ |Di]zOV7K4/5' );
define( 'NONCE_SALT',       '$<H0ZU@RiOSymdek!$GHH7ISzk*@`Y1d:`$FdqdW+6Um?+m{Hhy,[Ba(#6J~_obg' );

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
