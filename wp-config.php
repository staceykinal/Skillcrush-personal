<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'bitnami_wordpress');

/** MySQL database username */
define('DB_USER', 'bn_wordpress');

/** MySQL database password */
define('DB_PASSWORD', '3d62eb51d2');

/** MySQL hostname */
define('DB_HOST', '127.0.0.1:3306');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         '7406fcfa423d91bd771df6a746ec22c57c5f6c9c3cff73b8ac82554ca19220be');
define('SECURE_AUTH_KEY',  '0428d93862f0d15a4bf06f8d227d58a161675d970e3dd115caf399cd6a2dee7e');
define('LOGGED_IN_KEY',    '9972dd872cd6af0d3c1f4e7ae0f154efec501c43fb3b42680ef741759d7c27d8');
define('NONCE_KEY',        'f92e3d0fc55e125168b3934caedd394f55afa3bd8267561d53efac177f3a9c29');
define('AUTH_SALT',        'd74740459a4ffaa049196f57b547cab24f9be13f1be542fcbb15c75da456e67c');
define('SECURE_AUTH_SALT', 'b977a1231246891d604ea397a640970e56efcb3cfae0876e57a42d7f51c1e2d2');
define('LOGGED_IN_SALT',   '6ceac25e69fb03ebcba1028fbe5f85a9861adec8f6fec0e36ca6afb95643391a');
define('NONCE_SALT',       '91e87c2a3d22c33ef165d28fbaec995a43477747c5e6f62328a2f07b08cc8a8f');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */
/**
 * The WP_SITEURL and WP_HOME options are configured to access from any hostname or IP address.
 * If you want to access only from an specific domain, you can modify them. For example:
 *  define('WP_HOME','http://example.com');
 *  define('WP_SITEURL','http://example.com');
 *
*/

define('WP_SITEURL', 'http://' . $_SERVER['HTTP_HOST'] . '/wordpress');
define('WP_HOME', 'http://' . $_SERVER['HTTP_HOST'] . '/wordpress');


/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

define('WP_TEMP_DIR', 'C:\Users\stacey\Documents\BitNami/apps/wordpress/tmp');

