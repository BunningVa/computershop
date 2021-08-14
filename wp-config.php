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
define( 'DB_NAME', 'q8q54YeFIF' );

/** MySQL database username */
define( 'DB_USER', 'q8q54YeFIF' );

/** MySQL database password */
define( 'DB_PASSWORD', 'NLK6245yuz' );

/** MySQL hostname */
define( 'DB_HOST', 'remotemysql.com' );

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
define( 'AUTH_KEY',         '.}<%g[e+gc}_lOK37AHHp|sxKJSts<.H`q|.Ym1Ebsaa^wDB#=g3L6Iu;6Ur%[<^' );
define( 'SECURE_AUTH_KEY',  'SeI~j>O-w,}HV>$pF/z=Lnwh<<ZW-&%VvJZs%EeUcEsSRMPb{E>nQ/2QpIL}dm;<' );
define( 'LOGGED_IN_KEY',    'MsdVZ[p#1:-!>OQX{%ZysHp5Lm9q<g8Am%4wHcPf_B0UcALr_W{C/SEGS~?Doe8u' );
define( 'NONCE_KEY',        '}4IkN R35*ilLF^3YhjRKcgj*f~gMyh!fyio>XAR4L>~H[WM>um/Bvu C-+?n#Ru' );
define( 'AUTH_SALT',        ')vB7r(gW8ZLA=qMH6|}7PF7&9(:/FrbQGs6<zd5v$}{E>><Kd%bm+VKfNs8S]np!' );
define( 'SECURE_AUTH_SALT', '8U3w&rFN6(ZKC]|4@,cfr.:5W&~B0H8]i-kK@~>}q8>ykAlN%KZ|Qi<-^3CKM_iQ' );
define( 'LOGGED_IN_SALT',   'm%Ib*^PSu|KfTwu9;-*{Jw|j47acAe$?/Q rR%&mH:g0 wYrZ]e~mIAYx]9T=~3T' );
define( 'NONCE_SALT',       'h#Z(W6]hAo<(E|IK3^LYu# P[}bA5(5,n}:n?mZK%Y X2pt|}3PIJK GWH4NK[?u' );

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
