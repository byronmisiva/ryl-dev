<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');


$active_group = 'royal';
$active_record = TRUE;

$db['aplicaciones']['hostname'] = "localhost";
$db['aplicaciones']['username'] = "externo";
$db['aplicaciones']['password'] = "feadmin06";
$db['aplicaciones']['database'] = "royal";
$db['aplicaciones']['dbdriver'] = "mysql";
$db['aplicaciones']['dbprefix'] = "";
$db['aplicaciones']['pconnect'] = TRUE;
$db['aplicaciones']['db_debug'] = TRUE;
$db['aplicaciones']['cache_on'] = FALSE;
$db['aplicaciones']['cachedir'] = "";
$db['aplicaciones']['char_set'] = "utf8";
$db['aplicaciones']['dbcollat'] = "utf8_general_ci";

$db['royal']['hostname'] = "localhost";
$db['royal']['username'] = "externo";
$db['royal']['password'] = "feadmin06";
$db['royal']['database'] = "royal";
$db['royal']['dbdriver'] = "mysql";
$db['royal']['dbprefix'] = "royal_";
$db['royal']['pconnect'] = TRUE;
$db['royal']['db_debug'] = TRUE;
$db['royal']['cache_on'] = FALSE;
$db['royal']['cachedir'] = "";
$db['royal']['char_set'] = "utf8";
$db['royal']['dbcollat'] = "utf8_general_ci";
/* End of file database.php */
/* Location: ./application/config/database.php */                              