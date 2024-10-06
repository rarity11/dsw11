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
define( 'DB_NAME', 'ejemploweb' );

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
define( 'AUTH_KEY',         '% LSNcW8%9mydGTjojYV(/kS8]W7eV&p<eEqw=a,vDrTp>/bUH$,JMzk ZjBI.V$' );
define( 'SECURE_AUTH_KEY',  'pm7Ns)VvO<Qj93&uZd7-zhA}l$W[vFwh/rS}etIiZ!$#%,HyHN/mJj{u#YHCh%A}' );
define( 'LOGGED_IN_KEY',    'Q w=U$;V)a|zG,R-EG*PXZ~3i]SH?qZ4MX2 gR9;k`nC*5K7@Cme`qAl+x@9iYkD' );
define( 'NONCE_KEY',        '4~N_0VvF$a$MG&.VQ(z@6aC<L`Oj=41`:q|fv$0C$h)2S|){!BSxbM>u,-X|Jiuy' );
define( 'AUTH_SALT',        '%4F/vhOInKRVVvc!,wRWf_rC/KH^%K%tJu>#,oEE,s{sRdVdu1{RkKA*^9}V~/.U' );
define( 'SECURE_AUTH_SALT', '~#-(M${l8X#5qoz7|A[6w_x?&Jz;Zf:Kx[8*G1c-8G1%%mF%dUjm4c zo?~r~[^-' );
define( 'LOGGED_IN_SALT',   'B*~w/&VlMD,cocN-V:??z.U1o0H-eJMZ&`II+Os*QUYa)toJbzy!O_S~H[hXqA>T' );
define( 'NONCE_SALT',       't;J> nX:!x]##WFj.PI_BjlHDftP%GKDd6Y{>(Cs[x9-7Xz~Afy wv&0x(1}|B8E' );

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
