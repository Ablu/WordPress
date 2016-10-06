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
define('DB_USER', 'username');

/** MySQL database password */
define('DB_PASSWORD', 'password');

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
define('AUTH_KEY',         'wf~6RRRid^s48|{bI9zSo8K1` $,Kx@+EzX;lcmw%9);MD(P28n,#a<X1brRD8<K');
define('SECURE_AUTH_KEY',  '5C?^R.n?g9(q9OX#aMtO!j4OJXhguf+Yov 0:NTKWEx#2h4.QvG*AF-:,M+/dhZ{');
define('LOGGED_IN_KEY',    'YT&F4<wQ89N+1qDBJoc3*?u>:gSa_m4JH1_&*Z4?1xujxW[WNB`EN#~^+@JLq$bO');
define('NONCE_KEY',        'Q$3zqjnh56C?.<+f]C,T)hQ.%qRp~%ru7S!#1g<-DYiL8>?us%NfK:pAN:Db7?LG');
define('AUTH_SALT',        'vV0UL8M:1k 8_pOFuDtn(rEpu_GJgpz;n5F5V!@0[M#+-cbfw{NUW>|^8O/hD3g_');
define('SECURE_AUTH_SALT', 'glJxPc`A4-g1Cs6ZhXp?Y-,W]nxl-~Is7%d/>TyENLWMIm,i/ @@|(*V!e$[Bbv>');
define('LOGGED_IN_SALT',   '#UhY{VgX`m<&;TneHQ{o&zvQZ]~_2%Ht5nR7/%>*Qf!2M3&8Xudm!kB`j;ULK>=X');
define('NONCE_SALT',       '9jNrw||Zi#+op(3M{aK9#<&6G<uFV^/1;v @J%QhrCRcJ6=;8%O@JTf5WjQN4wtg');

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

