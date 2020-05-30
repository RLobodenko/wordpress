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
define( 'DB_NAME', '' );

/** MySQL database username */
define( 'DB_USER', '' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'JZi-^C.Y2gJoq7$%E7M$)Wh..}jf1K76@?e =N8`~QUbW[lnH/OiGYGn(0FyK(L}' );
define( 'SECURE_AUTH_KEY',  'xgnv8[E&U8S{xWCGIqY&3K9{H3>ra2_-hO:F`$sKKdTVdrlEpSv^r:N1B_umy;,_' );
define( 'LOGGED_IN_KEY',    '%XT$Rf=4i5pk(cr|{nMRC+2K>b!h+jVqz/W2v`@S%14w}iJ;*@0#9g<XlWQ6UKDr' );
define( 'NONCE_KEY',        '7fq92.ZYD`P(2n=-`o+WB+.$$1n/W%PX~.|K>}Y,M)n^ekiAs#)F^:xs+glqA*yG' );
define( 'AUTH_SALT',        'B>+j;^&4g%}:IKF7]G)DgUm7IUqg6FVI@zx9e<)<#-ky.m~|wdaq/ukrOyN98V$b' );
define( 'SECURE_AUTH_SALT', '1~o%![ YIa|Q{Os:JPq/3H{MpWSmIFI)nJ-s(2e3zEh*a<NO%w)e*E2_7i%[Z_JZ' );
define( 'LOGGED_IN_SALT',   'tnvAD&;G[5A|}v..6dih)ah$(cFD+4^QR^)&A2LT;wqeTfw<2oscR6N)GgIoH{Qm' );
define( 'NONCE_SALT',       'hkZX&05zl+m3yy/@!RN(_vWTke`luv+,yQ2w60GEd#d?{$5Ix/2J}qV(y^Nh9BWw' );

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
