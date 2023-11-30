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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'social-charity_db' );

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
define( 'AUTH_KEY',         '%cq{x@ynRU^:K0Q&5#X_J=x2{`5|x_2<FhBmcas6}G}Vi4kIXpv0M>bHd#.BY}3j' );
define( 'SECURE_AUTH_KEY',  '*WErC9rLjwx|~,JHu$}A[B6D,dat;C M?orL/!+Z a5Tlf3]1tyVd_WiUp;u*Id<' );
define( 'LOGGED_IN_KEY',    'j=^~&pZ3~,w[lq~@C4uk0vrR}E_fIz;9%{[FVydBXv:R klEN(Z%hwC~8LoEL*0B' );
define( 'NONCE_KEY',        '6DlwD$EH^}5HUt,hNcEEKcp!nC{;R`.R8)@mH4{Gi6R.w))r*V]WxT:2&2>$N2EH' );
define( 'AUTH_SALT',        '%O4O^&X:U+/xD`0THbauVo>r:%4Sc%7!D:%xt{(jUbhjN$*|/VhO2:%1bca)*l>2' );
define( 'SECURE_AUTH_SALT', 'f(#HJjPDq.({R4X>`.+Gz]2`gW|{g?iFZ_$gQo~{-o~m>Cw^AD?6&xIj%_RW]z/p' );
define( 'LOGGED_IN_SALT',   '9S6B##$l(f#5[ &v|5@`l!,5[@-LBDQ5*B &(FQ9*/uJY]s2K)PCgLQ[]z(B?WUT' );
define( 'NONCE_SALT',       'Op(-;U:tU=9Tvj@cg&ROUjUlgch~vmcXv*hX!8,,%yX U)k^Yh[C2Ym1g8FT=}S|' );

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
