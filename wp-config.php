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
define( 'DB_NAME', 'db_woocommerce' );

/** MySQL database username */
define( 'DB_USER', 'admin' );

/** MySQL database password */
define( 'DB_PASSWORD', 'admin' );

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
define( 'AUTH_KEY',         '1X)O.5b9Y3+xpk[4N7%x*vJ0.{gZuAO,z2z#M*dX?X1~mQ-86+jFA~gtG>Ly=6-F' );
define( 'SECURE_AUTH_KEY',  '}}pB/|WD#y~g,<Wt^BVQ=;lm9U gW{GjpWK3GGha)ztKyO9gg.oR`=ry0/eK7!oe' );
define( 'LOGGED_IN_KEY',    ',uNb.szD>.LZ7[>N-sn,;VJI7#y;JfMX){e#tEV.1YaBv(=.B_eb@TMKvN/m#).z' );
define( 'NONCE_KEY',        'fu@9XSz=rdLMmn,E23F.S9^=qU!K[A|b32m$-[eqpeYc)^g1mPFFBi8d@AHxOf!q' );
define( 'AUTH_SALT',        '#wK^$0%u2Q^+:E|)fIL-ZF<+-j.-_ YZ`@y0)jtf~=gqxO/=.EEs&jb$6b~>|_$U' );
define( 'SECURE_AUTH_SALT', '7UbfF;yiaD008C39#O}LW>>LY+jv=iDHHB%6FS=0HEln3#S$Q]oWf4t2a0||/i:<' );
define( 'LOGGED_IN_SALT',   'Pg{](cd&xT1gintv6)AQUo%iF{hIxaQaHQ)Z1BwFQQ.UfjA: Q?UByU7S@Z7Ov8O' );
define( 'NONCE_SALT',       '%mM~-/E_fZYxPKk.4o5UP={Xk]W^2 k:8;aTBIe7kQbBcEUqrLUn-%D.W,G]Qs4F' );

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


/* Desactivar el uso de FTP para actualizar Plugins y Themes en WordPress */
define('FS_METHOD','direct');
