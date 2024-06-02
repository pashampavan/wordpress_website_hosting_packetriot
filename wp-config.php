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
define( 'DB_NAME', 'wordpressdb' );

/** Database username */
define( 'DB_USER', 'pasham' );

/** Database password */
define( 'DB_PASSWORD', 'Pa@02' );

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
define( 'AUTH_KEY',         '#uGSuzaerEv+BabUaqC7*@{@5,9im0U{Dfz8=+0kyqfC!@9;4?;.p>9prh!IJ:sw' );
define( 'SECURE_AUTH_KEY',  '.B,<339wtC%~(Epwt)r,aYRQP}{<$v_h*Z;<!0T;WB{OT.f6Bv:I/`_0WOFC<[Up' );
define( 'LOGGED_IN_KEY',    '6]~h;`s^Y7]2h<SDCUQ#gaGC&jA.lw/(2J#*ecT/4nz1kGvF=<^Aud?3ZL]XVX:+' );
define( 'NONCE_KEY',        ';5WIqj& z2P?X*L#>7w,-s:?v)g 5 w`t=G6sZzci=WD39}8x`!4CYW40KC20sXj' );
define( 'AUTH_SALT',        'GJI1+7#q8Rgukm58bwA-7(a)m8-[or6q[wKRdsBa*($yw]uczulLcbLSHB2VB:J2' );
define( 'SECURE_AUTH_SALT', '//mo^jjAiab <Z]<S,8k2` .=$bA_s^12g*@X)]dx][(l6uev;{!KVK)S8z7G3Ph' );
define( 'LOGGED_IN_SALT',   '!fsgoYxNZJ Lw5PPH8iJ+t EqLB6Zr!.~2 |`V].]e3O`T/,2%NJ{z.B-UKTF+?p' );
define( 'NONCE_SALT',       '?e yWHtvX(-kNKWQ0gUS%x7?~tbUB v=&G}KjEtf,s?H/)bR4P&oUk>9EN!Rs}G}' );

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
