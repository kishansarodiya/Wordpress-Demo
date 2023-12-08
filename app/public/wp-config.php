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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          'y`F&&;hCQ03+w~d4k?>zS]qR<j|%!(uR)9CT0,g!~N8`je#FnLLlRbp7)W/(zAmi' );
define( 'SECURE_AUTH_KEY',   'a1<4`Nq3ZFU8cbTaL%Yf`R3cP&;uI72yYv|v)3Md!}M,Z$IKU+|k={sMsjg{ r_w' );
define( 'LOGGED_IN_KEY',     'L|k(=jfj8Ka$G*Wt[qG_(X+H#s:(ltDdh}@eNEwuKE<k[ }^fuutr}$F6fbRq{Lo' );
define( 'NONCE_KEY',         '+~_8LY66]z4h%39-<FoAB@@r81N,e5ODn a|<Iia]2Dhfk1l<4BDDEBe0h ^==9;' );
define( 'AUTH_SALT',         '!$aIB=kksjUDoL2fMK^fppLNfk*xw8aD8VIc5Q2h!j-K6V5(o #!P>[<&s #cgr}' );
define( 'SECURE_AUTH_SALT',  '?UbEvdizKXA@c!mXSYE *]a@!n*dGG<{jqV:ea,R>zzS9hkJm>e_VH1;c<~O)O?2' );
define( 'LOGGED_IN_SALT',    'x-+wB>)zgR:q^7hG1C1DX+29V%O:Kiqe-m/~~<k0QoQ5]W?7yEQN6-JX&jB3rZkF' );
define( 'NONCE_SALT',        '-Ap%x3::q;6U`BC]COBADkq&<i/*Q=lM$zVic.O[#KK5;2*UvjO-7IHWuSC#.q+7' );
define( 'WP_CACHE_KEY_SALT', 'F^>#i`N8F3J?yv_k?An3*i6fYZM%LvUfvKxv!,<%oy#vH:i vRxV`h?Za4[6q.Du' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
