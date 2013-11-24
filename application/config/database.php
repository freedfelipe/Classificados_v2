<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

$active_group = ENVIRONMENT;
$active_record = TRUE;

# dev
$db['development']['hostname']  = 'localhost';
$db['development']['username']  = 'root';
$db['development']['password']  = '';
$db['development']['database']  = 'classificados';
$db['development']['dbdriver']  = 'mysql';
$db['development']['dbprefix']  = '';
$db['development']['pconnect']  = TRUE;
$db['development']['db_debug']  = TRUE;
$db['development']['cache_on']  = FALSE;
$db['development']['cachedir']  = '';
$db['development']['char_set']  = 'utf8';
$db['development']['dbcollat']  = 'utf8_general_ci';
$db['development']['swap_pre']  = '';
$db['development']['autoinit']  = TRUE;
$db['development']['stricton']  = FALSE;

# teste
$db['testing']['hostname']      = 'localhost';
$db['testing']['username']      = 'meucarro_dev2';
$db['testing']['password']      = 'dev2345';
$db['testing']['database']      = 'meucarro_dev2';
$db['testing']['dbdriver']      = 'mysql';
$db['testing']['dbprefix']      = '';
$db['testing']['pconnect']      = TRUE;
$db['testing']['db_debug']      = TRUE;
$db['testing']['cache_on']      = FALSE;
$db['testing']['cachedir']      = '';
$db['testing']['char_set']      = 'utf8';
$db['testing']['dbcollat']      = 'utf8_general_ci';
$db['testing']['swap_pre']      = '';
$db['testing']['autoinit']      = TRUE;
$db['testing']['stricton']      = FALSE;

# producao
$db['production']['hostname']   = 'localhost';
$db['production']['username']   = '';
$db['production']['password']   = '';
$db['production']['database']   = '';
$db['production']['dbdriver']   = 'mysql';
$db['production']['dbprefix']   = '';
$db['production']['pconnect']   = TRUE;
$db['production']['db_debug']   = TRUE;
$db['production']['cache_on']   = FALSE;
$db['production']['cachedir']   = '';
$db['production']['char_set']   = 'utf8';
$db['production']['dbcollat']   = 'utf8_general_ci';
$db['production']['swap_pre']   = '';
$db['production']['autoinit']   = TRUE;
$db['production']['stricton']   = FALSE;

/* End of file database.php */
/* Location: ./application/config/database.php */