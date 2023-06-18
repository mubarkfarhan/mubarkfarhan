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
define( 'DB_NAME', 'mubark' );

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
define( 'AUTH_KEY',         'p=yzZdTPiu{o{RP;L.ve,1,a^18b`RyAS~y,&7v>9v0[gh5>An<TyR,+]eJ %xw=' );
define( 'SECURE_AUTH_KEY',  'lo+#Q`lZi(/(U/aAmpm)!)g?ezS(Rd5Y-cM_7cp;<rQ=#K$G4e[+vFxgMpoIGq}]' );
define( 'LOGGED_IN_KEY',    '92<gXVlid8+63w$q+hLy?@}qqowg<.w0w<22c3r9^|BLdtJD-<[Bw4Ikq+v.}~=f' );
define( 'NONCE_KEY',        '4:@N^cNb2-m)[im[6FA:H/Mly2<x)nJ+&k87A!ubwT-dyDnJ)0raeC2f;q6sh&gj' );
define( 'AUTH_SALT',        'yoi;YP{/Qxo!U3NPlB2;vq^0uZJ:jCTE=+/bu;f,qQHZun:K M]q_b6A/#L^cI}s' );
define( 'SECURE_AUTH_SALT', 'w=/`GotE6q%l(X/8 g|K [3^o&X47#~I[Ou!>X@$/Tze`~;i_,!MYXs%xJydl6cU' );
define( 'LOGGED_IN_SALT',   '1?KC$c?VAHJ3c>C>lk[63_#dyU zKpeVB8]]tE{|YDB`,W@egaUq!bB5z~g(nC<0' );
define( 'NONCE_SALT',       'i;TgRB@7f*_c3O.n:T)m=47?PExL`i:m!Am>=6t0>]rSmp95!B%`EorBf(a9(7LO' );

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
