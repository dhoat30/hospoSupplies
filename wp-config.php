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
define( 'DB_NAME', 'hospoSupplies' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'F!r>Q-9G5]JR^8sL<_-^CFQm~9<3x+_/OJsI|?*v>0@QBv],@v&&sg5[>war:Gbt' );
define( 'SECURE_AUTH_KEY',  'VV&#0S<JP#hx/|$HOo{zOZZ~1[#@tf[]sO~mmI,|hE5mX>4%[-h5{PC7lpek.@Zy' );
define( 'LOGGED_IN_KEY',    'xD5a@m$bkRUeQ(:`Zyor9q)776-S5+6KDOP$x)~2V$o$2Zft.BHlrEctLAx@o|eD' );
define( 'NONCE_KEY',        'XyQGv01J7i(EtZa@2RUPrHv.% 0L$K[l*|/sT]=!G!W9_{=7c.Q=N{Kp?D9}:l55' );
define( 'AUTH_SALT',        '@D^]7bW+BgDBoX?.v82N_<P,[.(Ba)u~OwXpdr}XyaDl{mZb0<O6V=vE%IgauJJm' );
define( 'SECURE_AUTH_SALT', 'B]<~jhf[U;bqXAp<S>=ez>J3|-TGr$Kvko%k%`R%`sY4GsW,0Y;M_EsvmSS_Z3La' );
define( 'LOGGED_IN_SALT',   'wp%-&SnZYrhw!*wD*lqr`@4W.yJ]X7&aNpLpp7hN+]R4A|jKn_%A<Oi=lYNOXc(b' );
define( 'NONCE_SALT',       'MLOW7!wjtN,h$OvCNuKBkvC}fH29jl.$qfi6;i<l|>@XU[-t%?(1Q#gva%M<W@W?' );

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
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
