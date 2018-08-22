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
define('DB_NAME', 'fashion');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'eWW$8O`7Tt>gUOknWKVJ9om{&iHehR+(fh-6,e|X)Bf(lEE@E}%/#o6h$]%i3dlE');
define('SECURE_AUTH_KEY',  'JdA,Q[na#?~I=PE^=>!>P$x,z>CwbpFx?H^{67p}YQJ>7Ds-$v^skgMJs~WscSpb');
define('LOGGED_IN_KEY',    '6Fr3U).39&8RPqkC~t7s+Tur$,}.1InO9WH+,/y]qPQp=S*WYq-W]_7&CoGnZfU^');
define('NONCE_KEY',        '(SkO~w>iX{q}C7EP:3GgnS$PV_Wq(W4#8~MLn)?,c,>H{i4|3EDEr6sp_V(Q+WW9');
define('AUTH_SALT',        '>|`FsunMG=bjMB0IduTvH)5#B!%K _>Yh0`@tT-lxIyKbrGR_2FQ|9x8%o:n.Bp[');
define('SECURE_AUTH_SALT', 'Hg19XHZ+Xa A$w3xTqGQJ%3a/Pkc>Rz[Us[[eK&T,3F=Bc#.{p_a3*tfairs+|1(');
define('LOGGED_IN_SALT',   '-uObF_Om- I(VZn,Uyd]*8HQ]NLXU|4hw{JLL1 VGl4/_BDgu{*^(2L0@RLrM90J');
define('NONCE_SALT',       '9!n)u0Ja$GNg4k:(r{PW5-d*c[1}zha@zZ:JJ}pX$,rm>>?)vTl{;K7;Z<>$z0_*');

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
