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
define('DB_NAME', 'wordpress1');

/** MySQL database username */
define('DB_USER', 'wordpress1');

/** MySQL database password */
define('DB_PASSWORD', '123@abc');

/** MySQL hostname */
define('DB_HOST', '127.0.0.1');

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
define('AUTH_KEY',         'K(OQca!fwvq$0YZAB<g*(0?{.8SAY9iih[-h 6?E):C-7 E<;7ZhaJ68$*v([^5z');
define('SECURE_AUTH_KEY',  '9PkFPQdpNNMAp7!=n!D*u/O3JEz/~iD=6MU,8SFf.BYi5zFlWQS6*h&A6#SQfaR/');
define('LOGGED_IN_KEY',    'b7gRjGrb#T3GbK0{zZ5ATA]2Oc.7L/YVN6Dd_wMpIy<m2ruTnBFm`dKNp-z*VtI0');
define('NONCE_KEY',        'vodVes8`jP@M/<C&!L1HJo719;cS#9oe(rN 8`jM*b0*]6)NCm*yNF!4yS6a<l`<');
define('AUTH_SALT',        '*|>KpI3I|3{?%=Xmv+KlDAC3s7,bjw#1_&jW$*&uUla+9nc_^a{u` `lc%7)fKym');
define('SECURE_AUTH_SALT', '+[fYyw!}IxW4bHfd|7/pFC8c1)i#p]Hz {@TO;gWb+#l+jXn#Uj<X%Ra%(ylT(J]');
define('LOGGED_IN_SALT',   '-gW1{p*P4AAx]2kvZc&h8]5;t$.uwK;UeFa]tErWP|cA/}QS#*ZST~%BKE9^<jv~');
define('NONCE_SALT',       'o+u{tq4-:UEjG:G{O[ww4<Kz#)y4MM_E} ,}**XT&B`Vw~U=%mD8^~AZ~NzC-RJx');

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

