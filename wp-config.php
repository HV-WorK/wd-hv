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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'bte-by-hv' );

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
define( 'AUTH_KEY',         'o!Njy<vZF:@q~^1WA%n<zC%)S5<jkkOpJ* I2Uw,(w0=SyK=).DqXK%OX3W]n>0:' );
define( 'SECURE_AUTH_KEY',  '0mhRlac?M WLNZPLL&].4z.e<=x.O)Hh=zbJb1<@%qM=)w5QH&fe^<.d~]`lF4``' );
define( 'LOGGED_IN_KEY',    '94bxzDQ:+xBUXjBR!*A@D]=lR~I$m)(,+gi2`tc3]*.3>I3Vua:H(=?>!)._M>4G' );
define( 'NONCE_KEY',        'g`vRHUIsBE6zzOrX>lC7l{dOt7(BdC,:>jb$$=:He$][4E5|VH]OD/%an(]]59TS' );
define( 'AUTH_SALT',        '*-67wT4}o4PpdZR[X=x7F^3xV23[]Y88Tuok$_(.*BnwO}M#w,^-7uf[^odtE2|#' );
define( 'SECURE_AUTH_SALT', 'q>?dM*!,BWvIL)Uz,c0Nmx44`J**_r@cPRQo$7.VH|9ZIT2c0l]>)=BuJ2`|dT)n' );
define( 'LOGGED_IN_SALT',   'X7PPc!W5*-N$dV )!!|&8T9uy)CC ;RmnM4PAjTqeATj V/PVXa%#e_*+_GU#N/-' );
define( 'NONCE_SALT',       '0K@M=~HT(qmMe97E TkGk%rI_!4;[%UQ^cjGfOV~r>>Lf;o8?Ax^vxMX7=]6NMF.' );

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
