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
define( 'DB_NAME', 'f_db' );

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
define( 'AUTH_KEY',         '{N4%nzREo!9:>jaEa;xf@6hC`s7GM#Dnq!{rc/.=cV}UA*)s[ENX!$IPKBiz&:E6' );
define( 'SECURE_AUTH_KEY',  '$sY8j<cv7TUpOsbx8I(B%OB!vQ-+HMtx8x[QS0.|x7$?f@xHoAHdW[%jIys3*LlX' );
define( 'LOGGED_IN_KEY',    '+M%f+/E|,=aG{=&bV3PtO8?Vh:wQ:?nC-@7BYvA[Hwt^h^IR%K8fi*[Z>zfk=sJg' );
define( 'NONCE_KEY',        '7ZJV*Sc!2+G`=/W}).oN!!8H=2]0PhT*i}c*3Cf<<sotv4paI50-v<10g~i[nj1{' );
define( 'AUTH_SALT',        '*LSQ&KS)oN93y3$Ei*2c=9r)Nc9+3X_aRR.ak^tTf9>;~h,WsiCQud-UgT:ZK }M' );
define( 'SECURE_AUTH_SALT', '=QGXM4jb~EjJl{jbs}1Iycm5C?4LT:/~[MGDi/F3dxN[4  &y9hxo7TeJ_/{eJ4T' );
define( 'LOGGED_IN_SALT',   'C-GE2Gh< `]he]8.ZxXcr?e]F8<[$m-P_y6ufzVkM^(nmLshHVOA@cwzGKjr$c`N' );
define( 'NONCE_SALT',       'V|0P`+x4]u!CKyVhw?]4/gf;64L9;%7)@2A/F&x[DKw]HD0]m|{7a6b@;?IZIaaj' );

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

