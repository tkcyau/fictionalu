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
if (file_exists(dirname(__FILE__ . '/local.php'))) {
	// Local database settings
	define( 'DB_NAME', 'local' );
define( 'DB_USER', 'root' );
define( 'DB_PASSWORD', 'root' );
define( 'DB_HOST', 'localhost' );
} else {
	// Live database settings
	define( 'DB_NAME', 'timothyy_universitydata	' );
	define( 'DB_USER', 'timothyy_1	' );
	define( 'DB_PASSWORD', 'jesuss10' );
	define( 'DB_HOST', 'localhost' );
}




/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '9Lb^+z_Hu#Q+[dZdVtK|=0l}Oh$o-_cy]-%XCls5O-=-Go<9WB@5cf(4c]<t9[do');
define('SECURE_AUTH_KEY',  '%RE&fkS-Xw_Th*q-M[3{791:d|{Uxx+D(VkLy|nN3c.)j*o]RJ-]V>fp@&s%5-TY');
define('LOGGED_IN_KEY',    'iKFs.yYl{37{y*oS_5%kVvMV{j#VD)~1NA0Wtj[rNs]+h-AxLW|4zfkY4-=MkH~m');
define('NONCE_KEY',        '|M>K]aF&$oK{Yki)0{h+^<Ko.ufJ5O^=ig4@KrogLl@&mPV{$VN2RoNL^Yv>Ci-9');
define('AUTH_SALT',        'l>!!C9M[AC41F5o|fXT$ZE|36]M|Fz/rLmfna9JU:rcf6*31dCT r%*EdX{e}$Y4');
define('SECURE_AUTH_SALT', 'emJ^2{Z-UKSOvHIYV<;m/dEaniDbj0x2AGu(1_NPr`)b=G[t*.^I[21 ;O+%/]Q|');
define('LOGGED_IN_SALT',   'Az8U@|M@k4>,5rwbY#Uu|x9LQI?~)+F+rq8wz*c?yk@ZS^Y?6kV3+^Zpk.wD%R[+');
define('NONCE_SALT',       '*nTYDco/!XmS}B-a tC4Q3+,fg|[xF-M4h`|U#C%a#79Am9[?zsU7GrEJwx*TJ8}');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
