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
define( 'DB_NAME', 'activity_ecomm' );

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
define( 'AUTH_KEY',         'hwg)xsdG/?E0=9UjDYWmhE,L0~}1k>#CkK5cA?JzhAf_ 3Wx^P#sUW)P TcSCN)k' );
define( 'SECURE_AUTH_KEY',  '8*AXL-KA)V}Jucu/.Py1*XU>:yu/4<#JL?<0,X.{um^}^9bYa3MJLX;;9jYeB;%v' );
define( 'LOGGED_IN_KEY',    't~`h0/RDk=>j|$*0c}MH4UW&7Kg%.H+*w.T!$mnH5Q|lm1zF<;VbQI+6)W7piNe!' );
define( 'NONCE_KEY',        'Vq5H$Do<OuZ7X^$;;>WtMg-m(+9#I]C!G[.MY3#[K[]r<w[!p>a-.:lRh{$k-n1^' );
define( 'AUTH_SALT',        'IVx@0~?cfF@$ZM~vD,roDOf|yIp&S18=cDCZE{I%PG>*_v9[yvMtTWtl]h|H>,MT' );
define( 'SECURE_AUTH_SALT', ')53KQ#F5sj<C-a/|~0=^3)i8v4,HC-`8bLSc5|+>aGC?5x9<f}!NH#aq*GuyCAa?' );
define( 'LOGGED_IN_SALT',   'i^gl{|ayE==^)R&0Ux:m~h!Z19L[4/&5;s))b;zi*&:TYMT_ZtigpH)iz+o<Ap.)' );
define( 'NONCE_SALT',       'Vz=1@!&cVC3J~DM_fJNxxXZiN_!a:,RC EqjHHc<JDJ;CIw(VGca@^JjlCJ7E`cV' );

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
