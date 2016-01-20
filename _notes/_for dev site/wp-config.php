<?php
//The entry below were created by iThemes Security to disable the file editor
define( 'DISALLOW_FILE_EDIT', true );

//Do not delete these. Doing so WILL break your site.
define( 'WP_CONTENT_URL', 'http://new-comm.sfwebfoundry.com/site-content' );
define( 'WP_CONTENT_DIR', '/nfs/c03/h08/mnt/170107/domains/new-comm.sfwebfoundry.com/html/site-content' );

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

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'db170107_new_comm_wp');

/** MySQL database username */
define('DB_USER', 'db170107');

/** MySQL database password */
define('DB_PASSWORD', 'Zachary1119!');

/** MySQL hostname */
define('DB_HOST', 'internal-db.s170107.gridserver.com');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '2VB_h!v%r/QL!7LqE;E,D6u8%-wM.Iw4N/4V}~lsULB4Vk(#9Sy7~o])F)APEWbv');
define('SECURE_AUTH_KEY',  'Ux-t/fTJZ-=;Il.Kkd|aAJK!JHV=&>]uXx7ILRGG%L95S?[Zf,xS[APoRCp.P$B?');
define('LOGGED_IN_KEY',    'DHV#fU@CYM-{jp1&en5=q4!xiXl>[$mNb[@9-Fi(I&aLs=P0s~|+$}*Gu>`|TmPe');
define('NONCE_KEY',        '=m|=H-@&enrY54SnT;xuW|]*h~uHi]-s!lTe&)9PvAFF59-fq>!h!,(Vt?ZV-d>I');
define('AUTH_SALT',        '9_h8K7KJ}Z5H2|r*EK]v#No9_qm[^Fx#L%+~ :q}t+5OUFF`%wj[*qJd:.Z` >6D');
define('SECURE_AUTH_SALT', '+]t]Zh<^Glsw#]0lxm> y}hk{/i<SYP|:_g,,5U|uJrR$E.y;oK]]UQC|*/Y<jkA');
define('LOGGED_IN_SALT',   'F/|uAtt/|>o M^ho/K!jKJ{}wJ PgnO_&yAb`ylW!Q1<f|xOWB[9!QH|ekF4TdTp');
define('NONCE_SALT',       '= PgJEgzRB)z]#$),m#xhBS;Z482+.YJor^n-MaATG)-2r*4-w -F/0cH< A@> y');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'comm_new_';

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
