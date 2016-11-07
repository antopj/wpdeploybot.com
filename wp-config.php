<?php


// ** MySQL settings ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wpdeploybot_com');

/** MySQL database username */
define('DB_USER', 'wpdeploybot_com');

/** MySQL database password */
define('DB_PASSWORD', 'IUH7k5a48ve1htZ');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

define('AUTH_KEY',         'zUd?a:))XoY0d%yOu+;~6)GwQVI7uKsIMprWhQ|x`?+|I[0_QeCO7x+6lR5^`/aK');
define('SECURE_AUTH_KEY',  ';-v-wLugf~Q^Q^rtRqB^cg64~mS<,6VQUPweuoJ3 Paa8^9T[7h{?|-Pw:JeS*`A');
define('LOGGED_IN_KEY',    ']d}|J;utNBr&:ig+|-;A!?65_^Hq)vZBuKvKp+<Sr:jZ=I+aq-b_PPd87ow6:-1*');
define('NONCE_KEY',        'UEzye1NvDlt><X.)i$@2]fQC`eArh690q0A_>,`bTs36Gd0ZaiIc@gUq~i|s:s{c');
define('AUTH_SALT',        '6RmzeD3BWUR||i?A/2f-;#@e*S_zR, _eG ZvU]SQaw#:8>,2Da~u0x_8jt7|-V~');
define('SECURE_AUTH_SALT', 'M.4|2jwZCODc(|*H-877K]fW)$nYM(* sv_!Zpa.9<ds+fB5F#H@GXrr{st45+g)');
define('LOGGED_IN_SALT',   'H)|@w~ke#~3IOr|C{rmM!A|?Hd{]OKf98yb%_d&t@({{(3#4F+Ww)ne%Nt}1C:5a');
define('NONCE_SALT',       'shf.`D1{}zp53=JK<El(p}0ZEpnJUKz]lD#u|++s)p5}1%Z,u(wv4MX,AEi1K;0e');


$table_prefix = 'wp_';


 

define('WP_DEBUG', false); 



/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
