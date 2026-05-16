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
define( 'DB_NAME', 'phamminhtuan' );

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
define( 'AUTH_KEY',         ')fAciK&BQq8T=?r)>N84q}W4z/=QDgk,Q&OSp<jek`dN_6aARhu?bwi!O1hOQGQr' );
define( 'SECURE_AUTH_KEY',  ',/,Q/`Xs?O}#U$L`,EUl~iPNv[UmPb06[K>!UR9VZw+uDz)&45sW%w(L3ww3$ay&' );
define( 'LOGGED_IN_KEY',    '+4t/Tz~MIkQw~,i0|rO%QKlmoQ-?`(jGRoD&Kc5+Cty8-`tlhGg(&|_=fK+M_@4a' );
define( 'NONCE_KEY',        'ZUkYJ!i!&<bK0QxWqu&VGBvWukI=EH(@Fd8On!LOT~.~vRaS~1o>S.:Q:Swd=RA ' );
define( 'AUTH_SALT',        'mX,rn12N%PVt|CJYd[F25%)H/T S5{Ch;->EB@gYrO!XQJCD*aoj:tebiy-Ffl_k' );
define( 'SECURE_AUTH_SALT', 'w y]X>[&6(=!8KFv<n]03ec@p%Q #--ANX[9C6w_{!B:eV$3y*>sGjms?7$THAfR' );
define( 'LOGGED_IN_SALT',   '{%.k7j3UXt8>pk+<$k~Ol/&|e]yqh<(lyu_ [4 bN}L]em/A/&P8X*]Z]igG9##]' );
define( 'NONCE_SALT',       'U/!IO!L6gX+ x47)%Q<+)Mc38xyI2$dzp<5@F5mFVGcbqL*<d5_Za)6gSHTC0fJf' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
