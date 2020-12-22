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
define( 'DB_NAME', 'perezdelolmo' );

/** MySQL database username */
define( 'DB_USER', 'perezdelolmo' );

/** MySQL database password */
define( 'DB_PASSWORD', 'D2NTzFRp!' );

/** MySQL hostname */
define( 'DB_HOST', 'mariadb' );

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
define( 'AUTH_KEY',         '@]rt,GFyJ<W3+P]y&]*?3`st5#u%~G|.*p~y~f7T.cr0P6T@!p[4^;lPI{>:)=:W' );
define( 'SECURE_AUTH_KEY',  'JO[dkX!+AMcVW_{hSC4`nt>ZPq=cSUl4oey1Zc3#VA|t[Z+DA;n,>a4g&o0h=Za-' );
define( 'LOGGED_IN_KEY',    'D59+R6YFLCYch|-5cRk<}FI1S)rvN-uGG(d$.1|oqyJDD3/Y76um[h$P|q2xBSFJ' );
define( 'NONCE_KEY',        'Qo:|.KNB*A.GZa#]A[Ai%(jUwr m([-u<|{Ebnij LYSw*MYf{%5w*GV,r)WjvJe' );
define( 'AUTH_SALT',        'L)3.61nkSpw?vv o~I$kJ/>U1K>G;:/N0J4w~My(cN^Z]2L*&UY,EvDFcEFx]miB' );
define( 'SECURE_AUTH_SALT', 'u]w}MKe?]4=08hkgd4`=e=_[goT;14 ~EO1:q [ $@Y _1YTvldED%(WC7xDWDvV' );
define( 'LOGGED_IN_SALT',   'p}|l%l*-=mumRHp6bF/afVTBGRi?_~Y8&/58D]oK3P1.VWB!P$u{peDCm_NuWN-0' );
define( 'NONCE_SALT',       'W0+p2Dkqi{>5!C[]5Xn/)4[3R6kgxXh|5)2+>iFlhDbFjX*d_o*_|;UshxqLWA$6' );

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
