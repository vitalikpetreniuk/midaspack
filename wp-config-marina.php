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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          'Y[J=q tYvT!M*]-(SB1ev61iSDuBu&T8nD*kEx9/;p?Rf_.{a#wRpq?60bkqm?3-' );
define( 'SECURE_AUTH_KEY',   '+1E}Fz3?kuTgSSI8@p*L0nihuA&l|R_9y]w.K.I`y$uzTE+#=]`=n9HnV2HkJ(f|' );
define( 'LOGGED_IN_KEY',     'WnGh|T&nAGFyL8<IaTI/eHIw8`:#Yi:#c?~@R64BwE&9Gm$fo<laWx/vXg_1<^#}' );
define( 'NONCE_KEY',         'krFd!Enu6M,fU-*F7Z ?L((b%1?q9Dy5jl0_,qj-,%;T89}w,_YceM$xyT_]1EhV' );
define( 'AUTH_SALT',         'd<YHbCR$fzIdlS3,30I=#Qas+C03ro*vB47IX(SX>/=Cv/1LtkpoT)ql_X1XMi:S' );
define( 'SECURE_AUTH_SALT',  's-a*rS$%oK Y)x~-:WeYM`OEc.VD8[AzUB_L;eJ8M_JcI66KtS>?St;?Nzst?6e4' );
define( 'LOGGED_IN_SALT',    '4:<.#~4rc0/lDfHgo|:BPKJ~^ r ;y@|%bi<gVigRh.##t`/|>!_U]v]%_Y=s_AE' );
define( 'NONCE_SALT',        'Zga@*A6;-=7w+g.fAydy^r La5TiW-_eg!he`C;1C<wb.3JMEPkPmxMHg8vOE(3G' );
define( 'WP_CACHE_KEY_SALT', '`ZW,AH8l26eRcc`x|}R&v:*fCrPaKus%A,G6dw6kwCf%U;/JpkIp)5q^<XO,IDnb' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
