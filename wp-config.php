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
define('DB_NAME', 'WordpressTest');

/** MySQL database username */
define('DB_USER', 'WordpressTest');

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
define('AUTH_KEY',         's+FrxA+w A4Z_ZK!-P)<TMC8+P8V~`Z-Ejs_#R#d>e!}By7|6j@%OEH-PTu|eN)x');
define('SECURE_AUTH_KEY',  '1f9yz73a7qNMANjO8]R-+O8X*nB77 1X0F=*Yd]qBj[SKqup~h,4X/uo<uB01@Sc');
define('LOGGED_IN_KEY',    '!VK_*AKa=R<e-xTt^jH6Dp2hw$i?5U=|7%J5U?/O?:#M_bG-e;cDt{zrkJ6^-vHW');
define('NONCE_KEY',        'm34>zh]t&z]|W0Rk vm-abSg,#TS)7h(D-sH6Q]G{NLV6_zRA^Yf2A?fSOvr!Y b');
define('AUTH_SALT',        '|^hl!XIkNN/$qX*H14ty=<d li|(<c<<4qX@of,rqEK>OPsQJQOjSmrUHNz$MQ;Y');
define('SECURE_AUTH_SALT', 'UiM8nR8A<=EfMNOe{qZ:Sm+0:/}|/i=F5j|Z6>~NLwEh#=l:[||:rh+||(x~?,Fh');
define('LOGGED_IN_SALT',   '9(+po0VoSQN)3H1Jarg./Djn$+QbU*[X~n-g=;3J/+?ea(/!$e1@l5tE-bWv`9;0');
define('NONCE_SALT',       ': Mgzr5pRv@T{If34-T7y.YzaH0gHZ$%{DRrDa~UTYp%goP_@YC_l&Cus+wTP6f#');

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
