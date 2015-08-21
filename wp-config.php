<?php
/** Enable W3 Total Cache Edge Mode */
define('W3TC_EDGE_MODE', true); // Added by W3 Total Cache

/** Enable W3 Total Cache */
define('WP_CACHE', true); // Added by W3 Total Cache

/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'bongda69');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'doraemon');

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
define('AUTH_KEY',         '0)GZbET=T5r+w5UM=K<x>[l.L7uS>DOYO*idXNas0|{*@Z[pDBT^-uww+M L#<TY');
define('SECURE_AUTH_KEY',  'X9Rg-?#gh?)zN9Xq>.kzIl)h(13#,m)g3]i4K]~E,;[qF|%]EzlB1=JC0J(+4C3/');
define('LOGGED_IN_KEY',    'm<n9vs3,LMQ tq^l_y_@2$T@/+m8}>{XL+-3j/sh}OiCdMky0J+N9G0>?]+hY(Xt');
define('NONCE_KEY',        'fV>TO:TLig1OPQ+|pU0pq@4hKJ(Scuj|:;z)2-R125F Z}fR,o4.~~1NeVab|y ?');
define('AUTH_SALT',        ']z+]6z/D29,CF`k]W,p3rvMj}qiU25JUT<8nHS{~5FD$(4:8*A-outEaCRm>,;`+');
define('SECURE_AUTH_SALT', '!vm}VPo>GO!8|h<-Mfd(8c^]PrxO_dRNz,xCa%dhI$!lib;2doa+%YR+0fXEWuxa');
define('LOGGED_IN_SALT',   '`GLKcXS#&3[$OxM^gA(W(YTZO6=s.v}WC.BJTGFDH3j0k/1$Ma!,{Z$Y&*M4sn|*');
define('NONCE_SALT',       '?t^|[0yb+DxVmpyq(JAb}IZ+HHXAZ?Q(SVT/ht-&XB:|!:8NY=sP4Y!RXy03w$$s');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
