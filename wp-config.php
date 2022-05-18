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
define( 'DB_NAME', 'mtn' );

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
define( 'AUTH_KEY',         'tT#lfi)>;3)!`re[ype6OjQcSL`8_W[P{ibr/tUix0*^tT1mV&qaW?|`$k#pDbbL' );
define( 'SECURE_AUTH_KEY',  '`ddoEF{l9)dqRX-,EiLI~rJG2m4@RgWtl|)sxzo7?M(E@|;%J]wC67WMWx8[C6XK' );
define( 'LOGGED_IN_KEY',    '@ej([M_n:(F!a,D*?-:bB+1;nH[)SQ*8W+Y]RoY$*NiSPD[Dya1ey4<|~HLk(sma' );
define( 'NONCE_KEY',        '-SBnJHloZ.o3?}:;K6a`O|X*gqBd,RXNApCbGRDRr;NX>h|kKg1:V/{7zIFL7?NX' );
define( 'AUTH_SALT',        '8FDU &QnR)ONa5TH4j`cWLq1FPR-.D%,S7o2eTm5C:$h-@3x3G_0:#j1r?:]CE{{' );
define( 'SECURE_AUTH_SALT', '_TGrMaWd(gK+o0I&~[%zZ-moyn^_2)KDLs%c^RTp3s^d @|9,2eBqAew9&oqRPql' );
define( 'LOGGED_IN_SALT',   '%`,koY!%oZqS#+&q/iB&8wN41vY$AyBx53rgT`L2RCQXS:j_m1Hi}E,Vn,cx5$Tf' );
define( 'NONCE_SALT',       'TZX!gM(`rGi%a$E=(7FV?-DVQgY}x+xSFYT!gh:9pi*+G<(BUTaIy{_{%`Q/cwux' );

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
