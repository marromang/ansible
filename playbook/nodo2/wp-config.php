<?php

/** El nombre de tu base de datos de WordPress */
define('DB_NAME', '{{ wp_db_name }}');
/** Tu nombre de usuario de MySQL */
define('DB_USER', '{{ wp_db_user }}');
/** Tu contraseña de MySQL */
define('DB_PASSWORD', '{{  wp_db_password }}');
/** Host de MySQL (es muy probable que no necesites cambiarlo) */
define('DB_HOST', '{{ wp_db_host }}');
/** Codificación de caracteres para la base de datos. */
define('DB_CHARSET', 'utf8');
/** Cotejamiento de la base de datos. No lo modifiques si tienes dudas. */
define('DB_COLLATE', '');

{{ wp_salt.stdout }}

$table_prefix  = 'wp_';

define('WP_DEBUG', false);
/* ¡Eso es todo, deja de editar! Feliz blogging */
/** WordPress absolute path to the Wordpress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');
/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');