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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings ** //
// PHP Data Objects(PDO) Sample Code:
try {
    $conn = new PDO("sqlsrv:server = tcp:rdolcehome.database.windows.net,1433; Database = rdolcehomeb970", "mrsdo", "{your_password_here}");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch (PDOException $e) {
    print("Error connecting to SQL Server.");
    die(print_r($e));
}

// SQL Server Extension Sample Code:
$connectionInfo = array("UID" => "mrsdo@rdolcehome", "pwd" => "{your_password_here}", "Database" => "rdolcehomeb970", "LoginTimeout" => 30, "Encrypt" => 1, "TrustServerCertificate" => 0);
$serverName = "tcp:rdolcehome.database.windows.net,1433";
$conn = sqlsrv_connect($serverName, $connectionInfo);


/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY', '%Gf:_;o<c@t1BG9?:yE1<;.J0STO^8#PU=k;ln#>j|[M)wq9bZjy$/U84hx|?=wW' );
define( 'SECURE_AUTH_KEY', '{%?|%rC]_Ki!6^LO=p~:>n0l#Gjz(4i(Lcw@e757Mk@igN6[B$ko,$qh-u=g_qQ)' );
define( 'LOGGED_IN_KEY', 'L@$II7@p:6C(ZPBa<b`/!MM]UwVq&]bSFV!l?HJBuMNa,H&Q!;$wCI-,pt0nWoEG' );
define( 'NONCE_KEY', '+Q$c*k*w>N Ro.={(AHAwiwQzh| F7,WX&$WOqmJ[&3pV{0<oF$O**qe^BYCBr~}' );
define( 'AUTH_SALT', 'K;*z 6X@tP; z7%zDD)6c}!~k9 .]x,}m9K9]`FExtA-m>n{w#N<,JOBdMxPs^gF' );
define( 'SECURE_AUTH_SALT', 'YER7)LxwIMJbf&uSn})AG3xpeN[Q%@+lX(0$VLZvdaUN%!Q=v6;o@DE++Nu&ehL$' );
define( 'LOGGED_IN_SALT', 'e4Qvw$S3..v7@_4:JVSbzZ=mL`p5^8KsorZ-!kiV81hH.;Cz35zcs+{&_p~k9aog' );
define( 'NONCE_SALT', '4?%`_1Ojbv?jfN`(,F92=[ZB0.j%.Eo+;-9ju$E^?skBJc.6eG3MM?wH.6.UlHCf' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_c3c8g97ddh_';

define( 'DISALLOW_FILE_EDIT', true );





/* Inserted by Local by Flywheel. See: http://codex.wordpress.org/Administration_Over_SSL#Using_a_Reverse_Proxy */
if ( isset( $_SERVER['HTTP_X_FORWARDED_PROTO'] ) && $_SERVER['HTTP_X_FORWARDED_PROTO'] === 'https' ) {
	$_SERVER['HTTPS'] = 'on';
}

/* Inserted by Local by Flywheel. Fixes $is_nginx global for rewrites. */
if ( ! empty( $_SERVER['SERVER_SOFTWARE'] ) && strpos( $_SERVER['SERVER_SOFTWARE'], 'Flywheel/' ) !== false ) {
	$_SERVER['SERVER_SOFTWARE'] = 'nginx/1.10.1';
}
/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
