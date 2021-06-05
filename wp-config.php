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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'hasrat-singh_db' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'z]h.pY& IaiL1h,]*VqG-CW;~@dcH94un]vTvZ]?.UMy7SL_z0M}QNqM3_%uT/lG' );
define( 'SECURE_AUTH_KEY',  'PSpBE5qiyZ@ Ht(v.4k*Qn_|QqDMrj2-k Ery@*`Iz5 Hkd@{-n^R.4 _3Oz3(ML' );
define( 'LOGGED_IN_KEY',    '7Bn=xc@S(&e.-m[zy|2T}|o`[7?XVp!i5k>h:9CPf]5Wa~$2JA4ocT~V@uxU#1$!' );
define( 'NONCE_KEY',        'eG}X[m5Fqn0+R8_#dU}Z(nqyhi9>=Ro(C^vet`/y<$edHileW9X7tE]0qFC &,,b' );
define( 'AUTH_SALT',        'Bc!hk{2Mo>)jsB=?Y)(y+YD@v{0-+c^N@~ucFuv<Mt4T]pu/`Y#)-dK-B*6z&) 2' );
define( 'SECURE_AUTH_SALT', '16?n@]0N8tT1ASh|#]ctV pM=AWZ&81`pQs}E@28Ck<-n{:iTZXsG&ICxDvXhzIW' );
define( 'LOGGED_IN_SALT',   'I&#-5x Ep9lpDaqBEc;Tj;v|4.7fc*tO;VsF.TvXWx}ZTX}<w5ijhZTH7.~W.3m{' );
define( 'NONCE_SALT',       '@80TV=x:Uzw&v#k---WxHzvK~JA_*:y^%H$~yZ:=PSOSMEWc3X7HJ=k8Om:3hB?a' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
