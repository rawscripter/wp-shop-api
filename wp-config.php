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
define( 'DB_NAME', 'tfdigital_demo_shop' );

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
define( 'AUTH_KEY',         '%huy~NQ;LU:QJ]V>^]:Oab#TBA/3(lfG*_zJwY;@7l{G#DH|KC.c}5_<tZ)^cH|!' );
define( 'SECURE_AUTH_KEY',  ']wZY(x%.KjPb -GI<ICtPv}y&6r7k#P0<mxvP}[y2g>gV_9#jq^OS1M_SiH)t4,+' );
define( 'LOGGED_IN_KEY',    'vkaY-w[Ld-KfVI]vYS:*VLYjg)xlYQ`uWe0ABRc`Aclq}+k(?Y;@n#})QW?g0ica' );
define( 'NONCE_KEY',        '3+=1Wy/=vD50g)BUgvJ~}4c7.&,aQ!(9`RbtBl9Flg*pwO{Gz!VqK5)6/uZnFw#}' );
define( 'AUTH_SALT',        '6`(aE1E%qQRB%%nm13dXO$) `R*vt-TsWK rj]Hffs|k}pa;>C<,aoUd1XH!@6cC' );
define( 'SECURE_AUTH_SALT', '3#&t!Qa#.oHAv4CzaYo,p]u925K,!l:.AhvJWSWyoHRB:Mytk%1]uqPCSo&;9Nmx' );
define( 'LOGGED_IN_SALT',   '7+~eO+,Tk%[;K/Et^%}#W5tx|SPAT(:nDCY+$b^hgC>flJ]0A^%r2$_.k_7GH,t;' );
define( 'NONCE_SALT',       'xZ,;|Bo1u0 6p%r^9g0cDjFG2N>d TZV<,7)8CW&)aYW@FB^wlu_Vb0(JmkzG6$/' );

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
