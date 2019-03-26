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
define( 'DB_NAME', 'my_library' );

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
define( 'AUTH_KEY',         'A,B52ii)-fAVa9s9c<Au-*1?Kp,N`+C{un`z!VB*Gy+/?73B$,@1D2^,SIN7?hd9' );
define( 'SECURE_AUTH_KEY',  'vC~ejho/y;Q; >LzisRoE%9HR+4GYt,_**sDe)EewHWvH3L{q-a|V~$:=C^MBi=?' );
define( 'LOGGED_IN_KEY',    ' 4$W[:Imo#5&mmQ#!y~C}6,T|4awVf`VG7/_5mfhnR{ 0X3W +iA0,`;lS@Y+~Q:' );
define( 'NONCE_KEY',        '@D+l|%h8TchUD73zvBIv:@rZ&3_&DfGK[Wif1E0sM>3P6Oei%7oMh:k)oNhtP30u' );
define( 'AUTH_SALT',        'S}K{bgpcfkrQSm8Qx_db%IyU]cH~8c2)[KX5wR;Q9uSl1n<k[`zDvX8c{6kP&TL;' );
define( 'SECURE_AUTH_SALT', 'pBTCp2W+2}85C/%eW}jp4n>CA(!O+hgu]S[vNW<P[Cg1.hWEkBPG)nBfw||~MI6f' );
define( 'LOGGED_IN_SALT',   '11BBvt,<R&!$`?Ic^v@-Z9:]$K6Zpyuyo|S+vKm81|T8mOr89c{ykz32;s/+>pz2' );
define( 'NONCE_SALT',       'MTYg$=CbWQjXRy~WmLK,O3^[gbZD#d&vlQ}ujGZDh5rKk,eut@mQNt1<FAEs{&cn' );

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
