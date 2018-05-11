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
define('DB_NAME', 'testsite');

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
define('AUTH_KEY',         'WWuCqq`ZM*kbgU>6GR:6!}nui-GwT0te3B(3q?|tSavs[wx}bFYgNKvzjV;#{2Hz');
define('SECURE_AUTH_KEY',  'T7rvVn[7eYpx~8Bd)p<)3V>[.@,;u!%`Zyw!.FONupw~TzbdhP1b,t%V@>*bx*:_');
define('LOGGED_IN_KEY',    'S/.aM,vedcF!>H:FN>mzR{aqb)LB{ne_M[q}V~,ak/$S }zAc%m gIA<_aM7F ]^');
define('NONCE_KEY',        '!=tp&<%-v(Lto$+MU:#Lz](P- v:#4h![e9Cz|pkp`;1v`BCerZ(GmKhcxy=6ws~');
define('AUTH_SALT',        'l_G)kP1fG>QPURWeMKK>|zi|,Wil O <;}S.cSJ=.i/t*(#b-a&!8sL%SRFSMZ!T');
define('SECURE_AUTH_SALT', 'Zg1E,mHjBz+z3 kC&1DvP7S<fu}e)0jM6z]5.:SYYTNEbi9~+~`Cq`#-cuC<1zCA');
define('LOGGED_IN_SALT',   'oahj]BvJ EA!P9ufDbSEHtH6DV*4nYt,Ca3(twN3lk7>HK}6|nJKtZS{pu}0[%{E');
define('NONCE_SALT',       '6uYbtMMWds1nBA4O3o7`}[J>Q,V>6elJ%%ukwf7*@s,}K3c0Vvp;=nRyv!v~.x:a');

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
define('JWT_AUTH_SECRET_KEY', 'xt-trainig-document');
define('JWT_AUTH_CORS_ENABLE', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
