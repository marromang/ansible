<?php

/** El nombre de tu base de datos de WordPress */
define('DB_NAME', {{ wp_db_name }});
/** Tu nombre de usuario de MySQL */
define('DB_USER', {{ wp_db_user }});
/** Tu contraseña de MySQL */
define('DB_PASSWORD', {{ password }});
/** Host de MySQL (es muy probable que no necesites cambiarlo) */
define('DB_HOST', { ansible_eth1.ipv4.address }} );
/** Codificación de caracteres para la base de datos. */
define('DB_CHARSET', 'utf8mb4');
/** Cotejamiento de la base de datos. No lo modifiques si tienes dudas. */
define('DB_COLLATE', '');

define('AUTH_KEY', 'AaGdxSaH4,JQIZX54_ndZdGo&Ahl3gywgjFbClm+%8LO:-6$CL:q[Bbj8ax?7=Tg');
define('SECURE_AUTH_KEY', '/dPIm ;EWk@Si+^P4jAkjVHEB85q1}JI!}RmXx~@8xv>#b{~Y!&`<bBT/ypqMT&U');
define('LOGGED_IN_KEY', '<>;md+nR2tg&-MDEZK2}hT<!`#uw#GCau6b6GNwGJ2s;c%;tqvKn`bO -oi~_bfd');
define('NONCE_KEY', '4,H%H3>;invf36c#YzJn%SRXgAIX2/1){$cK_Kn9wvZWIPD+EoT]R$<SN[mBVRM&');
define('AUTH_SALT', ')!20A.fv5|i:aj$WrVNj>NJ2o V =x`&Hep>^Pga9||8aKNQQjwRJ-dOhbBU$%M6');
define('SECURE_AUTH_SALT', 'c/pm$DQ F/l64X%%OSz91fI9Pm8PtZ*-!.QfS[?5>kTTYH0PwV|Xa&J^Zv.kZF.2');
define('LOGGED_IN_SALT', ',P+(`L2vm6{:/W}E*xH RiG-4EOdqO~PcWJHVqDS;)*PXJDYobMOv)O5]c^v&noB');
define('NONCE_SALT', 'S%>e:gqle/& PU3z;bVP.p^[J<^8+;AHKt3B4P:7}/QmlNuE^s^vXygDY3x$B]lN');

$table_prefix  = 'wp_';

define('WP_DEBUG', false);
/* ¡Eso es todo, deja de editar! Feliz blogging */
/** WordPress absolute path to the Wordpress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');
/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
