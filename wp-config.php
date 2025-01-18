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
define( 'DB_NAME', 'indian-restaurant' );

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
define( 'AUTH_KEY',         'C|t^:Rbf5uQ9.q|}W)9yBa.3$d{-.8n0`8&8E0LNp}<tlJr`Z0sa4RMloO.xz>a&' );
define( 'SECURE_AUTH_KEY',  'ZNhi?F*Tpvu]lY#3mIlB?N-._dr),hKoz|75=E6.43&OZ=NHZ`odR`y^7XDthmM^' );
define( 'LOGGED_IN_KEY',    ' 4GTD~%ol83.R-K<#csld&cw,vFSc`v1ho2w+3ZuUirs^}Le5pr)>[eTf&=R5kpX' );
define( 'NONCE_KEY',        'z/X4=:GLmee($Fn v8#)r1JQ^H?Y6bJ2KzfNO8!}6*q28y^$9*;7^}WM4ky:OU3_' );
define( 'AUTH_SALT',        '@-4j?^m#hU|u[7:/nKm#Qm.Xr<bo-@+,,iiiqiv;ZTa;KWN~KR7p~vcY|H1~BELv' );
define( 'SECURE_AUTH_SALT', ':BzP{akE384YOK$!XgUJ_}iiV$X$jiL.ysDFGsyySID`Qr` )Z9UxP@_b/xbehsz' );
define( 'LOGGED_IN_SALT',   '(9mK+#k:74Gc j!QSnuX;94M8=`Vw@rTszN0`2t`/A%H6j+k_9X<K.u4!Q /?XXn' );
define( 'NONCE_SALT',       'tZca5.SW~~kpy%B;<,jV Xk.69{PeK*B^5hcj(mJGzlU9[ Y&B*Mv>![<|io;;mz' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
