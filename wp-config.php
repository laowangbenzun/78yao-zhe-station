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
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', '154_37_215_69' );
/此处为数据库名/
/** Database username此处为数据库用户名 */
define( 'DB_USER', '154_37_215_69此处为数据库用户名' );

/** Database password 此处为数据库密码*/
define( 'DB_PASSWORD', 'jkdMCNRZXbAKyPtW此处为数据库密码' );

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
define( 'AUTH_KEY',         '0!MdW%P7eos@/f0nL>7(P,2=)XRh2EU:`tM0I@]|QE:}O%/hs3G2C^o<{f,b56PN' );
define( 'SECURE_AUTH_KEY',  'wcc4?OLtzp]X:p2}s]q~tR,ejM<X;G/3A63&dT{2s2}tT`P=(T&KsCdz)4lV,Fj)' );
define( 'LOGGED_IN_KEY',    '3qDcj[UdPJpc_rkywo>tx$i9l>8`y5/`A77f#|9mXA6r|Wm0~VEo0^[R>${:ko?X' );
define( 'NONCE_KEY',        'Rl#WcOk##O( B>&5Z$QL;|Lw9SYu/w)99a5|L*S|LB6E#[Zv0A*AI<QQ=@2xn@9r' );
define( 'AUTH_SALT',        'GL6-~-k$ EzqG({G!5ao.jr,`b| SKJeD8vgOTH(JOs541q6$$x70*t#wX>M{-v|' );
define( 'SECURE_AUTH_SALT', '(jqie*}0`M@gc6yojWf+{>Dj7]ZzNFxRJ5Q;yX6csyr(!qtbXxUUH ?mB?=vK1Vt' );
define( 'LOGGED_IN_SALT',   'XoSgg -4aH!z7DgbnNR37$<4~pPYsWSoW)o:giV_?<s~!X89yDk^s2@SI1-c5wys' );
define( 'NONCE_SALT',       '4`}!+s.Tcd HQE{(fCoHdz6du+0b5FX=V[2&e{Bu4SOScjiVK[>O[@:p_(KYMzg=' );

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
