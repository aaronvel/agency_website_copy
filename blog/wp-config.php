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
define('DB_NAME', 'blog');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '114kkh');

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
define('AUTH_KEY',         '`H6M~h[XX_q-U0}z T}Y6|h,R6k )5;utY!ESP6VLuvI.*7qs;,>,_!gP`9+K#8l');
define('SECURE_AUTH_KEY',  'L~?&)GNBfN4j3LqDKdN)EoUV[=dxCeAcj(yH3.9b.SLjS+qc~*r-1dTX5F;53 `+');
define('LOGGED_IN_KEY',    '+=1Vt8^P7kswJ:!R`xUsth]nl1[-zcF^suLwue m3,BQ;mq6j @{hmm<hx/dCZ@h');
define('NONCE_KEY',        'QkAfgn)6Hpggv[s;)XGC~5xBPvKC~8/M6%-Vx*e-:*tz=FP-7i3.1q3 >rA8&/5Z');
define('AUTH_SALT',        '-vHSiTXFm:@uX<W|8 7f.OCC(Czx ^fW$I8~?<B2^ ,Rh~{Qm9>=iiuC>h+*Kn*V');
define('SECURE_AUTH_SALT', '/[g]Tb`bcj}<`1+dqu>&Ge;q{FmB&qgY+ry|Q-JTIcll6or<fen:);XfeF.KOeRE');
define('LOGGED_IN_SALT',   '#tR%)!5Gr y.J6}_bu1x`=^t*){(h8cN5-vN8(#xCm$q@J4ZE [^OB/[40KBVgAd');
define('NONCE_SALT',       '{nqaqa#bJ6sl$Hk{129XB|R*9|,Hw%%yU3wE%ka{l|xeQrj0v6Ve<M} }7_Jz%%X');

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
