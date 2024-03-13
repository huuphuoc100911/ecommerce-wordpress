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
define( 'DB_NAME', 'ecommerce-wordpress' );

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
define( 'AUTH_KEY',         '5tnbbPY>8mFPQB>?2,|JGlLSc6CSV1! SAIAVd&V to4G,Resz$gK$;q$/^!h,[!' );
define( 'SECURE_AUTH_KEY',  'P-LKaV]vxp:#L/_oLcH)#-d]x=8]z=g,h|k+rk FVI(=z4jub)s`3k[Z1wwqCRtT' );
define( 'LOGGED_IN_KEY',    '<3b8~*yx$M{S$l|4*fktD/R5W<AGj#;s+a;)nZ:2)*tY_$EI_mP@l]KiX}O+?d$,' );
define( 'NONCE_KEY',        '_qjB-vrL!pwl]h[AFN%Q$_EJNa5#{QD,*)^:2G%kYrCXe&<-.3!sw9NjuE=;Ge{P' );
define( 'AUTH_SALT',        ':^;)[>o]d+EIYi*_.w4[7;f}kcX^5#/!3}r^QLPfr.w8F[aXfWul=6In/NV:H|3U' );
define( 'SECURE_AUTH_SALT', '^B%Qu(gsL,e G6wvU#aqox2YD_~x*& x:ae~B(W^EQZ(x:luyI{2QN-=!=Eesayq' );
define( 'LOGGED_IN_SALT',   'Lq?L!GdcWQ*$B5vw>]hx2YK8smC4I:o~m1vC9hU:NfYy8-,JRmZ>A~r, {=+U`=w' );
define( 'NONCE_SALT',       '?8UoIrt+X4}-rojo>LDUOf|jh4nrD~V#_#_#n++dCrs*T;(^cC_?cpB:<Kn;jO(a' );

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
