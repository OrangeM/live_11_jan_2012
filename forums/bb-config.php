<?php
/** 
 * The base configurations of bbPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys and bbPress Language. You can get the MySQL settings from your
 * web host.
 *
 * This file is used by the installer during installation.
 *
 * @package bbPress
 */



define('WP_BB', true);
if ( !defined('DB_NAME') ) {
require_once( dirname(__FILE__) . '/../wp-config.php');
}


$bb->wp_table_prefix = 'wp_'; // your wordpress db prefix is
$bb->wp_home = 'http://www.adviservoice.com.au';
$bb->wp_siteurl = 'http://www.adviservoice.com.au';

/**#@+
 * Authentication Unique Keys.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/bbpress/ WordPress.org secret-key service}
 *
 * @since 1.0
 */
define('BB_AUTH_KEY',         'hw#71QYyb%;{n+h<v, CsA$e*FOJWLiDK3*P>=Ks0DV#1K0(|rSU-s!b+XuL6th,');
define('BB_SECURE_AUTH_KEY',  '<iN 3a^W.5dT/NIb4MJ8E` +R(#|Z4-pg7r*Fn+qd~!UvC|ii}A2KIEx QeAi3Ir');
define('BB_LOGGED_IN_KEY',    'K;StlS5&GH?d7.UkRJR9NU$lA$51^/KgQk,A!J80u!S+~m$z%OtsH=<Gf<w5F(b ');
define( 'BB_NONCE_KEY', 'V-eNG?x;Au~E+v!-wA%]tAKT0)rLT[-;UrLg=bP7g?||27pqN,-5l=$-6dX2y|6L' );
define('BB_AUTH_SALT',        'z;rSc.EY9w|r<0j^Lv!y1,&;H.B`fZjhIo?|,v4<t^v-ZlcG;O(~P;}&2=/fd(`m');
define('BB_SECURE_AUTH_SALT', '2DDe^OcdC2eVeZ<+V:;np:I%zyTJc+_04$qXa45ajY|ctsi`k]ykP+4+nC|D5Jsq');
define('BB_LOGGED_IN_SALT',   '5V+zMf.PF&+KjE+yiM(m8?aRj17otGDi1i1{ /1}=e,y7L+$ 0?9G_q|{-|&ioFT');
define('BB_NONCE_SALT',       'Q3E&yuOo>5#/pG--^p}BB+W8E{&KC8iBT,(+6E[Bv:)gIU/g8Y=-2RT58eSM_Z.1');
define( 'BB_COOKIEPATH', '/' );
/**#@-*/

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for bbPress */
//define( 'BBDB_NAME', 'adviservoice' );
define( 'BBDB_NAME', 'adviserv_adviservoice' );

/** MySQL database username */
//define( 'BBDB_USER', 'adviservoice' );
define( 'BBDB_USER', 'adviserv_wp' );

/** MySQL database password */
//define( 'BBDB_PASSWORD', 'bTJtHo' );
define( 'BBDB_PASSWORD', 'bTJtHo1' );

/** MySQL hostname */
define( 'BBDB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'BBDB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'BBDB_COLLATE', '' );


/**
 * bbPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$bb_table_prefix = 'bb_';
$bb->gmt_offset = 10;
/**
 * bbPress Localized Language, defaults to English.
 *
 * Change this to localize bbPress. A corresponding MO file for the chosen
 * language must be installed to a directory called "my-languages" in the root
 * directory of bbPress. For example, install de.mo to "my-languages" and set
 * BB_LANG to 'de' to enable German language support.
 */
define( 'BB_LANG', '' );
?>