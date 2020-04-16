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
define( 'DB_NAME', 'wptest' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'U$8$Ur%LE5<]ZW#Q6 aBSn3Iz`iVF :E@iZe}0]}aE(!>,8FqeIBnYlO[;1XuTk8' );
define( 'SECURE_AUTH_KEY',  '@x$%QRfVHq@>L#&52hAXyA&ckg$[vTUE/2G]w#2Pl.P/n_^$,A&xUYN/iy]]`Ky5' );
define( 'LOGGED_IN_KEY',    'Em]qR PsP?7M8-4$1[`t,r*gom4jnOkf_-rf)y3G$ >N]S%8LDuu|S{M/TuAOoqR' );
define( 'NONCE_KEY',        '}<WKDx!V[6~4+Z}fL!rMQ2z2tclH</D-K/>3{/O}}?sAm#gSNy^SJ059%!-Lh2|w' );
define( 'AUTH_SALT',        '3GbtAIy9LrH0qGX?13xT6UtQU7IcBYjfc^wa%|&UZ/]2f9Q06YgOT34I;Xnn Z b' );
define( 'SECURE_AUTH_SALT', 'Z|m(;30|KtP<*1L>Zc?2=OdIAc.$CMBtw<iC<@Crk@pJSI`<]h3wC!(tz|5@?>n}' );
define( 'LOGGED_IN_SALT',   'Zzjm/sis+reK@A#!{=Zzs=Sa^rioO0=%_2shY0PF$//IJQLdfqOWKZFZyNHU: )]' );
define( 'NONCE_SALT',       'zLBJ`,zv@vit2!o,;}gAnk)-!Vv:U$o8OxzWa/w>qUa4h;{P{]wZ!-nE-w)lY12+' );

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
