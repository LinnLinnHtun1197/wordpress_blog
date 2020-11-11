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
define('FS_METHOD', 'direct');
define( 'WP_HOME', 'http://localhost:8080/udemy_wp/' );
define( 'WP_SITEURL', 'http://localhost:8080/udemy_wp/');
define( 'DB_NAME', 'udemy_wp' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost:8080' );

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
define( 'AUTH_KEY',         'Cu^zC2?A] z9+X0XE0.^%iYXMm0CXqTmYRB!:?@jlVP}:9q+#N*dvMf,~q%i8z:s' );
define( 'SECURE_AUTH_KEY',  '![UYb oN<C!}|.UmzUWX1v{8gd^K-zI1~,IxL]|#>UJ|Lmp4*.-~NSzAMNV1v{A{' );
define( 'LOGGED_IN_KEY',    'T;df-&-ybslW<P&GXI0ZlO|qNI2RjR.B,C-Q}^$(g.gK6%}%$Sk<>pThN[Q;?F+>' );
define( 'NONCE_KEY',        '@e`J:Qr;NE5gm>_?6N5>?Qo+^&&S?PYe*2?*Gos9@x+pYlr7ZS$LD!>:aH/geXY?' );
define( 'AUTH_SALT',        '3rv7{z_U&sm_4{9*n,!=@3=WC)DA*gfphaQMNULX5>0297#~[_OPq<e[IN&,=Y6U' );
define( 'SECURE_AUTH_SALT', 'oKdU#e(Od9Gv2=g?quJdB#pWz/3$NWi/eO/thmMw1C2arZ1Dm:E<Z{l3,{dl]^jK' );
define( 'LOGGED_IN_SALT',   '<q;MoB{#)gA*3HkV1o*KP7+#j)(&:)@ c2,kYux`g$/G7d2(r}Pm:T)6Ar@ZuX3?' );
define( 'NONCE_SALT',       '8.hyT:=6,)N =OaJ>?]#4Ld8)HS]H^rvlYJ>tUQWL7ti!$8^SS>>}O`3@?0ITXK&' );

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
define('WP_CACHE', false);

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';