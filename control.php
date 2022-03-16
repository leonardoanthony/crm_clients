<?php 

session_start();
require_once('./classes/Painel.php');
require_once('./classes/MySql.php');
define('INCLUDE_PATH','http://localhost/crm_clients/'); 
define('INCLUDE_PATH_PAINEL',INCLUDE_PATH.'painel/');

define('HOST','localhost');
define('DB','crm-clients');
define('USER','root');
define('PASS','');


?>