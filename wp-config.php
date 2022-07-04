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
define( 'DB_NAME', 'it_runwp' );

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
define( 'AUTH_KEY',         'Zq5<|Jt-/mPqr^] 0T49ag}{KKYh!DEq&%:vXQvi*AcV/$.vQW%kk8H_AnW~tMYr' );
define( 'SECURE_AUTH_KEY',  '}._;+Xc9.!P71:R=:B 4d5o~*7eLFX]ZiN9%2Y$ V9I>Lqu)UsiSArF8t5zPa85^' );
define( 'LOGGED_IN_KEY',    'lX DtUjDE2~S^z}pvB0 hGO9b4_TTA1(V>*=MgsJ?]r3+vEUzB==[tIi$c3p[VEK' );
define( 'NONCE_KEY',        'uq9)p<w+gxh<*&%#I2R9t%.qxYg4bufv[9#3/[6TtWN;oJtLCd<2|7^:D;=%ifrp' );
define( 'AUTH_SALT',        'c7!>X>JgvYIlq_Ty5X]x6o`P@GVb<{)q^`lg5(:#^O|WUp<~5$ t9rp:??;e0sV8' );
define( 'SECURE_AUTH_SALT', '=:M)h[UkQ^p_JsJaDJuKp[I=-p7M|9oNwavAjfJf!iElpY`zRf?Ok8glh.5;=U]z' );
define( 'LOGGED_IN_SALT',   'ivjDaMh[Kg;y)Mg.rOu!uo]))6*I$i3|G`VVOTEPbq;1.T#(dA9[w^0~7YQ5QfI{' );
define( 'NONCE_SALT',       'qBTLU=KO0S?&nVEMtJ4xqlQIrY/=<QBnJ+0IUM*@P9&]],yc=;e=PXu5duJ{Em4a' );

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
