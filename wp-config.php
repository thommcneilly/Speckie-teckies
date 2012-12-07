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

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'speckie-teckies');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

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
define('AUTH_KEY',         '_fTm&ruL#EtWnqEC`b&AbY5k=kkw}6SpSYMp2+ A>qpQ)w:n[e^CyOJ8nrP-0IQu');
define('SECURE_AUTH_KEY',  '7V$9T)3ll~j!kyHCf]o3{Ceib7NP!CzypQ~qj;>eb`7cUIg6Lk#~*~=1N#.x-Ecc');
define('LOGGED_IN_KEY',    'lrVwoTZT6z_x#4Kixlh~/A(,|`)};#d*Lk89>_gliy2xfD6bd2NULSg=ai60{6>N');
define('NONCE_KEY',        'o0kxV&Y2?7v#2hl0tUcV)yX_a;+XruFEeZ7{KsQ+koUQB1f4_.<b!L<eT6=ZAJE6');
define('AUTH_SALT',        'Ep)zyfp6k~_TJ{VB#t)@yPj|z>I1!]j{?Cxmp8@t;=:+;hDwdXV +g,6KY_$|j#+');
define('SECURE_AUTH_SALT', 'rq0/i}tV|2J-*>H@07]obt jp{B,Rua!UQGC[w^=Py##zgMY]j-[W2]<QUN-iPmG');
define('LOGGED_IN_SALT',   '{v c2}mKr|oW-<R%<s@]m;-6=JOc^7aI#+|9+]rd NAJQ1t:E,PnOpX>QpI=QD9 ');
define('NONCE_SALT',       'C=;Y~6 qqG@!lP}lx6FRjVzhxJO!:E <wXgh4HSR3L)8aOWvI1csnjyf&3]pMw{P');

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
