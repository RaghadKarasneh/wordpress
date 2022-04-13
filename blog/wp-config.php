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
define( 'DB_NAME', 'blog' );

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
define( 'AUTH_KEY',         'cR[LuezRP3Vwc)&OS$A)L{?=[(V|H ucx^)Hg VPbro$,yM_Rfmi1?j:ac8; e:c' );
define( 'SECURE_AUTH_KEY',  'ank6;*C*!Z*phS_Kg]4CnPx)iLg?&M{K8ndnn4shTLCIe^LmnRWP,T`X%<l>k[sF' );
define( 'LOGGED_IN_KEY',    '?gH%qBCjD@nJ}mBv55OoG@N4F>`l:.ja|^#Ed5Z)-:1werBZ8[+| j9Q1}O7252[' );
define( 'NONCE_KEY',        '!5f?7::$9M|S/CuJz(@;7`#Fb`N*x|9/bfc4dNQctf/1:`N0@mC<W}q0ChjHbM%9' );
define( 'AUTH_SALT',        '?qlc3$][bIMMf_%^8AQDG;!/!H7h%H#7dHhu6h0y:RkNm?T0o;[5Z[]FyHog-A%+' );
define( 'SECURE_AUTH_SALT', 'xw!0%[3$]jNoME2(m[X?u}y0:3j$rr!u<gXVL[6!=H1Hv1NjukNDWc6[;j@)bIhs' );
define( 'LOGGED_IN_SALT',   'cQTfnN3Iz;YYwsaSO[fgU}96D>{o<j7AS!h)+[ML;o?Tj/:RDUJh7EcerB7G^$<r' );
define( 'NONCE_SALT',       '=mTfYh]G)ul>3>S13^~cZizZA-]r#.+ Z0d%v#O<yoQiUdWWx6%2iZh*i;cBYK-0' );

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
