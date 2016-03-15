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
define('DB_NAME', 'newpenguins');

/** MySQL database username */
define('DB_USER', 'homestead');

/** MySQL database password */
define('DB_PASSWORD', 'secret');

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
define('AUTH_KEY',         'Y;tcwMR/VNd^VJ^.Ea500F@=Vv}/+G9Zd[J*-]o]hi@Z9tW)ns&CfE|P-eW-4+*O');
define('SECURE_AUTH_KEY',  'uVdf3HkK?=c|:-j<mMcp1fDtc4:K3}k8/)U98numY=j<{g&FjJ2+Q*5G;-={kWA5');
define('LOGGED_IN_KEY',    'IDzCe)Bay2$`I__{,#w)d35Knpgw:t-3]oqh>N/WI4~!B%m61;!?/t&A^jB4G37$');
define('NONCE_KEY',        'H~XP-a8f9I]{9=&pL?4nm@p}El:&LG7BMPRD>{D.bVlL25R+74h6rzh<#AR|w^fw');
define('AUTH_SALT',        'xBF4x4_qIPstta.KHs@%sNCKf?o+:Om`#7I6U8/I_WQV0wI.6rA+<3>dSYslax$7');
define('SECURE_AUTH_SALT', 'v ,-+v[h m$, {B)f7X<`[Q6#PYyiX6N{n|{X;nHQ|1|;hPr4=Og%zoASs98uGYw');
define('LOGGED_IN_SALT',   '6}k@4=jF:geJr 9C+MI-N-j.d-Zv4K<TI6o3j>_ilp~j3mh*oz.p.ly|Aw=!I8Z1');
define('NONCE_SALT',       'N<IPJ^,%@(~Sr-lbao1&|(k7f)!:2v~ocJ,S>{zjtqg*9&m&:+VazZ?5|58jjw!E');

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
