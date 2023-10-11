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
define( 'DB_NAME', 'git' );

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
define( 'AUTH_KEY',         'G:Rm|/Rul$Rq@T(}GPH>KrL,Zn1R}vj])^T=Rf0!9cM?.+n1*OlE>BK#S!H,5y0R' );
define( 'SECURE_AUTH_KEY',  'AKqgTHfIkD I!=~ZJ,,LDk$fl &[#wJsP4U1.jDRi@LpL>*ZEYU8.r9cnFvl`Y4v' );
define( 'LOGGED_IN_KEY',    '+32Q&$h7j!+FUk;o%kzVvx-0&_VUnU$s{_~1?Q)_ff=y|5,=$H*NXJ;g+E9PXOTt' );
define( 'NONCE_KEY',        'BR})jy4:L~I#s4szovShYk3?vdsEAqXf5^ 1k##?!e}dK5h5QR),E3MYG*b#fQQ1' );
define( 'AUTH_SALT',        '0sx-sS[>]*,{)dSfV)-;ZNU9g<UWP)B9C5oPDlm{$ko#}RduNst[1:t0sSy5JSnZ' );
define( 'SECURE_AUTH_SALT', '8Fn9@2vahQ^=UtVB(TXGyUG2FZkW%Kjb~J85&tg!X(Ui?Vvh4C}.v=^s%i4xEt-P' );
define( 'LOGGED_IN_SALT',   '9?hbwOIf5]rf]`zD7|KY1$&^>Ke+a_Ni1>m,V)Yn]TkI` xXxM2$2nm5~ _EX?#B' );
define( 'NONCE_SALT',       '>v3G(+kz|]/5YQ%(8h_{CkpR5z65r|:Z[F.np7%5n^,#[k25u)~Rdw7sp!aHQGUu' );

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
