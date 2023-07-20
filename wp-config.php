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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'tremedy' );

/** Database username */
define( 'DB_USER', 'tremedy' );

/** Database password */
define( 'DB_PASSWORD', 'v3nhcGrwaNKfqnP' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          's2=/x,k)y >e5pW~.l]V>qHeoB(ZH`Ja0PO$*>H1XnOB2iL|R?j /g6f%*q? wgo' );
define( 'SECURE_AUTH_KEY',   'MBwo2V+ z%B5HRaiVCBRAm;YWs{</ip^8N$i4eKijCfo)@-fQ(idER2<?m)iIHo$' );
define( 'LOGGED_IN_KEY',     'v#7WgNs=u93.U@/dVz;NS=#MCTUv7Bz$u-4*XX~>zb-3k[z}o[;h2<%*$([n-f(q' );
define( 'NONCE_KEY',         'jTZaeMxCgeay2n)dkWL%x@n=L*7rWN><TzlPs#}oWD_SA$`mRIh|;0]:AK58psE6' );
define( 'AUTH_SALT',         '83]o~9{B~DZ{we#!g;_g{R[*eC6t{TH#Q8bV8J([dT??4:3##]7.ao(=- k[PG#p' );
define( 'SECURE_AUTH_SALT',  'o$-]oCQ_LVmq7xZD{NGTO}3mSR9@`u~SKL?JRt%i,2ByN|GZ10SKEP|a6LFaK>md' );
define( 'LOGGED_IN_SALT',    '2|,Y-ZHv#wmQ<@oQy}X:hof@J+rNpA6Ni8&-A{g0c5&w:a-{qTdz}aP$or+U6j+[' );
define( 'NONCE_SALT',        'HTZy}Py8{YM[ ^W[!zN~GyWf<%vK8~ah(xc,yr^DHH.kp-0UNfn><|*-2k5q$c$Y' );
define( 'WP_CACHE_KEY_SALT', 'wHc]ttA@+&:H(KJ/zLkv^$=J]htPuc7;|B>YIpfYl^wC}{m2h<?|`lay(ZE7ZL&H' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
