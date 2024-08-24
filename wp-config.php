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
define( 'DB_NAME', 'zamzam' );

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
define( 'AUTH_KEY',         'BkSR$3O1<#7>,{#)36=GQg3}*=6&;Pyw:E@R9<M)p-DUq5P?%<Uh+hW40^e*w}q]' );
define( 'SECURE_AUTH_KEY',  'h$D3LWQYnI<3C!]g:xT>ew4Tpy,`fq0UbrF/i5T:K<vc o/4}*?Uv}@swa&y(7JS' );
define( 'LOGGED_IN_KEY',    'ta9U%:>NTv/JIZ*ZGD;?+K&iJk1Q3y[ktC9oChysJeJ{5=!U4Z;u$]|6=w]$d~o]' );
define( 'NONCE_KEY',        '<|;5 a_?xU5fs)y84hvNzCsKG6*{C`+X?k[jaqlw `:#g!?!JBmhr>5]/R3)w|@E' );
define( 'AUTH_SALT',        'Y_7 BTqgfZ*u7+0jq?jun#~+]@5%XJ&Hkri`/5-zT>h,<tC7,^YPCPQ]y&Lq?q#j' );
define( 'SECURE_AUTH_SALT', '*$l4Ko7ISKy)@Tr*@6-z])jebiDq1pal/KX;CtN:kWf!$%NJI}CUtmc4eY=.?ZQz' );
define( 'LOGGED_IN_SALT',   '!e>XgMQ)r8u.rV5F8^Qu41Q]B38DTyo|BL/e)|q|1DEHk^kgxOZMqh9pf3cC|Z:@' );
define( 'NONCE_SALT',       ']jdDDxj:?$]!]FF>!mMk*j5MbT?K=!.uoCEG1U.3/{,S7Cu$r#k>$N}M^ag=!Aa4' );

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
