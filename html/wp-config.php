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
//define('WP_CACHE', true); //Added by WP-Cache Manager
define( 'WPCACHEHOME', '/home/wilx/Documentos/openlabs/biblio/wp-content/plugins/wp-super-cache/' ); //Added by WP-Cache Manager
define('DB_NAME', 'bibliotecamadrina');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '1800');

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
define('AUTH_KEY',         'g}>&An0b6*8EQ1T;N8<71OgR]P73% 4_XEvZEBa:ow1;InnPr$~*%8dIe$@p/QP7');
define('SECURE_AUTH_KEY',  '_%o7?T?vL:e$(Old#PL_CST eQd;2+upY_}4o!p%zo/ptB^_/&BEf[BZtwUz&pU[');
define('LOGGED_IN_KEY',    '&mpgZjIGBaYpaFdT-p[vtVgd$>)4e.y<!?vfKL*K>DBBlvk P|yqPTjR{YB>F(V=');
define('NONCE_KEY',        '-#-3](<zPzI`FVXyr7[cp1Tr=8W)E_GsZ%Y,{@ZCiyILy^ #atT~?j)8F:}LR8lQ');
define('AUTH_SALT',        'so$n64)`INkOV,%KlPv(:P-hXUR=grv,JLL#vip}c?!fKd|oRs4PS&0:94f-_qIg');
define('SECURE_AUTH_SALT', 'CGp686rp+PjqJ34-=mfGG560|Q3X P~:3l-iSng=R.~;Rv4}`JUo-pXbb7#Fc48}');
define('LOGGED_IN_SALT',   'gWhu73Fs6 ~/ZdVkF#_p:}qy*O>z,LAK4Qit8cY9Fuh>H !+s4Z(=O5I;c/q(gfq');
define('NONCE_SALT',       '|@b+TJ48Vm> Jq6h/%t-7gP+#wNo~SzbP+UYjM!Y%C@ Fbza-L:rP(@6vFXyO$kF');

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
