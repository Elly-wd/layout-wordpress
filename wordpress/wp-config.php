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
define( 'DB_NAME', 'wordpress_ziriga_teste' );

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
define( 'AUTH_KEY',         '{uP45v6=$g&kC5M8KChgCwZ^~F=X}u4^#)jyL$7.gMAnF/Quo,Uasm%ew57A1!RC' );
define( 'SECURE_AUTH_KEY',  'Wqv=roV@.vX_dc519}z!F+W/}94TzHuf,WgqBv!WP|O_%@XZpC~jls%|4}!`tej/' );
define( 'LOGGED_IN_KEY',    'Y;Vj,/jzN:KEorhPW 3Y;Su0>nF^9;O.JZGt S E`_q-#cGaYwVA>7p3q@aY?+X*' );
define( 'NONCE_KEY',        'J! K:Nj}Oy);{HrRDt=Nl5b_n{QAtUv>TdWYye#1WFH+.okh=|soy]ONcrg5CNzC' );
define( 'AUTH_SALT',        'L&!xMmAQoyD-k)Xk+pOYu{Yh=X;a^a9+Rt4DcMT@K1x2d1sZb, Zq2CecZ.^16E2' );
define( 'SECURE_AUTH_SALT', '^*#K13aWf$wcVem{_OXyjMMJ5lHl}{({M+~eu]luU{:hQ>^0.kefK;1;1NexIZ6)' );
define( 'LOGGED_IN_SALT',   ')GQu)Y`:d8$_<hc8E#J+AKlO(kam;R8-i4q44KQojcGIZ{JfB1m*F_PDC;3W_&9N' );
define( 'NONCE_SALT',       'WgB8@7Cf4UZ m+] QU/G/s.K11+7w]~&m`kw&hH2UKN3x^NJ+>N CjJM###o-}56' );

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
