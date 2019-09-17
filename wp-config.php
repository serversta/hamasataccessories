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
define( 'DB_NAME', 'hamasataccessories' );

/** MySQL database username */
define( 'DB_USER', 'mark' );

/** MySQL database password */
define( 'DB_PASSWORD', 'Q1w2e3r$' );

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
define( 'AUTH_KEY',         ';E^N.[I1uz28|;91(?H*<Tiyv0O84v;!wu|sw&=?N1F~,sBmm{|U]^S?#XNwrHo[' );
define( 'SECURE_AUTH_KEY',  'U2^Kp@gyE]RO7q;*q/):]tNm|>Ae.a}U8uNsgsQdw9UC.Geo2RJxz,Wl-Z(QO5q2' );
define( 'LOGGED_IN_KEY',    '7aBJGrHG;b]C.2e<O 5k46^#e.3qSg7_QNSP QF%;u=4gnQ~-t/NZ,x(C&W#WP4/' );
define( 'NONCE_KEY',        '2wS$>[u57$J|Z]O_9G.j!A;aFpY]RE7uby7[1RR*J.NV$W+7GoR3x*IHmcaVT*?j' );
define( 'AUTH_SALT',        '?[1](Q3>0c%JE%;n0w#Ry|:>a.-f^  75l-xt&<GvO5GDVzE+c(]|X80khmr[u5!' );
define( 'SECURE_AUTH_SALT', 'D))(>{(sV]B*$t}|[61gl$yk1I5Y?ziJM`;&/J[oN2x!Z@P6H|LA&r>$^hDO*qdr' );
define( 'LOGGED_IN_SALT',   '*QjEp!$drr09f1s9b4xr:D[<ntep,q|l%u) xgST20~~*gMMDfD3Jz`ghOccE*i-' );
define( 'NONCE_SALT',       'EJp<jQ|eQCn1^7I j*{QrB&K3#Na&ulS@EYbYU0h~}d|q}a@1wbTzMwM`];B!N?&' );

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
