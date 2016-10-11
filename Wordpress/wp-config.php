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
define('DB_NAME', 'wpdb');

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
define('AUTH_KEY',         '^Sl0Z/=0zhQzKnCvP|m&nAv1Ekl(<[0g^T4XX`~kEX,dz#47ouo*8{crCF!/PkW$');
define('SECURE_AUTH_KEY',  '9h[%;onR<|T,S{fsc-nv^`8fSCFOn,yvBK%6(Mf;fzm`;^Yst@`o$d| Vu(QyHoH');
define('LOGGED_IN_KEY',    'y]Z_IbW_;TVV`)P%5{wjH$ll$EIT!U8j IPJ*cjw+FXb=K!Pyb~L5A^?9jX1m-fQ');
define('NONCE_KEY',        'X]]|d3>b#Y6L>{?Shp<wlWw$UnlS=Arw/R2k3HBfDLc{y3hpWneYRXe=iEVY`4Na');
define('AUTH_SALT',        'jAr$Y&{,6@5Gr9vVPICF;mG7@wSZWTydKQtiRc|)FISZK1|(cru2AK4w|g0 na:K');
define('SECURE_AUTH_SALT', '!wi[Jwp=!Q$`W8]G1_`ueksV1O>gx0d0cJmT@pT6s =O6dkQ,[dD3Z)wp]W*I<P-');
define('LOGGED_IN_SALT',   'W[U(p!k:zB6DqJb)xI}JUs:&]`xbF(;Tjb^[5|e*9o3p{<IRHE;i`Jw=Kj*]%`M^');
define('NONCE_SALT',       'kBrobuUGPISfzqY#W.Yr8~PP]5Z -gVzAT3iauw57wk_34q:N%cv^V#(h_^q~2G.');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = '_wp';

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