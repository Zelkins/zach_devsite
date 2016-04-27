<?php
/** Enable W3 Total Cache Edge Mode */
define('W3TC_EDGE_MODE', true); // Added by W3 Total Cache

/** Enable W3 Total Cache */
define('WP_CACHE', true); // Added by W3 Total Cache

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
define('DB_NAME', 'zachtelkins');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '@E[]+9wtbBrltG[n|v`zCv<1J]Gs4.ULOr>A.1P`?)|DB8y- Im3r7C 2hCY;_($');
define('SECURE_AUTH_KEY',  ';=)OVEx{H[@2N0p2F._W9SU/,,^ybG@6c6uAHe:%wlgw-zwC0Bqb!nID9X$kIcg+');
define('LOGGED_IN_KEY',    'h|^1P)oMZ`]RX%EZdQMo{*7f09Cl9!-wCHg0!25>#tZVBM/pZaapc>C ~++`ql&/');
define('NONCE_KEY',        'FrCAL9wQ.VaksSzcbD)4()+JO=^`<N&O.e.G:cvK-wj1l-i&j&?F<ScS0yf9!N4z');
define('AUTH_SALT',        'G)S{T<Xzvczf6cB8B+3.F.vq2D@1OD#KDO)dZ8o4pdC[,qO)DG6)$L.{n5^i&[c9');
define('SECURE_AUTH_SALT', '$x).5ZPw[Ky|=r4}v::S |0M-/4RFAB_v`u>*SZQx+@nB^Rwm ^sWq<vsXy.n_i+');
define('LOGGED_IN_SALT',   'q01LKu-oh|o8DpRy8>>)&Pc/LQgHs<28fwA+7/a|qgT-tk,X /8$#:H^.`?IiTv`');
define('NONCE_SALT',       'f_auUBy#9|t9nekg cH?ARUZJu;gP;ie_-_t*wOH+2P_J3^Q@bRU -]NL}?o+E7-');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
