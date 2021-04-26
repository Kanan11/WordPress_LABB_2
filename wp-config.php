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
define( 'DB_NAME', 'medie_labb_2' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         '<9o[,W;Zl^.]oQPSHVdTZ_1PUz0/vm;I;_UfTvEXd$ai2RJ}PwA6uv#F,1QJqO^?' );
define( 'SECURE_AUTH_KEY',  '2~9jgm2F%CUR*khg$&3W0O5u?Zp5.pQKb?$9S0Pn3(6J]o>hqMjYPArVOjovYxQ#' );
define( 'LOGGED_IN_KEY',    '3(V%RxCMKfU^yw.2a,3E84LAmBEV/-#4SHfa=u)5#&dVRV5`$tO3C5Fe,$3],)xU' );
define( 'NONCE_KEY',        'Dv0ZV!O$W9l5fu+];a$80+<Vw@c~DFF*bR)@_oBci61.WV|&[s7d{!`{F2lzI5lh' );
define( 'AUTH_SALT',        'I *h>]^C+2T;VyEmtDaHi-Eogp?+r__T#oOt9,# $#Lo,}jUF^lt-YmB,vvV0^_F' );
define( 'SECURE_AUTH_SALT', 'OO1!F6_?|/=xe_Lnj:ItRS?b#x6K8|V(wg:Z+w)THC]in!H%yx:V3B%YD9|Xt bk' );
define( 'LOGGED_IN_SALT',   'Cnp;myHsN-[ftt%MYBi}iZom-p3[j`,+TRD|8Z`*yih&p?>]oW1r 8&;8uwK`FHU' );
define( 'NONCE_SALT',       'Bj8}!.mb=R@(yrt%:Zaa3VUxCwcHaX_@E^9R{nw68,eGbsRjx&hyV|Xs/1mu,/#@' );

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
