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
define( 'AUTH_KEY',          'RHSMUAmy]f[H;5Y,^N[|Oxb|0]9@0RW`0tsm0Yia=2.j&as2esz4J>>x![1/L*U1' );
define( 'SECURE_AUTH_KEY',   'KHL]<1Xu?<Adr!K?/2ocT lF5W2)Flx:JDuS2M0nYMYcdk<s1@$$$K(l 4>S$H*&' );
define( 'LOGGED_IN_KEY',     '=ixY!`ZoM{zNd9Cf_gA-0F5[~)z08pg|*5f}Hi,r!HnX[,&T_.VE:]:P7[&?#UK/' );
define( 'NONCE_KEY',         'd2`$EswWRE!AG_V.j!~QATM ,;b(gk&, wVFR/^uv4~n!_UBX*r^LRU{/a,08&^H' );
define( 'AUTH_SALT',         'jMyv9Opz@zF?-fldFp^Wj5wP.]v2 PR#Gd06{o]hs}9A#BrP gwb9|ESjG(sn6pU' );
define( 'SECURE_AUTH_SALT',  'azuW2$IHL}W^uuHO6ZE5-oT,&l2WcaFj?HEEn=O@Jqt2Xk;% &0R[v|tN?wRfK[K' );
define( 'LOGGED_IN_SALT',    '3&I4a.lXyNT8Rt&Sm,-1`sv_Jq3Hu41(:mt3W9ZOk#a+u?v-pZSJ:.s;s2raNCD5' );
define( 'NONCE_SALT',        'Ot3;GmmTPJ3+}n0/yN1.dGJhX{tnW%tA>n*,_,_b2no.K ARyxrTvwY.3}He~MTc' );
define( 'WP_CACHE_KEY_SALT', '~xO%dJf$e:6-ysU^#F-9{GA77 aZA<0C(hra6G(f*A9ZREMCMvmn7I[  E$t[k;l' );

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
