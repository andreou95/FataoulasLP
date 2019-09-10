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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'fataoulas_db' );

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
define( 'AUTH_KEY',         'lVN_8&HO;RgGSX8JHPT`Hq(2Ru/&5nYx!=4 !2D b%#R[aF&+;(U.^@#0?6^&^up' );
define( 'SECURE_AUTH_KEY',  '{V]c8oL_FgLWpdCRMj[T8)OEM,t_lKy8+T1*Sijz8GLzGX%:HnTt&x$<(f_u]5YF' );
define( 'LOGGED_IN_KEY',    'i11G^aR|{u;!/yG|SjOD6*&/K#kA@2#(60x7Z*^=wX)a}+{ImE&}!Vh-(xazs5K,' );
define( 'NONCE_KEY',        '@fm=lW4rzjem.kx0nO6a;AfhHmg`Sq|W!W<.iw!cc2}deG?hr+`})8!Hw,PkhZOV' );
define( 'AUTH_SALT',        '/@^.akiHx,?eFzjh{ul/&YVtt16U$Wyf1D}}r$JGX,{i0iukh2?jmC[wp<%r/tzo' );
define( 'SECURE_AUTH_SALT', '?dgbb:u*+aH(vW$pVAdv15Mp)+_N`5C0mrlavr]>a/3*|w!Q^ %`>wp;d:]0X;B>' );
define( 'LOGGED_IN_SALT',   'zSc+[#.Y}8=MLs:G9vU|:$,)+p=Xb4N=;z!!n^cO.P,%^,Pju`3]U/t^;v`B.L.m' );
define( 'NONCE_SALT',       'RZ)WMA|L_6YJ(RO.J*|pIjCabnR(NsgM$oW>~`C..AJG03~p]5R+YLwX8q{u0v]}' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
