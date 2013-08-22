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
define('DB_NAME', 'ecotestsite');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost:8888');

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
define('AUTH_KEY',         '9O$x=!])r8{AAe|xQ+pa7?!BF&|@SOrSI&j!-6+;f n51-$@|_ycy#XT7AFn<Em(');
define('SECURE_AUTH_KEY',  '(7b0<f$KR|%>U7hr];^V*v<Q/IRr?++fj-Z.k.dN+Ydqbb1l~10<Zt!o(E-7UrnB');
define('LOGGED_IN_KEY',    '30$n&L`Y_OYGr?%t@[y6(=9y<:hG^_fA|6u(WOP:9~gp#A[1/|Pd-;BM*uBinzT)');
define('NONCE_KEY',        ']-!#D<d%LD(Y2(24>h|8cerU,H,q,B]7Bt`7`6ojh+o7Q|kiY3}q4+`j-K!lhXdt');
define('AUTH_SALT',        'oLN0K-MKU.DziY8GY`0t*bw)G?T@>36z~|hLG+n7#8?[x#q=>T(J(:XYZj$mX2)4');
define('SECURE_AUTH_SALT', 'UsFyjXL)]>0+IO*NJ%TZnNu|}FD6WKM+Z-%_U8u) -P9d[mE-@M~Nj%M,/ium3*Y');
define('LOGGED_IN_SALT',   'W|a4V+Mu[9{,K^8qfy5Zu9+.@|15~@)ZM,#F[NN|;VLFe#K-=g]0:OE-d_;-gcv)');
define('NONCE_SALT',       'UeaMK^~F/yF0EM@v[C]+!M)U5fp|T!i A;6_TD?kw_|B_g_ds{gJ+vIie+@pD(db');

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
