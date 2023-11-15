<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'quang_l1' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'z4b4g02pF$},IvX/{7Iec&24< -.Mve 28lQxFNOFfhB9f85^vEtAa1Ot6}.|8!I' );
define( 'SECURE_AUTH_KEY',  '^R uChzi|oMw^5ca|5Jw2g/cGA3nEaA!Ec<@-f=>_*2![;*ta;ch7T8YpJKMGk>U' );
define( 'LOGGED_IN_KEY',    'zr)Q o&EYS/j4AGB-A{~jqk xOtetZ^b$/+7>m65Br2pdzNo2h`d&vkH:~}<<6.M' );
define( 'NONCE_KEY',        'l+if,=}H+s;Jbij{t);PT5*,k.yEM<OPXyUB&P$*epW{o2yg{{V.9+,^OU@q)KN+' );
define( 'AUTH_SALT',        'lmpXtr. *RG`ClSq!BO7e2mlZk]EktFeq8zMzS%jlr@^)Us%3F#cyu)/_Xs:uM1l' );
define( 'SECURE_AUTH_SALT', 'Es+M01R.9,rd-.J^h<(dXing6Zj%Joy-KTb9U.BRwub[:L8EseJUh=j;xTZBkw%m' );
define( 'LOGGED_IN_SALT',   'G@}vEx0#P>y|wUK-4u^zB^dXL2?(UE$MO;|Xr<?+GS1bBg4a/P1VEiJp.E9)U5pI' );
define( 'NONCE_SALT',       'd/P=8W&~7,-4$Tv7(%R-rCOG^YC7q)[oAz<fo&na7[:tC;,OP1f[4Dm&!||w8ASu' );

/**#@-*/

/**
 * WordPress database table prefix.
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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
