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
define( 'DB_NAME', 'u257925500_belsono' );

/** Database username */
define( 'DB_USER', 'u257925500_belsono' );

/** Database password */
define( 'DB_PASSWORD', 'BelSono2023' );

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
define( 'AUTH_KEY',         ']H^U1iqznZOR,im/YS__k(8{0#BgIr~HtB{GsmH5PLK2_<FmU%h@}Ap9v=a`@RoV' );
define( 'SECURE_AUTH_KEY',  '6_P5z!9bew=cT8BsqZaWrd^:aXfzUyCO?`**AR048 +f]bU?/17$!R4>L3(F(x~k' );
define( 'LOGGED_IN_KEY',    '!>p2ig>YlRG!Cz3W<LF0D:j=+6:pTz{f<f8QsX2 Mb/s]qL?J ZYo%=F/0bs]25q' );
define( 'NONCE_KEY',        '}&qY3s`b|(44pf>B!]YPLzHrv/,5,8t:X%EHZ,c+~.i>d@2]F I.o?i[^]h!`bXf' );
define( 'AUTH_SALT',        'w(O4[FNKL03]5LnNCgm*g>BjK CQE[n0Ap9>+-O:gXYu;1f6)j0Ha!%6[#Zp-  Z' );
define( 'SECURE_AUTH_SALT', '!:U6!@Q,K*@W$^uIqH!ErhFe#frC:;&@-a1yDz Kt|=bS(I<*mNKo_D|P#pr8~#R' );
define( 'LOGGED_IN_SALT',   '+aQwQ;7GkwT_.&ibk/5B!XY<kydL/0yOQi??o#xc8v_HB)=w@oILWp|5qZ>vff=p' );
define( 'NONCE_SALT',       'UtXIaH_&eZ#*p#C]5#J(5E ]7xpfk01F/}7m~BTY*?ROI^Fqa58}D<B}/q;w{qTg' );

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
