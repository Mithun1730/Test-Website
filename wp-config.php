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
define( 'DB_NAME', 'bright_minds_academy' );

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
define( 'AUTH_KEY',         '*,o0co~AU9j3:QXx7 +ybvPjjgu_@p6Xdz)I]F#}]t:Y@-RaH;`)dU|MTx90zLmV' );
define( 'SECURE_AUTH_KEY',  '^Ecmva<c=g]e!vVt[6!gUT:h5q4:2/liD=8q$pyHZ,k?dN+I6bF{T2#kPlFz 5c1' );
define( 'LOGGED_IN_KEY',    'K:akkVrAp.8[TyLyC5BSF/i~6e,L&$v=S]4q:/.)w 8T*SW+(X<vyC!)V?<;J#s@' );
define( 'NONCE_KEY',        'tYl;jc~<:1hB9nZ}frP9SqPa YB0]mO{HCNjlVe%pHhX|b?bi|SJdxh+pSQg9V5=' );
define( 'AUTH_SALT',        '!po;ire+Lc} <)Y9u(f9 ^w/5)DLLyfez=5=Eeq{b{CH*o760mi&[2`4t0EFVdI3' );
define( 'SECURE_AUTH_SALT', '+lX|Vtv>l)_Q7rxojULw*G]]x(Gnk^0?mBYRXUD7W6#5|z2x2,J=?]~M(LkK-#X,' );
define( 'LOGGED_IN_SALT',   'lXK#N _#AnVA9l0/7,KxSeAmEgSz_Dc1H<p$U0Zd]XkwK#c+P9gW.ps+xT:%H6*c' );
define( 'NONCE_SALT',       'JgYjr8$1zZ]wG)90qP;{ lT]0Go$r,+{/fTFD;WyU6aZKpuDN.:&js]Fl Y8*0*)' );

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
