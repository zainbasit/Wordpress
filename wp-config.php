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
define( 'DB_NAME', 'zain' );

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
define( 'AUTH_KEY',         '}ESV%cOwP=c2La^`b*3`b(,sbj.i_?vetf9n.%GG#`7Fv;urc.E7OzDCAFiZD^@6' );
define( 'SECURE_AUTH_KEY',  '%W-%~}7b>bUS:{dOi&||2UuRkqJUU,}+UN5R|yBI(f<kAWZ8|Yr<z6=Nx(/dN]1M' );
define( 'LOGGED_IN_KEY',    '0:$G{v?9SfEBh2;*iLXH~29~!hUc/[jJtqWK~YceN}@pc0|0NFme2=2S,Z6 h[2!' );
define( 'NONCE_KEY',        'JGz7#0a*|UFNDVXp2L^VpcH]S?_!z~41+]N_ 3~QO7Vy&RYYqkNY0i`a4>[yF`*6' );
define( 'AUTH_SALT',        '@8cF]_1L5n/.$XR`5uJ&pwL]ad~: =TzzQ%ISG@&X-|4a0t<-,_qXI+-#QVKW&!V' );
define( 'SECURE_AUTH_SALT', 'A}L9X0p1,^a8:Y;INQ)>KlcVd})_@(v7Fo1Lt3By.EXq)MrA9kchWL!IASs3VU)O' );
define( 'LOGGED_IN_SALT',   'b$O/.820OA)2FOKP7B4pTH6YVDI8dw~;>]`sVoA134)qq@BD?T.QS@~G_p{s:=&7' );
define( 'NONCE_SALT',       '-4AiA#weF>|Qu/LTf* >mWbC,y-?XPGmCbq?*4f{d24M2,f7aN9i[[Q2Lgev!ykt' );

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
