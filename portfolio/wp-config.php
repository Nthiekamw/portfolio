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
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'porfoliobd' );

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
define( 'AUTH_KEY',         '%,&X82_z >?F)37~NT-?<Tl0Rqf|s<N= )yki35j5R6n)K*|5:OIVap=L);Wt3mZ' );
define( 'SECURE_AUTH_KEY',  ' e!XJ{f2RBB.?-2EZk-l%@*x;<;ZKZ<zJm_]^;I)q 2N~2{iUwMA6ga+C?OfQ@N;' );
define( 'LOGGED_IN_KEY',    'osLhc|c=ac)ztI?>o:C0amr/!K+1uTyIaWTT~o$@^g?w!f|s8h3uYKTiK_VFnAvC' );
define( 'NONCE_KEY',        '^l;CwB4~Om(h?-~*ef3[.6u$&CM,wbh(l{{*y2IUTwju{kQyEJ;6/&rXa([Mub)X' );
define( 'AUTH_SALT',        '^zM|6(hN7W#^LC4Q~-i6*[QrdmMMjwUTQ-oPb4,2tH+KE7B!@ho]Vw#*rgZL_{~:' );
define( 'SECURE_AUTH_SALT', 'Y/TO@TO{,cCL)h;.kip/W#8a-A{+@.5+hng7 uSuq8{s`Sj|[!&16?QjNeddE_D=' );
define( 'LOGGED_IN_SALT',   'jpE8*NLN^T!%E9}*^Yh}dg$1$nW0PH4U;kT<JPXIM61hA[/K,Byf+i+0y.psqX=X' );
define( 'NONCE_SALT',       '&c Ove$PtV<tlnE,Bm8Hl&aQS^| XTqOR7n|v5xYdxyRgNT%TOd#<<a5rH^g+A6V' );

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
