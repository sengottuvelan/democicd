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
define('DB_NAME', 'wpdb');

/** MySQL database username */
define('DB_USER', 'wordpress');

/** MySQL database password */
define('DB_PASSWORD', 'abc123');

/** MySQL hostname */
define('DB_HOST', 'mysql');

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
define('AUTH_KEY',         'R*4]<SCOf9<kfX#y}B56b6=f_xL)ZymXy{=|o9ap=[?VSH}9F>_7@|Z{8Wi%.e<b');
define('SECURE_AUTH_KEY',  ',8]H1M^<Y<HR8%P`-)e]z.Hg5o|s.fOI$d=kF6XKRh9=MhmU,Jz8pk/2C03hz/3=');
define('LOGGED_IN_KEY',    'PyWEB2O>vpWOxEEne3[y6lIp*0]IjUg/{T,VslwJ8D}Y8>_tWeySmR]P?!*ci>}9');
define('NONCE_KEY',        'B2z.GE S?-z)itb-qX4_n/J3BoA0Rj|TcRThqT!h #8HO#E ,Go?gE]Km$VxU6}4');
define('AUTH_SALT',        '$GfdT[.,b)F]@$wLzr^5(G$~w.hm~j*(/gV*]UPYxlGIX=8DLmB9%[PU,=tx4NF*');
define('SECURE_AUTH_SALT', 'Q13R2GC&ES b(7qprCst/qBV9kL._)R-^KN0FJ7&??!5^OoO9-.aQ#?#v`HF0]<n');
define('LOGGED_IN_SALT',   'EE`HTJ{jrA:I^3;]o(fCf9`Ja8l.he;-ei7`pjUiGm]#B}y6egx2V27pETzEBrb-');
define('NONCE_SALT',       'xq!@YS-7c=)gq_ts$qR+E|(NFsw|6}SIHqc?U+@=((75XtG/Wp&-lJK.:nalQA?I');

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
