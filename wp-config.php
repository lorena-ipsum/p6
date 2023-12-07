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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'Planty' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         '&e_= n.B%#I[#Cy%s>~-qpo`F[LYFG,^=8&|bsrx5ieffPSOCk)`CBCGu{^HW{S,' );
define( 'SECURE_AUTH_KEY',  'fl!&)RD}IrnS83[caO]e DC#HMx~.gSFo)5]MM%NG$hk4T~rN ine@BzQ.1~;S}Q' );
define( 'LOGGED_IN_KEY',    'b6dM^t$1Ko*A::I1=kW@,,1!=6]fLWihJ?g53P+TPsXaL*&pgcNsI$X2b.|ZFHoG' );
define( 'NONCE_KEY',        'wl=T)]J~4YxuTB%VD}]Ju<7(KJQgodjj-EU@[_LgbJ1>)n{$dve5KGOIaM|)fdMI' );
define( 'AUTH_SALT',        'gAE{^[-k+>:l55wXW.6%Hj[jk9nS/<,~r8m{>}D`b1@-R@aix(xP_7Gx,!k$=xEB' );
define( 'SECURE_AUTH_SALT', '>8+L  hTl.ofnuaxo#Xg/x0T/w?EbUXV/dNvP}4^|~&aIt/ZGZ8 h8AD|b5q`#8V' );
define( 'LOGGED_IN_SALT',   '3yLFFsYA#&)X:T<nKHt=fyd}gZkjPnmF[ZHoAlwADHbmvgJE zIVqN!cbujTn`??' );
define( 'NONCE_SALT',       'UA1}Ajp=Bc3go$_]%*O:eYOgV-K.$$_GP4*H>eA[?IYvXl!j,h#Dc6p>S{,u&?zD' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', true );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
