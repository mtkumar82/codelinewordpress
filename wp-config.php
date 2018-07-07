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
define('DB_NAME', 'codelinetest');

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
define('AUTH_KEY',         'FiYNNWbk>bMDCzi20plKBgJs|N~<@TFvd`!{k>Wg74`Bqf#K;];Ack,HHR^Ca$sx');
define('SECURE_AUTH_KEY',  'x,^3~<CP4+X861lfe(SLs~ba o7[Y^]9Aem:veoaFBRi)o{aHUC)TFr(Jnh@_*}H');
define('LOGGED_IN_KEY',    '5Ou`Ch^iZ*^jg3@bjw$PUfoMLpmG2I~qU&Oq@YPfVS18B(543aQ:I|hF3!R/SvXT');
define('NONCE_KEY',        'dP{*W^W0H$>xAqhd99av0r{QL-0/*)3Vt_J`m%AW[+~yv+nG*ItJNdAMkp|`;XdL');
define('AUTH_SALT',        '3^NnC?dD=5jvd0j})a=YPgNyBco+t =Q#MXQZdnEo#9&3 ~pxC}5mvy4N7aMQydt');
define('SECURE_AUTH_SALT', '#ODvZ^,oOCoyw%cA#z@V6mVd|dTJiffs^{^$!MBd>s~+87<Pc4 vuVY o>@@QZu ');
define('LOGGED_IN_SALT',   '+MV l5eusb9[ge$9!UAs9O]r6;}e=Z? BtX}6E%8O}tdl}z?|Q0eRh$V>.yu#iIa');
define('NONCE_SALT',       's5xxNyF@Dx9ybc#uI-i-*9hpeE ~sp*K{AxGBZ-ZO,nt[t8}q7PXtD7M{|Jqg0m0');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'cxyz_';

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
