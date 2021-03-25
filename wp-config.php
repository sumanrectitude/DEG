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
define( 'DB_NAME', 'wordpress_deg' );

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
define( 'AUTH_KEY',         'w|5tvItIkdveE8kTls@F)#3Vzo8Ui2@Gf$fm[u?F6|An5ARP.~Y@cwmSSd!,xW%;' );
define( 'SECURE_AUTH_KEY',  'Jt~8}$lp)HQ/_ZU%#5y#_dU_z7m_8{Ul)#OfwTs}!rmh:vtX014LYHWOihif9i+%' );
define( 'LOGGED_IN_KEY',    'M[YU;4/Du2|leL93TqX!S&5`%T3WbT<2qwpMRKn|X(,(m}7C%w7<4mof}JBn3%Eb' );
define( 'NONCE_KEY',        ';uB(nR-Ezz)G*9Nf,)P~MA_YyL1SrZekze7vH@8O+Z5B{<6,.>:Ga].?Uc]L^dR~' );
define( 'AUTH_SALT',        '!:AyN ))!yrfwn2o9^k;FWDM(1_)>nIU,ny|o*wg.R~9AuXhDkeYv@OJsQe1<NXy' );
define( 'SECURE_AUTH_SALT', 'rm3*{GVeRLq0BO)i=y*S.DbH0x>/}GfSQ+A[9/u?F@[t.n|N*OuoR+CWpC9|1_,Q' );
define( 'LOGGED_IN_SALT',   'VK96`pI$~-;_0KTl}+%W iEY6:U}n^vz![Sk04Xl`qW6eAaj1T><&%or/s^7[ G8' );
define( 'NONCE_SALT',       '.Sdt#ZODnE]u!Y5DtK6s_nn~*dY@`~9~BBr_sq<1B+tACwQg$p`&TP3G]4#qb ;<' );

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
