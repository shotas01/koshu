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
define( 'AUTH_KEY',          'pQAmq/D{k21WfDdd=8LU1D2K#sqZqY`Z(xw13KYABc?6%O=/iiYOt_aPq>@#Z5.$' );
define( 'SECURE_AUTH_KEY',   'J@>Y/&d|HLyX}raou9)=ItGFJ4nF3^&7WU+euBHMoFbi *&8KYyhcM*4`8;Hb!@h' );
define( 'LOGGED_IN_KEY',     '#@)#eL4<SBI7  9:6Gv7$)*,H#pOx+0w_uUY#*4jy::U2>)3lpvf=SVR.b5b_..5' );
define( 'NONCE_KEY',         'm]=f >4RC24`cpAU%asg04z>x89~Quk`n*J<c;Y9G<<4v*}P&IijZRs~A7yU`{]m' );
define( 'AUTH_SALT',         '.P:{d+:Ljyco#U?9?KTG~_t-E*?zjkKT1fkMbxhfU;w:l{>KYgBMiVdK s^Q`mFr' );
define( 'SECURE_AUTH_SALT',  'f1_C{wRjgl-)+HGzvofiYX&MzQiF5 Y$:#I2*oe};B oe2f Uc$C/V69NH;Vv>Zm' );
define( 'LOGGED_IN_SALT',    '[40/`U*!xLHY+*9a9eTaF|-D(fs|u7~eGZlc{}k_Pv&*OKzXJ`uMbn)ia_F*mGP(' );
define( 'NONCE_SALT',        'U s!y$pU!xoOLI?HK}ga>K&dR,c!$UQ<*YreNj2Qwe8;LoNR,F{${MIlv`d(MaI(' );
define( 'WP_CACHE_KEY_SALT', 'oIg)i}JaZ3|O9X:dd]g2D-i2^;JxETVKIibN<nR{?asxE.4/@1O)WfPtb&U;f_:x' );


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
