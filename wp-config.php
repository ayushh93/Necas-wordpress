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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'necas' );

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
define( 'AUTH_KEY',         'i03[^_U$@K1 JllH~,~T@?3%z83wGYIM):cZ;>$L,<hzn}<GFLmmC@-$Qsq~rG}/' );
define( 'SECURE_AUTH_KEY',  '7v+z*.~2INn^(1::feTB53<?zHRV)HE;CUu?::^elQ!_7FyFrzJbzi]r<zQ2hm3j' );
define( 'LOGGED_IN_KEY',    'y2^qiE|mU|R%p*He[y1Vz!|Glu0:h5lvJXZF3z<W{X=X ~/^h@|8L<s]eU./Ea6k' );
define( 'NONCE_KEY',        'v2b9.dMQ^~:&PFNOOK&?j9/1?UvhI_IT__wXtUB*NjJ&X||fX;V[WN&M@WVGKX<v' );
define( 'AUTH_SALT',        '?FXmjwTny2+6|r)x%o-#!WH<D-P*QS62%tzY%0{1,h^$Lr9]&iRj<-IBQn|e]iKG' );
define( 'SECURE_AUTH_SALT', '#Y^3hQ~B4LB*_)J {BYGkm4+J0W~IG$dX0Gq,&W,s`Sc=N, <9Dq*=|%3w7VshN/' );
define( 'LOGGED_IN_SALT',   '4`Yb}pG#mAM;ZVE]oL,~1_:P13|(v<ZE|deX[RE|u+m8]`}i.YWp _6nvml;--&_' );
define( 'NONCE_SALT',       'feCqBg<w9y=16-7*Y5tY0ag:$q=+`+D8f5xJ--bpY+C<j(`-[[q(~T3XPSrpu.FZ' );

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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', true );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
