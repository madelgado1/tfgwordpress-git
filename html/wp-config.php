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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'WP_CACHE', true ); // By Speed Optimizer by SiteGround
define( 'DB_NAME', 'qajr101' );

/** Database username */
define( 'DB_USER', 'qaju334' );

/** Database password */
define( 'DB_PASSWORD', 'Bd45892402l' );

/** Database hostname */
define( 'DB_HOST', 'qajr101.laguntel.com' );

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
define( 'AUTH_KEY',         'RMY} |uaXhmrby&DR +Uwj[t3kM-1ABjlVbTnD>S.^E&[u!@`rB_W&;bAUz<^+XV' );
define( 'SECURE_AUTH_KEY',  'nDai]S+r&,Fk}5IOurZ-h?P]Wa}-,+T>{@_!Bk~Ade`<sx<3W~@.m>/3+#*<#|u!' );
define( 'LOGGED_IN_KEY',    'Si)Uu-kba*t}YoNFLbbfcS}Nmx#Z-1 q7qGn[YPnyD4x0hP*_+xj#7{pvcryS<Da' );
define( 'NONCE_KEY',        'bg*evX<(6Di`G_$tE54h>c8k&5zw6.Q2>Ew0%?R){R {;mjO&#a pDj]!%-uv(U:' );
define( 'AUTH_SALT',        'N%H?KNbO`KuPQ{OH1K][1.bfzWdT%iEXX3#}&+[-c;f&7{NkpI$38F(LC,-@pj92' );
define( 'SECURE_AUTH_SALT', 'JNe]!)]Q=@Vt%](m.HW}@P}=j$g0IX+EI< J#SHJn0s9IH=92!F>^f!1?+kFzMce' );
define( 'LOGGED_IN_SALT',   'm;>G-f<c]~dk}E!<PU0|XRh gQX$]iC17b$KpMj(3y`e*Mqdz!=h#|hZ4u5agd$9' );
define( 'NONCE_SALT',       'Sd6~NcE@{GF2`~_GnYn];JWnX?ePRE}P&>dJ!kl6bO*zNuYm/Mb-;594#J2D,W;W' );

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
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
