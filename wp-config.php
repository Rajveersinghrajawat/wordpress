<?php
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
define( 'DB_NAME', 'professional' );

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
define( 'AUTH_KEY',         'Q9m;^aoJ}I7=!gy:9dlb6Ta6 *_mnh*UObyg!DiwN<_0BJk#|T)@WuTx?7GsU![`' );
define( 'SECURE_AUTH_KEY',  'GxhvH2{88.EvQ76:;j[kp!S[oOYRRfSzZkQ=0Hh9!@yZ.LK(=H9fm;WvO#Q~}OtJ' );
define( 'LOGGED_IN_KEY',    '|~}K/6X.1zS&8Q4<yXo:6~:uX.zf,4hz88Y@Ez=+Cls+p<X*<,N=eS[|Aod|+%l(' );
define( 'NONCE_KEY',        ' A:H+XF{^5Qd1h 2&m?g* 6}gt&/+E&]SfRtGj&f^Uk~lv1_@aI92/8$-Ud`lN)_' );
define( 'AUTH_SALT',        '5nmSx; ]Do7fO~S94V|z7 kYXTxWq&fm!79Rsa-g5yy]`|_8v&E{+1[TDyv;E71%' );
define( 'SECURE_AUTH_SALT', 't|2?fd+ZrcN*`}o)IK_}U8PM: 5ar*jHCXGsp3!&PIg!);mz9FCn!?UrK__O1;w2' );
define( 'LOGGED_IN_SALT',   '#tT&MmhV b/`,Ttwx^W(Q2,Z t`BM}i:7=Xy*yfR:(pVSIN* #j*cEd&vH:{7{]|' );
define( 'NONCE_SALT',       '`>{$Tk{e_?uSPoFv7#}CU8VVFB7Y #~ed+@bk*Q08>]lUI=Rs8:UCC3JCI~kUxr;' );

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
