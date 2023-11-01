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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'I]hO4M<6~Ii]k~2zI[%,eT2(.~B9^A8nBEqW+#=CF~ZY!s}P-r7~Wtk]Os63.xEb' );
define( 'SECURE_AUTH_KEY',  'aqE5$y7mR<.^%34{^<<h*nx5%(%/RNw`L@ 3C6m(D*V&?y?|kByc4:j%@f*1OFS$' );
define( 'LOGGED_IN_KEY',    'Uj@{K.;D$p*,_:>o@;gLUts*/C05){NC+?QQJViFRPdc$]~$HgO0}_s3|-raweKM' );
define( 'NONCE_KEY',        ';G,)0ieSB).:3Xe.ripavnWj:][2jm@0()&~qAdaIcAi[YM}a1Pla2@0lk!`;M:D' );
define( 'AUTH_SALT',        '/]Nj3Y4F3#a1v!s~UzxEa),--8)8}YM! b~Mz?GKbj&.%N[w$iF52f7dO2;LH_KV' );
define( 'SECURE_AUTH_SALT', '*(Y5s#C/n<Q;Y0#t?xJz3Y(GLBN vCk;zr@HF&+nX_mvAY2,kz>FqtUT|g;g2#!}' );
define( 'LOGGED_IN_SALT',   '|]ZyeDq0^|Lt42g.xlz~39_me7-)h|M<k$QA $BDa]PK[ByZG!~Xzg7{MDR!,GA@' );
define( 'NONCE_SALT',       's3)#KL-EG)~2>popNV7$rEp/kAO!#J2v9,ZmQa3|4.p4J_MG=e(Q5w^=]D3pIVOT' );

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
