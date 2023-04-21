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
define( 'DB_NAME', 'bricotips' );

/** Database username */
define( 'DB_USER', 'scorps' );

/** Database password */
define( 'DB_PASSWORD', 'scorps' );

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
define( 'AUTH_KEY',         'kN{XK>V/88e7oe2Ii1}dvc6kf*tzpY~*3>LiD)W[Kyq%Z*>Sa=O~L#tx[Qx*/Gi?' );
define( 'SECURE_AUTH_KEY',  'M=e>^#>p*$9^wq:=$4i2sgd[5]MCH%iGf*jOkiYSnK2Jmg1XW>X[)U/D}P:FI99^' );
define( 'LOGGED_IN_KEY',    ')]%vw5:$B@5nPKB5twx6YR|tJNF2K58]3Mqx`sLbhzc(,OaY4VAX2Ce7`5u,d;(B' );
define( 'NONCE_KEY',        '/ARn5|jZs6l[WdWQo8,6>7YTa6w|mJDqPjQw`&.>zCZe)N/J6o)4AE9}J8$QSy{y' );
define( 'AUTH_SALT',        '%L,e(_z<CYNv[<I]k37^*X-Jlmua:_h0.llU:c6s}K=,8T0&L;Xo(=%9taG{IjYT' );
define( 'SECURE_AUTH_SALT', '}H:>,PV+MA4FLG`D7o2@$jr+qSNSjzsq)y^h9mYloyu[0@_!U_;:1^m*GCGmb+}G' );
define( 'LOGGED_IN_SALT',   'w`**;EcPFEpi5AK5:f%tM wcC.sGqSflKJ@yE-5/*m~du5sa]Ls7}kZ1~f9ey_Yl' );
define( 'NONCE_SALT',       'p0H.Be_KrfNn0:2R%UW]aAQ3PjHj8+>16PX1S:6P<b0^8hI{ ;bP9AJr-~HMydHJ' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp06_';

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
