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
define( 'DB_NAME', 'wordpress_dev' );

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
define( 'AUTH_KEY',         'Sl,):&BZs3TA:39QSlD<IPY.k^:uK<FnWp[(R>sZj<[H%rhWW4Yt(4`B.dX+|ysG' );
define( 'SECURE_AUTH_KEY',  '7O>dr[yknZs CJ8_4J3m]J0EzP`w$ ?},B8W:GfmBhrmg5DR:_9KY4bvK,m y.{4' );
define( 'LOGGED_IN_KEY',    '<36kijzghkF2LDnZ5i~3;FxL$=RO&,&ELn 9qIizftv#kAOc&G=N67@9v4ms.Y?6' );
define( 'NONCE_KEY',        'IdmesQKyg:qOjqU0_nQP|W~pW:]Z3C8r199}I-&NhzXTf:wUjd3VOpU:,f]eqi~%' );
define( 'AUTH_SALT',        'Y C:_9YiZz%eol2u8A3?YNiY8rnnjx&*Xn.kFZ7{T5:YQ`_a}Wt@#5-X6WSys[gX' );
define( 'SECURE_AUTH_SALT', '}pk8PS{&=6f@cpHJ%a8yStl-$<`/mF U=vTg$KiaDFMmCgi]VR4$[t#mLozrbQ)L' );
define( 'LOGGED_IN_SALT',   'oA@ElHr=Z,B])qE<t?aE:Fc1H?Obi^fZu,UmW$J6UFGXf[ $_5-fA,308L,8<G(K' );
define( 'NONCE_SALT',       '/K].90jNAV}3m1LXUxiB$r+QRaU8l4~%HcPZ6a# 0D30?as~#/q E0c{5vsFK>FO' );

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
