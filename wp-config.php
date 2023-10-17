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
define( 'DB_NAME', 'byn_web' );

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
define( 'AUTH_KEY',         'l|s49LGJ1{cCLddr^98ccOPvVT56J:Yx%  7vT_g3@5RTt_#Q3! P[R1KN_<y|}Q' );
define( 'SECURE_AUTH_KEY',  '%Z:`oA(*%t~epSE_F09mQ%q#H@a|3Huyk$f::NNJ9hlVQQD?+^-i>MUZ-hGzaZwe' );
define( 'LOGGED_IN_KEY',    'YuY.Zk1Oy/`8*(u&**K:y`={LZH#J9UuD.eSA%dk1`$ -9/|+OjB0d8Z1C5:&_Zs' );
define( 'NONCE_KEY',        'M=3rx4vdaurNvtW(TcA}Fxlewwf$f-#Z+LFH$r~rv`VEN@i1M5Vup+#{f= (}rG$' );
define( 'AUTH_SALT',        'dmL3zitZ)Lk/G77t40~J<4i*89n*e:^Za>0cg9Z*x(+PTuj`( wpwi<q:R,:v`zt' );
define( 'SECURE_AUTH_SALT', 'dfu?SGJhZLz!1,NH$e9|a6[y&v%n,)WygUd-Dxf84WP85n%a5PhV_taR&!kgV/qO' );
define( 'LOGGED_IN_SALT',   '=[sp,F^Y+<IR7>(|qi0Er:7{-/cM=7v7eJ[NER zci >YLS_Vw  +^|J#T~$_L6I' );
define( 'NONCE_SALT',       'lx9!ui.j>u%y,7,j:^lEX%UlPYCjKE%Cd.F}aL-y-I%uw?eLqYb%%xh.iX<HyV=L' );

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
define( 'WP_DEBUG', true );
define( 'WP_DEBUG_LOG', '/tmp/wp-errors.log' );
define( 'WP_DEBUG_DISPLAY', false );
@ini_set( 'display_errors', 0 );



/* Add any custom values between this line and the "stop editing" line. */


define("FTP_HOST", "localhost");
define("FTP_USER", "ftp-user");
define("FTP_PASS", "ftp-password");
define('FS_METHOD', 'direct');

define('WP_HOME', 'http://192.168.80.233/');
#define('WP_SITEURL', 'http://192.168.80.233/');

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
