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
define( 'DB_NAME', 'jotiaExpress' );

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
define( 'AUTH_KEY',         '{z6v! AAo69,R<pU[&7W$|VQ6{L[S)0(*78]>s+YI0i>vyW8KI}LJea]~5|#*A?m' );
define( 'SECURE_AUTH_KEY',  ';*HpLd#8IuJE4QL.+$yx`FLILt^Kk<+>~tO5T.oU6G6P.5b+ECz7/clHz,^i`$tV' );
define( 'LOGGED_IN_KEY',    'q aPyR!}:tm7=p|!}KV!7,<as gNx+#d`3*lwqa#_so7qYM^VfRlPh(&0z#o<}2,' );
define( 'NONCE_KEY',        '36q.od^Y+t0OnG!Zq[tu6H&WyA*uB2&#czN(!zc#O~,GW( H;JS;8/C`*^^y:3nF' );
define( 'AUTH_SALT',        '/M:h!e?z%.0*2)TST/g8eS6bWNpOVa D?k!S1/YqIbJ[0,jpO<TL+oxt*-<7zT8J' );
define( 'SECURE_AUTH_SALT', '+rjzWhKmu>Vfo/)k+.a[gr<vj0(sH0YtCq9~~N!wJr5:1N9Yr+6_&nX=tk0a80%7' );
define( 'LOGGED_IN_SALT',   'MK,-wQ?nR_ddQ.+zSGli~V`IfU`3RF!zYv;uxsI[lBPnhOhGIdU74t-X-3~2;Ip+' );
define( 'NONCE_SALT',       'fZD#m>EKvM,Qis iC,#7RjyhS^jSWO:P0OdO9IXMfotVv@=*3v},,YQ.DC}=_M^3' );

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
