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
define( 'DB_NAME', 'test' );

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
define( 'AUTH_KEY',         'XMTVkv=zD 5gKX%sh;?:]MlV}M%yJ?+@8zc$ub`-U.o0~_8JVax/]*o`y<x`AH1U' );
define( 'SECURE_AUTH_KEY',  'iJ~%+9h8jL{*TnMwIR5)s/SFglE>N(cRv&QnG*Ea2q4m`{=Q1HIHb^Ov^2=]>v7o' );
define( 'LOGGED_IN_KEY',    'n2.%MSeKHDS|(})prBJ&C52biDf*HTn%(SaL~Z$iB_dK<`~K7zQo)k>ng1k?patu' );
define( 'NONCE_KEY',        'V.&??A$}Q6#e9ioiG>f^kx`#9L$m|be6*,[(%5#&c=`^GUaH3sJ@8pd~_ket|3ux' );
define( 'AUTH_SALT',        '4#+RZ)}}  *^N.x+c?9xlku}2Cpz8{F{p v>zv|2eq%xsF=~L{@UMFEJYA9,E=+L' );
define( 'SECURE_AUTH_SALT', '6j9n1>t0T^T>ng<Aqc?UZYxVq/v?d0p]lgSyVd<u CX)*CtIU,R0[7L]q7@6YxJy' );
define( 'LOGGED_IN_SALT',   'vyM-*d8es;SnRR2TVyo=jp]Pou1?,REVPKeJ|+N*VY|p@Usi=m3H(dkYfG@F/=K8' );
define( 'NONCE_SALT',       'mbEY$F%Id@>)<tO7n8da|+1JcqfdPPPR4/DC=Xx4UE35|vtmto`qKZ=I]jbO<1HW' );

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
