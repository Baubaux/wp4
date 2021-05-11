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
define( 'DB_NAME', 'wp4' );

/** MySQL database username */
define( 'DB_USER', 'wp4' );

/** MySQL database password */
define( 'DB_PASSWORD', '123' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',          ');]?a|N+R;t<4(M&.04/%%@)e$qt36r-x6kmy=7goO[*KbD&{A[?)Cr;EaG5MCY?' );
define( 'SECURE_AUTH_KEY',   '9Q&wAI%p7te]v1~qL(i_KYcn4xstFI9FHjdEfkKOgE-#HGm~nbYlF.3LjVj&;9S{' );
define( 'LOGGED_IN_KEY',     '()87N8s:ijh6|g.StH)y7!1Yxd%NE]gUxUxcORhzOyazH, 7}#ZGr+0|uf&/d5~_' );
define( 'NONCE_KEY',         '$(i!-<@+MwbF[AL6t~R%|WD{ouMY2jm-:hjLw.8)K_!}3p*90-9ciC ,[a1lf25%' );
define( 'AUTH_SALT',         'XfF.|]gGhw^tiE2R`Nzcqg{WKFx={Cctw]sxIw(n):UL@P:43J<ku<WK4S!H`^>Q' );
define( 'SECURE_AUTH_SALT',  ']p89ia~F9c9^Q*L=,.u.TkEU2M.9gyPB#H1>r-LZ9QK(=-gI8!cy$HC{S1;PN]j,' );
define( 'LOGGED_IN_SALT',    'v`aTq)+goql;OQhZ-;ahdG:AdutvY<HrXIKX0DcC0q^XKsQ y{Xl?]!`$l_3=ya~' );
define( 'NONCE_SALT',        'v7;(va|IrfJ<$=9-EPa+?L&vK+pw}GPxwloik<KoPQVYA@&qIv9!}Z6fB-_9cuI]' );
define( 'WP_CACHE_KEY_SALT', '?P3Y/D7C}Q:5Ch+^;pI/x=KCuwF0+wilC0E,E#0E}F] |vs~qH~Q}gQ*wIyi)_>7' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

@ini_set( 'display_errors', 'On' );
define( 'WP_DISABLE_FATAL_ERROR_HANDLER', true );   // 5.2 and later
define( 'WP_DEBUG', true );
define( 'WP_DEBUG_DISPLAY', true );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
