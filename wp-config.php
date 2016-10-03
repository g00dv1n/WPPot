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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'forrest12');

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
define('AUTH_KEY',         'bk |]d#,~D!Qy_7dwKKbb9{&MfE!0o6C3_TCpTKeF5;59f%9lI!ufMskP~%8u*Ov');
define('SECURE_AUTH_KEY',  'utzh:gWF0YVz_h$R@y,@-O[hIoPnzwQSt?$LLy ?g]NX((G0PhMBnceQY:K_9I#T');
define('LOGGED_IN_KEY',    'N#y=-0OL~-FBIm7Lcmy.v08p62x2O$OMOQ2b(=K>fK(*^/1aB]YZP}Q%u6fdL+[I');
define('NONCE_KEY',        '^kwk&6&%uu#CFhq5r/J=0FGMNu1bnE*N5P@h`h>R>kr<a[4}F<WweL&mRD-8#D2F');
define('AUTH_SALT',        '6lb{D.~~x>v5q} 1Hs27;M~53>Iz=*d}<P?FOAf1d$z2)NwTc`B36eR=&3~%<cPa');
define('SECURE_AUTH_SALT', 'rHkm%,d0ee)S*`WdQep}X3[tpSO:J|)P8vZ0UWI@vco<R:OPwqE3u::X ?IGCozy');
define('LOGGED_IN_SALT',   'fE3&Yab&]y@5YY-C^$W/IN5gXIwlInW#w!0]]IwM3D~w)O]+w{w2$.Z(Zc)PdYs[');
define('NONCE_SALT',       '.#@,kw7Q<LvlAp.l9kvxm-J )e{NvkM5|{x).84t+~N#![{z@x+1HZN$c8gA<;{#');

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
