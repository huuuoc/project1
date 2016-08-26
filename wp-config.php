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
define('DB_NAME', 'travel');

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
define('AUTH_KEY',         'gKrOLP=)JBB;`.U~!vA:=Jk7M(4whh` {sFnBYCYxF&}Zny@#%|Kj2WoM*0uAd}=');
define('SECURE_AUTH_KEY',  'ta@U0>3DUq9=T@JLh0c;Aj)21S#uyjt23x7.}z3.w_2D|wy^BtnGJz2XCSHYJXs7');
define('LOGGED_IN_KEY',    '$ >E>2jA/|2k.cE2B47wAS?V87diW8UT3+1Vz0>!NUqoeX4s!czMO`YLiCXCK1b&');
define('NONCE_KEY',        ' ngyPBs.t86@KD`%<>Pl[dT*yWo(d|N }n#kqOsvJioDv}cT?%XEi$rEnDq%XbVu');
define('AUTH_SALT',        'n/h{?G@6x/~f:AsR.8hCmA3H3hgNuTU)i?< RgqlHNK9+;`|d4WYT$+siRBMuOp7');
define('SECURE_AUTH_SALT', 'ZJsl&l5}lTvE$G]Cj`u3:Ka?e-ZXlgiUDCbr/a83* K$qk$|[N?R;cKO?l<+TJIB');
define('LOGGED_IN_SALT',   '#Us|b@@H1q?`o#@q9|n[4]8)%+`L@Zu8M_m%o,>RGxqs%_r{3GVbXKUWx:3DbRQr');
define('NONCE_SALT',       'F[yho2<UT2xfr-sB*O*ws}rb#2NqfF$ZP9(@)[kiXIIL$V4KP,ZL.#/rMH(iPxCn');

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
