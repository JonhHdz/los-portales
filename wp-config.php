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
define( 'DB_NAME', 'los_portales' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', '127.0.0.1' );

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
define( 'AUTH_KEY',         '.Y]X_C}6^2rI;)Vu.~0HbR<6n(Hi5flo(?HE?}GJ(o+&z,AN^eJ}zR}U$bd+tuFv' );
define( 'SECURE_AUTH_KEY',  'Xv|J$h!zT<5kbZ6_cCdnz9gzpkzg@sa,`7]M@Zn[0GI9HcXb+}+&!SFgZ%Ux<rZV' );
define( 'LOGGED_IN_KEY',    '94V`ham?Xq`:dq<Xolx%IAu6Q7=iH/.Rs%]a!p)(3[BfB53 |p9EVL1zeI[C-c|Q' );
define( 'NONCE_KEY',        'CT)eb:,`!Xf1%vsaEz])F5RvY-t^]R[eAD,+Z<f6ME@H-T)if&(lne]`(pM&]cw<' );
define( 'AUTH_SALT',        '6i[+]>2!zK65Dyknq0;@e`GzIJzzs<{}Bmh5=%h8t/.3F1Ghls2*3mnv]_A.FE/j' );
define( 'SECURE_AUTH_SALT', 'i_/Innjk$X=K8KAWtUC0en|HbxqQYr(R$7xBlGG}Esq3r)^*YCx8}o2&6r~Mfxck' );
define( 'LOGGED_IN_SALT',   '9qiudusr2og1ctgLyQHCG&@RrZb5^0p7Eu]~6~^`uXBYW<UF>pP`0f(,j78z?Qfw' );
define( 'NONCE_SALT',       '*M|?Ecc;~EVVlMzM1W`[9|ndS1{?=k`Cg11.0z<:hS&-Tj;VNtTl.mt3=^5}VF[!' );

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

define('FS_METHOD','direct');