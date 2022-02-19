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
define( 'DB_NAME', 'university' );

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
define( 'AUTH_KEY',         'b1Y904ZrIx9y*3lW9&L>~Gp$chIdbi VkBxH}WX`Rd!E3Wy0A[>M_~CYgSx18TG#' );
define( 'SECURE_AUTH_KEY',  'IbP t&m02AF:zeE/>K[vosIS.H<Dr+TlJ3mn&bJfT[_kWa*#76.K>C*nYi1Y/6U2' );
define( 'LOGGED_IN_KEY',    'Juc| AMU:2ArpZ~=<czHPY5f`SIHQI<1JI-)9IOx]aAo}vZQ=-(I&]^-Xk]NPDp]' );
define( 'NONCE_KEY',        '%OGYnu.vU}!]2GdT=3hqF.&w39>]F=IWn{Q+o7~_N+-%xH-s+d:p7xH(WTE*VO(e' );
define( 'AUTH_SALT',        'I<7bp{$4slXn9o<x aYEZlTpZ7=TRm2~.2l?gWlyNW` X-2Gu4S]FF!q0/HLo5h7' );
define( 'SECURE_AUTH_SALT', '+a;#:r]J<=Ce?geZp2L>rLW-K*8rUZz>{vt7A.l&^/dr?HI3~4y@<^&abC/!)HtK' );
define( 'LOGGED_IN_SALT',   'o_TH,.w.n<f [uA&r}gV5^|Wf5Pp5MdK7c<Gk6-Zaz5uR1R:q}78I 0#0+A(3tL/' );
define( 'NONCE_SALT',       '-$Mu.5cSft=9.jZ_9?xP._K`Hw`.0`/@&1/KG+mNAreonrOgBb!C|tVr223[zS,V' );

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
