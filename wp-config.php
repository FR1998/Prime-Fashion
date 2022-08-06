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
define( 'DB_NAME', 'intern' );

/** Database username */
define( 'DB_USER', 'intern1' );

/** Database password */
define( 'DB_PASSWORD', 'password123' );

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
define( 'AUTH_KEY',         'E/Efp>ha*Z@nQha0LO$fMEvhol*TROy<5D@n/6cjfr$NLXFt7MY;]wGbz&.CpLB?' );
define( 'SECURE_AUTH_KEY',  '-V4qD0Q9%}G-{D,S/u9TO3hjb%i5XSQ5KVIw&qA@}YC*+$8l@H>,hzV*zCc#UX61' );
define( 'LOGGED_IN_KEY',    'C}_$EqqJQ(`*:;~nDG,wZA8?G[i>#>@*00ML0l>7eLo{{&pW;90nQQ-w!q|i!:QN' );
define( 'NONCE_KEY',        ' |&2N~OP(oa]u?|[pPzbhLcH6Zc5P3U;*M;)c&Nx~iKSqY:vbEL10pHNUka_cGDS' );
define( 'AUTH_SALT',        'j`U%^mejE-=)YQqG47AhvzbtW$iUt,ZfU}p8BAa@-E-V:g`@v7kT]-8fQ=psaJuu' );
define( 'SECURE_AUTH_SALT', 'A)uMCAYQWj`}G+k#:Kq@qcUbQ~eE2xCol0-5Gz8i[D,IWi^>D3%U2GpIgazDIk3>' );
define( 'LOGGED_IN_SALT',   'bWPoTQoQ/OF-a#THx67{/&t;W}/+Fb#`(BB94^z<i4=^S,&u@00fnR2cX7vh7fZE' );
define( 'NONCE_SALT',       'xTbxyf(r9C4IkCx>--4-;B`@N`Y.pCOL{I[0<.#NVqzdRUCcxFRURM)2<zFC|cbo' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wptutorial_';

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
