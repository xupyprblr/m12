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
define( 'DB_NAME', 'wordpress_develop' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'password' );

/** MySQL hostname */
define( 'DB_HOST', 'mysql' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',          'iv@OZ<Zpdqx<b&4N|cNXR;g?+0)j@,)XM,FE+rb?h,.#_[XNeSMdG8:H-PqW9K+m' );
define( 'SECURE_AUTH_KEY',   '7UJmR_<RTJioamX,J,O:UYN,Ckd-WZ>?+#nvt2GmPX:=~3-{A=9@?.c@?B7EqOFh' );
define( 'LOGGED_IN_KEY',     '40z,7dP2Vma@Ct^h{s x~#NtNx(+4QeK&,KK=Mk@;E5_h?Ig5P-w`3Y-Q*D*$=&9' );
define( 'NONCE_KEY',         '@/7f=3AC)VmwD`9hv+)I*<;+lVKi(27z<5#H`427*q*<7l2nz|;JGseJj3YKUOlS' );
define( 'AUTH_SALT',         'sZE ml(6;>>o%@RK6xJ>Fg%*;>&K~]`ZBRA>5U`ndm<!~(+QYfn6Pf4)<0LW(&_P' );
define( 'SECURE_AUTH_SALT',  'Hrx1.;pSqOevjWX%`+y4CKX]eWdT286<INj2TCLa_]!BA1+vfU;o/dXJ2)t.r+C&' );
define( 'LOGGED_IN_SALT',    'J2^Bx|VjsZw-wAVhPR6l*NT@l.np=&JsM-4v= *Tdgmz~tX/D{7?F9b2F!:tl>Ow' );
define( 'NONCE_SALT',        'Sy!sio~*4An8V>wp6L!NXM&]$9oe|2@@;Od~E&zvoo~(:W*0k3lAGdbY-.a&b:]b' );
define( 'WP_CACHE_KEY_SALT', 'dZ^Kz|?TF-C]cVQtRV+.}&a*3qKW-Z7W|{_Iadac2(exq4(esY4rA2OqG 9uf:{<' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




define( 'WP_DEBUG', true );
define( 'WP_DEBUG_LOG', true );
define( 'WP_DEBUG_DISPLAY', true );
define( 'SCRIPT_DEBUG', true );
define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
define( 'FS_METHOD', 'direct' );
