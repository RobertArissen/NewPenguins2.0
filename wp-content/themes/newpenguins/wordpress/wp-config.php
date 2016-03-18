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
define('AUTH_KEY',         'L1OUHRMR.C40(|NsY,`u#2>E-CytyeU~^m;8X(!^1c3rTJX/J@CU*dqC:@#w9=-g');
define('SECURE_AUTH_KEY',  'bL+hd}:S~G4|%km+p25W4cuZvj5Qf!+2{fiEd<0T;-f >JyG1`i:!D7jmY#,QUI$');
define('LOGGED_IN_KEY',    '+~b*O:8$mmV1G3Q3=0CSIyv:(-V14<5 WhWgS+d{9Tzh]s)W.vLfBWJBHpwCtyhv');
define('NONCE_KEY',        'e&_Gb>}/@b)LV >R5(y1JG5!_2&FM3rEuE |![_%8?azZHfa$)(r55QY$InFP6ha');
define('AUTH_SALT',        'SpQSANlIT.wY]<TnNC:jUXMR,X&xPCLo=~j:+<}oSL+1uDyIXj|4OTj+1j8IS,Py');
define('SECURE_AUTH_SALT', 'M8tbHO|Vp29^ER]4m9YenbAy;sl.*ttjei/9$/oj/h5l8t^F}!8|S+ERMV6^MVoF');
define('LOGGED_IN_SALT',   'nYg#{ [TVQCB+HeWg.nHpH98iKtM#3<NseVWI+-JO>zF+iav*5`s[wyJ>dV]r<#w');
define('NONCE_SALT',       ';%pHHOf!Wfi=>3DdlUEr_z%_}]SwojFY+1I:WJI|A~{|sj*-M:>75et%OV`JRIGT');

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
