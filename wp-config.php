<?php
/** Enable W3 Total Cache */
define('WP_CACHE', true); // Added by W3 Total Cache

/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'teme' );

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
define( 'AUTH_KEY',         '(oCQqX^t|fbt*z5SGiXb;Kkm;|Yi~gi4Ol!I`RY0vnb!y_e$,0l Q<i!Z;?(V.-h' );
define( 'SECURE_AUTH_KEY',  'Hs+G=& l0*{OcikWitTZv5z4s?/AntSAg67f6+e_Orm6XpC*R`R4[?KkIHWh*/ud' );
define( 'LOGGED_IN_KEY',    'n/8|g39dnekY{FpR^b8dOSAUmsnGtwJE^EHXwyi$0O5 C:{OJ@jv9}C9b<t<[L(~' );
define( 'NONCE_KEY',        '1VE]AbNAJnJR D0Ue yZPsOb?=7~WBHYRl0.DF`}PV8QH#iaSXb(.gK}7dC/ m4n' );
define( 'AUTH_SALT',        'P>0S.;hJ`9=q^7%yS(CvsP@m4M=tT0qYGr&gi!PrD7#l5WBI/sXBZ+~AQ6L%dTn}' );
define( 'SECURE_AUTH_SALT', 'E! LmVl;)Q3dUGjil_tVip!8kax%vV(,C)&|?*_EPI-mvd/ZY<?x&35e-;Sqn%__' );
define( 'LOGGED_IN_SALT',   '[{#3s;`YHz.B)!i8J)b}8+Pq~Gh+qQyoQ+OGJ5c12+kPiZ<TfDRS6y$R,A]5PVK?' );
define( 'NONCE_SALT',       'eRzfSC8g&|fD[+TNn:d4dAw78Q5&j4o#4 )Vno0Y4-c?_;f)(IWq]iY64o-s;gEn' );

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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