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
define( 'DB_NAME', 'carpenter' );

/** MySQL database username */
define( 'DB_USER', 'admin' );

/** MySQL database password */
define( 'DB_PASSWORD', 'ffb9a24145b6e4e79da155ef9345e8455d91d4da5131e025' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define('AUTH_KEY',         '?`hKuz)~Z1tU+/<wov=pedTHy>.@MZ]^`?d~M>i)s]SK$w_n3xx&s_6~&F>Qt&O8');
define('SECURE_AUTH_KEY',  '|av[A*^w>sw13#4lce35V~h$HC@[|/7gIilgi-~5y6Vz_gF`j:7*d,KffdqE:mQR');
define('LOGGED_IN_KEY',    ';EE>JA_brB|MjHX[Li%yjusY+_4?FvAhWwz^Q ~5IaYp_<(&+#rpV|tv%r@+%!T5');
define('NONCE_KEY',        '!@1u<9)!h-_UVtFyQA<6j*LQ=qF|oNzjIli(-QL~Er8uk&q)`:*LMR-]v.<F88E+');
define('AUTH_SALT',        ']!~|mdQBU5{dcY(;-7cB#SOOVJaWQOE}lP[YIwZAJmsVg ]sG_F&OR7^Wl6LO(/5');
define('SECURE_AUTH_SALT', '&9WJ(x$T@p2K(IDOA,|>/!=:,?17f.2^M-R~8>|Pm^~Q10#W]-=lo*U};N~,^De_');
define('LOGGED_IN_SALT',   'nuqIbsyH&3-^+o!Tek~Mc$j3(L8<{,r]1oos/9!`]K@;~@M a#}<@NHz006Jmw7Z');
define('NONCE_SALT',       'WP@;&pZLA-eplF#BQ3||Y<mkr]w&n$p$+$wncl7eG9MJ0j#Z4<[y3d6gu1S1yi+<');

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
