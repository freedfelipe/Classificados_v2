<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

// Rotas do Site -- front end
$route['404_override']                              = '';
$route['default_controller']                        = "backend/users/login";


// Rotas backend -- backend
//Rotas de Login e Segurança
$route['admin']					                          = 'backend/users';
$route['admin/sair']	    				              = 'backend/users/logout';
$route['admin/perfil']   				                  = 'backend/users/profile';

//Rotas de Usuários
$route['admin/usuarios']		    				      = 'backend/users';
$route['admin/usuarios/adicionar']				          = 'backend/users/create';
$route['admin/usuarios/editar/(:num)/(:any)']             = 'backend/users/update/$1/$2';
$route['admin/usuarios/remover/(:num)/(:any)']            = 'backend/users/delete/$1/$2';
$route['admin/usuarios/(:any)']					          = 'backend/users/index/$1';

//Rotas de Grupos de Usuários
$route['admin/grupos']							          = 'backend/user_groups';
$route['admin/grupos/adicionar']				    	  = 'backend/user_groups/create';
$route['admin/grupos/editar/(:num)/(:any)']			      = 'backend/user_groups/update/$1/$2';
$route['admin/grupos/remover/(:num)']			    	  = 'backend/user_groups/delete/$1/$2';
$route['admin/grupos/(:any)']						      = 'backend/user_groups/index/$1';

//Rotas de Parâmetros
$route['admin/parametros']						          = 'backend/parameters';
$route['admin/parametros/adicionar']			    	  = 'backend/parameters/create';
$route['admin/parametros/editar/(:num)']		    	  = 'backend/parameters/update/$1';
$route['admin/parametros/remover/(:num)']		    	  = 'backend/parameters/delete/$1';
$route['admin/parametros/(:any)']				    	  = 'backend/parameters/index/$1';

//Rotas de Módulos do Sistema
$route['admin/modulos']							          = 'backend/modules';
$route['admin/modulos/(:num)']					          = 'backend/modules/index/$1';
$route['admin/modulos/adicionar']				    	  = 'backend/modules/create';
$route['admin/modulos/editar/(:num)']			    	  = 'backend/modules/update/$1';
$route['admin/modulos/remover/(:num)']			          = 'backend/modules/delete/$1';

//Rotas de Páginas
$route['admin/paginas']							          = 'backend/pages';
$route['admin/paginas/(:num)/(:any)']			          = 'backend/pages/update/$1/$2';

//Rotas de Distribuidor
$route['admin/planos']                                    = 'backend/plans';
$route['admin/planos/(:num)']					          = 'backend/plans/index/$1';
$route['admin/planos/adicionar']                          = 'backend/plans/create';
$route['admin/planos/editar/(:num)/(:any)']               = 'backend/plans/update/$1/$2';
$route['admin/planos/remover/(:num)/(:any)']              = 'backend/plans/delete/$1/$2';

//Rotas de Grupos
//$route['admin/grupos']                                    = 'backend/groups';
//$route['admin/grupos/(:num)']					          = 'backend/groups/index/$1';
//$route['admin/grupos/adicionar']				          = 'backend/groups/create';
//$route['admin/grupos/editar/(:num)/(:any)']               = 'backend/groups/update/$1/$2';
//$route['admin/grupos/remover/(:num)/(:any)']              = 'backend/groups/delete/$1/$2';

//Rotas de Bancos
//$route['bancos']                                    = 'banks';
//$route['bancos/(:num)']					            = 'banks/index/$1';
//$route['bancos/adicionar']				            = 'banks/create';
//$route['bancos/editar/(:num)/(:any)']               = 'banks/update/$1/$2';
//$route['bancos/remover/(:num)/(:any)']              = 'banks/delete/$1/$2';
//$route['bancos/importar']                           = 'banks/import';

//Rota de consulta de CEP
//$route['_cep/(:any)']                               = 'distributors/cep/$1';



