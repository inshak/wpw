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
define( 'DB_NAME', 'wpw' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'i`Y*/6Y1:}$/#uo6nFr&M6=RsU]8(SK3228^e3}MG$sd!,@}s}$8Je7&!lwY5wP|' );
define( 'SECURE_AUTH_KEY',  ':YG,UhhMYRM?ELig&_}65Lkqu  xZ]4;vu2.M,Q(PC=(F{hE-%?v@X;WbJ2/J|>u' );
define( 'LOGGED_IN_KEY',    '|xyg@F|fY*J)xlrE[0(18s:X8uRRVU7DW2lP#0]6:lK[@N&<.+AwSvOGqbiv_Fna' );
define( 'NONCE_KEY',        '_(qQ4*hR:Iun)ALDRpS-}*Y1zDN.[}G`(x@|J2CdhG</hzR<PgSWbYR>)(+<TTJX' );
define( 'AUTH_SALT',        'RRK!~6D_?^fOiZx*3niwU=^83u)7h(&lDz5x+|U&&c{54HVD<_W.2Mcp?TWWC<KM' );
define( 'SECURE_AUTH_SALT', '51qHq)Ji>TFw/Mm+Pw?<EB!M0L]$7(6x^s0HOYg@H:J2S]h}2qswn)mbcE:PzR&%' );
define( 'LOGGED_IN_SALT',   'ppTv*h9_.jbCQ>t,BB|%m~pr UKx?-r`OS1D6ol:+QpepqKo+FEJaS!0Y7W-W A7' );
define( 'NONCE_SALT',       '{cggLPW+0[{g^d>`lo<s%[aM~foLqK%A3m`1>q$37k1Rj4+_$7&uuYbFca3u({/-' );

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
