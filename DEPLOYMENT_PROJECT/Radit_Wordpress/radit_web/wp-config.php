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
define( 'AUTH_KEY',         '=TkUl{~j#|2g:G:iWK0xG*0D?f(g}K/]<JhtaT$Y=L:YMu5tyi^3(#r)g+K&X ,D' );
define( 'SECURE_AUTH_KEY',  '6O6g;G^M>L3%+%}uaTJ3L!;!Bg+,?LJBFr2{N`y==(k!neUG-z(r&]*9C{8?/08u' );
define( 'LOGGED_IN_KEY',    '%l4lTmPP}0V(-F{~DN!r$Q|*[ADkopH<Ot&y$1j>fep6))lB/v{z$eJP7BI/PQ5t' );
define( 'NONCE_KEY',        'h?6)8s*p1JZU<QJ$EgWr>n# VL`#i#luTcZ~W5+=%|G|s%s^:SRm4T9z(9tY lAi' );
define( 'AUTH_SALT',        '{)6y(7aG.xbxxUJRb7.pb?#EpbjgE&V3(q^9qpm2a6f-ld%wM:BF=C,YCUI^vDN4' );
define( 'SECURE_AUTH_SALT', '0JeJx5/Tl2U|J=pBym% :z7;^O&T~#!PCFh&MIsF(CiqW*qjSx!fc:![3dMsGGgA' );
define( 'LOGGED_IN_SALT',   '`_=L%G7|;;[9Z([w$D[VYi$H0$Q 9CFsDo%%^vTv.XtBq7;G(pA)Qe~+$}gUDpD^' );
define( 'NONCE_SALT',       '|1X]d{*N#ofUz_C m`w]Abs/hB$b0yRY`+OO!}*4kckL#jx@%O:xXzxF7p8//%]u' );

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
