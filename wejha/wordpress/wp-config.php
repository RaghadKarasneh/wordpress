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
define( 'DB_NAME', 'wpdb' );

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
define( 'AUTH_KEY',         'b:}U75:PP@?m13qQmR8)S@_+#xqEd3lSP3=2KD^(QgU>J^m->;^k9Ge~fz6pUC0)' );
define( 'SECURE_AUTH_KEY',  '_{#i^=^C#;Hfz^<th#K3)jY5?#hp{zTe3}qT>IY;=azDu= {:m`d;kN<eq`%/%Eh' );
define( 'LOGGED_IN_KEY',    'J-7K`./]teYJAcO@<Fw#Sw9G.*`V42%>M#ZISLTa]qe3)i2j-4n2.JbL58U>$~Pl' );
define( 'NONCE_KEY',        'XL)%VYtze4]FENef{`%0{k1_;;ju:Y4g7kBs$PvW$h=Q^8[omyXSlvD<]dam%eHq' );
define( 'AUTH_SALT',        'kh?r+z?JR:SD]2!tk.g0Vwk14B~.xg{P<Eh?ktx8t?rU1oaycgT;>wVJ$LK=nZT=' );
define( 'SECURE_AUTH_SALT', '2ihMZm@uyBV*T=!Oh&:jOOB$uvyC*ICSzhMld|ZI>:A591~A;XIdJ,1?Q >xjO~1' );
define( 'LOGGED_IN_SALT',   '[5rj2ZeDrAXkfA:~l0wt%$nf+Oq<mV$Y9+b49e*^_KT>s:/d4/=.jrue`_7Yg9{H' );
define( 'NONCE_SALT',       '4.j@,N6F`[NbUlF*4L3fX,8PbMlxygx|xC<@4qx/=Gu-1*XC^7!3yHF bC|Rqi:m' );

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
