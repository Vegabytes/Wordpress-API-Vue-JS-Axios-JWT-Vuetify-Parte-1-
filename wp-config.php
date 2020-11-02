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

define('JWT_AUTH_SECRET_KEY', 'secreto');
define('JWT_AUTH_CORS_ENABLE', true);

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress_api' );

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
define( 'AUTH_KEY',         'sG9mecN:8K/A]OLV]AOt]PWt@}F={:^ORwuD:&Uz aB>$%!zmWolSil:YDU|3%?B' );
define( 'SECURE_AUTH_KEY',  '<5 e=-{;)x95Wi5;z|ZdEeHKh.bt5yt*QHxkci3{N4M@QTa2m$Bx3nzMH6oMpR$Z' );
define( 'LOGGED_IN_KEY',    'X!|r(hv*gn[:g%8BEyfWWN{,r)cvse<%.S@z;J}Z}Gq.^70Df^%zvLS)t^g?:F/;' );
define( 'NONCE_KEY',        '.Yiv?u&HFp7yJr_tM-M2!({ugKc#-s(wm;t_5g/QWqHzC>tx,W_)J=WblbVRkR}`' );
define( 'AUTH_SALT',        '} X_f},c^FmRM{DTOr+vFb/5vy6K)QQ?DwNrNB$L7o.~vuq$v_swg/tbYx0pD1&?' );
define( 'SECURE_AUTH_SALT', 'PR_geu7;gpd}#q6 <]5xG$yu- H)K45q#t1:.NVrdJwDqE*yZ`>^sK1W1[%J96A~' );
define( 'LOGGED_IN_SALT',   '+o.v}3^R9T3jm;%YY*F`2pX/7}4<5?Btvz=yz` )[s|Ww*qS>4m~vuj}ID,sj]B+' );
define( 'NONCE_SALT',       '?MN`FZ]bY5[{i3(HT2_pu#8}SLg7_[#NjIk+((0<z-[qmw{1ONGos0]Tq#[ctMsW' );

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

define('FTP_HOST', 'localhost');
define('FTP_USER', 'daemon');
define('FTP_PASS', 'xampp');


