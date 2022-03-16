<?php 

session_start();

require_once('./classes/Painel.php');
require_once('./classes/MySql.php');
require_once('./classes/Usuario.php');
require_once('./classes/Categoria.php');
require_once('./classes/Cliente.php');

define('INCLUDE_PATH','http://localhost/crm_clients/'); 

define('HOST','localhost');
define('DB','crm-clients');
define('USER','root');
define('PASS','');


?>