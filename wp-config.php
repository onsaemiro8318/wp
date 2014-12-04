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
define('DB_NAME', 'kyhfan');

/** MySQL database username */
define('DB_USER', 'kyhfan');

/** MySQL database password */
define('DB_PASSWORD', 'alslqj_2014');

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
define('AUTH_KEY',         'hU^|aYogKieoY.oxM^ErqZ_<kr;fPXhgZ6Uo#@2+o^M+5Jdy~OXxYM0N3xU[0PO3');
define('SECURE_AUTH_KEY',  '~hJx-46^Rf0C$+;b3)$rW$uD>C+aTHR5(.+O ByPKU}a/)!El@2X*I]C2Bw}|J{7');
define('LOGGED_IN_KEY',    'sb`{<soL69L5#g: b:IDI#4BmQ`uvn=Ie~eu>;8W]$kSR D8&~x#[D&<-lX%{WUu');
define('NONCE_KEY',        'h)vd1~;`a%=ZTVVX+I+<l+_EIQ&*xV0+,dGT-+cL,J0~><0r+#@P^s4zZ$UF)p|-');
define('AUTH_SALT',        'X}a6ub&_^)HXCJPuGBT2gB;l~8{3o_$,~JKCnHiPH6S@4|:eO5tjIUDhv1XlL?kd');
define('SECURE_AUTH_SALT', 'gLXJ3)+%ydJI&s#r8.p#H%0DTk<=dt||BovTU@RuO2,BRlfV{i,h,X;BG/?b}}PJ');
define('LOGGED_IN_SALT',   'O0#+y4o{dTL}$)oK9q5|<h<^J=]*)c&7rOa!aQO%=Ew2vT}Z-kK/~bc9Jr{.[fvY');
define('NONCE_SALT',       'ZXPC.D)1dx]Jdh$o2LCKEV5a`RFnd<&CIB|/%.hARa.;b|Cma,|=}N!{s6E%]oF8');

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
define('WPLANG', 'ko_KR');

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
