<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         '`G}=14HD,H4kgno$l`A%9?fv;h>nJx3*]WPiz+$gBvTXUel.<<D)AxIUe%a7aB9+' );
define( 'SECURE_AUTH_KEY',  '3m>hA=#6OU-5mO&0B?QHcfCXX?Hu mpa~*8`)$nb|wfa>MvTKFz!+|4>)R@>1$75' );
define( 'LOGGED_IN_KEY',    '_mZ hm dXH`B5J$d~!>bKOD-O)rB-mW?1mSlPct($7dOcvg0l@L.v.+I5y`KFY>6' );
define( 'NONCE_KEY',        'pi[>[@Y/c%TZ^cqOf~+GEf(3xw=S|M10yn4!r~h9fQ+QDv21]LeAhb68(3@><ny,' );
define( 'AUTH_SALT',        'pG$U>oE%<h%%Y2BWpmzqU]]ScOdlj=#gmAm.#N/%Wh`yeVDS^es@*S/6%I+TU(3X' );
define( 'SECURE_AUTH_SALT', '$}DB2}#QA?.^[/9ou7$. 4IsR.`dgvpd:2d&&55KBK.2:a9L^RXu[26ZIr_(SS$Q' );
define( 'LOGGED_IN_SALT',   'Q?=,Xz&J4399lo9TfFnNO551DYEwSNos4^2lW&%6{`vG4+AnK:PRd@W2u?cp)jCm' );
define( 'NONCE_SALT',       '*EK]R;j)Oj(VZMlLwm*)nK!?w6jL^u<L(ukmUXw6ZakggdK~ OVPO]a8Ds8gFy$N' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
