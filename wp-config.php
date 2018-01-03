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
define('DB_NAME', 'test_db');

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
define('AUTH_KEY',         'ny;LMObl/5f`t}(F_0,woR^v9{#ZVBvY$*~Y]LuF$OPtn$KQ0TDWsu8H<Z,gGzAg');
define('SECURE_AUTH_KEY',  '(Sv+L4Lvd#tV:{R]HIDDH5/j7O%. (:<1eAJU/;~vp)8BJmr1su=i:6r!xWv*T<}');
define('LOGGED_IN_KEY',    'ieOFw0G*{dS910(o;d&67+@5K=0P.9&jH~?}Z@,//J4$}F/wM:Krf82;0j]/t6YR');
define('NONCE_KEY',        'q%!VKdT94t(n$}7=R{&,&@U:0K<0A1.9x1m+eeYFf~wj-9Y} V0Y-_2gRNA8X=:F');
define('AUTH_SALT',        'NLQN7DI^9vjW<4I1qj;{Z//8<o?K*n2z=p?G*P=/il2,Vru<t&ytC7^tpmCG7XpH');
define('SECURE_AUTH_SALT', '!Z5]pg@!2SI-H=q`i9HEsqiSQN}fwlS%UM^<o{[3t-5*FVU8!,P{+74_{i-HN:-P');
define('LOGGED_IN_SALT',   'kO(o.Kl_+S3kt`VM0CeK&=X@[BSVTafm6^8&&u&>WHnF~p|6oH7Cxb<G R.9f0Xk');
define('NONCE_SALT',       'p*8IGggJ*9%)N}_.fK,0&c,!cqj+%(]c:zC%SITkHS#oo5Hh7bHwL|p)*j=Y=_H%');

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
