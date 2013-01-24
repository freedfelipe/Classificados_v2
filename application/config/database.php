<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

$active_group = 'default';
$active_record = TRUE;

switch($_SERVER['HTTP_HOST']){
    case 'local.classificados.com.br':
    case 'localhost':
        $db['default']['hostname'] = 'localhost';
        $db['default']['username'] = 'root';
        $db['default']['password'] = '';
        $db['default']['database'] = 'classificados';
    break;

    case 'dev.meucarroturbo.com.br':
        $db['default']['hostname'] = 'localhost';
        $db['default']['username'] = 'meucarro_dev2';
        $db['default']['password'] = 'dev2345';
        $db['default']['database'] = 'meucarro_dev2';
    break;
}

$db['default']['dbdriver'] = 'mysql';
$db['default']['dbprefix'] = '';
$db['default']['pconnect'] = TRUE;
$db['default']['db_debug'] = TRUE;
$db['default']['cache_on'] = FALSE;
$db['default']['cachedir'] = '';
$db['default']['char_set'] = 'utf8';
$db['default']['dbcollat'] = 'utf8_general_ci';
$db['default']['swap_pre'] = '';
$db['default']['autoinit'] = TRUE;
$db['default']['stricton'] = FALSE;


/* End of file database.php */
/* Location: ./application/config/database.php */