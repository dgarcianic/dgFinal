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
define('DB_NAME', 'dgFinal');

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
define('AUTH_KEY',         'fCf^9QWyy^8~ ZlcWS*/EY8sS{D5w>5 cE<R^Osg[R;DNl3}QTXzr<s;wAtcemQ_');
define('SECURE_AUTH_KEY',  'o$p5ci4a*9s|BrPK@Z~nk%=*ZME+&QqTbk=Xj>17izx.u/#(HOoW!.x+F*_DbcI9');
define('LOGGED_IN_KEY',    'TPVg:v|m6U_JkT%/e@B&@FXvq4PmTEb8N QEimOE~yDZE^`[UidnNsHu7y3U3v^-');
define('NONCE_KEY',        'MDtA[J%i|i^Jk`,7cp6jib_y`ePRSt`yU$S6%5Yni!9iml)Fg5o{&QJ7bpO;jjwM');
define('AUTH_SALT',        '7Nk,[<PSm&DSb6+kJBe4aR2=(m#sZccE%N);]{L@(iIi#gBe)7O3:Az/s9ICpdp+');
define('SECURE_AUTH_SALT', 's9~q^2r{6Dh^DJ@>3nQ2uVe%U5Wr/Rk~B*,]~GwA&i`/L}Rj{{~/boxxg*Ah@*Z/');
define('LOGGED_IN_SALT',   '6Q49od5r;l1?&o;DM?*nJ#_q70zxUZG6p;1(:$=(Fkd[NMz2_U;z@|NmWwS*x9Zr');
define('NONCE_SALT',       '5uT38vEi/_H:*/s+rJ?$^U@aL>[||TygE5gVvZA|zT(P42O.ri!F<-|/BOH[0{=,');

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
