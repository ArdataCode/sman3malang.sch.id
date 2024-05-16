<?php

//Begin Really Simple SSL session cookie settings
@ini_set('session.cookie_httponly', true);
@ini_set('session.cookie_secure', true);
@ini_set('session.use_only_cookies', true);
//END Really Simple SSL

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

 * @link https://wordpress.org/support/article/editing-wp-config-php/

 *

 * @package WordPress

 */


// ** Database settings - You can get this info from your web host ** //

/** The name of the database for WordPress */

define( 'DB_NAME', "websit19_sman3malang" );


/** Database username */

define( 'DB_USER', "websit19_msan3mLangg" );


/** Database password */

define( 'DB_PASSWORD', "Ardata2024!" );


/** Database hostname */

define( 'DB_HOST', "localhost" );


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

define( 'AUTH_KEY',         'pL:M-XN_QVOI!N)ZcGp-l%6M4FMx&;YVqi6v7-$</S/GM.Sr0yk)_*XOQ/~iN&y3' );

define( 'SECURE_AUTH_KEY',  'S4QdIH?$VRRT[feriJ&gF9#7|.)$3G~Mf8B->e}ZyUqzt[)8.=(@>?Wi>,ffuiQ_' );

define( 'LOGGED_IN_KEY',    'bZ]X(`gE<<8f(_5o~c||;!w5bY(N`,=Pm{uP{loF6hk1CM N+F?yo)<JZc)w-gZ(' );

define( 'NONCE_KEY',        'Ln!bF$t(kls>k@J46K<%qK@1uC4S)Fu)9+(Sp1Rg|)vct6O[.Y?l</BrdM{-kCCA' );

define( 'AUTH_SALT',        'H06MJMI^HR&z>t?&QuS9K1!(F[g`4Mb{s3;|5B=}R/npz*I[&DpAvVxw+8J#T,{a' );

define( 'SECURE_AUTH_SALT', ')y5|Z?bJQL[ {@@q9W1a&dAz_pw-E,+;El<v Z.NI0CQ DBL?tX9KQk=xabuta}i' );

define( 'LOGGED_IN_SALT',   'QZ5K}xKAYT{q`nC5@}`u;?483o?Lu3jl$TLz, O___xWZ.KAp[Bi 3^6A/;_PT_R' );

define( 'NONCE_SALT',       'OlIQ1bH^MU,6E@Ur{)PzPdsH#dl]d&j8T5w/!z5rp(j{qW0[&3qL>Z.[opu=7@HK' );


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

 * @link https://wordpress.org/support/article/debugging-in-wordpress/

 */

define( 'WP_DEBUG', false );


/* Add any custom values between this line and the "stop editing" line. */




#define( 'DUPLICATOR_AUTH_KEY', 'qvCLh`F_rM )@_-?r}elW<c.LS3}M)spibciSG,BjJ.i%dysb}~s{{xq#Nb}QHr9' );
#define( 'WP_PLUGIN_DIR', '/home/u1567848/public_html/sman3malang.sch.id/wp-content/plugins' );
#define( 'WPMU_PLUGIN_DIR', '/home/u1567848/public_html/sman3malang.sch.id/wp-content/mu-plugins' );
/* That's all, stop editing! Happy publishing. */


/** Absolute path to the WordPress directory. */

if ( ! defined( 'ABSPATH' ) ) {

	define( 'ABSPATH', dirname(__FILE__) . '/' );

}


/** Sets up WordPress vars and included files. */

require_once ABSPATH . 'wp-settings.php';

