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
define( 'DB_NAME', 'inresto' );

/** MySQL database username */
define( 'DB_USER', 'phpmyadmin' );

/** MySQL database password */
define( 'DB_PASSWORD', 'admin12345' );

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
define( 'AUTH_KEY',         'rVA)-ePRXVbmR^}]1]p[*ho (*%M(!K(VyfOs*Y!a1~rPc_4t`!C9!.3)v7^(UJ^' );
define( 'SECURE_AUTH_KEY',  'O;a>zh+ZD$/p=oU[|h}>{QSj%g(&@3j;L?3q/YhO$rYw(U],{p<3MjdewtfFwzhF' );
define( 'LOGGED_IN_KEY',    '?>/osSFxIru7qV_1l1 +3[#:}|d9e/TBRw+hcXGH#Do !;.hb]qmAnnIZ^vBa%rk' );
define( 'NONCE_KEY',        '8*UwFxC<tHO}FA|_1_EKrC5*J@z}q]F88f2%640;P$.h2P0`tfI]eZ9yYo&PF]Nb' );
define( 'AUTH_SALT',        'S^]YUS3xkB5X(7?IzHqq}`J<ik-Q+ON+h923e^qx>hQvj2M<yGHm`~bQ~8}mT>AO' );
define( 'SECURE_AUTH_SALT', '8#jk`@>*i+5_y3aEb{mTr@Ga3J&o10cesUsK@#_[PM)t9ETc_|(r4#6M?H?*uZ}d' );
define( 'LOGGED_IN_SALT',   '-_>R;mdN]AX59bzF%bW2M&vJ?>Xf!pxvTbb.nx48~oK7NA0k*(XWM7{Q*CT9^r$V' );
define( 'NONCE_SALT',       'W`(C0Yg!^:i&^}N2q|B>+1=hp7dy)+ViE^;(ZE^Xu[cJ/jF2E;?T_%EkR.>! <aM' );

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
