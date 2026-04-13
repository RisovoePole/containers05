<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'wordpress' );

/** Database password */
define( 'DB_PASSWORD', 'wordpress' );

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
define( 'AUTH_KEY',         '[7d`bj}iNS; H|][-**}f.4hJNJJho%q3q6|`  V,gdW88qdT%OFhWKl~Bk_(=g-' );
define( 'SECURE_AUTH_KEY',  '(&FJNIezNa2p4(T@YydYB8u3o%&z%~TC2zgE{(,XLpc,Z_pI#hvCJ+lZU:GL/zm&' );
define( 'LOGGED_IN_KEY',    'rxL6IN;8c;>-#<ChLmTF,^D5x<r`@)zax_7to<&mj3MoER]#glT]Niz8/W`hZWvF' );
define( 'NONCE_KEY',        'Mz@oj5{L[N}AoYb*2m&Fzd>HWPPx k&/g[llS/^yq9aNL>WvSK[|tj1ZSZoxvSsE' );
define( 'AUTH_SALT',        'dKUsKnD<9p7!;^p.i:^@HKtm-_S,81[5@6Eu0JGnYC!uV*%x-NVSyi}#X27|?zc=' );
define( 'SECURE_AUTH_SALT', 'F)<Yj2]bE`M}2E/3Q6E|NEKHDAsD)SSeh{R [L^6Zmk~l,DZCM_/gBP+2.u?6v}S' );
define( 'LOGGED_IN_SALT',   'Ech !kW(@@SgC`pld]{^}S)hw|Nz<p^f{ZM5o_!S)==PQxd6LVpi>@/K/Uh@nF*g' );
define( 'NONCE_SALT',       '0}MLQQ%K^,K>Oop]g)[ev>?5#RfY_ e2ytw~*S~o40)E~=|JQ~u]@y}1.LPrGG`3' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
