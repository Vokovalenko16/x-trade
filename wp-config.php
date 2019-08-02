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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'sylo' );

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
define( 'AUTH_KEY',         '(UH[G6!fwhe`5szKTp;,Tx&U*1H5|Ir$E<`U}IVLGi{YzPXt;D4B[M|;EN*/(1@G' );
define( 'SECURE_AUTH_KEY',  'gr(;],U*T9TDj4B&-:,BDT8dCL6EaGWxs;NwM4[~/z%8TRUc6_G3Kud(!rqcmO?:' );
define( 'LOGGED_IN_KEY',    'c1QP{zn;~,SmqmX.nao7_RP7I6g?j#Lf0$3i3(jA[ ~poFsXhv}]gQME)Mo $V/_' );
define( 'NONCE_KEY',        'meV(#O*<]m=4[8#V$e<+,@mcm(jN!nemt+zdohkD@:Nj&Y45_#<rl<LtCUB$,=sp' );
define( 'AUTH_SALT',        'is#daqt^NpejYmHg5nmYPO1(YT,/x2(;F,`edLvg `EQ/,3ESHPu.kgi.E}u2z_V' );
define( 'SECURE_AUTH_SALT', '#VAqkOJR+ji/)gXG7(CFbyB{up4C4i]0Eb/0udBEtrN|z-C3;UZ2>usZ)xmL~>V^' );
define( 'LOGGED_IN_SALT',   'D-Y,l0Gz*t8WV4AT2TIwOQ9*w]/Ed#,pcPh9<:5#1;F;(JIN|2.Ut1$v6`GKky,K' );
define( 'NONCE_SALT',       '<0K$Dl=3xm!]-B|k=S8[beERwb!S _~5m@@UwTHd2Pv`j)X&4ox?CLN)xTeO2W}h' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'sylo_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
