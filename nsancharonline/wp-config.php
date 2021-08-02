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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'nsancharonline' );

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
define( 'AUTH_KEY',         ']U#[}ePem.67)kP2b8+zpefPf5(LS) xWX}x]+yZU9T)%nT-V2eb-vgE%&qJv++J' );
define( 'SECURE_AUTH_KEY',  '.sBF<%Ey!nwd?xoT+C)hAo1 *yra:EL2oW`G]?8UB,3Uu5o!k?#SI$;fPO.*el:l' );
define( 'LOGGED_IN_KEY',    'di?&8|1VCcwCgg7LLoN/$n&(v0)QC@V8lLwTe +_eIjILZy)pig@gp_h0$>V*/*{' );
define( 'NONCE_KEY',        '*~QgHeze#9?v=H5D6Mri#q}<&NyT**0?Sof~[q61GK9n/P4G}5=nUXAtjSc]X&G2' );
define( 'AUTH_SALT',        'j]Vra*!!H%*OWI+JcydiE@*EC7:H/P%M ;4BMr5y`PDp@LM{N?*8zOq4>6G+CsWC' );
define( 'SECURE_AUTH_SALT', '$2fZy=Lkc6-Q}>7&ykhO6mi-a+S5r5&<}mD#00j)[&9t2r*s1zh[2U@<guPdIoLe' );
define( 'LOGGED_IN_SALT',   'm9@na_ujm]Y>ofc^-CxtLp}]PYS!(k7nZY5Iu9=&6;!^258q)J>gw6!6=X@g*kM1' );
define( 'NONCE_SALT',       'cR:GBb6T)|7NhZh;@6=p|^W2.Wes=)x5[m;$JuGU@Ces/G+yA.Yg-n]._rN]i4#?' );

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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
