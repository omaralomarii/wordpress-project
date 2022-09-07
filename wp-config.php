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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'store' );

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
define( 'AUTH_KEY',         '1hdfp=DfiFcAAkfi4OS3G$yDY}&Rr[]EZ9i *@<.donybh>dc6RRj<n/Z|Hyb6/T' );
define( 'SECURE_AUTH_KEY',  'Pr9RzBSmB&S@CQA0`&v[V4d>ll}LdA{d hwf]y&|}$@N+5O?lW9$ GY0,U@]N#!M' );
define( 'LOGGED_IN_KEY',    '_,*k(.t(Q ykUnggFv<9.KoKLRh+m(qJ53w;ll# )J,nGFkum;3CAqP/X)Ol0Jd/' );
define( 'NONCE_KEY',        ':;e%WN=Lb*IyARO~c`e[M_7M4[#|4+0`QyX1=)282fJ+EYk(Y.@1T[?^(6(hp:!R' );
define( 'AUTH_SALT',        'Z0m;T->h(.2s-_m|4S1*g>uG)9sY]a1J33#$vtK;7)$sC*/O^i(7#K)ZT4chh=f%' );
define( 'SECURE_AUTH_SALT', 'Ln7Uavyj<Dw.fQ1zHKvA%>.8oJ-cks7<7xP;j1N~:O3rI?? *n1NK1DR2>>Yj9Xi' );
define( 'LOGGED_IN_SALT',   'qWOSvy/@E(ZgZbi,[#(_~R@Gg:n|Bg/pWrAnSnOnFbTX*eal*Y>C~)H$FdIl+chC' );
define( 'NONCE_SALT',       '7d;-rpp[o_eKNQ M(thI{DmKU-Xe(SDo=Cupc x2^i:&N3!xeqqcut5IbJ{5Qefg' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
