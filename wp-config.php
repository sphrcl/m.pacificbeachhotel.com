<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

 if ( file_exists( dirname( __FILE__ ) . '/local-config.php' ) ) {
    include( dirname( __FILE__ ) . '/local-config.php' );
}
else {

	// ** MySQL settings - You can get this info from your web host ** //
	/** The name of the database for WordPress */
	define('DB_NAME', '');

	/** MySQL database username */
	define('DB_USER', '');

	/** MySQL database password */
	define('DB_PASSWORD', '');

	/** MySQL hostname */
	define('DB_HOST', '');

	/** Database Charset to use in creating database tables. */
	define('DB_CHARSET', 'utf8');

	/** The Database Collate type. Don't change this if in doubt. */
	define('DB_COLLATE', '');

	// define('WP_HOME','http://m.pacificbeachhotel.com.php54-4.ord1-1.websitetestlink.com');
	// define('WP_SITEURL','http://m.pacificbeachhotel.com.php54-4.ord1-1.websitetestlink.com');

}

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '&jC!Jza18@Sl2iMO- `tQ=bd(J8|u.Sr dC2. l,hI)+.7R?+},DMCC`.2Gcg<F.');
define('SECURE_AUTH_KEY',  'lPo_mKo4{QC|Npxr,l,6jYO%RZ@n_SF#V9#+Wt`<AH^$rw-Rvw+~alh{L@ d)25H');
define('LOGGED_IN_KEY',    'AsBi>|EW w?4`r^H.E<w{wS3aJ{N$`#$j(H(<,j)[be&U=TXqcc$V4+Kx7GjUs~h');
define('NONCE_KEY',        ',-D).x;%jMiuo-8`@k652d1vJAq:SmzrnSj+m:I(R(K}-=+^(F>/;S$KmLN/|>9+');
define('AUTH_SALT',        ';$m+{Nqy`-wc+l)iUodWxe:^/{}2@3N;|v*[cXD7K~6c1J$ld]Q.u(o?f1-U}OIH');
define('SECURE_AUTH_SALT', '5eRPU+DOT!o{/++H+5A_MoPUI=<,zv%[P|2~KUFB+HH=x%@|42Km@8MpTuqP.pVI');
define('LOGGED_IN_SALT',   'i.^B0NE&)ULG])HAIO)(>!uX$CJ(r&^Q,tEli}^Ze6QB^`i>172@t[[+hy5-|1)-');
define('NONCE_SALT',       '|g.iIl%sY#E#r5 {:!0VK|w Z2#w4!Lw&b.-RAi@zzKY+Lzva{LuAdhqa,rJJ|Bg');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
