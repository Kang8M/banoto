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
define('DB_NAME', 'hunglm');

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
define('AUTH_KEY',         '57KGv[<hg>{ox_VL]+T/+O0v(TN`Ol,17$-1C<1sB@g,[-EhYt{k!H:(ht<&O[Yq');
define('SECURE_AUTH_KEY',  'ujN.w=25=:yol$fWK$dQ.4?]DMjsKsvX1i1c ~u6J|J;HcGEA: Jb5ET[?j9h#9s');
define('LOGGED_IN_KEY',    'fG]zL%aYTvcx]e2BNXQ^W!Rb=J])Y|DQ_^Ij 3+eITf1M_t]:(186<4q>(?.-**8');
define('NONCE_KEY',        '**[&U7sRQUm>7sZQ%i2]-9KvX-bStD0YmMFMY;X-KD wiaCA +t6RF6.L`}Kk&%D');
define('AUTH_SALT',        'x+[SkWLjH.4Fn+>I3ptTaI& LXm*W:BP]6gRJl5waB8aM6ub!aYSoIhb/Xz$fF]~');
define('SECURE_AUTH_SALT', 'SkeI#jp1.]Y]?pH8zenhc.3+yT<ZTo<1KvZ[VdF[OEP(.7Y<2/yB0DF&Fmf&f&eV');
define('LOGGED_IN_SALT',   'kVxnBqo`.xSEd9F%M0%Exv ]vUm>V15/_h3ub%1qZ}?#hf<cdz&w w`>.9zsE<9s');
define('NONCE_SALT',       'T=JCw~Eg4S)S^90 o7SrG7*M96}gSD2}thQUElzl-++ ,Fp/2eto[z/Uy.!sSC1Z');

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
