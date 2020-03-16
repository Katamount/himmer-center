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
define('DB_NAME', 'wordpress');

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
define('AUTH_KEY',         'Bl}A<tLoDuQY#9aT+uj<qgQdB~Q1%i{0I30+M,eta=IRwMee{v. Cfq8dh0k1@^X');
define('SECURE_AUTH_KEY',  'O#I*5*O2%:l~[E)>OzB_D5NP:gj|A~82>}[!:-f*yA6[>P$*0h.dmD{8,&iOP2< ');
define('LOGGED_IN_KEY',    'wx*R#Dm<K&sbPb;Q%J/KdWV[Iewc9G9~$!DU8r;[Mta1y6^|504a%C5%@])AX#;d');
define('NONCE_KEY',        'u68dY)#G/E!&OJ&bVT~sQULT #G(c&Ulc{9e7Ue,[/s}?b1]]I_d71mLS}%NlHsp');
define('AUTH_SALT',        'i_9^MKVOIsZ=yf&vFKLrF8Yxv`InCJUPp*[PgR3YfpuY@)xgtvmh2K6;&V9*0KOO');
define('SECURE_AUTH_SALT', '<hL9Y/OHzQ_ ~H[wpTD*MRcR_rSi%BF{sIeU*Ln>qq}%{q#eHJkw1/5|>5kicFq5');
define('LOGGED_IN_SALT',   'zW%S|h2r/N_ 0v{^63:}<`UN,}h%A[)foLt`-?(fm{LvVzk9-rb&3)3vd.ml#2jY');
define('NONCE_SALT',       'b7V=sK. gfYl74t2IAZo613<A|_HrHfsMzfbR;|2K8}[)o =C8zreT].J|Au)Xx.');

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
define('FS_METHOD', 'direct');