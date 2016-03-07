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
define('DB_NAME', 'estoque');

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
define('AUTH_KEY',         '/sK)p2A&re9fzlWdq$v@!Ahdd={)`}<><rX7o~zI%9 H9QI~mZ=YE}2H`.f<gO0`');
define('SECURE_AUTH_KEY',  '4WXmF6+29J)y$F=hs$GRdh/J`C|ar+h=K|g[=hohq,Ki}6${_Ieh7ggr7=?3F>_.');
define('LOGGED_IN_KEY',    'Z&{-=eSU5Czf08:h?0>d]LOoq0Lg<g^kbyLdlcgt<CiD%LN<9w:CyVI2,k..9^;Y');
define('NONCE_KEY',        'x+{35c*BC06 1#{55~}_K2Lf|g}G9,gj]p~LGjCF?CjEie}S_[LWj^}&-|*-P-^G');
define('AUTH_SALT',        '$C6UWFf+yvY_4fN*6cS}GN!Q7?XDK-3Ensc}zM|;XF1$;;aPw2vRJC$[T.aK>_p6');
define('SECURE_AUTH_SALT', ')mtK{2(32y<Y>HMEhNxM W~AFw]h?y/)uAj0YmH(YmX% IOYkFX1Q}(Mlx/]w;uP');
define('LOGGED_IN_SALT',   '_odne$8W[lXLVYQk66dEvZn0-YL6ClWEZZ9?nA+w{V:F=qe__HW)#i~DdLJRoy>I');
define('NONCE_SALT',       '{wB=C 5q1GL#~#t@I;-H;pB?,^YN$q#B=*?m/yhK1%:MzQqGIWsSfdyH<=g4yWFw');

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
