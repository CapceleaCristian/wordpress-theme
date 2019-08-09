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
define( 'DB_NAME', 'landing' );

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
define( 'AUTH_KEY',         'sLoOY=5U5Uz +es{zv]6Q:M_MgG^Xgll[XnyV?L?-6fj,aSpE<6)sgsr(MJ$Ir`c' );
define( 'SECURE_AUTH_KEY',  '}9bH@0] f@Ea67_7</wPG]< *qZ]2+m}3 /[2bz})<Okn*g]Kk_4{0`fL,`jMr +' );
define( 'LOGGED_IN_KEY',    'Q:}m-+Wh{%/H&@fCQ)h}ADhZCt:Lz^h6VI/6M&}O(+X)fmOQ21m[kX@Flf%CFZ]|' );
define( 'NONCE_KEY',        '=MEm0]D$O_zMfFZ|<Ex5d3G,;Z<a]/t_,*?xA$vOm#A0 6!C4:q3F()&R:!dP9sJ' );
define( 'AUTH_SALT',        'N45SR4JTQV{OPYtlw1c#KF;Y1vMTXH3]341Br@l~ri6-AdAXJR;bM:wDP&awR^hB' );
define( 'SECURE_AUTH_SALT', '$d8CR*>dPOP$S?{fzEiu6#K_OWe08+`92D_~Sg#|keWz~8,sC}93M6a/;QS~4Lu[' );
define( 'LOGGED_IN_SALT',   'O/El7i<$$ArZFf`r;7@Jbjc`U{d]}}COhv1^3V1EV4 Oq$Xt <qi/xp]:6yT`G93' );
define( 'NONCE_SALT',       'n6ny)9x>tQQdYF~.0P-`1Q;;;10(WDF354TwoyDh8?(Sdc6bh#jSwG>Yj4_1;;Lb' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
