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
define('DB_NAME', 'banoto');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         's|0WI)1`{~*jixa :mM2(H1R{e}nyr!NyN7npEUP|uA7J3C`m/4Nyp}-lmfdX%&^');
define('SECURE_AUTH_KEY',  '0Pp&$6K1|SB^VMyPVAL3q)-Kx4T6L O>=qYj=E?E%1C1/FMGAXOVF5M%9;gbQ}*}');
define('LOGGED_IN_KEY',    'eLSCv-+vRg!Fs1MvCF[Nk[N!Mz_T/XJ_>27KQCyp|&3X}#LEj%X#_@`#Sq|=32!D');
define('NONCE_KEY',        'utV7rYL9UxNQm,cmFx<ITyE$~l*[|+A@(of>/(.j8)jEI1]#rN{U%@Vh>bcBKf_`');
define('AUTH_SALT',        'E^V>1s6;B?}Wfm)$E].Iyqz4ThpqAX>bqrcD)C55*;*N5I*~8*M@a)6a;gPQvm#|');
define('SECURE_AUTH_SALT', 'O}(glN..id>wsBiT=-8LWL;E#af=M?,iRqJ?`E+Yzxw^l.?F9^sR&%(#JSBTJknV');
define('LOGGED_IN_SALT',   '=P|(1MX;.AJUVh=e_oXQe[5lQ2tL`4TjIN#QEVpXcsJsky4##mM+<)7$2<pyk*tU');
define('NONCE_SALT',       '),rRyq&#P~w PuwvrZk]X=AH{`NdM~$A|%kUBs$Y%nBu2>(UZ(XyAf@cEkro>0w=');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'banoto_';

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
