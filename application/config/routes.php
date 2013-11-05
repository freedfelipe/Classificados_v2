<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

// Rotas do Site -- front end
$route['404_override']                                              = '';
$route['default_controller']                                        = "frontend/home/index";


// Rotas backend -- backend
//Rotas de Login e Segurança
$route['admin']					                                    = 'backend/users';
$route['admin/login']					                            = 'backend/users/login';
$route['admin/sair']	    				                        = 'backend/users/logout';
$route['admin/perfil']   				                            = 'backend/users/profile';

//Rotas de Usuários
$route['admin/usuarios']		    				                = 'backend/users';
$route['admin/usuarios/adicionar']				                    = 'backend/users/create';
$route['admin/usuarios/editar/(:num)/(:any)']                       = 'backend/users/update/$1/$2';
$route['admin/usuarios/remover/(:num)/(:any)']                      = 'backend/users/delete/$1/$2';
$route['admin/usuarios/(:any)']					                    = 'backend/users/index/$1';

//Rotas de Grupos de Usuários
$route['admin/grupos']							                    = 'backend/user_groups';
$route['admin/grupos/adicionar']				    	            = 'backend/user_groups/create';
$route['admin/grupos/editar/(:num)/(:any)']			                = 'backend/user_groups/update/$1/$2';
$route['admin/grupos/remover/(:num)']			    	            = 'backend/user_groups/delete/$1/$2';
$route['admin/grupos/(:any)']						                = 'backend/user_groups/index/$1';

//Rotas de Parâmetros
$route['admin/parametros']						                    = 'backend/parameters';
$route['admin/parametros/adicionar']			    	            = 'backend/parameters/create';
$route['admin/parametros/editar/(:num)/(:any)']                     = 'backend/parameters/update/$1/$2';
$route['admin/parametros/remover/(:num)/(:any)']                    = 'backend/parameters/delete/$1/$2';
$route['admin/parametros/(:any)']				    	            = 'backend/parameters/index/$1';

//Rotas de Módulos do Sistema
$route['admin/modulos']							                    = 'backend/modules';
$route['admin/modulos/(:num)']					                    = 'backend/modules/index/$1';
$route['admin/modulos/adicionar']				    	            = 'backend/modules/create';
$route['admin/modulos/editar/(:num)']			    	            = 'backend/modules/update/$1';
$route['admin/modulos/remover/(:num)']			                    = 'backend/modules/delete/$1';

//Rotas de Páginas
$route['admin/paginas']							                    = 'backend/pages';
$route['admin/paginas/(:num)/(:any)']			                    = 'backend/pages/update/$1/$2';

//Rotas de Planos
$route['admin/planos']                                              = 'backend/plans';
$route['admin/planos/adicionar']                                    = 'backend/plans/create';
$route['admin/planos/editar/(:num)/(:any)']                         = 'backend/plans/update/$1/$2';
$route['admin/planos/remover/(:num)/(:any)']                        = 'backend/plans/delete/$1/$2';
$route['admin/planos/(:any)']					                    = 'backend/plans/index/$1';

//Rotas de categorias
$route['admin/categorias']                                          = 'backend/categories';
$route['admin/categorias/adicionar']                                = 'backend/categories/create';
$route['admin/categorias/editar/(:num)/(:any)']                     = 'backend/categories/update/$1/$2';
$route['admin/categorias/remover/(:num)/(:any)']                    = 'backend/categories/delete/$1/$2';
$route['admin/categorias/(:any)']					                = 'backend/categories/index/$1';

//Rotas de Marcas
$route['admin/marcas']                                              = 'backend/brands';
$route['admin/marcas/adicionar']                                    = 'backend/brands/create';
$route['admin/marcas/editar/(:num)/(:any)']                         = 'backend/brands/update/$1/$2';
$route['admin/marcas/remover/(:num)/(:any)']                        = 'backend/brands/delete/$1/$2';
$route['admin/marcas/(:any)']					                    = 'backend/brands/index/$1';

//Rotas de Modelos
$route['admin/modelos']                                             = 'backend/models';
$route['admin/modelos/adicionar']                                   = 'backend/models/create';
$route['admin/modelos/editar/(:num)/(:any)']                        = 'backend/models/update/$1/$2';
$route['admin/modelos/remover/(:num)/(:any)']                       = 'backend/models/delete/$1/$2';
$route['admin/modelos/(:any)']					                    = 'backend/models/index/$1';

//Rotas de Anuncios - Administrador
$route['admin/anuncios']                                            = 'backend/ads';
$route['admin/anuncios/adicionar']                                  = 'backend/ads/create';
$route['admin/anuncios/editar/(:num)/(:any)']                       = 'backend/ads/update/$1/$2';
$route['admin/anuncios/remover/(:num)/(:any)']                      = 'backend/ads/delete/$1/$2';
$route['admin/anuncios/(:any)']					                    = 'backend/ads/index/$1';

//Rotas de categoria das publicidades
$route['admin/publicidade-categorias']                              = 'backend/advertising_categories';
$route['admin/publicidade-categorias/adicionar']                    = 'backend/advertising_categories/create';
$route['admin/publicidade-categorias/editar/(:num)/(:any)']         = 'backend/advertising_categories/update/$1/$2';
$route['admin/publicidade-categorias/remover/(:num)/(:any)']        = 'backend/advertising_categories/delete/$1/$2';
$route['admin/publicidade-categorias/(:any)']                       = 'backend/advertising_categories/index/$1';

//Rotas de publicidades
$route['admin/publicidade']                                         = 'backend/advertising';
$route['admin/publicidade/adicionar']                               = 'backend/advertising/create';
$route['admin/publicidade/editar/(:num)/(:any)']                    = 'backend/advertising/update/$1/$2';
$route['admin/publicidade/remover/(:num)']                          = 'backend/advertising/delete/$1';
$route['admin/publicidade/(:any)']                                  = 'backend/advertising/index/$1';

//Rotas de parceiros
$route['admin/parceiros']                                           = 'backend/partners';
$route['admin/parceiros/adicionar']                                 = 'backend/partners/create';
$route['admin/parceiros/editar/(:num)/(:any)']                      = 'backend/partners/update/$1/$2';
$route['admin/parceiros/remover/(:num)']                            = 'backend/partners/delete/$1';
$route['admin/parceiros/(:any)']                                    = 'backend/partners/index/$1';

//Rotas de Estados
$route['admin/estados']                                             = 'backend/states';
$route['admin/estados/adicionar']                                   = 'backend/states/create';
$route['admin/estados/editar/(:num)/(:any)']                        = 'backend/states/update/$1/$2';
$route['admin/estados/remover/(:num)/(:any)']                       = 'backend/states/delete/$1/$2';
$route['admin/estados/(:any)']                                      = 'backend/states/index/$1';

//Rotas de Cidades
$route['admin/cidades']                                             = 'backend/cities';
$route['admin/cidades/adicionar']                                   = 'backend/cities/create';
$route['admin/cidades/editar/(:num)/(:any)']                        = 'backend/cities/update/$1/$2';
$route['admin/cidades/remover/(:num)/(:any)']                       = 'backend/cities/delete/$1/$2';
$route['admin/cidades/consultar/(:num)']                            = 'backend/cities/search/$1';
$route['admin/cidades/(:any)']                                      = 'backend/cities/index/$1';

//Rotas de opcionais
$route['admin/opcionais']                                           = 'backend/optional';
$route['admin/opcionais/adicionar']                                 = 'backend/optional/create';
$route['admin/opcionais/editar/(:num)/(:any)']                      = 'backend/optional/update/$1/$2';
$route['admin/opcionais/remover/(:num)/(:any)']                     = 'backend/optional/delete/$1/$2';
$route['admin/opcionais/consultar/(:num)']                          = 'backend/optional/search/$1';
$route['admin/opcionais/(:any)']                                    = 'backend/optional/index/$1';

//Rotas de FRONTEND



//Rotas da home
$route['home']                                                      = 'frontend/home/index';
$route['modelos/consultar/(:num)']                                  = 'backend/models/search/$1';
$route['cidades/consultar/(:num)']                                  = 'backend/cities/search/$1';


// Anuncio
$route['anuncio/cadastrar']                                         = 'frontend/ads/create';


// tela de login
$route['entrar']                                                    = 'frontend/login/index';



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



