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
define('DB_NAME', 'plugin');

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
define('AUTH_KEY',         '4.6f?#?.6BmKecq@gD6RO^?@Wv!U]G_9jYGDN?RAF33a[o6Az{C]PX){!ekx`*m?');
define('SECURE_AUTH_KEY',  ' Tquz]U9pryki%?UC^LpiqCQ;$J4~!t$y4`[xH3{[<V4|A+I.PbqdB+7u%T;C+=@');
define('LOGGED_IN_KEY',    '$I wK<J^q()dkd18Xm1ToP/&A:s=1w~D>W0cK/vat+^oH)d.Al1<$YjI%CPH&}jc');
define('NONCE_KEY',        'Udj_n<6.NU$L~KqJT?*B%i0(?w&1;}h8ncEjK=#NW{T@xI`?(9noD(`l yA]q+Y(');
define('AUTH_SALT',        '?-]_v5+h^?8DD*^xE]k6d2>p9<m=>wu%>j(KVn`C.O{FpTx)# #A;Ys+}6#v4TtM');
define('SECURE_AUTH_SALT', '%Z FvTaAh)h1uv>ab-/V5?/N&1Unxy84Qvb[ynEW`CH]u$mBz][xae8|aF4XTkuo');
define('LOGGED_IN_SALT',   '6sid(.]T7d]mO5j%OS$zP#!.leQWOYF8$OZv+DRPZqp|Zt;YYA, (4KLFyI;$vx0');
define('NONCE_SALT',       'o?R}ok pmW,L$um!ypz6`Wm Yp6~91ht&wBhR#rt~gc1k.U(hl[<$Sz)s1BLHAQH');

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
