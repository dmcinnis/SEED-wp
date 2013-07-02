<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** Heroku Postgres settings - from Heroku Environment ** //
$db = parse_url($_ENV["DATABASE_URL"]);

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', trim($db["path"],"/"));

/** MySQL database username */
define('DB_USER', $db["user"]);

/** MySQL database password */
define('DB_PASSWORD', $db["pass"]);

/** MySQL hostname */
define('DB_HOST', $db["host"]);

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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

define('AUTH_KEY',         'y(%S6+Ctta=]|hu^0pTii9Ya/+WhPGnbt>KuzM<7cRby8-ONHoiB!223XF$xIC@/');
define('SECURE_AUTH_KEY',  'XE@C(p 0HYq{<v}Nk.p>-iT@tqEC|mlD3<+V7w?*UJ[ RK0Ip2r[*f+DGjaQCb-.');
define('LOGGED_IN_KEY',    'K3TKi(I4gt-^m8Vg+x/TL/LMsAACM9iEsjw>?2Qa<Pl2U:kE-^g]c2~TN>bgb64?');
define('NONCE_KEY',        'g}=v|{y+V`|K[]|OW[QL9jsvXOpvy2*bD-bJDnvUXu|03ReZXh&N241}Ha]5^-Eg');
define('AUTH_SALT',        '|Du-UI]4It<<*ho5K-jl-5BcHj=DcQ!)|j*!{w)t>E)Djm&F0E+cP/3X`.vT5Aus');
define('SECURE_AUTH_SALT', '[)V24BQRFx.dpMV4B^t]WabK/2n{|$x?(vo6K| +14cVwA0b+1^;B69Ujsnqi<NF');
define('LOGGED_IN_SALT',   '@S%9$yv;7|+P gS9<iM-cSb!QQSfd m%xT+).U C^WAOqVy2Famen,(T6Qv-z/J[');
define('NONCE_SALT',       'a?9?5UP=F|H&vG)g]JvXXiK{zNy6($.^}Xxa-mFBs.Q@>,YC#m%uB-G#^JAJh3EJ');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
