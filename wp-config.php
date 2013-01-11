<?php
/** Enable W3 Total Cache **/
define('WP_CACHE', false); // Added by W3 Total Cache

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
//define('DB_NAME', 'adviservoice');
define('DB_NAME', 'adviserv_adviservoice');

/** MySQL database username */
//define('DB_USER', 'adviservoice');
define('DB_USER', 'adviserv_wp');

/** MySQL database password */
define('DB_PASSWORD', 'bTJtHo1');

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
define('AUTH_KEY',         'hw#71QYyb%;{n+h<v, CsA$e*FOJWLiDK3*P>=Ks0DV#1K0(|rSU-s!b+XuL6th,');
define('SECURE_AUTH_KEY',  '<iN 3a^W.5dT/NIb4MJ8E` +R(#|Z4-pg7r*Fn+qd~!UvC|ii}A2KIEx QeAi3Ir');
define('LOGGED_IN_KEY',    'K;StlS5&GH?d7.UkRJR9NU$lA$51^/KgQk,A!J80u!S+~m$z%OtsH=<Gf<w5F(b ');
define('NONCE_KEY',        'V-eNG?x;Au~E+v!-wA%]tAKT0)rLT[-;UrLg=bP7g?||27pqN,-5l=$-6dX2y|6L');
define('AUTH_SALT',        'z;rSc.EY9w|r<0j^Lv!y1,&;H.B`fZjhIo?|,v4<t^v-ZlcG;O(~P;}&2=/fd(`m');
define('SECURE_AUTH_SALT', '2DDe^OcdC2eVeZ<+V:;np:I%zyTJc+_04$qXa45ajY|ctsi`k]ykP+4+nC|D5Jsq');
define('LOGGED_IN_SALT',   '5V+zMf.PF&+KjE+yiM(m8?aRj17otGDi1i1{ /1}=e,y7L+$ 0?9G_q|{-|&ioFT');
define('NONCE_SALT',       'Q3E&yuOo>5#/pG--^p}BB+W8E{&KC8iBT,(+6E[Bv:)gIU/g8Y=-2RT58eSM_Z.1');
define( 'COOKIEPATH', '/' );
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


?>