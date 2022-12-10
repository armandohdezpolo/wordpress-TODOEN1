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
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'ciber' );

/** Database password */
define( 'DB_PASSWORD', 'supersegura1' );

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
define( 'AUTH_KEY',         'q;0qtk;*HB{h`2qt5:_s0yM#,HgGOwQeAM1f+Qp]5Y?-vq}[0JbAZi%P,9VllJLw' );
define( 'SECURE_AUTH_KEY',  '.Ye1J|SelU0}VPr>9:?CM9U68cTk^N>3SB6LtrWOP}x.7VfEQNf,>&y7#MRzmZhF' );
define( 'LOGGED_IN_KEY',    '*Krl:TXDjD~!>-q4Bs&Y(W8*p[K}}6|?<=EV1PF~z.H;7,O|7OwE@6^ V{);G=2,' );
define( 'NONCE_KEY',        'h^McqlmWe2}(mXj@ J#5`56HNirz>8-.Y4r)uPe:G%q(E9OR<XSs*h3CvjlMn<3;' );
define( 'AUTH_SALT',        'Us:mSAIRSPL9U^PIG916+6h}PjJNP?l5bX[Bj0%3.lMn?-J0m|2B8(Am*|s{g.]n' );
define( 'SECURE_AUTH_SALT', '];E~{dgd^Sk7wz|TYoH64:(TPk,Nl,<iSbkaS$%oCyeW36&oX4#)yRhML!77lvB4' );
define( 'LOGGED_IN_SALT',   'a8+7jId(ty-}SLbc8liKZ}s!!-|b#[m,*kM4wTtOM6=;x[MM*oVQ[!HU<hrEC=)Z' );
define( 'NONCE_SALT',       'njT:Nn}hN4[z*Ka6Jp~#<Sr9?+ZTniD`hjcVjRF+T#q@Xoc{}fw|ek;Zbz>R_&`,' );

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
