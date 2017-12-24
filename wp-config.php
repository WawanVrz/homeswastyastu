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
define('DB_NAME', 'admin_homewastyastu');

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
define('AUTH_KEY',         'W|]Gl>eTOB_W~tg20Dhj||A1+~1:q-c;V8HXKOtNEv s3,Cm()yR0)mjA3F)Lx <');
define('SECURE_AUTH_KEY',  'k |6EhfSrv_{)Fy;Ir}?dk]zv|gD5$;;n)S+K/3pm@u]O1n)/|zX>$I#z~*cr?vA');
define('LOGGED_IN_KEY',    '+F)t#sp?LN.zdf +-(|&^d&KQA]tb-#1*rQ!kv<JzaqwR&Jpu]7CE):ws[fz_[s ');
define('NONCE_KEY',        '+qphld=UXu/c,6XD Qb}8]gDO*^?E-KzHC$NB]I^rY-gn9fISoh:J8vvVvW#Aqrz');
define('AUTH_SALT',        '){B4N//GyIlD|TZ_WD MhwY0exaB+9CnY.sjg0WI_XNg~&|j!0qh+0h0XB`@VKPX');
define('SECURE_AUTH_SALT', '+h%?@r,R},Ut|}~%gtaIOLui~o-N0u$&8W/T hq{*R>NKK@CY4X4lpSJ(yHNAAa:');
define('LOGGED_IN_SALT',   'Tqg qaq->9n134@B`fcfJb{oX!x{7xe`%@TU`cGPm1@20q:wO#:4#Gte;.8U.Hb[');
define('NONCE_SALT',       'agT,MvXw6ciq0a0P .g~H+&=SXZN.rPw=fI6K;U1@OGoToSCnFQ>jL8j_FPnd<09');

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
