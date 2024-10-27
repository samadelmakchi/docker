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

 * * MySQL settings

 * * Secret keys

 * * Database table prefix

 * * ABSPATH

 *

 * @link https://wordpress.org/support/article/editing-wp-config-php/

 *

 * @package WordPress

 */


// ** MySQL settings - You can get this info from your web host ** //

/** The name of the database for WordPress */

define( 'DB_NAME', "simnad" );


/** MySQL database username */

define( 'DB_USER', "root" );


/** MySQL database password */

define( 'DB_PASSWORD', "6165" );


/** MySQL hostname */

define( 'DB_HOST', "db" );


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

define( 'AUTH_KEY',         'L5mIG|x,TpEHUPdo9%,A^><J)p*i4>clhdzYFg[sU>Q@${Ejyv2.QV4c/q5t1Wc7' );

define( 'SECURE_AUTH_KEY',  '$Y[p[N@T;h>d|&=]<Yt;PN&1`PTjNk L?>(,xD>X![~I5@w>n2eBjcMdQsAM+P7Q' );

define( 'LOGGED_IN_KEY',    'HGObTH,7|&5!q5&@>Jw/&;SL;mJAm]BP?Ap-JM(^.ehBN@RERJ@C4Xo-sA4reu:y' );

define( 'NONCE_KEY',        '/A` 62vjmAZ,PDp$mu9ob5by50)R%k=oeNDG(RR?]g>Q%lGk(.k/KsJsQ5]!=:B2' );

define( 'AUTH_SALT',        ':EEJ(.hJ4Drfix<JCu|KIx.EHgz-t0TLKIWzfoj;v_[w#h]PbE5V0 6F=ZC$#[s/' );

define( 'SECURE_AUTH_SALT', '_b#`+?7}eXO2}0fgd0=<00RrJtpAOl2@GpM$+/W0C#@mTZ),){Y! qx^;xILW%%j' );

define( 'LOGGED_IN_SALT',   '`2U+^:JWAYyz#ICKGPafSj_w~U0SY7MW0D3_%8:U!zcWGy20{X =#!)8b%6-Gk(t' );

define( 'NONCE_SALT',       '$?k93wZo}b9c2+EOc7Bee=p?QyVE*fCG(e7~b-]vt&/h~fsmp:ED2+Xz145ee=,_' );


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

/* define ( 'FS_METHOD', 'direct'); */


/* Add any custom values between this line and the "stop editing" line. */




define( 'WP_CONTENT_URL', 'http://127.0.0.1:8081/wp-content' );
define('WP_HOME','http://127.0.0.1:8081/');
define('WP_SITEURL','http://127.0.0.1:8081/');
define( 'WP_CACHE', false );
define('FORCE_SSL_ADMIN', false);



/* That's all, stop editing! Happy publishing. */


/** Absolute path to the WordPress directory. */

if ( ! defined( 'ABSPATH' ) ) {

	define( 'ABSPATH', __DIR__ . '/' );

}


/** Sets up WordPress vars and included files. */

require_once ABSPATH . 'wp-settings.php';

