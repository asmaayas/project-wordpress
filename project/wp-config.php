<?php
define( 'WP_CACHE', true );
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
define( 'DB_NAME', 'project' );

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
define( 'AUTH_KEY',         'Yc/Xicm+{s4Cw4y^Ji|3bl{FdfO2Y4nZ1k#D<:-$0b]D1%P|9J.U(TJAXRd6j;8y' );
define( 'SECURE_AUTH_KEY',  'F-!Geq?Fm*5]Wt[>JB2Op^SJ[)nDl{_Mbgs+Qw>&_h) 9}eI_At4a(QqzN-z7-A*' );
define( 'LOGGED_IN_KEY',    '?eFOFmyTdfsp.C`^9-}3X6KD<F2R4fI8Y2C:$45Ccv0 p,I~KRIV<b&Ne6Hz/R-3' );
define( 'NONCE_KEY',        '{oh,weUM3)9%K7 ~t+@s%Vtj9*$eo;JlH=<*N~b51 -v/<owa`|cu!+ %1E?{AJC' );
define( 'AUTH_SALT',        'iI+5Jx-kUY]0CfyP3F@;oZK55E?|{ulmfpGy[@V~}x?<[Wa,b@I4sq+~;C?v#kGJ' );
define( 'SECURE_AUTH_SALT', 'ATk=B_#<>bf>_&eLTbg_=1{8Q]3s3_3I0a$l~ByTb+#tZXxC(a4&R!iVh@q6GF?_' );
define( 'LOGGED_IN_SALT',   'mAU C42N:d-(ErIxN}a,vo!iNg%KsgEX~3?#i2d@C3X;cq|8 W0@vuFj1iH0n<;j' );
define( 'NONCE_SALT',       'cx6S^G1%@CdxS2g+mS2$0-M:,]9DIKNMe=4dbG{I.`jB4hg$]p);SxdD-rK)EY,M' );

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
