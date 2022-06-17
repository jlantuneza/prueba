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
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wp' );

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
define( 'AUTH_KEY',         'nb5T4LfB)9Zl]q_IPqOHYIu0&mIAPM=OH%ors]P{3Z#U0#3g&4K6_i+93LTCA?g>' );
define( 'SECURE_AUTH_KEY',  ':( Siv={NToweqc(D1x<N7b5 fbJB#Tox@v&Zw.zc0N2?FV!Vk_Q:&gOaJ?o(!hc' );
define( 'LOGGED_IN_KEY',    'vT3wYLe_3$B,6dkqxYB;r6$v~cJH@sTYM1,gW5?-@y6GJNM`@U}i8>NmTTk07R|D' );
define( 'NONCE_KEY',        '!;O[Vl{Ob.vY%&@qisJz-Ni*cy7wRXBXClbTY)GR.)jtRk4{$=/4E<9i1DA*9]J ' );
define( 'AUTH_SALT',        'e>$F}:#<<pb8)G8>2Dz{%#z+Ozi9cnB=F;q111qNuLzlh0(fM[lnA&|zkcM%wWkX' );
define( 'SECURE_AUTH_SALT', '=#p`lp1aK^.J!H-jJYWE#_LYlY@+%P|p|e_* Uj|_qp!:d.CL>IMG*zKZXX[mx&0' );
define( 'LOGGED_IN_SALT',   '=!?xzC4;I`T01v-jJ&[An1gS98yO2:.#eaIz-^k(Ot1[7VoI;,iDS+:p2P/Smch?' );
define( 'NONCE_SALT',       ')6KF`yY)}v(8gn{kZ(le{l<WY`>S$h?*-D zz51Rc9aUL4[IL]zay<jCV^SqK{X,' );

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



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
