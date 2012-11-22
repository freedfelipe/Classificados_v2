-- phpMyAdmin SQL Dump
-- version 3.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 22, 2012 at 10:20 PM
-- Server version: 5.5.25a
-- PHP Version: 5.4.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `classificados`
--

-- --------------------------------------------------------

--
-- Table structure for table `sys_group`
--

CREATE TABLE IF NOT EXISTS `sys_group` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idHash` varchar(100) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `description` varchar(100) DEFAULT NULL,
  `created_in` datetime DEFAULT NULL,
  `update_in` datetime NOT NULL,
  `status_id` int(11) DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `sys_group`
--

INSERT INTO `sys_group` (`id`, `idHash`, `name`, `description`, `created_in`, `update_in`, `status_id`) VALUES
(1, '0a8bd1d69076acf2b6c36a0fc58a4f2f', 'Administradores', 'Grupo de Administradores do Sistema', '2012-01-27 15:10:14', '2012-11-22 18:20:24', 1),
(2, '5b6810d51f94b2a1d1a90bf31193124d', 'Anunciantes', NULL, '2012-02-13 17:47:49', '0000-00-00 00:00:00', 1),
(3, '0b921ef8a90a5fcccd9982ecc1a7a220', 'Teste', NULL, '2012-11-22 18:08:20', '2012-11-22 18:20:18', 1);

-- --------------------------------------------------------

--
-- Table structure for table `sys_log`
--

CREATE TABLE IF NOT EXISTS `sys_log` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `session_id` varchar(250) NOT NULL,
  `user_ip` varchar(250) NOT NULL,
  `user_browser` varchar(250) NOT NULL,
  `user_url` varchar(250) NOT NULL,
  `user_post` text NOT NULL,
  `model` varchar(100) DEFAULT NULL,
  `action` varchar(100) DEFAULT NULL,
  `created_in` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `status_id` int(11) DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1209 ;

--
-- Dumping data for table `sys_log`
--

INSERT INTO `sys_log` (`id`, `user_id`, `session_id`, `user_ip`, `user_browser`, `user_url`, `user_post`, `model`, `action`, `created_in`, `status_id`) VALUES
(797, 0, '81682e5e75cca545d8064c81a30ac826', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.2; WOW64; rv:16.0) Gecko/20100101 Firefox/16.0', 'http://local.classificados.com.br/', 'Array\n(\n)\n', 'users', 'login', '2012-11-22 00:28:48', 1),
(798, 1, '81682e5e75cca545d8064c81a30ac826', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.2; WOW64; rv:16.0) Gecko/20100101 Firefox/16.0', 'http://local.classificados.com.br/usuarios', 'Array\n(\n)\n', 'users', 'index', '2012-11-22 00:28:53', 1),
(799, 1, '81682e5e75cca545d8064c81a30ac826', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.2; WOW64; rv:16.0) Gecko/20100101 Firefox/16.0', 'http://local.classificados.com.br/usuarios', 'Array\n(\n)\n', 'users', 'index', '2012-11-22 00:28:53', 1),
(800, 1, '81682e5e75cca545d8064c81a30ac826', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.2; WOW64; rv:16.0) Gecko/20100101 Firefox/16.0', 'http://local.classificados.com.br/parametros', 'Array\n(\n)\n', 'parameters', 'index', '2012-11-22 00:28:59', 1),
(801, 1, '81682e5e75cca545d8064c81a30ac826', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.2; WOW64; rv:16.0) Gecko/20100101 Firefox/16.0', 'http://local.classificados.com.br/parametros/editar/7', 'Array\n(\n)\n', 'parameters', 'update', '2012-11-22 00:29:03', 1),
(802, 1, '81682e5e75cca545d8064c81a30ac826', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.2; WOW64; rv:16.0) Gecko/20100101 Firefox/16.0', 'http://local.classificados.com.br/parametros/editar/7', 'Array\n(\n)\n', 'parameters', 'update', '2012-11-22 00:29:03', 1),
(803, 1, '81682e5e75cca545d8064c81a30ac826', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.2; WOW64; rv:16.0) Gecko/20100101 Firefox/16.0', 'http://local.classificados.com.br/parametros/editar/7', 'Array\n(\n    [name] => author\n    [value] => Wad Tecnologia\n    [status_id] => 1\n)\n', 'parameters', 'update', '2012-11-22 00:29:11', 1),
(804, 1, '81682e5e75cca545d8064c81a30ac826', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.2; WOW64; rv:16.0) Gecko/20100101 Firefox/16.0', 'http://local.classificados.com.br/parametros', 'Array\n(\n)\n', 'parameters', 'index', '2012-11-22 00:29:11', 1),
(805, 1, '81682e5e75cca545d8064c81a30ac826', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.2; WOW64; rv:16.0) Gecko/20100101 Firefox/16.0', 'http://local.classificados.com.br/parametros/editar/2', 'Array\n(\n)\n', 'parameters', 'update', '2012-11-22 00:29:14', 1),
(806, 1, '81682e5e75cca545d8064c81a30ac826', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.2; WOW64; rv:16.0) Gecko/20100101 Firefox/16.0', 'http://local.classificados.com.br/parametros/editar/2', 'Array\n(\n)\n', 'parameters', 'update', '2012-11-22 00:29:14', 1),
(807, 1, '81682e5e75cca545d8064c81a30ac826', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.2; WOW64; rv:16.0) Gecko/20100101 Firefox/16.0', 'http://local.classificados.com.br/parametros/editar/2', 'Array\n(\n    [name] => company_name\n    [value] => Meu Carro Turbo\n    [status_id] => 1\n)\n', 'parameters', 'update', '2012-11-22 00:29:23', 1),
(808, 1, '81682e5e75cca545d8064c81a30ac826', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.2; WOW64; rv:16.0) Gecko/20100101 Firefox/16.0', 'http://local.classificados.com.br/parametros', 'Array\n(\n)\n', 'parameters', 'index', '2012-11-22 00:29:23', 1),
(809, 1, '81682e5e75cca545d8064c81a30ac826', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.2; WOW64; rv:16.0) Gecko/20100101 Firefox/16.0', 'http://local.classificados.com.br/', 'Array\n(\n)\n', 'users', 'login', '2012-11-22 00:29:37', 1),
(810, 1, '81682e5e75cca545d8064c81a30ac826', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.2; WOW64; rv:16.0) Gecko/20100101 Firefox/16.0', 'http://local.classificados.com.br/usuarios', 'Array\n(\n)\n', 'users', 'index', '2012-11-22 00:29:42', 1),
(811, 1, '81682e5e75cca545d8064c81a30ac826', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.2; WOW64; rv:16.0) Gecko/20100101 Firefox/16.0', 'http://local.classificados.com.br/usuarios', 'Array\n(\n)\n', 'users', 'index', '2012-11-22 00:29:42', 1),
(812, 1, 'f1f2a0d16b8ed159ccd6514e3757ebe9', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.2; WOW64; rv:16.0) Gecko/20100101 Firefox/16.0', 'http://local.classificados.com.br/usuarios/adicionar', 'Array\n(\n)\n', 'users', 'create', '2012-11-22 00:55:31', 1),
(813, 1, 'f1f2a0d16b8ed159ccd6514e3757ebe9', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.2; WOW64; rv:16.0) Gecko/20100101 Firefox/16.0', 'http://local.classificados.com.br/usuarios/adicionar', 'Array\n(\n)\n', 'users', 'create', '2012-11-22 00:55:31', 1),
(814, 1, 'f471f7e44378617c00b792e4a1b0723b', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.2; WOW64; rv:16.0) Gecko/20100101 Firefox/16.0', 'http://local.classificados.com.br/usuarios/adicionar', 'Array\n(\n)\n', 'users', 'create', '2012-11-22 01:03:09', 1),
(815, 1, 'f471f7e44378617c00b792e4a1b0723b', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.2; WOW64; rv:16.0) Gecko/20100101 Firefox/16.0', 'http://local.classificados.com.br/usuarios/adicionar', 'Array\n(\n)\n', 'users', 'create', '2012-11-22 01:03:09', 1),
(816, 1, 'f471f7e44378617c00b792e4a1b0723b', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.2; WOW64; rv:16.0) Gecko/20100101 Firefox/16.0', 'http://local.classificados.com.br/usuarios/adicionar', 'Array\n(\n    [group_id] => 2\n    [name] => teste\n    [email] => teste@teste.com.br\n    [password] => 1234\n    [status_id] => 1\n)\n', 'users', 'create', '2012-11-22 01:04:30', 1),
(817, 1, 'f471f7e44378617c00b792e4a1b0723b', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.2; WOW64; rv:16.0) Gecko/20100101 Firefox/16.0', 'http://local.classificados.com.br/usuarios/adicionar', 'Array\n(\n    [group_id] => 2\n    [name] => teste\n    [email] => teste@teste.com.br\n    [password] => 1234\n    [status_id] => 1\n)\n', 'users', 'create', '2012-11-22 01:05:15', 1),
(818, 1, 'f471f7e44378617c00b792e4a1b0723b', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.2; WOW64; rv:16.0) Gecko/20100101 Firefox/16.0', 'http://local.classificados.com.br/usuarios/adicionar', 'Array\n(\n    [group_id] => 2\n    [name] => teste\n    [email] => teste@teste.com.br\n    [password] => 1234\n    [status_id] => 1\n)\n', 'users', 'create', '2012-11-22 01:06:33', 1),
(819, 1, 'f471f7e44378617c00b792e4a1b0723b', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.2; WOW64; rv:16.0) Gecko/20100101 Firefox/16.0', 'http://local.classificados.com.br/usuarios/adicionar', 'Array\n(\n    [group_id] => 2\n    [name] => teste\n    [email] => teste@teste.com.br\n    [password] => 1234\n    [status_id] => 1\n)\n', 'users', 'create', '2012-11-22 01:07:06', 1),
(820, 1, 'f471f7e44378617c00b792e4a1b0723b', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.2; WOW64; rv:16.0) Gecko/20100101 Firefox/16.0', 'http://local.classificados.com.br/usuarios', 'Array\n(\n)\n', 'users', 'index', '2012-11-22 01:07:07', 1),
(821, 1, 'f471f7e44378617c00b792e4a1b0723b', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.2; WOW64; rv:16.0) Gecko/20100101 Firefox/16.0', 'http://local.classificados.com.br/usuarios', 'Array\n(\n)\n', 'users', 'index', '2012-11-22 01:07:07', 1),
(822, 1, 'f471f7e44378617c00b792e4a1b0723b', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.2; WOW64; rv:16.0) Gecko/20100101 Firefox/16.0', 'http://local.classificados.com.br/usuarios/adicionar', 'Array\n(\n)\n', 'users', 'create', '2012-11-22 01:07:15', 1),
(823, 1, 'f471f7e44378617c00b792e4a1b0723b', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.2; WOW64; rv:16.0) Gecko/20100101 Firefox/16.0', 'http://local.classificados.com.br/usuarios/adicionar', 'Array\n(\n)\n', 'users', 'create', '2012-11-22 01:07:15', 1),
(824, 1, 'f471f7e44378617c00b792e4a1b0723b', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.2; WOW64; rv:16.0) Gecko/20100101 Firefox/16.0', 'http://local.classificados.com.br/usuarios/adicionar', 'Array\n(\n    [group_id] => 2\n    [name] => teste 2\n    [email] => teste@teste.com.br\n    [password] => 123456\n    [status_id] => 1\n)\n', 'users', 'create', '2012-11-22 01:07:28', 1),
(825, 1, 'f471f7e44378617c00b792e4a1b0723b', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.2; WOW64; rv:16.0) Gecko/20100101 Firefox/16.0', 'http://local.classificados.com.br/usuarios/adicionar', 'Array\n(\n    [group_id] => 2\n    [name] => teste 2\n    [email] => teste@teste.com.br\n    [password] => 123456\n    [status_id] => 1\n)\n', 'users', 'create', '2012-11-22 01:07:28', 1),
(826, 0, '914fc9517a74cda7660782f51fa89496', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:17.0) Gecko/17.0 Firefox/17.0', 'http://local.classificados.com.br/', 'Array\n(\n)\n', 'users', 'login', '2012-11-22 16:28:21', 1),
(827, 1, 'aacb31ec4f12069c242dff6cfa327a12', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:17.0) Gecko/17.0 Firefox/17.0', 'http://local.classificados.com.br/usuarios', 'Array\n(\n)\n', 'users', 'index', '2012-11-22 16:46:24', 1),
(828, 1, 'aacb31ec4f12069c242dff6cfa327a12', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:17.0) Gecko/17.0 Firefox/17.0', 'http://local.classificados.com.br/usuarios', 'Array\n(\n)\n', 'users', 'index', '2012-11-22 16:46:24', 1),
(829, 1, '05e90f5ef67844629bba650be54230fd', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:17.0) Gecko/17.0 Firefox/17.0', 'http://local.classificados.com.br/', 'Array\n(\n)\n', 'users', 'login', '2012-11-22 17:24:00', 1),
(830, 1, '05e90f5ef67844629bba650be54230fd', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:17.0) Gecko/17.0 Firefox/17.0', 'http://local.classificados.com.br/', 'Array\n(\n)\n', 'users', 'login', '2012-11-22 17:24:58', 1),
(831, 1, '05e90f5ef67844629bba650be54230fd', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:17.0) Gecko/17.0 Firefox/17.0', 'http://local.classificados.com.br/', 'Array\n(\n)\n', 'users', 'login', '2012-11-22 17:24:59', 1),
(832, 1, '05e90f5ef67844629bba650be54230fd', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:17.0) Gecko/17.0 Firefox/17.0', 'http://local.classificados.com.br/', 'Array\n(\n)\n', 'users', 'login', '2012-11-22 17:24:59', 1),
(833, 1, '05e90f5ef67844629bba650be54230fd', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:17.0) Gecko/17.0 Firefox/17.0', 'http://local.classificados.com.br/', 'Array\n(\n)\n', 'users', 'login', '2012-11-22 17:25:00', 1),
(834, 1, '05e90f5ef67844629bba650be54230fd', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:17.0) Gecko/17.0 Firefox/17.0', 'http://local.classificados.com.br/', 'Array\n(\n)\n', 'users', 'login', '2012-11-22 17:25:00', 1),
(835, 1, '05e90f5ef67844629bba650be54230fd', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:17.0) Gecko/17.0 Firefox/17.0', 'http://local.classificados.com.br/', 'Array\n(\n)\n', 'users', 'login', '2012-11-22 17:25:58', 1),
(836, 1, '05e90f5ef67844629bba650be54230fd', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:17.0) Gecko/17.0 Firefox/17.0', 'http://local.classificados.com.br/', 'Array\n(\n)\n', 'users', 'login', '2012-11-22 17:26:33', 1),
(837, 1, '05e90f5ef67844629bba650be54230fd', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:17.0) Gecko/17.0 Firefox/17.0', 'http://local.classificados.com.br/admin/usuarios', 'Array\n(\n)\n', 'users', 'index', '2012-11-22 17:28:06', 1),
(838, 1, '05e90f5ef67844629bba650be54230fd', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:17.0) Gecko/17.0 Firefox/17.0', 'http://local.classificados.com.br/admin/usuarios', 'Array\n(\n)\n', 'users', 'index', '2012-11-22 17:28:06', 1),
(839, 1, 'f90e43171080b5eab96dbda07d3d6d40', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:17.0) Gecko/17.0 Firefox/17.0', 'http://local.classificados.com.br/admin/usuarios', 'Array\n(\n)\n', 'users', 'index', '2012-11-22 17:29:02', 1),
(840, 1, 'f90e43171080b5eab96dbda07d3d6d40', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:17.0) Gecko/17.0 Firefox/17.0', 'http://local.classificados.com.br/admin/usuarios', 'Array\n(\n)\n', 'users', 'index', '2012-11-22 17:29:02', 1),
(841, 1, 'f90e43171080b5eab96dbda07d3d6d40', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:17.0) Gecko/17.0 Firefox/17.0', 'http://local.classificados.com.br/admin/usuarios', 'Array\n(\n)\n', 'users', 'index', '2012-11-22 17:29:13', 1),
(842, 1, 'f90e43171080b5eab96dbda07d3d6d40', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:17.0) Gecko/17.0 Firefox/17.0', 'http://local.classificados.com.br/admin/usuarios', 'Array\n(\n)\n', 'users', 'index', '2012-11-22 17:29:13', 1),
(843, 1, 'f90e43171080b5eab96dbda07d3d6d40', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:17.0) Gecko/17.0 Firefox/17.0', 'http://local.classificados.com.br/admin/usuarios', 'Array\n(\n)\n', 'users', 'index', '2012-11-22 17:29:16', 1),
(844, 1, 'f90e43171080b5eab96dbda07d3d6d40', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:17.0) Gecko/17.0 Firefox/17.0', 'http://local.classificados.com.br/admin/usuarios', 'Array\n(\n)\n', 'users', 'index', '2012-11-22 17:29:16', 1),
(845, 1, '0da70f89eb2d3964939b2b90f7bdd01b', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:17.0) Gecko/17.0 Firefox/17.0', 'http://local.classificados.com.br/admin/usuarios', 'Array\n(\n)\n', 'users', 'index', '2012-11-22 17:37:23', 1),
(846, 1, '0da70f89eb2d3964939b2b90f7bdd01b', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:17.0) Gecko/17.0 Firefox/17.0', 'http://local.classificados.com.br/admin/usuarios', 'Array\n(\n)\n', 'users', 'index', '2012-11-22 17:37:23', 1),
(847, 1, '0da70f89eb2d3964939b2b90f7bdd01b', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:17.0) Gecko/17.0 Firefox/17.0', 'http://local.classificados.com.br/admin/usuarios', 'Array\n(\n)\n', 'users', 'index', '2012-11-22 17:37:51', 1),
(848, 1, '0da70f89eb2d3964939b2b90f7bdd01b', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:17.0) Gecko/17.0 Firefox/17.0', 'http://local.classificados.com.br/admin/usuarios', 'Array\n(\n)\n', 'users', 'index', '2012-11-22 17:37:51', 1),
(849, 1, '0da70f89eb2d3964939b2b90f7bdd01b', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:17.0) Gecko/17.0 Firefox/17.0', 'http://local.classificados.com.br/admin/usuarios', 'Array\n(\n)\n', 'users', 'index', '2012-11-22 17:38:16', 1),
(850, 1, '0da70f89eb2d3964939b2b90f7bdd01b', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:17.0) Gecko/17.0 Firefox/17.0', 'http://local.classificados.com.br/admin/usuarios', 'Array\n(\n)\n', 'users', 'index', '2012-11-22 17:38:16', 1),
(851, 1, '0da70f89eb2d3964939b2b90f7bdd01b', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:17.0) Gecko/17.0 Firefox/17.0', 'http://local.classificados.com.br/admin/usuarios', 'Array\n(\n)\n', 'users', 'index', '2012-11-22 17:39:12', 1),
(852, 1, '0da70f89eb2d3964939b2b90f7bdd01b', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:17.0) Gecko/17.0 Firefox/17.0', 'http://local.classificados.com.br/admin/usuarios', 'Array\n(\n)\n', 'users', 'index', '2012-11-22 17:39:12', 1),
(853, 1, 'ddf14055d9fc22d12f9d11e7394a893f', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:17.0) Gecko/17.0 Firefox/17.0', 'http://local.classificados.com.br/admin/parametros', 'Array\n(\n)\n', 'parameters', 'index', '2012-11-22 17:59:36', 1),
(854, 1, 'ddf14055d9fc22d12f9d11e7394a893f', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:17.0) Gecko/17.0 Firefox/17.0', 'http://local.classificados.com.br/admin/parametros/editar/3', 'Array\n(\n)\n', 'parameters', 'update', '2012-11-22 17:59:42', 1),
(855, 1, 'ddf14055d9fc22d12f9d11e7394a893f', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:17.0) Gecko/17.0 Firefox/17.0', 'http://local.classificados.com.br/admin/parametros/editar/3', 'Array\n(\n)\n', 'parameters', 'update', '2012-11-22 17:59:42', 1),
(856, 1, 'ddf14055d9fc22d12f9d11e7394a893f', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:17.0) Gecko/17.0 Firefox/17.0', 'http://local.classificados.com.br/admin/parametros/editar/3', 'Array\n(\n    [name] => system_title\n    [value] => Meu Carro Turbo\n    [status_id] => 1\n)\n', 'parameters', 'update', '2012-11-22 17:59:50', 1),
(857, 1, 'ddf14055d9fc22d12f9d11e7394a893f', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:17.0) Gecko/17.0 Firefox/17.0', 'http://local.classificados.com.br/admin/parametros', 'Array\n(\n)\n', 'parameters', 'index', '2012-11-22 17:59:50', 1),
(858, 1, 'ddf14055d9fc22d12f9d11e7394a893f', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:17.0) Gecko/17.0 Firefox/17.0', 'http://local.classificados.com.br/admin/usuarios', 'Array\n(\n)\n', 'users', 'index', '2012-11-22 18:02:39', 1),
(859, 1, 'ddf14055d9fc22d12f9d11e7394a893f', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:17.0) Gecko/17.0 Firefox/17.0', 'http://local.classificados.com.br/admin/usuarios', 'Array\n(\n)\n', 'users', 'index', '2012-11-22 18:02:39', 1),
(860, 1, 'ddf14055d9fc22d12f9d11e7394a893f', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:17.0) Gecko/17.0 Firefox/17.0', 'http://local.classificados.com.br/admin/parametros', 'Array\n(\n)\n', 'parameters', 'index', '2012-11-22 18:02:46', 1),
(861, 1, 'ddf14055d9fc22d12f9d11e7394a893f', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:17.0) Gecko/17.0 Firefox/17.0', 'http://local.classificados.com.br/admin/usuarios', 'Array\n(\n)\n', 'users', 'index', '2012-11-22 18:02:48', 1),
(862, 1, 'ddf14055d9fc22d12f9d11e7394a893f', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:17.0) Gecko/17.0 Firefox/17.0', 'http://local.classificados.com.br/admin/usuarios', 'Array\n(\n)\n', 'users', 'index', '2012-11-22 18:02:48', 1),
(863, 1, 'ddf14055d9fc22d12f9d11e7394a893f', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:17.0) Gecko/17.0 Firefox/17.0', 'http://local.classificados.com.br/admin/usuarios', 'Array\n(\n)\n', 'users', 'index', '2012-11-22 18:03:36', 1),
(864, 1, 'ddf14055d9fc22d12f9d11e7394a893f', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:17.0) Gecko/17.0 Firefox/17.0', 'http://local.classificados.com.br/admin/usuarios', 'Array\n(\n)\n', 'users', 'index', '2012-11-22 18:03:36', 1),
(865, 1, '0dc31941175327cf57a3bf02e3e30e12', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:17.0) Gecko/17.0 Firefox/17.0', 'http://local.classificados.com.br/admin/usuarios', 'Array\n(\n)\n', 'users', 'index', '2012-11-22 18:04:41', 1),
(866, 1, '0dc31941175327cf57a3bf02e3e30e12', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:17.0) Gecko/17.0 Firefox/17.0', 'http://local.classificados.com.br/admin/usuarios', 'Array\n(\n)\n', 'users', 'index', '2012-11-22 18:04:41', 1),
(867, 1, '0dc31941175327cf57a3bf02e3e30e12', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:17.0) Gecko/17.0 Firefox/17.0', 'http://local.classificados.com.br/admin/usuarios', 'Array\n(\n)\n', 'users', 'index', '2012-11-22 18:06:49', 1),
(868, 1, '0dc31941175327cf57a3bf02e3e30e12', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:17.0) Gecko/17.0 Firefox/17.0', 'http://local.classificados.com.br/admin/usuarios', 'Array\n(\n)\n', 'users', 'index', '2012-11-22 18:06:49', 1),
(869, 1, '0dc31941175327cf57a3bf02e3e30e12', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:17.0) Gecko/17.0 Firefox/17.0', 'http://local.classificados.com.br/admin/usuarios', 'Array\n(\n)\n', 'users', 'index', '2012-11-22 18:08:41', 1),
(870, 1, '0dc31941175327cf57a3bf02e3e30e12', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:17.0) Gecko/17.0 Firefox/17.0', 'http://local.classificados.com.br/admin/usuarios', 'Array\n(\n)\n', 'users', 'index', '2012-11-22 18:08:41', 1),
(871, 1, '0dc31941175327cf57a3bf02e3e30e12', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:17.0) Gecko/17.0 Firefox/17.0', 'http://local.classificados.com.br/admin/usuarios', 'Array\n(\n)\n', 'users', 'index', '2012-11-22 18:09:18', 1),
(872, 1, '0dc31941175327cf57a3bf02e3e30e12', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:17.0) Gecko/17.0 Firefox/17.0', 'http://local.classificados.com.br/admin/usuarios', 'Array\n(\n)\n', 'users', 'index', '2012-11-22 18:09:18', 1),
(873, 1, 'e9a0c60c69354fc27609d8f9cb21f8ff', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:17.0) Gecko/17.0 Firefox/17.0', 'http://local.classificados.com.br/admin/usuarios', 'Array\n(\n)\n', 'users', 'index', '2012-11-22 18:10:08', 1),
(874, 1, 'e9a0c60c69354fc27609d8f9cb21f8ff', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:17.0) Gecko/17.0 Firefox/17.0', 'http://local.classificados.com.br/admin/usuarios', 'Array\n(\n)\n', 'users', 'index', '2012-11-22 18:10:08', 1),
(875, 1, 'e9a0c60c69354fc27609d8f9cb21f8ff', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:17.0) Gecko/17.0 Firefox/17.0', 'http://local.classificados.com.br/admin/usuarios', 'Array\n(\n)\n', 'users', 'index', '2012-11-22 18:12:45', 1),
(876, 1, 'e9a0c60c69354fc27609d8f9cb21f8ff', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:17.0) Gecko/17.0 Firefox/17.0', 'http://local.classificados.com.br/admin/usuarios', 'Array\n(\n)\n', 'users', 'index', '2012-11-22 18:12:45', 1),
(877, 1, 'e9a0c60c69354fc27609d8f9cb21f8ff', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:17.0) Gecko/17.0 Firefox/17.0', 'http://local.classificados.com.br/admin/usuarios', 'Array\n(\n)\n', 'users', 'index', '2012-11-22 18:15:03', 1),
(878, 1, 'e9a0c60c69354fc27609d8f9cb21f8ff', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:17.0) Gecko/17.0 Firefox/17.0', 'http://local.classificados.com.br/admin/usuarios', 'Array\n(\n)\n', 'users', 'index', '2012-11-22 18:15:03', 1),
(879, 1, '6f0be9a2be5f337a5f91fbc7a1ce6d03', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:17.0) Gecko/17.0 Firefox/17.0', 'http://local.classificados.com.br/admin/usuarios', 'Array\n(\n)\n', 'users', 'index', '2012-11-22 18:15:42', 1),
(880, 1, '6f0be9a2be5f337a5f91fbc7a1ce6d03', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:17.0) Gecko/17.0 Firefox/17.0', 'http://local.classificados.com.br/admin/usuarios', 'Array\n(\n)\n', 'users', 'index', '2012-11-22 18:15:42', 1),
(881, 1, '6f0be9a2be5f337a5f91fbc7a1ce6d03', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:17.0) Gecko/17.0 Firefox/17.0', 'http://local.classificados.com.br/admin/usuarios', 'Array\n(\n)\n', 'users', 'index', '2012-11-22 18:16:07', 1),
(882, 1, '6f0be9a2be5f337a5f91fbc7a1ce6d03', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:17.0) Gecko/17.0 Firefox/17.0', 'http://local.classificados.com.br/admin/usuarios', 'Array\n(\n)\n', 'users', 'index', '2012-11-22 18:16:07', 1),
(883, 1, '6f0be9a2be5f337a5f91fbc7a1ce6d03', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:17.0) Gecko/17.0 Firefox/17.0', 'http://local.classificados.com.br/admin/usuarios', 'Array\n(\n)\n', 'users', 'index', '2012-11-22 18:16:13', 1),
(884, 1, '6f0be9a2be5f337a5f91fbc7a1ce6d03', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:17.0) Gecko/17.0 Firefox/17.0', 'http://local.classificados.com.br/admin/usuarios', 'Array\n(\n)\n', 'users', 'index', '2012-11-22 18:16:13', 1),
(885, 1, '6f0be9a2be5f337a5f91fbc7a1ce6d03', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:17.0) Gecko/17.0 Firefox/17.0', 'http://local.classificados.com.br/admin/usuarios', 'Array\n(\n)\n', 'users', 'index', '2012-11-22 18:16:30', 1),
(886, 1, '6f0be9a2be5f337a5f91fbc7a1ce6d03', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:17.0) Gecko/17.0 Firefox/17.0', 'http://local.classificados.com.br/admin/usuarios', 'Array\n(\n)\n', 'users', 'index', '2012-11-22 18:16:30', 1),
(887, 1, '6f0be9a2be5f337a5f91fbc7a1ce6d03', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:17.0) Gecko/17.0 Firefox/17.0', 'http://local.classificados.com.br/admin/usuarios', 'Array\n(\n)\n', 'users', 'index', '2012-11-22 18:16:38', 1),
(888, 1, '6f0be9a2be5f337a5f91fbc7a1ce6d03', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:17.0) Gecko/17.0 Firefox/17.0', 'http://local.classificados.com.br/admin/usuarios', 'Array\n(\n)\n', 'users', 'index', '2012-11-22 18:16:38', 1),
(889, 1, '6f0be9a2be5f337a5f91fbc7a1ce6d03', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:17.0) Gecko/17.0 Firefox/17.0', 'http://local.classificados.com.br/admin/usuarios', 'Array\n(\n)\n', 'users', 'index', '2012-11-22 18:16:44', 1),
(890, 1, '6f0be9a2be5f337a5f91fbc7a1ce6d03', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:17.0) Gecko/17.0 Firefox/17.0', 'http://local.classificados.com.br/admin/usuarios', 'Array\n(\n)\n', 'users', 'index', '2012-11-22 18:16:44', 1),
(891, 1, '6f0be9a2be5f337a5f91fbc7a1ce6d03', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:17.0) Gecko/17.0 Firefox/17.0', 'http://local.classificados.com.br/admin/usuarios', 'Array\n(\n)\n', 'users', 'index', '2012-11-22 18:18:00', 1),
(892, 1, '6f0be9a2be5f337a5f91fbc7a1ce6d03', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:17.0) Gecko/17.0 Firefox/17.0', 'http://local.classificados.com.br/admin/usuarios', 'Array\n(\n)\n', 'users', 'index', '2012-11-22 18:18:00', 1),
(893, 1, '6f0be9a2be5f337a5f91fbc7a1ce6d03', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:17.0) Gecko/17.0 Firefox/17.0', 'http://local.classificados.com.br/admin/usuarios', 'Array\n(\n)\n', 'users', 'index', '2012-11-22 18:18:03', 1),
(894, 1, '6f0be9a2be5f337a5f91fbc7a1ce6d03', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:17.0) Gecko/17.0 Firefox/17.0', 'http://local.classificados.com.br/admin/usuarios', 'Array\n(\n)\n', 'users', 'index', '2012-11-22 18:18:03', 1),
(895, 1, '6f0be9a2be5f337a5f91fbc7a1ce6d03', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:17.0) Gecko/17.0 Firefox/17.0', 'http://local.classificados.com.br/admin/usuarios', 'Array\n(\n)\n', 'users', 'index', '2012-11-22 18:18:32', 1),
(896, 1, '6f0be9a2be5f337a5f91fbc7a1ce6d03', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:17.0) Gecko/17.0 Firefox/17.0', 'http://local.classificados.com.br/admin/usuarios', 'Array\n(\n)\n', 'users', 'index', '2012-11-22 18:18:32', 1),
(897, 1, '6f0be9a2be5f337a5f91fbc7a1ce6d03', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:17.0) Gecko/17.0 Firefox/17.0', 'http://local.classificados.com.br/admin/usuarios', 'Array\n(\n)\n', 'users', 'index', '2012-11-22 18:20:39', 1),
(898, 1, '6f0be9a2be5f337a5f91fbc7a1ce6d03', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:17.0) Gecko/17.0 Firefox/17.0', 'http://local.classificados.com.br/admin/usuarios', 'Array\n(\n)\n', 'users', 'index', '2012-11-22 18:20:39', 1),
(899, 1, '6f0be9a2be5f337a5f91fbc7a1ce6d03', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:17.0) Gecko/17.0 Firefox/17.0', 'http://local.classificados.com.br/admin/usuarios', 'Array\n(\n)\n', 'users', 'index', '2012-11-22 18:20:42', 1),
(900, 1, '6f0be9a2be5f337a5f91fbc7a1ce6d03', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:17.0) Gecko/17.0 Firefox/17.0', 'http://local.classificados.com.br/admin/usuarios', 'Array\n(\n)\n', 'users', 'index', '2012-11-22 18:20:42', 1),
(901, 1, '2fe4f600b6cada2c3f90ef3cda448378', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:17.0) Gecko/17.0 Firefox/17.0', 'http://local.classificados.com.br/admin/usuarios', 'Array\n(\n)\n', 'users', 'index', '2012-11-22 18:20:44', 1),
(902, 1, '2fe4f600b6cada2c3f90ef3cda448378', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:17.0) Gecko/17.0 Firefox/17.0', 'http://local.classificados.com.br/admin/usuarios', 'Array\n(\n)\n', 'users', 'index', '2012-11-22 18:20:44', 1),
(903, 1, '2fe4f600b6cada2c3f90ef3cda448378', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:17.0) Gecko/17.0 Firefox/17.0', 'http://local.classificados.com.br/admin/usuarios/JTdCJTIyc2Vla2luZyUyMiUzQSUyMnRlc3RlJTIyJTdE', 'Array\n(\n)\n', 'users', 'index', '2012-11-22 18:20:49', 1),
(904, 1, '2fe4f600b6cada2c3f90ef3cda448378', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:17.0) Gecko/17.0 Firefox/17.0', 'http://local.classificados.com.br/admin/usuarios/JTdCJTIyc2Vla2luZyUyMiUzQSUyMnRlc3RlJTIyJTdE', 'Array\n(\n)\n', 'users', 'index', '2012-11-22 18:20:49', 1),
(905, 1, '2fe4f600b6cada2c3f90ef3cda448378', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:17.0) Gecko/17.0 Firefox/17.0', 'http://local.classificados.com.br/admin/usuarios/JTdCJTIyc2Vla2luZyUyMiUzQSUyMmFkbWluJTIyJTdE', 'Array\n(\n)\n', 'users', 'index', '2012-11-22 18:21:02', 1),
(906, 1, '2fe4f600b6cada2c3f90ef3cda448378', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:17.0) Gecko/17.0 Firefox/17.0', 'http://local.classificados.com.br/admin/usuarios/JTdCJTIyc2Vla2luZyUyMiUzQSUyMmFkbWluJTIyJTdE', 'Array\n(\n)\n', 'users', 'index', '2012-11-22 18:21:02', 1),
(907, 1, '2fe4f600b6cada2c3f90ef3cda448378', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:17.0) Gecko/17.0 Firefox/17.0', 'http://local.classificados.com.br/admin/usuarios/JTdCJTIyc2Vla2luZyUyMiUzQSUyMmFkbWluJTIyJTdE', 'Array\n(\n)\n', 'users', 'index', '2012-11-22 18:22:07', 1),
(908, 1, '2fe4f600b6cada2c3f90ef3cda448378', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:17.0) Gecko/17.0 Firefox/17.0', 'http://local.classificados.com.br/admin/usuarios/JTdCJTIyc2Vla2luZyUyMiUzQSUyMmFkbWluJTIyJTdE', 'Array\n(\n)\n', 'users', 'index', '2012-11-22 18:22:07', 1),
(909, 1, '2fe4f600b6cada2c3f90ef3cda448378', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:17.0) Gecko/17.0 Firefox/17.0', 'http://local.classificados.com.br/admin/usuarios/JTdCJTIyc2Vla2luZyUyMiUzQSUyMmFkbWluJTIyJTdE', 'Array\n(\n)\n', 'users', 'index', '2012-11-22 18:22:10', 1),
(910, 1, '2fe4f600b6cada2c3f90ef3cda448378', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:17.0) Gecko/17.0 Firefox/17.0', 'http://local.classificados.com.br/admin/usuarios/JTdCJTIyc2Vla2luZyUyMiUzQSUyMmFkbWluJTIyJTdE', 'Array\n(\n)\n', 'users', 'index', '2012-11-22 18:22:10', 1),
(911, 1, '2fe4f600b6cada2c3f90ef3cda448378', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:17.0) Gecko/17.0 Firefox/17.0', 'http://local.classificados.com.br/admin/usuarios/JTdCJTIyc2Vla2luZyUyMiUzQSUyMmFkbWluJTIyJTdE', 'Array\n(\n)\n', 'users', 'index', '2012-11-22 18:22:17', 1),
(912, 1, '2fe4f600b6cada2c3f90ef3cda448378', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:17.0) Gecko/17.0 Firefox/17.0', 'http://local.classificados.com.br/admin/usuarios/JTdCJTIyc2Vla2luZyUyMiUzQSUyMmFkbWluJTIyJTdE', 'Array\n(\n)\n', 'users', 'index', '2012-11-22 18:23:08', 1),
(913, 1, '2fe4f600b6cada2c3f90ef3cda448378', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:17.0) Gecko/17.0 Firefox/17.0', 'http://local.classificados.com.br/admin/usuarios/JTdCJTIyc2Vla2luZyUyMiUzQSUyMmFkbWluJTIyJTdE', 'Array\n(\n)\n', 'users', 'index', '2012-11-22 18:23:17', 1),
(914, 1, '2fe4f600b6cada2c3f90ef3cda448378', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:17.0) Gecko/17.0 Firefox/17.0', 'http://local.classificados.com.br/admin/usuarios/JTdCJTIyc2Vla2luZyUyMiUzQSUyMmFkbWluJTIyJTdE', 'Array\n(\n)\n', 'users', 'index', '2012-11-22 18:24:05', 1),
(915, 1, '2fe4f600b6cada2c3f90ef3cda448378', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:17.0) Gecko/17.0 Firefox/17.0', 'http://local.classificados.com.br/admin/usuarios/JTdCJTIyc2Vla2luZyUyMiUzQSUyMmFkbWluJTIyJTdE', 'Array\n(\n)\n', 'users', 'index', '2012-11-22 18:24:05', 1),
(916, 1, '2fe4f600b6cada2c3f90ef3cda448378', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:17.0) Gecko/17.0 Firefox/17.0', 'http://local.classificados.com.br/admin/usuarios/JTdCJTIyc2Vla2luZyUyMiUzQSUyMnRlc3RlJTIyJTdE', 'Array\n(\n)\n', 'users', 'index', '2012-11-22 18:24:17', 1),
(917, 1, '2fe4f600b6cada2c3f90ef3cda448378', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:17.0) Gecko/17.0 Firefox/17.0', 'http://local.classificados.com.br/admin/usuarios/JTdCJTIyc2Vla2luZyUyMiUzQSUyMnRlc3RlJTIyJTdE', 'Array\n(\n)\n', 'users', 'index', '2012-11-22 18:24:39', 1),
(918, 1, '2fe4f600b6cada2c3f90ef3cda448378', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:17.0) Gecko/17.0 Firefox/17.0', 'http://local.classificados.com.br/admin/usuarios/JTdCJTIyc2Vla2luZyUyMiUzQSUyMnRlc3RlJTIyJTdE', 'Array\n(\n)\n', 'users', 'index', '2012-11-22 18:24:39', 1),
(919, 1, 'd15d9c751b05855eca7c10628ff4c1e3', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:17.0) Gecko/17.0 Firefox/17.0', 'http://local.classificados.com.br/admin/usuarios/JTdCJTIyc2Vla2luZyUyMiUzQSUyMnRlc3RlJTIyJTdE', 'Array\n(\n)\n', 'users', 'index', '2012-11-22 18:26:49', 1),
(920, 1, 'd15d9c751b05855eca7c10628ff4c1e3', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:17.0) Gecko/17.0 Firefox/17.0', 'http://local.classificados.com.br/admin/usuarios/JTdCJTIyc2Vla2luZyUyMiUzQSUyMnRlc3RlJTIyJTdE', 'Array\n(\n)\n', 'users', 'index', '2012-11-22 18:26:49', 1),
(921, 1, 'd15d9c751b05855eca7c10628ff4c1e3', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:17.0) Gecko/17.0 Firefox/17.0', 'http://local.classificados.com.br/admin/usuarios/JTdCJTIyc2Vla2luZyUyMiUzQSUyMmFkbWluJTIyJTdE', 'Array\n(\n)\n', 'users', 'index', '2012-11-22 18:26:54', 1),
(922, 1, 'd15d9c751b05855eca7c10628ff4c1e3', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:17.0) Gecko/17.0 Firefox/17.0', 'http://local.classificados.com.br/admin/usuarios/JTdCJTIyc2Vla2luZyUyMiUzQSUyMmFkbWluJTIyJTdE', 'Array\n(\n)\n', 'users', 'index', '2012-11-22 18:26:54', 1),
(923, 1, 'd15d9c751b05855eca7c10628ff4c1e3', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:17.0) Gecko/17.0 Firefox/17.0', 'http://local.classificados.com.br/admin/usuarios/JTdCJTIyc2Vla2luZyUyMiUzQSUyMmFkbWluJTIyJTdE', 'Array\n(\n)\n', 'users', 'index', '2012-11-22 18:28:36', 1),
(924, 1, 'd15d9c751b05855eca7c10628ff4c1e3', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:17.0) Gecko/17.0 Firefox/17.0', 'http://local.classificados.com.br/admin/usuarios/JTdCJTIyc2Vla2luZyUyMiUzQSUyMmFkbWluJTIyJTdE', 'Array\n(\n)\n', 'users', 'index', '2012-11-22 18:29:38', 1),
(925, 1, 'd15d9c751b05855eca7c10628ff4c1e3', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:17.0) Gecko/17.0 Firefox/17.0', 'http://local.classificados.com.br/admin/usuarios/JTdCJTIyc2Vla2luZyUyMiUzQSUyMmFkbWluJTIyJTdE', 'Array\n(\n)\n', 'users', 'index', '2012-11-22 18:29:38', 1),
(926, 1, 'd15d9c751b05855eca7c10628ff4c1e3', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:17.0) Gecko/17.0 Firefox/17.0', 'http://local.classificados.com.br/admin/usuarios', 'Array\n(\n)\n', 'users', 'index', '2012-11-22 18:29:41', 1),
(927, 1, 'd15d9c751b05855eca7c10628ff4c1e3', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:17.0) Gecko/17.0 Firefox/17.0', 'http://local.classificados.com.br/admin/usuarios', 'Array\n(\n)\n', 'users', 'index', '2012-11-22 18:29:41', 1),
(928, 1, 'd15d9c751b05855eca7c10628ff4c1e3', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:17.0) Gecko/17.0 Firefox/17.0', 'http://local.classificados.com.br/admin/usuarios/JTdCJTIyc2Vla2luZyUyMiUzQSUyMnRlc3RlJTIyJTdE', 'Array\n(\n)\n', 'users', 'index', '2012-11-22 18:29:45', 1),
(929, 1, 'd15d9c751b05855eca7c10628ff4c1e3', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:17.0) Gecko/17.0 Firefox/17.0', 'http://local.classificados.com.br/admin/usuarios/JTdCJTIyc2Vla2luZyUyMiUzQSUyMnRlc3RlJTIyJTdE', 'Array\n(\n)\n', 'users', 'index', '2012-11-22 18:29:45', 1),
(930, 1, 'd15d9c751b05855eca7c10628ff4c1e3', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:17.0) Gecko/17.0 Firefox/17.0', 'http://local.classificados.com.br/admin/usuarios/JTdCJTIyc2Vla2luZyUyMiUzQSUyMiUyMiU3RA==', 'Array\n(\n)\n', 'users', 'index', '2012-11-22 18:29:49', 1),
(931, 1, 'd15d9c751b05855eca7c10628ff4c1e3', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:17.0) Gecko/17.0 Firefox/17.0', 'http://local.classificados.com.br/admin/usuarios/JTdCJTIyc2Vla2luZyUyMiUzQSUyMiUyMiU3RA==', 'Array\n(\n)\n', 'users', 'index', '2012-11-22 18:29:49', 1),
(932, 1, 'd15d9c751b05855eca7c10628ff4c1e3', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:17.0) Gecko/17.0 Firefox/17.0', 'http://local.classificados.com.br/admin/parametros', 'Array\n(\n)\n', 'parameters', 'index', '2012-11-22 18:29:55', 1),
(933, 1, 'd15d9c751b05855eca7c10628ff4c1e3', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:17.0) Gecko/17.0 Firefox/17.0', 'http://local.classificados.com.br/admin/parametros/editar/1', 'Array\n(\n)\n', 'parameters', 'update', '2012-11-22 18:29:59', 1),
(934, 1, 'd15d9c751b05855eca7c10628ff4c1e3', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:17.0) Gecko/17.0 Firefox/17.0', 'http://local.classificados.com.br/admin/parametros/editar/1', 'Array\n(\n)\n', 'parameters', 'update', '2012-11-22 18:29:59', 1),
(935, 1, 'd15d9c751b05855eca7c10628ff4c1e3', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:17.0) Gecko/17.0 Firefox/17.0', 'http://local.classificados.com.br/admin/parametros/editar/1', 'Array\n(\n    [name] => rows_per_page\n    [value] => 1\n    [status_id] => 1\n)\n', 'parameters', 'update', '2012-11-22 18:30:03', 1),
(936, 1, 'd15d9c751b05855eca7c10628ff4c1e3', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:17.0) Gecko/17.0 Firefox/17.0', 'http://local.classificados.com.br/admin/parametros', 'Array\n(\n)\n', 'parameters', 'index', '2012-11-22 18:30:03', 1),
(937, 1, 'd15d9c751b05855eca7c10628ff4c1e3', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:17.0) Gecko/17.0 Firefox/17.0', 'http://local.classificados.com.br/admin/usuarios', 'Array\n(\n)\n', 'users', 'index', '2012-11-22 18:30:11', 1),
(938, 1, 'd15d9c751b05855eca7c10628ff4c1e3', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:17.0) Gecko/17.0 Firefox/17.0', 'http://local.classificados.com.br/admin/usuarios', 'Array\n(\n)\n', 'users', 'index', '2012-11-22 18:30:11', 1),
(939, 1, 'd15d9c751b05855eca7c10628ff4c1e3', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:17.0) Gecko/17.0 Firefox/17.0', 'http://local.classificados.com.br/admin/usuarios/2', 'Array\n(\n)\n', 'users', 'index', '2012-11-22 18:30:16', 1),
(940, 1, 'd15d9c751b05855eca7c10628ff4c1e3', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:17.0) Gecko/17.0 Firefox/17.0', 'http://local.classificados.com.br/admin/usuarios/2', 'Array\n(\n)\n', 'users', 'index', '2012-11-22 18:30:16', 1),
(941, 1, 'd15d9c751b05855eca7c10628ff4c1e3', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:17.0) Gecko/17.0 Firefox/17.0', 'http://local.classificados.com.br/admin/usuarios/3', 'Array\n(\n)\n', 'users', 'index', '2012-11-22 18:30:18', 1),
(942, 1, 'd15d9c751b05855eca7c10628ff4c1e3', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:17.0) Gecko/17.0 Firefox/17.0', 'http://local.classificados.com.br/admin/usuarios/3', 'Array\n(\n)\n', 'users', 'index', '2012-11-22 18:30:18', 1),
(943, 1, 'd15d9c751b05855eca7c10628ff4c1e3', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:17.0) Gecko/17.0 Firefox/17.0', 'http://local.classificados.com.br/admin/usuarios/4', 'Array\n(\n)\n', 'users', 'index', '2012-11-22 18:30:19', 1),
(944, 1, 'd15d9c751b05855eca7c10628ff4c1e3', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:17.0) Gecko/17.0 Firefox/17.0', 'http://local.classificados.com.br/admin/usuarios/4', 'Array\n(\n)\n', 'users', 'index', '2012-11-22 18:30:19', 1),
(945, 1, 'd15d9c751b05855eca7c10628ff4c1e3', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:17.0) Gecko/17.0 Firefox/17.0', 'http://local.classificados.com.br/admin/usuarios/4/JTdCJTIyc2Vla2luZyUyMiUzQSUyMmFkbWluJTIyJTdE', 'Array\n(\n)\n', 'users', 'index', '2012-11-22 18:30:23', 1),
(946, 1, 'd15d9c751b05855eca7c10628ff4c1e3', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:17.0) Gecko/17.0 Firefox/17.0', 'http://local.classificados.com.br/admin/usuarios/4/JTdCJTIyc2Vla2luZyUyMiUzQSUyMmFkbWluJTIyJTdE', 'Array\n(\n)\n', 'users', 'index', '2012-11-22 18:30:23', 1),
(947, 1, 'd15d9c751b05855eca7c10628ff4c1e3', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:17.0) Gecko/17.0 Firefox/17.0', 'http://local.classificados.com.br/admin/usuarios/JTdCJTIyc2Vla2luZyUyMiUzQSUyMmFkbWluJTIyJTdE', 'Array\n(\n)\n', 'users', 'index', '2012-11-22 18:30:31', 1),
(948, 1, 'd15d9c751b05855eca7c10628ff4c1e3', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:17.0) Gecko/17.0 Firefox/17.0', 'http://local.classificados.com.br/admin/usuarios/JTdCJTIyc2Vla2luZyUyMiUzQSUyMmFkbWluJTIyJTdE', 'Array\n(\n)\n', 'users', 'index', '2012-11-22 18:30:31', 1),
(949, 1, 'd15d9c751b05855eca7c10628ff4c1e3', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:17.0) Gecko/17.0 Firefox/17.0', 'http://local.classificados.com.br/admin/usuarios/JTdCJTIyc2Vla2luZyUyMiUzQSUyMnRlc3RlJTIyJTdE', 'Array\n(\n)\n', 'users', 'index', '2012-11-22 18:30:37', 1),
(950, 1, 'd15d9c751b05855eca7c10628ff4c1e3', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:17.0) Gecko/17.0 Firefox/17.0', 'http://local.classificados.com.br/admin/usuarios/JTdCJTIyc2Vla2luZyUyMiUzQSUyMnRlc3RlJTIyJTdE', 'Array\n(\n)\n', 'users', 'index', '2012-11-22 18:30:37', 1),
(951, 1, 'd15d9c751b05855eca7c10628ff4c1e3', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:17.0) Gecko/17.0 Firefox/17.0', 'http://local.classificados.com.br/admin/usuarios/2/JTdCJTIyc2Vla2luZyUyMiUzQSUyMnRlc3RlJTIyJTdE', 'Array\n(\n)\n', 'users', 'index', '2012-11-22 18:30:42', 1),
(952, 1, 'd15d9c751b05855eca7c10628ff4c1e3', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:17.0) Gecko/17.0 Firefox/17.0', 'http://local.classificados.com.br/admin/usuarios/2/JTdCJTIyc2Vla2luZyUyMiUzQSUyMnRlc3RlJTIyJTdE', 'Array\n(\n)\n', 'users', 'index', '2012-11-22 18:30:42', 1),
(953, 1, 'd15d9c751b05855eca7c10628ff4c1e3', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:17.0) Gecko/17.0 Firefox/17.0', 'http://local.classificados.com.br/admin/usuarios/1/JTdCJTIyc2Vla2luZyUyMiUzQSUyMmFkbWluJTIyJTdE', 'Array\n(\n)\n', 'users', 'index', '2012-11-22 18:30:53', 1),
(954, 1, 'd15d9c751b05855eca7c10628ff4c1e3', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:17.0) Gecko/17.0 Firefox/17.0', 'http://local.classificados.com.br/admin/usuarios/1/JTdCJTIyc2Vla2luZyUyMiUzQSUyMmFkbWluJTIyJTdE', 'Array\n(\n)\n', 'users', 'index', '2012-11-22 18:30:53', 1),
(955, 1, 'd15d9c751b05855eca7c10628ff4c1e3', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:17.0) Gecko/17.0 Firefox/17.0', 'http://local.classificados.com.br/admin/usuarios/1/JTdCJTIyc2Vla2luZyUyMiUzQSUyMnRlc3RlJTIyJTdE', 'Array\n(\n)\n', 'users', 'index', '2012-11-22 18:31:00', 1),
(956, 1, 'd15d9c751b05855eca7c10628ff4c1e3', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:17.0) Gecko/17.0 Firefox/17.0', 'http://local.classificados.com.br/admin/usuarios/1/JTdCJTIyc2Vla2luZyUyMiUzQSUyMnRlc3RlJTIyJTdE', 'Array\n(\n)\n', 'users', 'index', '2012-11-22 18:31:00', 1),
(957, 1, 'd15d9c751b05855eca7c10628ff4c1e3', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:17.0) Gecko/17.0 Firefox/17.0', 'http://local.classificados.com.br/admin/usuarios/2/JTdCJTIyc2Vla2luZyUyMiUzQSUyMnRlc3RlJTIyJTdE', 'Array\n(\n)\n', 'users', 'index', '2012-11-22 18:31:02', 1),
(958, 1, 'd15d9c751b05855eca7c10628ff4c1e3', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:17.0) Gecko/17.0 Firefox/17.0', 'http://local.classificados.com.br/admin/usuarios/2/JTdCJTIyc2Vla2luZyUyMiUzQSUyMnRlc3RlJTIyJTdE', 'Array\n(\n)\n', 'users', 'index', '2012-11-22 18:31:02', 1),
(959, 1, 'd15d9c751b05855eca7c10628ff4c1e3', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:17.0) Gecko/17.0 Firefox/17.0', 'http://local.classificados.com.br/admin/usuarios/1/JTdCJTIyc2Vla2luZyUyMiUzQSUyMmFkbWluJTIyJTdE', 'Array\n(\n)\n', 'users', 'index', '2012-11-22 18:31:08', 1),
(960, 1, 'd15d9c751b05855eca7c10628ff4c1e3', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:17.0) Gecko/17.0 Firefox/17.0', 'http://local.classificados.com.br/admin/usuarios/1/JTdCJTIyc2Vla2luZyUyMiUzQSUyMmFkbWluJTIyJTdE', 'Array\n(\n)\n', 'users', 'index', '2012-11-22 18:31:08', 1),
(961, 1, 'd15d9c751b05855eca7c10628ff4c1e3', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:17.0) Gecko/17.0 Firefox/17.0', 'http://local.classificados.com.br/admin/usuarios', 'Array\n(\n)\n', 'users', 'index', '2012-11-22 18:31:12', 1),
(962, 1, 'd15d9c751b05855eca7c10628ff4c1e3', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:17.0) Gecko/17.0 Firefox/17.0', 'http://local.classificados.com.br/admin/usuarios', 'Array\n(\n)\n', 'users', 'index', '2012-11-22 18:31:12', 1),
(963, 1, 'd15d9c751b05855eca7c10628ff4c1e3', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:17.0) Gecko/17.0 Firefox/17.0', 'http://local.classificados.com.br/admin/usuarios', 'Array\n(\n)\n', 'users', 'index', '2012-11-22 18:31:14', 1),
(964, 1, 'd15d9c751b05855eca7c10628ff4c1e3', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:17.0) Gecko/17.0 Firefox/17.0', 'http://local.classificados.com.br/admin/usuarios', 'Array\n(\n)\n', 'users', 'index', '2012-11-22 18:31:14', 1),
(965, 1, 'd15d9c751b05855eca7c10628ff4c1e3', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:17.0) Gecko/17.0 Firefox/17.0', 'http://local.classificados.com.br/admin/usuarios/4', 'Array\n(\n)\n', 'users', 'index', '2012-11-22 18:31:15', 1),
(966, 1, 'd15d9c751b05855eca7c10628ff4c1e3', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:17.0) Gecko/17.0 Firefox/17.0', 'http://local.classificados.com.br/admin/usuarios/4', 'Array\n(\n)\n', 'users', 'index', '2012-11-22 18:31:15', 1),
(967, 1, 'd15d9c751b05855eca7c10628ff4c1e3', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:17.0) Gecko/17.0 Firefox/17.0', 'http://local.classificados.com.br/admin/usuarios/4/JTdCJTIyc2Vla2luZyUyMiUzQSUyMnRlc3RlJTIyJTdE', 'Array\n(\n)\n', 'users', 'index', '2012-11-22 18:31:22', 1),
(968, 1, 'd15d9c751b05855eca7c10628ff4c1e3', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:17.0) Gecko/17.0 Firefox/17.0', 'http://local.classificados.com.br/admin/usuarios/4/JTdCJTIyc2Vla2luZyUyMiUzQSUyMnRlc3RlJTIyJTdE', 'Array\n(\n)\n', 'users', 'index', '2012-11-22 18:31:22', 1),
(969, 1, 'd15d9c751b05855eca7c10628ff4c1e3', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:17.0) Gecko/17.0 Firefox/17.0', 'http://local.classificados.com.br/admin/usuarios/1/JTdCJTIyc2Vla2luZyUyMiUzQSUyMmFkbWluJTIyJTdE', 'Array\n(\n)\n', 'users', 'index', '2012-11-22 18:31:29', 1),
(970, 1, 'd15d9c751b05855eca7c10628ff4c1e3', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:17.0) Gecko/17.0 Firefox/17.0', 'http://local.classificados.com.br/admin/usuarios/1/JTdCJTIyc2Vla2luZyUyMiUzQSUyMmFkbWluJTIyJTdE', 'Array\n(\n)\n', 'users', 'index', '2012-11-22 18:31:29', 1),
(971, 1, 'd15d9c751b05855eca7c10628ff4c1e3', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:17.0) Gecko/17.0 Firefox/17.0', 'http://local.classificados.com.br/admin/usuarios/4', 'Array\n(\n)\n', 'users', 'index', '2012-11-22 18:31:35', 1),
(972, 1, 'd15d9c751b05855eca7c10628ff4c1e3', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:17.0) Gecko/17.0 Firefox/17.0', 'http://local.classificados.com.br/admin/usuarios/4', 'Array\n(\n)\n', 'users', 'index', '2012-11-22 18:31:35', 1),
(973, 1, 'd15d9c751b05855eca7c10628ff4c1e3', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:17.0) Gecko/17.0 Firefox/17.0', 'http://local.classificados.com.br/admin/usuarios/4/JTdCJTIyc2Vla2luZyUyMiUzQSUyMmFkbWluJTIyJTdE', 'Array\n(\n)\n', 'users', 'index', '2012-11-22 18:31:38', 1),
(974, 1, 'd15d9c751b05855eca7c10628ff4c1e3', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:17.0) Gecko/17.0 Firefox/17.0', 'http://local.classificados.com.br/admin/usuarios/4/JTdCJTIyc2Vla2luZyUyMiUzQSUyMmFkbWluJTIyJTdE', 'Array\n(\n)\n', 'users', 'index', '2012-11-22 18:31:38', 1),
(975, 1, 'd15d9c751b05855eca7c10628ff4c1e3', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:17.0) Gecko/17.0 Firefox/17.0', 'http://local.classificados.com.br/admin/usuarios/4/JTdCJTIyc2Vla2luZyUyMiUzQSUyMnRlc3RlJTIyJTdE', 'Array\n(\n)\n', 'users', 'index', '2012-11-22 18:31:47', 1),
(976, 1, 'd15d9c751b05855eca7c10628ff4c1e3', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:17.0) Gecko/17.0 Firefox/17.0', 'http://local.classificados.com.br/admin/usuarios/4/JTdCJTIyc2Vla2luZyUyMiUzQSUyMnRlc3RlJTIyJTdE', 'Array\n(\n)\n', 'users', 'index', '2012-11-22 18:31:47', 1),
(977, 1, '0e483878765d484af80372e63c9893dc', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:17.0) Gecko/17.0 Firefox/17.0', 'http://local.classificados.com.br/admin/usuarios/1/JTdCJTIyc2Vla2luZyUyMiUzQSUyMnRlc3RlJTIyJTdE', 'Array\n(\n)\n', 'users', 'index', '2012-11-22 18:32:27', 1),
(978, 1, '0e483878765d484af80372e63c9893dc', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:17.0) Gecko/17.0 Firefox/17.0', 'http://local.classificados.com.br/admin/usuarios/1/JTdCJTIyc2Vla2luZyUyMiUzQSUyMnRlc3RlJTIyJTdE', 'Array\n(\n)\n', 'users', 'index', '2012-11-22 18:32:27', 1),
(979, 1, '0e483878765d484af80372e63c9893dc', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:17.0) Gecko/17.0 Firefox/17.0', 'http://local.classificados.com.br/admin/usuarios/4', 'Array\n(\n)\n', 'users', 'index', '2012-11-22 18:32:32', 1),
(980, 1, '0e483878765d484af80372e63c9893dc', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:17.0) Gecko/17.0 Firefox/17.0', 'http://local.classificados.com.br/admin/usuarios/4', 'Array\n(\n)\n', 'users', 'index', '2012-11-22 18:32:32', 1),
(981, 1, '0e483878765d484af80372e63c9893dc', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:17.0) Gecko/17.0 Firefox/17.0', 'http://local.classificados.com.br/admin/usuarios/4/JTdCJTIyc2Vla2luZyUyMiUzQSUyMnRlc3RlJTIyJTdE', 'Array\n(\n)\n', 'users', 'index', '2012-11-22 18:32:38', 1),
(982, 1, '0e483878765d484af80372e63c9893dc', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:17.0) Gecko/17.0 Firefox/17.0', 'http://local.classificados.com.br/admin/usuarios/4/JTdCJTIyc2Vla2luZyUyMiUzQSUyMnRlc3RlJTIyJTdE', 'Array\n(\n)\n', 'users', 'index', '2012-11-22 18:32:38', 1),
(983, 1, '0e483878765d484af80372e63c9893dc', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:17.0) Gecko/17.0 Firefox/17.0', 'http://local.classificados.com.br/admin/usuarios/1/JTdCJTIyc2Vla2luZyUyMiUzQSUyMnRlc3RlJTIyJTdE', 'Array\n(\n)\n', 'users', 'index', '2012-11-22 18:33:22', 1),
(984, 1, '0e483878765d484af80372e63c9893dc', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:17.0) Gecko/17.0 Firefox/17.0', 'http://local.classificados.com.br/admin/usuarios/1/JTdCJTIyc2Vla2luZyUyMiUzQSUyMnRlc3RlJTIyJTdE', 'Array\n(\n)\n', 'users', 'index', '2012-11-22 18:33:22', 1),
(985, 1, '0e483878765d484af80372e63c9893dc', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:17.0) Gecko/17.0 Firefox/17.0', 'http://local.classificados.com.br/admin/usuarios/1/JTdCJTIyc2Vla2luZyUyMiUzQSUyMnRlc3RlJTIyJTdE', 'Array\n(\n)\n', 'users', 'index', '2012-11-22 18:33:23', 1);
INSERT INTO `sys_log` (`id`, `user_id`, `session_id`, `user_ip`, `user_browser`, `user_url`, `user_post`, `model`, `action`, `created_in`, `status_id`) VALUES
(986, 1, '0e483878765d484af80372e63c9893dc', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:17.0) Gecko/17.0 Firefox/17.0', 'http://local.classificados.com.br/admin/usuarios/1/JTdCJTIyc2Vla2luZyUyMiUzQSUyMnRlc3RlJTIyJTdE', 'Array\n(\n)\n', 'users', 'index', '2012-11-22 18:33:23', 1),
(987, 1, '0e483878765d484af80372e63c9893dc', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:17.0) Gecko/17.0 Firefox/17.0', 'http://local.classificados.com.br/admin/usuarios/1/JTdCJTIyc2Vla2luZyUyMiUzQSUyMnRlc3RlJTIyJTdE', 'Array\n(\n)\n', 'users', 'index', '2012-11-22 18:33:25', 1),
(988, 1, '0e483878765d484af80372e63c9893dc', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:17.0) Gecko/17.0 Firefox/17.0', 'http://local.classificados.com.br/admin/usuarios/1/JTdCJTIyc2Vla2luZyUyMiUzQSUyMnRlc3RlJTIyJTdE', 'Array\n(\n)\n', 'users', 'index', '2012-11-22 18:33:25', 1),
(989, 1, '0e483878765d484af80372e63c9893dc', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:17.0) Gecko/17.0 Firefox/17.0', 'http://local.classificados.com.br/admin/usuarios/4/JTdCJTIyc2Vla2luZyUyMiUzQSUyMnRlc3RlJTIyJTdE', 'Array\n(\n)\n', 'users', 'index', '2012-11-22 18:33:31', 1),
(990, 1, '0e483878765d484af80372e63c9893dc', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:17.0) Gecko/17.0 Firefox/17.0', 'http://local.classificados.com.br/admin/usuarios/4/JTdCJTIyc2Vla2luZyUyMiUzQSUyMnRlc3RlJTIyJTdE', 'Array\n(\n)\n', 'users', 'index', '2012-11-22 18:33:31', 1),
(991, 1, '0e483878765d484af80372e63c9893dc', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:17.0) Gecko/17.0 Firefox/17.0', 'http://local.classificados.com.br/admin/usuarios/1/JTdCJTIyc2Vla2luZyUyMiUzQSUyMnRlc3RlJTIyJTdE', 'Array\n(\n)\n', 'users', 'index', '2012-11-22 18:33:56', 1),
(992, 1, '0e483878765d484af80372e63c9893dc', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:17.0) Gecko/17.0 Firefox/17.0', 'http://local.classificados.com.br/admin/usuarios/1/JTdCJTIyc2Vla2luZyUyMiUzQSUyMnRlc3RlJTIyJTdE', 'Array\n(\n)\n', 'users', 'index', '2012-11-22 18:33:56', 1),
(993, 1, '0e483878765d484af80372e63c9893dc', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:17.0) Gecko/17.0 Firefox/17.0', 'http://local.classificados.com.br/admin/usuarios', 'Array\n(\n)\n', 'users', 'index', '2012-11-22 18:33:59', 1),
(994, 1, '0e483878765d484af80372e63c9893dc', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:17.0) Gecko/17.0 Firefox/17.0', 'http://local.classificados.com.br/admin/usuarios', 'Array\n(\n)\n', 'users', 'index', '2012-11-22 18:33:59', 1),
(995, 1, '643a28c43ce3ec08bb57e20f6529c451', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:17.0) Gecko/17.0 Firefox/17.0', 'http://local.classificados.com.br/admin/parametros', 'Array\n(\n)\n', 'parameters', 'index', '2012-11-22 18:44:57', 1),
(996, 1, '643a28c43ce3ec08bb57e20f6529c451', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:17.0) Gecko/17.0 Firefox/17.0', 'http://local.classificados.com.br/admin/parametros/2', 'Array\n(\n)\n', 'parameters', 'index', '2012-11-22 18:45:01', 1),
(997, 1, '643a28c43ce3ec08bb57e20f6529c451', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:17.0) Gecko/17.0 Firefox/17.0', 'http://local.classificados.com.br/admin/parametros/3', 'Array\n(\n)\n', 'parameters', 'index', '2012-11-22 18:45:03', 1),
(998, 1, '643a28c43ce3ec08bb57e20f6529c451', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:17.0) Gecko/17.0 Firefox/17.0', 'http://local.classificados.com.br/admin/parametros/4', 'Array\n(\n)\n', 'parameters', 'index', '2012-11-22 18:45:07', 1),
(999, 1, '643a28c43ce3ec08bb57e20f6529c451', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:17.0) Gecko/17.0 Firefox/17.0', 'http://local.classificados.com.br/admin/parametros/editar/1', 'Array\n(\n)\n', 'parameters', 'update', '2012-11-22 18:45:10', 1),
(1000, 1, '643a28c43ce3ec08bb57e20f6529c451', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:17.0) Gecko/17.0 Firefox/17.0', 'http://local.classificados.com.br/admin/parametros/editar/1', 'Array\n(\n)\n', 'parameters', 'update', '2012-11-22 18:45:10', 1),
(1001, 1, '643a28c43ce3ec08bb57e20f6529c451', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:17.0) Gecko/17.0 Firefox/17.0', 'http://local.classificados.com.br/admin/parametros/editar/1', 'Array\n(\n    [name] => rows_per_page\n    [value] => 10\n    [status_id] => 1\n)\n', 'parameters', 'update', '2012-11-22 18:45:16', 1),
(1002, 1, '643a28c43ce3ec08bb57e20f6529c451', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:17.0) Gecko/17.0 Firefox/17.0', 'http://local.classificados.com.br/admin/parametros', 'Array\n(\n)\n', 'parameters', 'index', '2012-11-22 18:45:16', 1),
(1003, 1, '643a28c43ce3ec08bb57e20f6529c451', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:17.0) Gecko/17.0 Firefox/17.0', 'http://local.classificados.com.br/admin/grupos', 'Array\n(\n)\n', 'user_groups', 'index', '2012-11-22 18:46:20', 1),
(1004, 1, '643a28c43ce3ec08bb57e20f6529c451', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:17.0) Gecko/17.0 Firefox/17.0', 'http://local.classificados.com.br/admin/parametros', 'Array\n(\n)\n', 'parameters', 'index', '2012-11-22 18:46:42', 1),
(1005, 1, '643a28c43ce3ec08bb57e20f6529c451', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:17.0) Gecko/17.0 Firefox/17.0', 'http://local.classificados.com.br/admin/parametros', 'Array\n(\n)\n', 'parameters', 'index', '2012-11-22 18:49:09', 1),
(1006, 1, '643a28c43ce3ec08bb57e20f6529c451', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:17.0) Gecko/17.0 Firefox/17.0', 'http://local.classificados.com.br/admin/parametros/JTdCJTIyc2Vla2luZyUyMiUzQSUyMkFVVCUyMiU3RA==', 'Array\n(\n)\n', 'parameters', 'index', '2012-11-22 18:49:55', 1),
(1007, 1, '80a76e4cd7e3c649b20447f8e2086be2', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:17.0) Gecko/17.0 Firefox/17.0', 'http://local.classificados.com.br/admin/parametros', 'Array\n(\n)\n', 'parameters', 'index', '2012-11-22 18:49:58', 1),
(1008, 1, '80a76e4cd7e3c649b20447f8e2086be2', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:17.0) Gecko/17.0 Firefox/17.0', 'http://local.classificados.com.br/admin/grupos', 'Array\n(\n)\n', 'user_groups', 'index', '2012-11-22 18:52:15', 1),
(1009, 1, '80a76e4cd7e3c649b20447f8e2086be2', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:17.0) Gecko/17.0 Firefox/17.0', 'http://local.classificados.com.br/admin/grupos', 'Array\n(\n)\n', 'user_groups', 'index', '2012-11-22 18:53:07', 1),
(1010, 1, '80a76e4cd7e3c649b20447f8e2086be2', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:17.0) Gecko/17.0 Firefox/17.0', 'http://local.classificados.com.br/admin/parametros', 'Array\n(\n)\n', 'parameters', 'index', '2012-11-22 18:53:34', 1),
(1011, 1, '7905e7e68d1bb2b0b1809e4cb54baf6a', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:17.0) Gecko/17.0 Firefox/17.0', 'http://local.classificados.com.br/admin/parametros', 'Array\n(\n)\n', 'parameters', 'index', '2012-11-22 19:01:28', 1),
(1012, 1, '7905e7e68d1bb2b0b1809e4cb54baf6a', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:17.0) Gecko/17.0 Firefox/17.0', 'http://local.classificados.com.br/admin/parametros/editar/1', 'Array\n(\n)\n', 'parameters', 'update', '2012-11-22 19:01:34', 1),
(1013, 1, '7905e7e68d1bb2b0b1809e4cb54baf6a', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:17.0) Gecko/17.0 Firefox/17.0', 'http://local.classificados.com.br/admin/parametros/editar/1', 'Array\n(\n)\n', 'parameters', 'update', '2012-11-22 19:01:34', 1),
(1014, 1, '7905e7e68d1bb2b0b1809e4cb54baf6a', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:17.0) Gecko/17.0 Firefox/17.0', 'http://local.classificados.com.br/admin/parametros/editar/1', 'Array\n(\n    [name] => rows_per_page\n    [value] => 1\n    [status_id] => 1\n)\n', 'parameters', 'update', '2012-11-22 19:01:37', 1),
(1015, 1, '7905e7e68d1bb2b0b1809e4cb54baf6a', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:17.0) Gecko/17.0 Firefox/17.0', 'http://local.classificados.com.br/admin/parametros', 'Array\n(\n)\n', 'parameters', 'index', '2012-11-22 19:01:37', 1),
(1016, 1, '7905e7e68d1bb2b0b1809e4cb54baf6a', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:17.0) Gecko/17.0 Firefox/17.0', 'http://local.classificados.com.br/admin/parametros/4', 'Array\n(\n)\n', 'parameters', 'index', '2012-11-22 19:01:40', 1),
(1017, 1, '7905e7e68d1bb2b0b1809e4cb54baf6a', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:17.0) Gecko/17.0 Firefox/17.0', 'http://local.classificados.com.br/admin/parametros/4/JTdCJTIyc2Vla2luZyUyMiUzQSUyMnRlc3RlJTIyJTdE', 'Array\n(\n)\n', 'parameters', 'index', '2012-11-22 19:01:45', 1),
(1018, 1, '7905e7e68d1bb2b0b1809e4cb54baf6a', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:17.0) Gecko/17.0 Firefox/17.0', 'http://local.classificados.com.br/admin/parametros', 'Array\n(\n)\n', 'parameters', 'index', '2012-11-22 19:01:54', 1),
(1019, 1, '7905e7e68d1bb2b0b1809e4cb54baf6a', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:17.0) Gecko/17.0 Firefox/17.0', 'http://local.classificados.com.br/admin/parametros', 'Array\n(\n)\n', 'parameters', 'index', '2012-11-22 19:01:56', 1),
(1020, 1, '7905e7e68d1bb2b0b1809e4cb54baf6a', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:17.0) Gecko/17.0 Firefox/17.0', 'http://local.classificados.com.br/admin/parametros/6', 'Array\n(\n)\n', 'parameters', 'index', '2012-11-22 19:02:01', 1),
(1021, 1, '7905e7e68d1bb2b0b1809e4cb54baf6a', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:17.0) Gecko/17.0 Firefox/17.0', 'http://local.classificados.com.br/admin/parametros', 'Array\n(\n)\n', 'parameters', 'index', '2012-11-22 19:02:04', 1),
(1022, 1, '7905e7e68d1bb2b0b1809e4cb54baf6a', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:17.0) Gecko/17.0 Firefox/17.0', 'http://local.classificados.com.br/admin/parametros/4', 'Array\n(\n)\n', 'parameters', 'index', '2012-11-22 19:02:08', 1),
(1023, 1, '7905e7e68d1bb2b0b1809e4cb54baf6a', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:17.0) Gecko/17.0 Firefox/17.0', 'http://local.classificados.com.br/admin/parametros/4/JTdCJTIyc2Vla2luZyUyMiUzQSUyMmF1dGhvciUyMiU3RA==', 'Array\n(\n)\n', 'parameters', 'index', '2012-11-22 19:02:10', 1),
(1024, 1, '7905e7e68d1bb2b0b1809e4cb54baf6a', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:17.0) Gecko/17.0 Firefox/17.0', 'http://local.classificados.com.br/admin/parametros', 'Array\n(\n)\n', 'parameters', 'index', '2012-11-22 19:02:15', 1),
(1025, 1, '7905e7e68d1bb2b0b1809e4cb54baf6a', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:17.0) Gecko/17.0 Firefox/17.0', 'http://local.classificados.com.br/admin/usuarios', 'Array\n(\n)\n', 'users', 'index', '2012-11-22 19:02:20', 1),
(1026, 1, '7905e7e68d1bb2b0b1809e4cb54baf6a', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:17.0) Gecko/17.0 Firefox/17.0', 'http://local.classificados.com.br/admin/usuarios', 'Array\n(\n)\n', 'users', 'index', '2012-11-22 19:02:20', 1),
(1027, 1, '7905e7e68d1bb2b0b1809e4cb54baf6a', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:17.0) Gecko/17.0 Firefox/17.0', 'http://local.classificados.com.br/admin/usuarios/4', 'Array\n(\n)\n', 'users', 'index', '2012-11-22 19:02:23', 1),
(1028, 1, '7905e7e68d1bb2b0b1809e4cb54baf6a', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:17.0) Gecko/17.0 Firefox/17.0', 'http://local.classificados.com.br/admin/usuarios/4', 'Array\n(\n)\n', 'users', 'index', '2012-11-22 19:02:23', 1),
(1029, 1, '7905e7e68d1bb2b0b1809e4cb54baf6a', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:17.0) Gecko/17.0 Firefox/17.0', 'http://local.classificados.com.br/admin/usuarios/4/JTdCJTIyc2Vla2luZyUyMiUzQSUyMnRlc3RlJTIyJTdE', 'Array\n(\n)\n', 'users', 'index', '2012-11-22 19:02:26', 1),
(1030, 1, '7905e7e68d1bb2b0b1809e4cb54baf6a', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:17.0) Gecko/17.0 Firefox/17.0', 'http://local.classificados.com.br/admin/usuarios/4/JTdCJTIyc2Vla2luZyUyMiUzQSUyMnRlc3RlJTIyJTdE', 'Array\n(\n)\n', 'users', 'index', '2012-11-22 19:02:26', 1),
(1031, 1, '7905e7e68d1bb2b0b1809e4cb54baf6a', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:17.0) Gecko/17.0 Firefox/17.0', 'http://local.classificados.com.br/admin/usuarios', 'Array\n(\n)\n', 'users', 'index', '2012-11-22 19:02:35', 1),
(1032, 1, '7905e7e68d1bb2b0b1809e4cb54baf6a', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:17.0) Gecko/17.0 Firefox/17.0', 'http://local.classificados.com.br/admin/usuarios', 'Array\n(\n)\n', 'users', 'index', '2012-11-22 19:02:35', 1),
(1033, 1, '7905e7e68d1bb2b0b1809e4cb54baf6a', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:17.0) Gecko/17.0 Firefox/17.0', 'http://local.classificados.com.br/admin/usuarios', 'Array\n(\n)\n', 'users', 'index', '2012-11-22 19:02:59', 1),
(1034, 1, '7905e7e68d1bb2b0b1809e4cb54baf6a', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:17.0) Gecko/17.0 Firefox/17.0', 'http://local.classificados.com.br/admin/usuarios', 'Array\n(\n)\n', 'users', 'index', '2012-11-22 19:02:59', 1),
(1035, 1, '7905e7e68d1bb2b0b1809e4cb54baf6a', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:17.0) Gecko/17.0 Firefox/17.0', 'http://local.classificados.com.br/admin/usuarios/4', 'Array\n(\n)\n', 'users', 'index', '2012-11-22 19:03:02', 1),
(1036, 1, '7905e7e68d1bb2b0b1809e4cb54baf6a', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:17.0) Gecko/17.0 Firefox/17.0', 'http://local.classificados.com.br/admin/usuarios/4', 'Array\n(\n)\n', 'users', 'index', '2012-11-22 19:03:02', 1),
(1037, 1, '7905e7e68d1bb2b0b1809e4cb54baf6a', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:17.0) Gecko/17.0 Firefox/17.0', 'http://local.classificados.com.br/admin/usuarios/4/JTdCJTIyc2Vla2luZyUyMiUzQSUyMnRlc3RlJTIyJTdE', 'Array\n(\n)\n', 'users', 'index', '2012-11-22 19:03:09', 1),
(1038, 1, '7905e7e68d1bb2b0b1809e4cb54baf6a', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:17.0) Gecko/17.0 Firefox/17.0', 'http://local.classificados.com.br/admin/usuarios/4/JTdCJTIyc2Vla2luZyUyMiUzQSUyMnRlc3RlJTIyJTdE', 'Array\n(\n)\n', 'users', 'index', '2012-11-22 19:03:09', 1),
(1039, 1, '7905e7e68d1bb2b0b1809e4cb54baf6a', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:17.0) Gecko/17.0 Firefox/17.0', 'http://local.classificados.com.br/admin/usuarios/4/JTdCJTIyc2Vla2luZyUyMiUzQSUyMnRlc3RlJTIyJTdE', 'Array\n(\n)\n', 'users', 'index', '2012-11-22 19:03:53', 1),
(1040, 1, '7905e7e68d1bb2b0b1809e4cb54baf6a', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:17.0) Gecko/17.0 Firefox/17.0', 'http://local.classificados.com.br/admin/usuarios/4/JTdCJTIyc2Vla2luZyUyMiUzQSUyMnRlc3RlJTIyJTdE', 'Array\n(\n)\n', 'users', 'index', '2012-11-22 19:04:29', 1),
(1041, 1, '7905e7e68d1bb2b0b1809e4cb54baf6a', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:17.0) Gecko/17.0 Firefox/17.0', 'http://local.classificados.com.br/admin/usuarios/4/JTdCJTIyc2Vla2luZyUyMiUzQSUyMnRlc3RlJTIyJTdE', 'Array\n(\n)\n', 'users', 'index', '2012-11-22 19:04:29', 1),
(1042, 1, '5117b29a45303e6d1d3ec0b58af5eef7', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:17.0) Gecko/17.0 Firefox/17.0', 'http://local.classificados.com.br/admin/usuarios/4/JTdCJTIyc2Vla2luZyUyMiUzQSUyMnRlc3RlJTIyJTdE', 'Array\n(\n)\n', 'users', 'index', '2012-11-22 19:07:41', 1),
(1043, 1, '5117b29a45303e6d1d3ec0b58af5eef7', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:17.0) Gecko/17.0 Firefox/17.0', 'http://local.classificados.com.br/admin/usuarios/4/JTdCJTIyc2Vla2luZyUyMiUzQSUyMnRlc3RlJTIyJTdE', 'Array\n(\n)\n', 'users', 'index', '2012-11-22 19:08:06', 1),
(1044, 1, '5117b29a45303e6d1d3ec0b58af5eef7', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:17.0) Gecko/17.0 Firefox/17.0', 'http://local.classificados.com.br/admin/usuarios/4/JTdCJTIyc2Vla2luZyUyMiUzQSUyMnRlc3RlJTIyJTdE', 'Array\n(\n)\n', 'users', 'index', '2012-11-22 19:08:08', 1),
(1045, 1, '5117b29a45303e6d1d3ec0b58af5eef7', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:17.0) Gecko/17.0 Firefox/17.0', 'http://local.classificados.com.br/admin/usuarios/4/JTdCJTIyc2Vla2luZyUyMiUzQSUyMnRlc3RlJTIyJTdE', 'Array\n(\n)\n', 'users', 'index', '2012-11-22 19:08:08', 1),
(1046, 1, '5117b29a45303e6d1d3ec0b58af5eef7', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:17.0) Gecko/17.0 Firefox/17.0', 'http://local.classificados.com.br/admin/usuarios/4/JTdCJTIyc2Vla2luZyUyMiUzQSUyMnRlc3RlJTIyJTdE', 'Array\n(\n)\n', 'users', 'index', '2012-11-22 19:08:08', 1),
(1047, 1, '5117b29a45303e6d1d3ec0b58af5eef7', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:17.0) Gecko/17.0 Firefox/17.0', 'http://local.classificados.com.br/admin/usuarios/4/JTdCJTIyc2Vla2luZyUyMiUzQSUyMnRlc3RlJTIyJTdE', 'Array\n(\n)\n', 'users', 'index', '2012-11-22 19:08:23', 1),
(1048, 1, '5117b29a45303e6d1d3ec0b58af5eef7', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:17.0) Gecko/17.0 Firefox/17.0', 'http://local.classificados.com.br/admin/usuarios/4/JTdCJTIyc2Vla2luZyUyMiUzQSUyMnRlc3RlJTIyJTdE', 'Array\n(\n)\n', 'users', 'index', '2012-11-22 19:08:23', 1),
(1049, 1, '5117b29a45303e6d1d3ec0b58af5eef7', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:17.0) Gecko/17.0 Firefox/17.0', 'http://local.classificados.com.br/admin/usuarios/4/JTdCJTIyc2Vla2luZyUyMiUzQSUyMnRlc3RlJTIyJTdE', 'Array\n(\n)\n', 'users', 'index', '2012-11-22 19:11:08', 1),
(1050, 1, '5117b29a45303e6d1d3ec0b58af5eef7', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:17.0) Gecko/17.0 Firefox/17.0', 'http://local.classificados.com.br/admin/usuarios/4/JTdCJTIyc2Vla2luZyUyMiUzQSUyMnRlc3RlJTIyJTdE', 'Array\n(\n)\n', 'users', 'index', '2012-11-22 19:11:08', 1),
(1051, 1, '5117b29a45303e6d1d3ec0b58af5eef7', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:17.0) Gecko/17.0 Firefox/17.0', 'http://local.classificados.com.br/admin/usuarios/4/JTdCJTIyc2Vla2luZyUyMiUzQSUyMnRlc3RlJTIyJTdE', 'Array\n(\n)\n', 'users', 'index', '2012-11-22 19:11:12', 1),
(1052, 1, '5117b29a45303e6d1d3ec0b58af5eef7', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:17.0) Gecko/17.0 Firefox/17.0', 'http://local.classificados.com.br/admin/usuarios/4/JTdCJTIyc2Vla2luZyUyMiUzQSUyMnRlc3RlJTIyJTdE', 'Array\n(\n)\n', 'users', 'index', '2012-11-22 19:11:12', 1),
(1053, 1, '5117b29a45303e6d1d3ec0b58af5eef7', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:17.0) Gecko/17.0 Firefox/17.0', 'http://local.classificados.com.br/admin/usuarios/4/JTdCJTIyc2Vla2luZyUyMiUzQSUyMnRlc3RlJTIyJTdE', 'Array\n(\n)\n', 'users', 'index', '2012-11-22 19:11:24', 1),
(1054, 1, '5117b29a45303e6d1d3ec0b58af5eef7', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:17.0) Gecko/17.0 Firefox/17.0', 'http://local.classificados.com.br/admin/usuarios/4/JTdCJTIyc2Vla2luZyUyMiUzQSUyMnRlc3RlJTIyJTdE', 'Array\n(\n)\n', 'users', 'index', '2012-11-22 19:11:24', 1),
(1055, 1, '5117b29a45303e6d1d3ec0b58af5eef7', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:17.0) Gecko/17.0 Firefox/17.0', 'http://local.classificados.com.br/admin/usuarios/4/JTdCJTIyc2Vla2luZyUyMiUzQSUyMnRlc3RlJTIyJTdE', 'Array\n(\n)\n', 'users', 'index', '2012-11-22 19:11:30', 1),
(1056, 1, '5117b29a45303e6d1d3ec0b58af5eef7', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:17.0) Gecko/17.0 Firefox/17.0', 'http://local.classificados.com.br/admin/usuarios/4/JTdCJTIyc2Vla2luZyUyMiUzQSUyMnRlc3RlJTIyJTdE', 'Array\n(\n)\n', 'users', 'index', '2012-11-22 19:11:30', 1),
(1057, 1, '5117b29a45303e6d1d3ec0b58af5eef7', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:17.0) Gecko/17.0 Firefox/17.0', 'http://local.classificados.com.br/admin/usuarios/4/JTdCJTIyc2Vla2luZyUyMiUzQSUyMnRlc3RlJTIyJTdE', 'Array\n(\n)\n', 'users', 'index', '2012-11-22 19:11:37', 1),
(1058, 1, '5117b29a45303e6d1d3ec0b58af5eef7', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:17.0) Gecko/17.0 Firefox/17.0', 'http://local.classificados.com.br/admin/usuarios/4/JTdCJTIyc2Vla2luZyUyMiUzQSUyMnRlc3RlJTIyJTdE', 'Array\n(\n)\n', 'users', 'index', '2012-11-22 19:11:37', 1),
(1059, 1, '5117b29a45303e6d1d3ec0b58af5eef7', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:17.0) Gecko/17.0 Firefox/17.0', 'http://local.classificados.com.br/admin/usuarios/4/JTdCJTIyc2Vla2luZyUyMiUzQSUyMnRlc3RlJTIyJTdE', 'Array\n(\n)\n', 'users', 'index', '2012-11-22 19:12:11', 1),
(1060, 1, '5117b29a45303e6d1d3ec0b58af5eef7', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:17.0) Gecko/17.0 Firefox/17.0', 'http://local.classificados.com.br/admin/usuarios/4/JTdCJTIyc2Vla2luZyUyMiUzQSUyMnRlc3RlJTIyJTdE', 'Array\n(\n)\n', 'users', 'index', '2012-11-22 19:12:11', 1),
(1061, 1, '5117b29a45303e6d1d3ec0b58af5eef7', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:17.0) Gecko/17.0 Firefox/17.0', 'http://local.classificados.com.br/admin/usuarios/4/JTdCJTIyc2Vla2luZyUyMiUzQSUyMnRlc3RlJTIyJTdE', 'Array\n(\n)\n', 'users', 'index', '2012-11-22 19:12:13', 1),
(1062, 1, '5117b29a45303e6d1d3ec0b58af5eef7', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:17.0) Gecko/17.0 Firefox/17.0', 'http://local.classificados.com.br/admin/usuarios/4/JTdCJTIyc2Vla2luZyUyMiUzQSUyMnRlc3RlJTIyJTdE', 'Array\n(\n)\n', 'users', 'index', '2012-11-22 19:12:13', 1),
(1063, 1, '5117b29a45303e6d1d3ec0b58af5eef7', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:17.0) Gecko/17.0 Firefox/17.0', 'http://local.classificados.com.br/admin/usuarios/1/JTdCJTIyc2Vla2luZyUyMiUzQSUyMnRlc3RlJTIyJTdE', 'Array\n(\n)\n', 'users', 'index', '2012-11-22 19:12:18', 1),
(1064, 1, '5117b29a45303e6d1d3ec0b58af5eef7', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:17.0) Gecko/17.0 Firefox/17.0', 'http://local.classificados.com.br/admin/usuarios/1/JTdCJTIyc2Vla2luZyUyMiUzQSUyMnRlc3RlJTIyJTdE', 'Array\n(\n)\n', 'users', 'index', '2012-11-22 19:12:18', 1),
(1065, 1, '5117b29a45303e6d1d3ec0b58af5eef7', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:17.0) Gecko/17.0 Firefox/17.0', 'http://local.classificados.com.br/admin/usuarios/2/JTdCJTIyc2Vla2luZyUyMiUzQSUyMnRlc3RlJTIyJTdE', 'Array\n(\n)\n', 'users', 'index', '2012-11-22 19:12:20', 1),
(1066, 1, '5117b29a45303e6d1d3ec0b58af5eef7', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:17.0) Gecko/17.0 Firefox/17.0', 'http://local.classificados.com.br/admin/usuarios/2/JTdCJTIyc2Vla2luZyUyMiUzQSUyMnRlc3RlJTIyJTdE', 'Array\n(\n)\n', 'users', 'index', '2012-11-22 19:12:20', 1),
(1067, 1, '5117b29a45303e6d1d3ec0b58af5eef7', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:17.0) Gecko/17.0 Firefox/17.0', 'http://local.classificados.com.br/admin/usuarios/JTdCJTIyc2Vla2luZyUyMiUzQSUyMnRlc3RlJTIyJTdE', 'Array\n(\n)\n', 'users', 'index', '2012-11-22 19:12:23', 1),
(1068, 1, '5117b29a45303e6d1d3ec0b58af5eef7', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:17.0) Gecko/17.0 Firefox/17.0', 'http://local.classificados.com.br/admin/usuarios/JTdCJTIyc2Vla2luZyUyMiUzQSUyMnRlc3RlJTIyJTdE', 'Array\n(\n)\n', 'users', 'index', '2012-11-22 19:12:23', 1),
(1069, 1, '5117b29a45303e6d1d3ec0b58af5eef7', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:17.0) Gecko/17.0 Firefox/17.0', 'http://local.classificados.com.br/admin/usuarios/2/JTdCJTIyc2Vla2luZyUyMiUzQSUyMnRlc3RlJTIyJTdE', 'Array\n(\n)\n', 'users', 'index', '2012-11-22 19:12:26', 1),
(1070, 1, '5117b29a45303e6d1d3ec0b58af5eef7', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:17.0) Gecko/17.0 Firefox/17.0', 'http://local.classificados.com.br/admin/usuarios/2/JTdCJTIyc2Vla2luZyUyMiUzQSUyMnRlc3RlJTIyJTdE', 'Array\n(\n)\n', 'users', 'index', '2012-11-22 19:12:26', 1),
(1071, 1, '5117b29a45303e6d1d3ec0b58af5eef7', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:17.0) Gecko/17.0 Firefox/17.0', 'http://local.classificados.com.br/admin/usuarios/JTdCJTIyc2Vla2luZyUyMiUzQSUyMnRlc3RlJTIyJTdE', 'Array\n(\n)\n', 'users', 'index', '2012-11-22 19:12:29', 1),
(1072, 1, '5117b29a45303e6d1d3ec0b58af5eef7', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:17.0) Gecko/17.0 Firefox/17.0', 'http://local.classificados.com.br/admin/usuarios/JTdCJTIyc2Vla2luZyUyMiUzQSUyMnRlc3RlJTIyJTdE', 'Array\n(\n)\n', 'users', 'index', '2012-11-22 19:12:29', 1),
(1073, 1, '5117b29a45303e6d1d3ec0b58af5eef7', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:17.0) Gecko/17.0 Firefox/17.0', 'http://local.classificados.com.br/admin/usuarios', 'Array\n(\n)\n', 'users', 'index', '2012-11-22 19:12:35', 1),
(1074, 1, '5117b29a45303e6d1d3ec0b58af5eef7', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:17.0) Gecko/17.0 Firefox/17.0', 'http://local.classificados.com.br/admin/usuarios', 'Array\n(\n)\n', 'users', 'index', '2012-11-22 19:12:35', 1),
(1075, 1, '5117b29a45303e6d1d3ec0b58af5eef7', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:17.0) Gecko/17.0 Firefox/17.0', 'http://local.classificados.com.br/admin/usuarios/4', 'Array\n(\n)\n', 'users', 'index', '2012-11-22 19:12:40', 1),
(1076, 1, '5117b29a45303e6d1d3ec0b58af5eef7', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:17.0) Gecko/17.0 Firefox/17.0', 'http://local.classificados.com.br/admin/usuarios/4', 'Array\n(\n)\n', 'users', 'index', '2012-11-22 19:12:40', 1),
(1077, 1, '5da1f2aa769246687127c3451d5a9768', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:17.0) Gecko/17.0 Firefox/17.0', 'http://local.classificados.com.br/admin/usuarios/JTdCJTIyc2Vla2luZyUyMiUzQSUyMnRlc3RlJTIyJTdE', 'Array\n(\n)\n', 'users', 'index', '2012-11-22 19:12:51', 1),
(1078, 1, '5da1f2aa769246687127c3451d5a9768', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:17.0) Gecko/17.0 Firefox/17.0', 'http://local.classificados.com.br/admin/usuarios/JTdCJTIyc2Vla2luZyUyMiUzQSUyMnRlc3RlJTIyJTdE', 'Array\n(\n)\n', 'users', 'index', '2012-11-22 19:12:51', 1),
(1079, 1, '5da1f2aa769246687127c3451d5a9768', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:17.0) Gecko/17.0 Firefox/17.0', 'http://local.classificados.com.br/admin/usuarios/2/JTdCJTIyc2Vla2luZyUyMiUzQSUyMnRlc3RlJTIyJTdE', 'Array\n(\n)\n', 'users', 'index', '2012-11-22 19:12:58', 1),
(1080, 1, '5da1f2aa769246687127c3451d5a9768', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:17.0) Gecko/17.0 Firefox/17.0', 'http://local.classificados.com.br/admin/usuarios/2/JTdCJTIyc2Vla2luZyUyMiUzQSUyMnRlc3RlJTIyJTdE', 'Array\n(\n)\n', 'users', 'index', '2012-11-22 19:12:58', 1),
(1081, 1, '5da1f2aa769246687127c3451d5a9768', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:17.0) Gecko/17.0 Firefox/17.0', 'http://local.classificados.com.br/admin/usuarios', 'Array\n(\n)\n', 'users', 'index', '2012-11-22 19:13:02', 1),
(1082, 1, '5da1f2aa769246687127c3451d5a9768', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:17.0) Gecko/17.0 Firefox/17.0', 'http://local.classificados.com.br/admin/usuarios', 'Array\n(\n)\n', 'users', 'index', '2012-11-22 19:13:02', 1),
(1083, 1, '5da1f2aa769246687127c3451d5a9768', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:17.0) Gecko/17.0 Firefox/17.0', 'http://local.classificados.com.br/admin/parametros', 'Array\n(\n)\n', 'parameters', 'index', '2012-11-22 19:13:14', 1),
(1084, 1, '5da1f2aa769246687127c3451d5a9768', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:17.0) Gecko/17.0 Firefox/17.0', 'http://local.classificados.com.br/admin/parametros/2', 'Array\n(\n)\n', 'parameters', 'index', '2012-11-22 19:13:17', 1),
(1085, 1, '5da1f2aa769246687127c3451d5a9768', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:17.0) Gecko/17.0 Firefox/17.0', 'http://local.classificados.com.br/admin/parametros/3', 'Array\n(\n)\n', 'parameters', 'index', '2012-11-22 19:13:19', 1),
(1086, 1, '5da1f2aa769246687127c3451d5a9768', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:17.0) Gecko/17.0 Firefox/17.0', 'http://local.classificados.com.br/admin/parametros/4', 'Array\n(\n)\n', 'parameters', 'index', '2012-11-22 19:13:20', 1),
(1087, 1, '5da1f2aa769246687127c3451d5a9768', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:17.0) Gecko/17.0 Firefox/17.0', 'http://local.classificados.com.br/admin/parametros/editar/1', 'Array\n(\n)\n', 'parameters', 'update', '2012-11-22 19:13:23', 1),
(1088, 1, '5da1f2aa769246687127c3451d5a9768', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:17.0) Gecko/17.0 Firefox/17.0', 'http://local.classificados.com.br/admin/parametros/editar/1', 'Array\n(\n)\n', 'parameters', 'update', '2012-11-22 19:13:23', 1),
(1089, 1, '5da1f2aa769246687127c3451d5a9768', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:17.0) Gecko/17.0 Firefox/17.0', 'http://local.classificados.com.br/admin/parametros/editar/1', 'Array\n(\n    [name] => rows_per_page\n    [value] => 10\n    [status_id] => 1\n)\n', 'parameters', 'update', '2012-11-22 19:13:27', 1),
(1090, 1, '5da1f2aa769246687127c3451d5a9768', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:17.0) Gecko/17.0 Firefox/17.0', 'http://local.classificados.com.br/admin/parametros', 'Array\n(\n)\n', 'parameters', 'index', '2012-11-22 19:13:27', 1),
(1091, 1, '5da1f2aa769246687127c3451d5a9768', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:17.0) Gecko/17.0 Firefox/17.0', 'http://local.classificados.com.br/admin/parametros', 'Array\n(\n)\n', 'parameters', 'index', '2012-11-22 19:16:52', 1),
(1092, 1, '5da1f2aa769246687127c3451d5a9768', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:17.0) Gecko/17.0 Firefox/17.0', 'http://local.classificados.com.br/admin/usuarios', 'Array\n(\n)\n', 'users', 'index', '2012-11-22 19:16:54', 1),
(1093, 1, '5da1f2aa769246687127c3451d5a9768', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:17.0) Gecko/17.0 Firefox/17.0', 'http://local.classificados.com.br/admin/usuarios', 'Array\n(\n)\n', 'users', 'index', '2012-11-22 19:16:54', 1),
(1094, 1, 'd46fbaa8564b164536eb80b4d38acdfd', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:17.0) Gecko/17.0 Firefox/17.0', 'http://local.classificados.com.br/admin/grupos', 'Array\n(\n)\n', 'user_groups', 'index', '2012-11-22 19:20:29', 1),
(1095, 1, 'd46fbaa8564b164536eb80b4d38acdfd', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:17.0) Gecko/17.0 Firefox/17.0', 'http://local.classificados.com.br/admin/grupos', 'Array\n(\n)\n', 'user_groups', 'index', '2012-11-22 19:21:26', 1),
(1096, 1, 'd46fbaa8564b164536eb80b4d38acdfd', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:17.0) Gecko/17.0 Firefox/17.0', 'http://local.classificados.com.br/admin/grupos', 'Array\n(\n)\n', 'user_groups', 'index', '2012-11-22 19:22:05', 1),
(1097, 1, 'd46fbaa8564b164536eb80b4d38acdfd', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:17.0) Gecko/17.0 Firefox/17.0', 'http://local.classificados.com.br/admin/grupos', 'Array\n(\n)\n', 'user_groups', 'index', '2012-11-22 19:22:31', 1),
(1098, 1, 'd46fbaa8564b164536eb80b4d38acdfd', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:17.0) Gecko/17.0 Firefox/17.0', 'http://local.classificados.com.br/admin/grupos/JTdCJTIyc2Vla2luZyUyMiUzQSUyMnRlcyUyMiU3RA==', 'Array\n(\n)\n', 'user_groups', 'index', '2012-11-22 19:22:36', 1),
(1099, 1, 'd46fbaa8564b164536eb80b4d38acdfd', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:17.0) Gecko/17.0 Firefox/17.0', 'http://local.classificados.com.br/admin/grupos', 'Array\n(\n)\n', 'user_groups', 'index', '2012-11-22 19:22:51', 1),
(1100, 1, 'd46fbaa8564b164536eb80b4d38acdfd', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:17.0) Gecko/17.0 Firefox/17.0', 'http://local.classificados.com.br/admin/grupos', 'Array\n(\n)\n', 'user_groups', 'index', '2012-11-22 19:22:55', 1),
(1101, 1, 'd46fbaa8564b164536eb80b4d38acdfd', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:17.0) Gecko/17.0 Firefox/17.0', 'http://local.classificados.com.br/admin/usuarios', 'Array\n(\n)\n', 'users', 'index', '2012-11-22 19:22:58', 1),
(1102, 1, 'd46fbaa8564b164536eb80b4d38acdfd', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:17.0) Gecko/17.0 Firefox/17.0', 'http://local.classificados.com.br/admin/usuarios', 'Array\n(\n)\n', 'users', 'index', '2012-11-22 19:22:58', 1),
(1103, 1, 'd46fbaa8564b164536eb80b4d38acdfd', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:17.0) Gecko/17.0 Firefox/17.0', 'http://local.classificados.com.br/admin/parametros', 'Array\n(\n)\n', 'parameters', 'index', '2012-11-22 19:23:00', 1),
(1104, 1, 'd46fbaa8564b164536eb80b4d38acdfd', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:17.0) Gecko/17.0 Firefox/17.0', 'http://local.classificados.com.br/admin/parametros', 'Array\n(\n)\n', 'parameters', 'index', '2012-11-22 19:23:34', 1),
(1105, 1, 'da153434123d155728ee890f30ecb140', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:17.0) Gecko/17.0 Firefox/17.0', 'http://local.classificados.com.br/admin/usuarios', 'Array\n(\n)\n', 'users', 'index', '2012-11-22 19:38:46', 1),
(1106, 1, 'da153434123d155728ee890f30ecb140', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:17.0) Gecko/17.0 Firefox/17.0', 'http://local.classificados.com.br/admin/usuarios', 'Array\n(\n)\n', 'users', 'index', '2012-11-22 19:38:46', 1),
(1107, 1, 'da153434123d155728ee890f30ecb140', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:17.0) Gecko/17.0 Firefox/17.0', 'http://local.classificados.com.br/admin/usuarios/editar/5/06550664e97e23bef1981e1a79d7aaff', 'Array\n(\n)\n', 'users', 'update', '2012-11-22 19:38:49', 1),
(1108, 1, 'da153434123d155728ee890f30ecb140', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:17.0) Gecko/17.0 Firefox/17.0', 'http://local.classificados.com.br/admin/usuarios/editar/5/06550664e97e23bef1981e1a79d7aaff', 'Array\n(\n)\n', 'users', 'update', '2012-11-22 19:38:49', 1),
(1109, 1, 'da153434123d155728ee890f30ecb140', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:17.0) Gecko/17.0 Firefox/17.0', 'http://local.classificados.com.br/admin/usuarios/editar/5/06550664e97e23bef1981e1a79d7aaff', 'Array\n(\n    [group_id] => 1\n    [name] => teste\n    [email] => teste@felipe.com\n    [password] => 12345\n    [status_id] => 1\n    [hash_id] => \n)\n', 'users', 'update', '2012-11-22 19:38:53', 1),
(1110, 1, 'da153434123d155728ee890f30ecb140', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:17.0) Gecko/17.0 Firefox/17.0', 'http://local.classificados.com.br/admin/usuarios/editar/5/06550664e97e23bef1981e1a79d7aaff', 'Array\n(\n    [group_id] => 1\n    [name] => teste\n    [email] => teste@felipe.com\n    [password] => 12345\n    [status_id] => 1\n    [hash_id] => \n)\n', 'users', 'update', '2012-11-22 19:38:53', 1),
(1111, 1, 'da153434123d155728ee890f30ecb140', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:17.0) Gecko/17.0 Firefox/17.0', 'http://local.classificados.com.br/admin/usuarios/editar/5/06550664e97e23bef1981e1a79d7aaff', 'Array\n(\n    [group_id] => 1\n    [name] => teste\n    [email] => teste@felipe.com\n    [password] => 12345\n    [status_id] => 1\n    [hash_id] => \n)\n', 'users', 'update', '2012-11-22 19:40:13', 1),
(1112, 1, 'da153434123d155728ee890f30ecb140', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:17.0) Gecko/17.0 Firefox/17.0', 'http://local.classificados.com.br/admin/usuarios/editar/5/06550664e97e23bef1981e1a79d7aaff', 'Array\n(\n    [group_id] => 1\n    [name] => teste\n    [email] => teste@felipe.com\n    [password] => 12345\n    [status_id] => 1\n    [hash_id] => \n)\n', 'users', 'update', '2012-11-22 19:40:13', 1),
(1113, 1, 'da153434123d155728ee890f30ecb140', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:17.0) Gecko/17.0 Firefox/17.0', 'http://local.classificados.com.br/admin/usuarios/editar/5/06550664e97e23bef1981e1a79d7aaff', 'Array\n(\n    [group_id] => 1\n    [name] => teste\n    [email] => teste@felipe.com\n    [password] => 12345\n    [status_id] => 1\n    [hash_id] => \n)\n', 'users', 'update', '2012-11-22 19:43:09', 1),
(1114, 1, '9518b9f60c1c697e772c03f2648514e8', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:17.0) Gecko/17.0 Firefox/17.0', 'http://local.classificados.com.br/admin/usuarios/editar/5/06550664e97e23bef1981e1a79d7aaff', 'Array\n(\n    [group_id] => 1\n    [name] => teste\n    [email] => teste@felipe.com\n    [password] => 12345\n    [status_id] => 1\n    [hash_id] => \n)\n', 'users', 'update', '2012-11-22 19:43:52', 1),
(1115, 1, '9518b9f60c1c697e772c03f2648514e8', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:17.0) Gecko/17.0 Firefox/17.0', 'http://local.classificados.com.br/admin/usuarios/editar/5/06550664e97e23bef1981e1a79d7aaff', 'Array\n(\n    [group_id] => 1\n    [name] => teste\n    [email] => teste@felipe.com\n    [password] => 12345\n    [status_id] => 1\n    [hash_id] => \n)\n', 'users', 'update', '2012-11-22 19:44:06', 1),
(1116, 1, '9518b9f60c1c697e772c03f2648514e8', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:17.0) Gecko/17.0 Firefox/17.0', 'http://local.classificados.com.br/admin/usuarios', 'Array\n(\n)\n', 'users', 'index', '2012-11-22 19:44:06', 1),
(1117, 1, '9518b9f60c1c697e772c03f2648514e8', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:17.0) Gecko/17.0 Firefox/17.0', 'http://local.classificados.com.br/admin/usuarios', 'Array\n(\n)\n', 'users', 'index', '2012-11-22 19:44:06', 1),
(1118, 1, '9518b9f60c1c697e772c03f2648514e8', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:17.0) Gecko/17.0 Firefox/17.0', 'http://local.classificados.com.br/admin/grupos', 'Array\n(\n)\n', 'user_groups', 'index', '2012-11-22 19:44:19', 1),
(1119, 1, '9518b9f60c1c697e772c03f2648514e8', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:17.0) Gecko/17.0 Firefox/17.0', 'http://local.classificados.com.br/admin/grupos/editar/1', 'Array\n(\n)\n', 'user_groups', 'update', '2012-11-22 19:44:21', 1),
(1120, 1, '9518b9f60c1c697e772c03f2648514e8', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:17.0) Gecko/17.0 Firefox/17.0', 'http://local.classificados.com.br/admin/grupos/editar/1', 'Array\n(\n)\n', 'user_groups', 'update', '2012-11-22 19:44:21', 1),
(1121, 1, '9518b9f60c1c697e772c03f2648514e8', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:17.0) Gecko/17.0 Firefox/17.0', 'http://local.classificados.com.br/admin/grupos/editar/1', 'Array\n(\n    [name] => Administradores\n    [status_id] => 0\n)\n', 'user_groups', 'update', '2012-11-22 19:44:27', 1),
(1122, 1, '9518b9f60c1c697e772c03f2648514e8', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:17.0) Gecko/17.0 Firefox/17.0', 'http://local.classificados.com.br/admin/grupos', 'Array\n(\n)\n', 'user_groups', 'index', '2012-11-22 19:44:27', 1),
(1123, 1, '9518b9f60c1c697e772c03f2648514e8', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:17.0) Gecko/17.0 Firefox/17.0', 'http://local.classificados.com.br/admin/grupos', 'Array\n(\n)\n', 'user_groups', 'index', '2012-11-22 19:45:29', 1),
(1124, 1, '9518b9f60c1c697e772c03f2648514e8', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:17.0) Gecko/17.0 Firefox/17.0', 'http://local.classificados.com.br/admin/grupos/editar/1', 'Array\n(\n)\n', 'user_groups', 'update', '2012-11-22 19:45:38', 1),
(1125, 1, '9518b9f60c1c697e772c03f2648514e8', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:17.0) Gecko/17.0 Firefox/17.0', 'http://local.classificados.com.br/admin/grupos/editar/1', 'Array\n(\n)\n', 'user_groups', 'update', '2012-11-22 19:45:38', 1),
(1126, 1, '8d41e9d05e6aa67357f0072ec600384a', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:17.0) Gecko/17.0 Firefox/17.0', 'http://local.classificados.com.br/admin/grupos/adicionar', 'Array\n(\n)\n', 'user_groups', 'create', '2012-11-22 19:56:47', 1),
(1127, 1, '8d41e9d05e6aa67357f0072ec600384a', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:17.0) Gecko/17.0 Firefox/17.0', 'http://local.classificados.com.br/admin/grupos/adicionar', 'Array\n(\n)\n', 'user_groups', 'create', '2012-11-22 19:56:47', 1),
(1128, 1, '8d41e9d05e6aa67357f0072ec600384a', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:17.0) Gecko/17.0 Firefox/17.0', 'http://local.classificados.com.br/admin/grupos/adicionar', 'Array\n(\n)\n', 'user_groups', 'create', '2012-11-22 19:58:28', 1),
(1129, 1, '8d41e9d05e6aa67357f0072ec600384a', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:17.0) Gecko/17.0 Firefox/17.0', 'http://local.classificados.com.br/admin/grupos/adicionar', 'Array\n(\n)\n', 'user_groups', 'create', '2012-11-22 19:58:28', 1),
(1130, 1, '8d41e9d05e6aa67357f0072ec600384a', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:17.0) Gecko/17.0 Firefox/17.0', 'http://local.classificados.com.br/admin/grupos/adicionar', 'Array\n(\n)\n', 'user_groups', 'create', '2012-11-22 19:58:48', 1),
(1131, 1, '8d41e9d05e6aa67357f0072ec600384a', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:17.0) Gecko/17.0 Firefox/17.0', 'http://local.classificados.com.br/admin/grupos/adicionar', 'Array\n(\n)\n', 'user_groups', 'create', '2012-11-22 19:58:48', 1),
(1132, 1, '8d41e9d05e6aa67357f0072ec600384a', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:17.0) Gecko/17.0 Firefox/17.0', 'http://local.classificados.com.br/admin/grupos/adicionar', 'Array\n(\n)\n', 'user_groups', 'create', '2012-11-22 19:58:51', 1),
(1133, 1, '8d41e9d05e6aa67357f0072ec600384a', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:17.0) Gecko/17.0 Firefox/17.0', 'http://local.classificados.com.br/admin/grupos/adicionar', 'Array\n(\n)\n', 'user_groups', 'create', '2012-11-22 19:58:51', 1),
(1134, 1, '8c6fc2b6ada32e6d056ed61d5594bd15', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:17.0) Gecko/17.0 Firefox/17.0', 'http://local.classificados.com.br/admin/grupos/adicionar', 'Array\n(\n)\n', 'user_groups', 'create', '2012-11-22 20:01:48', 1),
(1135, 1, '8c6fc2b6ada32e6d056ed61d5594bd15', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:17.0) Gecko/17.0 Firefox/17.0', 'http://local.classificados.com.br/admin/grupos/adicionar', 'Array\n(\n)\n', 'user_groups', 'create', '2012-11-22 20:01:48', 1),
(1136, 1, '7b55b8b0435f7bdb24b4c6551264c33f', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:17.0) Gecko/17.0 Firefox/17.0', 'http://local.classificados.com.br/admin/grupos/adicionar', 'Array\n(\n)\n', 'user_groups', 'create', '2012-11-22 20:08:14', 1),
(1137, 1, '7b55b8b0435f7bdb24b4c6551264c33f', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:17.0) Gecko/17.0 Firefox/17.0', 'http://local.classificados.com.br/admin/grupos/adicionar', 'Array\n(\n)\n', 'user_groups', 'create', '2012-11-22 20:08:14', 1),
(1138, 1, '7b55b8b0435f7bdb24b4c6551264c33f', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:17.0) Gecko/17.0 Firefox/17.0', 'http://local.classificados.com.br/admin/grupos/adicionar', 'Array\n(\n    [name] => Teste\n    [status_id] => 1\n)\n', 'user_groups', 'create', '2012-11-22 20:08:20', 1),
(1139, 1, '7b55b8b0435f7bdb24b4c6551264c33f', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:17.0) Gecko/17.0 Firefox/17.0', 'http://local.classificados.com.br/admin/grupos', 'Array\n(\n)\n', 'user_groups', 'index', '2012-11-22 20:08:20', 1),
(1140, 1, '7b55b8b0435f7bdb24b4c6551264c33f', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:17.0) Gecko/17.0 Firefox/17.0', 'http://local.classificados.com.br/admin/grupos/editar/3', 'Array\n(\n)\n', 'user_groups', 'update', '2012-11-22 20:08:23', 1),
(1141, 1, '7b55b8b0435f7bdb24b4c6551264c33f', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:17.0) Gecko/17.0 Firefox/17.0', 'http://local.classificados.com.br/admin/grupos/editar/3', 'Array\n(\n)\n', 'user_groups', 'update', '2012-11-22 20:08:23', 1),
(1142, 1, '7b55b8b0435f7bdb24b4c6551264c33f', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:17.0) Gecko/17.0 Firefox/17.0', 'http://local.classificados.com.br/admin/grupos', 'Array\n(\n)\n', 'user_groups', 'index', '2012-11-22 20:09:02', 1),
(1143, 1, '7b55b8b0435f7bdb24b4c6551264c33f', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:17.0) Gecko/17.0 Firefox/17.0', 'http://local.classificados.com.br/admin/grupos/editar/3/0b921ef8a90a5fcccd9982ecc1a7a220', 'Array\n(\n)\n', 'user_groups', 'index', '2012-11-22 20:09:05', 1),
(1144, 1, '7b55b8b0435f7bdb24b4c6551264c33f', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:17.0) Gecko/17.0 Firefox/17.0', 'http://local.classificados.com.br/admin/grupos', 'Array\n(\n)\n', 'user_groups', 'index', '2012-11-22 20:09:57', 1),
(1145, 1, '7b55b8b0435f7bdb24b4c6551264c33f', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:17.0) Gecko/17.0 Firefox/17.0', 'http://local.classificados.com.br/admin/grupos/editar/3/0b921ef8a90a5fcccd9982ecc1a7a220', 'Array\n(\n)\n', 'user_groups', 'update', '2012-11-22 20:09:59', 1),
(1146, 1, '7b55b8b0435f7bdb24b4c6551264c33f', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:17.0) Gecko/17.0 Firefox/17.0', 'http://local.classificados.com.br/admin/grupos/editar/3/0b921ef8a90a5fcccd9982ecc1a7a220', 'Array\n(\n)\n', 'user_groups', 'update', '2012-11-22 20:09:59', 1),
(1147, 1, '7b55b8b0435f7bdb24b4c6551264c33f', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:17.0) Gecko/17.0 Firefox/17.0', 'http://local.classificados.com.br/admin/grupos/editar/3/0b921ef8a90a5fcccd9982ecc1a7a220', 'Array\n(\n)\n', 'user_groups', 'update', '2012-11-22 20:10:27', 1),
(1148, 1, '7b55b8b0435f7bdb24b4c6551264c33f', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:17.0) Gecko/17.0 Firefox/17.0', 'http://local.classificados.com.br/admin/grupos/editar/3/0b921ef8a90a5fcccd9982ecc1a7a220', 'Array\n(\n)\n', 'user_groups', 'update', '2012-11-22 20:10:27', 1),
(1149, 1, '7b55b8b0435f7bdb24b4c6551264c33f', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:17.0) Gecko/17.0 Firefox/17.0', 'http://local.classificados.com.br/admin/grupos/editar/3/0b921ef8a90a5fcccd9982ecc1a7a220', 'Array\n(\n)\n', 'user_groups', 'update', '2012-11-22 20:10:28', 1),
(1150, 1, '7b55b8b0435f7bdb24b4c6551264c33f', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:17.0) Gecko/17.0 Firefox/17.0', 'http://local.classificados.com.br/admin/grupos/editar/3/0b921ef8a90a5fcccd9982ecc1a7a220', 'Array\n(\n)\n', 'user_groups', 'update', '2012-11-22 20:10:28', 1),
(1151, 1, '7b55b8b0435f7bdb24b4c6551264c33f', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:17.0) Gecko/17.0 Firefox/17.0', 'http://local.classificados.com.br/admin/grupos/editar/3/0b921ef8a90a5fcccd9982ecc1a7a220', 'Array\n(\n)\n', 'user_groups', 'update', '2012-11-22 20:10:28', 1),
(1152, 1, '7b55b8b0435f7bdb24b4c6551264c33f', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:17.0) Gecko/17.0 Firefox/17.0', 'http://local.classificados.com.br/admin/grupos/editar/3/0b921ef8a90a5fcccd9982ecc1a7a220', 'Array\n(\n)\n', 'user_groups', 'update', '2012-11-22 20:10:28', 1),
(1153, 1, '7b55b8b0435f7bdb24b4c6551264c33f', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:17.0) Gecko/17.0 Firefox/17.0', 'http://local.classificados.com.br/admin/grupos/editar/3/0b921ef8a90a5fcccd9982ecc1a7a220', 'Array\n(\n)\n', 'user_groups', 'update', '2012-11-22 20:10:29', 1),
(1154, 1, '7b55b8b0435f7bdb24b4c6551264c33f', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:17.0) Gecko/17.0 Firefox/17.0', 'http://local.classificados.com.br/admin/grupos/editar/3/0b921ef8a90a5fcccd9982ecc1a7a220', 'Array\n(\n)\n', 'user_groups', 'update', '2012-11-22 20:10:29', 1),
(1155, 1, '7b55b8b0435f7bdb24b4c6551264c33f', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:17.0) Gecko/17.0 Firefox/17.0', 'http://local.classificados.com.br/admin/grupos/editar/3/0b921ef8a90a5fcccd9982ecc1a7a220', 'Array\n(\n)\n', 'user_groups', 'update', '2012-11-22 20:10:29', 1),
(1156, 1, '7b55b8b0435f7bdb24b4c6551264c33f', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:17.0) Gecko/17.0 Firefox/17.0', 'http://local.classificados.com.br/admin/grupos/editar/3/0b921ef8a90a5fcccd9982ecc1a7a220', 'Array\n(\n)\n', 'user_groups', 'update', '2012-11-22 20:10:29', 1),
(1157, 1, '7b55b8b0435f7bdb24b4c6551264c33f', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:17.0) Gecko/17.0 Firefox/17.0', 'http://local.classificados.com.br/admin/grupos/editar/3/0b921ef8a90a5fcccd9982ecc1a7a220', 'Array\n(\n)\n', 'user_groups', 'update', '2012-11-22 20:10:29', 1),
(1158, 1, '7b55b8b0435f7bdb24b4c6551264c33f', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:17.0) Gecko/17.0 Firefox/17.0', 'http://local.classificados.com.br/admin/grupos/editar/3/0b921ef8a90a5fcccd9982ecc1a7a220', 'Array\n(\n)\n', 'user_groups', 'update', '2012-11-22 20:10:29', 1),
(1159, 1, '7b55b8b0435f7bdb24b4c6551264c33f', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:17.0) Gecko/17.0 Firefox/17.0', 'http://local.classificados.com.br/admin/grupos/editar/3/0b921ef8a90a5fcccd9982ecc1a7a220', 'Array\n(\n)\n', 'user_groups', 'update', '2012-11-22 20:10:29', 1),
(1160, 1, '7b55b8b0435f7bdb24b4c6551264c33f', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:17.0) Gecko/17.0 Firefox/17.0', 'http://local.classificados.com.br/admin/grupos/editar/3/0b921ef8a90a5fcccd9982ecc1a7a220', 'Array\n(\n)\n', 'user_groups', 'update', '2012-11-22 20:10:29', 1),
(1161, 1, '7b55b8b0435f7bdb24b4c6551264c33f', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:17.0) Gecko/17.0 Firefox/17.0', 'http://local.classificados.com.br/admin/grupos/editar/3/0b921ef8a90a5fcccd9982ecc1a7a220', 'Array\n(\n)\n', 'user_groups', 'update', '2012-11-22 20:10:30', 1),
(1162, 1, '7b55b8b0435f7bdb24b4c6551264c33f', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:17.0) Gecko/17.0 Firefox/17.0', 'http://local.classificados.com.br/admin/grupos/editar/3/0b921ef8a90a5fcccd9982ecc1a7a220', 'Array\n(\n)\n', 'user_groups', 'update', '2012-11-22 20:10:30', 1),
(1163, 1, '7b55b8b0435f7bdb24b4c6551264c33f', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:17.0) Gecko/17.0 Firefox/17.0', 'http://local.classificados.com.br/admin/grupos/editar/3/0b921ef8a90a5fcccd9982ecc1a7a220', 'Array\n(\n)\n', 'user_groups', 'update', '2012-11-22 20:10:30', 1),
(1164, 1, '7b55b8b0435f7bdb24b4c6551264c33f', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:17.0) Gecko/17.0 Firefox/17.0', 'http://local.classificados.com.br/admin/grupos/editar/3/0b921ef8a90a5fcccd9982ecc1a7a220', 'Array\n(\n)\n', 'user_groups', 'update', '2012-11-22 20:10:30', 1),
(1165, 1, '7b55b8b0435f7bdb24b4c6551264c33f', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:17.0) Gecko/17.0 Firefox/17.0', 'http://local.classificados.com.br/admin/grupos/editar/3/0b921ef8a90a5fcccd9982ecc1a7a220', 'Array\n(\n)\n', 'user_groups', 'update', '2012-11-22 20:10:30', 1);
INSERT INTO `sys_log` (`id`, `user_id`, `session_id`, `user_ip`, `user_browser`, `user_url`, `user_post`, `model`, `action`, `created_in`, `status_id`) VALUES
(1166, 1, '7b55b8b0435f7bdb24b4c6551264c33f', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:17.0) Gecko/17.0 Firefox/17.0', 'http://local.classificados.com.br/admin/grupos/editar/3/0b921ef8a90a5fcccd9982ecc1a7a220', 'Array\n(\n)\n', 'user_groups', 'update', '2012-11-22 20:10:30', 1),
(1167, 1, '7b55b8b0435f7bdb24b4c6551264c33f', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:17.0) Gecko/17.0 Firefox/17.0', 'http://local.classificados.com.br/admin/grupos/editar/3/0b921ef8a90a5fcccd9982ecc1a7a220', 'Array\n(\n)\n', 'user_groups', 'update', '2012-11-22 20:10:31', 1),
(1168, 1, '7b55b8b0435f7bdb24b4c6551264c33f', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:17.0) Gecko/17.0 Firefox/17.0', 'http://local.classificados.com.br/admin/grupos/editar/3/0b921ef8a90a5fcccd9982ecc1a7a220', 'Array\n(\n)\n', 'user_groups', 'update', '2012-11-22 20:10:31', 1),
(1169, 1, '7b55b8b0435f7bdb24b4c6551264c33f', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:17.0) Gecko/17.0 Firefox/17.0', 'http://local.classificados.com.br/admin/grupos/editar/3/0b921ef8a90a5fcccd9982ecc1a7a220', 'Array\n(\n)\n', 'user_groups', 'update', '2012-11-22 20:10:32', 1),
(1170, 1, '7b55b8b0435f7bdb24b4c6551264c33f', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:17.0) Gecko/17.0 Firefox/17.0', 'http://local.classificados.com.br/admin/grupos/editar/3/0b921ef8a90a5fcccd9982ecc1a7a220', 'Array\n(\n)\n', 'user_groups', 'update', '2012-11-22 20:10:32', 1),
(1171, 1, '7b55b8b0435f7bdb24b4c6551264c33f', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:17.0) Gecko/17.0 Firefox/17.0', 'http://local.classificados.com.br/admin/grupos/editar/3/0b921ef8a90a5fcccd9982ecc1a7a220', 'Array\n(\n)\n', 'user_groups', 'update', '2012-11-22 20:11:19', 1),
(1172, 1, '7b55b8b0435f7bdb24b4c6551264c33f', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:17.0) Gecko/17.0 Firefox/17.0', 'http://local.classificados.com.br/admin/grupos/editar/3/0b921ef8a90a5fcccd9982ecc1a7a220', 'Array\n(\n)\n', 'user_groups', 'update', '2012-11-22 20:11:31', 1),
(1173, 1, '7b55b8b0435f7bdb24b4c6551264c33f', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:17.0) Gecko/17.0 Firefox/17.0', 'http://local.classificados.com.br/admin/grupos/editar/3/0b921ef8a90a5fcccd9982ecc1a7a220', 'Array\n(\n)\n', 'user_groups', 'update', '2012-11-22 20:11:31', 1),
(1174, 1, '7b55b8b0435f7bdb24b4c6551264c33f', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:17.0) Gecko/17.0 Firefox/17.0', 'http://local.classificados.com.br/admin/grupos/editar/3/0b921ef8a90a5fcccd9982ecc1a7a220', 'Array\n(\n    [name] => Teste\n    [status_id] => 3\n)\n', 'user_groups', 'update', '2012-11-22 20:11:35', 1),
(1175, 1, '7b55b8b0435f7bdb24b4c6551264c33f', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:17.0) Gecko/17.0 Firefox/17.0', 'http://local.classificados.com.br/admin/grupos', 'Array\n(\n)\n', 'user_groups', 'index', '2012-11-22 20:11:35', 1),
(1176, 1, '7b55b8b0435f7bdb24b4c6551264c33f', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:17.0) Gecko/17.0 Firefox/17.0', 'http://local.classificados.com.br/admin/grupos/editar/3/0b921ef8a90a5fcccd9982ecc1a7a220', 'Array\n(\n)\n', 'user_groups', 'update', '2012-11-22 20:11:47', 1),
(1177, 1, '7b55b8b0435f7bdb24b4c6551264c33f', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:17.0) Gecko/17.0 Firefox/17.0', 'http://local.classificados.com.br/admin/grupos/editar/3/0b921ef8a90a5fcccd9982ecc1a7a220', 'Array\n(\n)\n', 'user_groups', 'update', '2012-11-22 20:11:47', 1),
(1178, 1, 'b14648c6f9e68fd4c813eab7a9653588', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:17.0) Gecko/17.0 Firefox/17.0', 'http://local.classificados.com.br/admin/grupos/editar/3/0b921ef8a90a5fcccd9982ecc1a7a220', 'Array\n(\n)\n', 'user_groups', 'update', '2012-11-22 20:14:32', 1),
(1179, 1, 'b14648c6f9e68fd4c813eab7a9653588', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:17.0) Gecko/17.0 Firefox/17.0', 'http://local.classificados.com.br/admin/grupos/editar/3/0b921ef8a90a5fcccd9982ecc1a7a220', 'Array\n(\n)\n', 'user_groups', 'update', '2012-11-22 20:14:32', 1),
(1180, 1, 'b14648c6f9e68fd4c813eab7a9653588', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:17.0) Gecko/17.0 Firefox/17.0', 'http://local.classificados.com.br/admin/grupos/editar/3/0b921ef8a90a5fcccd9982ecc1a7a220', 'Array\n(\n    [name] => Teste\n    [status_id] => 3\n)\n', 'user_groups', 'update', '2012-11-22 20:14:37', 1),
(1181, 1, 'b14648c6f9e68fd4c813eab7a9653588', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:17.0) Gecko/17.0 Firefox/17.0', 'http://local.classificados.com.br/admin/grupos', 'Array\n(\n)\n', 'user_groups', 'index', '2012-11-22 20:14:38', 1),
(1182, 1, 'b14648c6f9e68fd4c813eab7a9653588', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:17.0) Gecko/17.0 Firefox/17.0', 'http://local.classificados.com.br/admin/usuarios', 'Array\n(\n)\n', 'users', 'index', '2012-11-22 20:15:35', 1),
(1183, 1, 'b14648c6f9e68fd4c813eab7a9653588', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:17.0) Gecko/17.0 Firefox/17.0', 'http://local.classificados.com.br/admin/usuarios', 'Array\n(\n)\n', 'users', 'index', '2012-11-22 20:15:35', 1),
(1184, 1, 'b14648c6f9e68fd4c813eab7a9653588', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:17.0) Gecko/17.0 Firefox/17.0', 'http://local.classificados.com.br/admin/grupos', 'Array\n(\n)\n', 'user_groups', 'index', '2012-11-22 20:17:11', 1),
(1185, 1, 'b14648c6f9e68fd4c813eab7a9653588', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:17.0) Gecko/17.0 Firefox/17.0', 'http://local.classificados.com.br/admin/grupos/editar/3/0b921ef8a90a5fcccd9982ecc1a7a220', 'Array\n(\n)\n', 'user_groups', 'update', '2012-11-22 20:17:14', 1),
(1186, 1, 'b14648c6f9e68fd4c813eab7a9653588', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:17.0) Gecko/17.0 Firefox/17.0', 'http://local.classificados.com.br/admin/grupos/editar/3/0b921ef8a90a5fcccd9982ecc1a7a220', 'Array\n(\n)\n', 'user_groups', 'update', '2012-11-22 20:17:14', 1),
(1187, 1, 'b14648c6f9e68fd4c813eab7a9653588', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:17.0) Gecko/17.0 Firefox/17.0', 'http://local.classificados.com.br/admin/grupos/editar/3/0b921ef8a90a5fcccd9982ecc1a7a220', 'Array\n(\n    [name] => Teste\n    [status_id] => 3\n)\n', 'user_groups', 'update', '2012-11-22 20:17:17', 1),
(1188, 1, 'b14648c6f9e68fd4c813eab7a9653588', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:17.0) Gecko/17.0 Firefox/17.0', 'http://local.classificados.com.br/admin/grupos', 'Array\n(\n)\n', 'user_groups', 'index', '2012-11-22 20:17:17', 1),
(1189, 1, 'b14648c6f9e68fd4c813eab7a9653588', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:17.0) Gecko/17.0 Firefox/17.0', 'http://local.classificados.com.br/admin/grupos/editar/3/0b921ef8a90a5fcccd9982ecc1a7a220', 'Array\n(\n)\n', 'user_groups', 'update', '2012-11-22 20:17:56', 1),
(1190, 1, 'b14648c6f9e68fd4c813eab7a9653588', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:17.0) Gecko/17.0 Firefox/17.0', 'http://local.classificados.com.br/admin/grupos/editar/3/0b921ef8a90a5fcccd9982ecc1a7a220', 'Array\n(\n)\n', 'user_groups', 'update', '2012-11-22 20:17:56', 1),
(1191, 1, 'b14648c6f9e68fd4c813eab7a9653588', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:17.0) Gecko/17.0 Firefox/17.0', 'http://local.classificados.com.br/admin/grupos/editar/3/0b921ef8a90a5fcccd9982ecc1a7a220', 'Array\n(\n    [name] => Teste\n    [status_id] => 0\n)\n', 'user_groups', 'update', '2012-11-22 20:18:05', 1),
(1192, 1, 'b14648c6f9e68fd4c813eab7a9653588', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:17.0) Gecko/17.0 Firefox/17.0', 'http://local.classificados.com.br/admin/grupos/editar/3/0b921ef8a90a5fcccd9982ecc1a7a220', 'Array\n(\n    [name] => Teste\n    [status_id] => 0\n)\n', 'user_groups', 'update', '2012-11-22 20:18:23', 1),
(1193, 1, 'b14648c6f9e68fd4c813eab7a9653588', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:17.0) Gecko/17.0 Firefox/17.0', 'http://local.classificados.com.br/admin/grupos/editar/3/0b921ef8a90a5fcccd9982ecc1a7a220', 'Array\n(\n    [name] => Teste\n    [status_id] => 0\n)\n', 'user_groups', 'update', '2012-11-22 20:18:48', 1),
(1194, 1, 'b14648c6f9e68fd4c813eab7a9653588', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:17.0) Gecko/17.0 Firefox/17.0', 'http://local.classificados.com.br/admin/grupos/editar/3/0b921ef8a90a5fcccd9982ecc1a7a220', 'Array\n(\n    [name] => Teste\n    [status_id] => 0\n)\n', 'user_groups', 'update', '2012-11-22 20:18:58', 1),
(1195, 1, 'b14648c6f9e68fd4c813eab7a9653588', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:17.0) Gecko/17.0 Firefox/17.0', 'http://local.classificados.com.br/admin/grupos/editar/3/0b921ef8a90a5fcccd9982ecc1a7a220', 'Array\n(\n    [name] => Teste\n    [status_id] => 0\n)\n', 'user_groups', 'update', '2012-11-22 20:19:05', 1),
(1196, 1, 'b14648c6f9e68fd4c813eab7a9653588', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:17.0) Gecko/17.0 Firefox/17.0', 'http://local.classificados.com.br/admin/grupos/editar/3/0b921ef8a90a5fcccd9982ecc1a7a220', 'Array\n(\n)\n', 'user_groups', 'update', '2012-11-22 20:19:31', 1),
(1197, 1, 'b14648c6f9e68fd4c813eab7a9653588', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:17.0) Gecko/17.0 Firefox/17.0', 'http://local.classificados.com.br/admin/grupos/editar/3/0b921ef8a90a5fcccd9982ecc1a7a220', 'Array\n(\n)\n', 'user_groups', 'update', '2012-11-22 20:19:31', 1),
(1198, 1, 'e8cc63e380db1839e96d9961173212d7', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:17.0) Gecko/17.0 Firefox/17.0', 'http://local.classificados.com.br/admin/grupos/editar/3/0b921ef8a90a5fcccd9982ecc1a7a220', 'Array\n(\n    [name] => Teste\n    [status_id] => 3\n)\n', 'user_groups', 'update', '2012-11-22 20:19:41', 1),
(1199, 1, 'e8cc63e380db1839e96d9961173212d7', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:17.0) Gecko/17.0 Firefox/17.0', 'http://local.classificados.com.br/admin/grupos/editar/3/0b921ef8a90a5fcccd9982ecc1a7a220', 'Array\n(\n    [name] => Teste\n    [status_id] => 3\n)\n', 'user_groups', 'update', '2012-11-22 20:19:56', 1),
(1200, 1, 'e8cc63e380db1839e96d9961173212d7', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:17.0) Gecko/17.0 Firefox/17.0', 'http://local.classificados.com.br/admin/grupos', 'Array\n(\n)\n', 'user_groups', 'index', '2012-11-22 20:19:57', 1),
(1201, 1, 'e8cc63e380db1839e96d9961173212d7', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:17.0) Gecko/17.0 Firefox/17.0', 'http://local.classificados.com.br/admin/grupos/editar/3/0b921ef8a90a5fcccd9982ecc1a7a220', 'Array\n(\n)\n', 'user_groups', 'update', '2012-11-22 20:20:14', 1),
(1202, 1, 'e8cc63e380db1839e96d9961173212d7', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:17.0) Gecko/17.0 Firefox/17.0', 'http://local.classificados.com.br/admin/grupos/editar/3/0b921ef8a90a5fcccd9982ecc1a7a220', 'Array\n(\n)\n', 'user_groups', 'update', '2012-11-22 20:20:14', 1),
(1203, 1, 'e8cc63e380db1839e96d9961173212d7', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:17.0) Gecko/17.0 Firefox/17.0', 'http://local.classificados.com.br/admin/grupos/editar/3/0b921ef8a90a5fcccd9982ecc1a7a220', 'Array\n(\n    [name] => Teste\n    [status_id] => 1\n)\n', 'user_groups', 'update', '2012-11-22 20:20:18', 1),
(1204, 1, 'e8cc63e380db1839e96d9961173212d7', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:17.0) Gecko/17.0 Firefox/17.0', 'http://local.classificados.com.br/admin/grupos', 'Array\n(\n)\n', 'user_groups', 'index', '2012-11-22 20:20:18', 1),
(1205, 1, 'e8cc63e380db1839e96d9961173212d7', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:17.0) Gecko/17.0 Firefox/17.0', 'http://local.classificados.com.br/admin/grupos/editar/1/0a8bd1d69076acf2b6c36a0fc58a4f2f', 'Array\n(\n)\n', 'user_groups', 'update', '2012-11-22 20:20:21', 1),
(1206, 1, 'e8cc63e380db1839e96d9961173212d7', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:17.0) Gecko/17.0 Firefox/17.0', 'http://local.classificados.com.br/admin/grupos/editar/1/0a8bd1d69076acf2b6c36a0fc58a4f2f', 'Array\n(\n)\n', 'user_groups', 'update', '2012-11-22 20:20:21', 1),
(1207, 1, 'e8cc63e380db1839e96d9961173212d7', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:17.0) Gecko/17.0 Firefox/17.0', 'http://local.classificados.com.br/admin/grupos/editar/1/0a8bd1d69076acf2b6c36a0fc58a4f2f', 'Array\n(\n    [name] => Administradores\n    [status_id] => 1\n)\n', 'user_groups', 'update', '2012-11-22 20:20:24', 1),
(1208, 1, 'e8cc63e380db1839e96d9961173212d7', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:17.0) Gecko/17.0 Firefox/17.0', 'http://local.classificados.com.br/admin/grupos', 'Array\n(\n)\n', 'user_groups', 'index', '2012-11-22 20:20:24', 1);

-- --------------------------------------------------------

--
-- Table structure for table `sys_module`
--

CREATE TABLE IF NOT EXISTS `sys_module` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  `route` varchar(100) DEFAULT NULL,
  `url` varchar(100) DEFAULT NULL,
  `created_in` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `status_id` int(11) DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `sys_module`
--

INSERT INTO `sys_module` (`id`, `name`, `route`, `url`, `created_in`, `status_id`) VALUES
(1, 'Módulos do Sistema', 'modules', 'modulos', '2012-01-27 18:18:35', 1),
(2, 'Parâmetros do Sistema', 'parameters', 'parametros', '2012-01-27 18:18:50', 1),
(3, 'Controle de Usuários', 'users', 'usuarios', '2012-01-27 18:19:13', 1),
(4, 'Grupos de Usuários', 'groups', 'grupos', '2012-01-27 18:19:32', 1);

-- --------------------------------------------------------

--
-- Table structure for table `sys_page`
--

CREATE TABLE IF NOT EXISTS `sys_page` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `hash` varchar(250) NOT NULL,
  `url` varchar(250) NOT NULL,
  `title` varchar(250) NOT NULL,
  `description` text NOT NULL,
  `created_in` date NOT NULL,
  `update_in` date NOT NULL,
  `status_id` int(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `sys_page`
--

INSERT INTO `sys_page` (`id`, `hash`, `url`, `title`, `description`, `created_in`, `update_in`, `status_id`) VALUES
(1, '80a42656db84020be8e425171db1f757', 'a-empresa', 'A Empresa', '<p>A Alpha Toldos est&aacute; no mercado h&aacute; mais de 15 anos, <br /> trabalhando com materiais e servi&ccedil;os de primeira qualidade.</p>\r\n<p>Temos em nosso conceito que oferecer um servi&ccedil;o de<br /> qualidade, respeitando nossos clientes &eacute; algo <br /> primordial para satisfazer seus anseios.</p>\r\n<p class="content_company_fixp">Somos uma equipe altamente qualificada, e experiente na fabrica&ccedil;&atilde;o e instala&ccedil;&atilde;o de toldos e coberturas. Se voc&ecirc; est&aacute; obtendo um produto ou um servi&ccedil;o Alpha, poder&aacute; ter a certeza que est&aacute; tendo o que h&aacute; de melhor para a sua casa, condom&iacute;nio ou com&eacute;rcio, somos capacitados em oferecer a melhor estrutura.</p>\r\n<p>Traga seu projeto e estaremos realizando os seus sonhos! <br /> Oferecemos solu&ccedil;&otilde;es pr&aacute;ticas e originais, trazendo satisfa&ccedil;&atilde;o aos <br /> nossos clientes.</p>', '2012-08-29', '0000-00-00', 1),
(2, 'c6eba2bb0b1c1e6ad17dc3076b5f5826', 'servicos', 'Serviços', '<p>Oferecemos servi&ccedil;os como coberturas em lona e policarbonato, feitos em estrutura de ferro e alum&iacute;nio e com pintura eletrost&aacute;tica.</p>\r\n<p>Nossos materiais s&atilde;o sempre de primeira qualidade, com fabrica&ccedil;&atilde;o pr&oacute;pria e nossa equipe especializada em oferecer o melhor servi&ccedil;o aos nossos clientes.</p>\r\n<p>Trabalhamos com empresas, condom&iacute;nios, ind&uacute;strias, com&eacute;rcios e resid&ecirc;ncias.</p>\r\n<p><strong>Somos especializados em:</strong></p>\r\n<p>Toldos Articulados, Toldos fixos, Toldos M&oacute;veis, Cortinas Teflon, Telhas de Policarbonatos, Policarbonato Alveolar e Policarbonato Compacto.</p>', '2012-08-29', '0000-00-00', 1);

-- --------------------------------------------------------

--
-- Table structure for table `sys_parameter`
--

CREATE TABLE IF NOT EXISTS `sys_parameter` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  `value` varchar(100) DEFAULT NULL,
  `created_in` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `status_id` int(11) DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `sys_parameter`
--

INSERT INTO `sys_parameter` (`id`, `name`, `value`, `created_in`, `status_id`) VALUES
(1, 'rows_per_page', '10', '2012-01-27 18:12:25', 1),
(2, 'company_name', 'Meu Carro Turbo', '2012-01-27 18:12:35', 1),
(3, 'system_title', 'Meu Carro Turbo', '2012-01-27 18:12:47', 1),
(4, 'UPLOAD_PATH', 'resources/upload/', '2012-04-03 16:01:13', 1),
(5, 'CONTACT_EMAIL', 'freedfelipe@gmail.com', '2012-08-31 02:18:47', 1),
(6, 'SUBJECT_EMAIL', 'Contato Email', '2012-08-31 02:27:58', 1),
(7, 'author', 'Wad Tecnologia', '2012-09-04 14:25:22', 1);

-- --------------------------------------------------------

--
-- Table structure for table `sys_permission`
--

CREATE TABLE IF NOT EXISTS `sys_permission` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `group_id` int(11) DEFAULT NULL,
  `module_id` int(11) DEFAULT NULL,
  `model` varchar(100) DEFAULT NULL,
  `create` tinyint(1) DEFAULT NULL,
  `read` tinyint(1) DEFAULT NULL,
  `update` tinyint(1) DEFAULT NULL,
  `delete` tinyint(1) DEFAULT NULL,
  `export` tinyint(1) DEFAULT NULL,
  `import` tinyint(1) DEFAULT NULL,
  `created_in` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `status_id` int(11) DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `sys_user`
--

CREATE TABLE IF NOT EXISTS `sys_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idHash` varchar(100) NOT NULL,
  `group_id` int(11) DEFAULT NULL,
  `name` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `is_admin` int(11) DEFAULT '0',
  `created_in` datetime DEFAULT NULL,
  `update_in` datetime NOT NULL,
  `status_id` int(11) DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `sys_user`
--

INSERT INTO `sys_user` (`id`, `idHash`, `group_id`, `name`, `email`, `password`, `is_admin`, `created_in`, `update_in`, `status_id`) VALUES
(1, '544b89df04fec1e3d1ed9f16bec45a1c', 1, 'Administrador', 'admin', '21232f297a57a5a743894a0e4a801fc3', 1, '2012-01-27 15:10:28', '0000-00-00 00:00:00', 1),
(2, '61f432c6abdc5f2248d0a0a4ad652d25', 2, 'asdasdasd', 'felipe@wadtecnologia.com', 'adasdasdasd', 0, '2012-04-03 15:51:00', '0000-00-00 00:00:00', 0),
(3, '', 2, 'derp', 'derp@derpnet.com', '7a135a7d136deaad069ce52d2bc34b33', 0, '2012-04-03 17:54:53', '0000-00-00 00:00:00', 0),
(4, '45ee0fd40bd8eb56252e6b18e3d96365', 2, 'derpson LOL', 'derpson@derpnet.com', '81dc9bdb52d04dc20036dbd8313ed055', 0, '2012-04-03 17:58:31', '0000-00-00 00:00:00', 0),
(5, '06550664e97e23bef1981e1a79d7aaff', 1, 'teste', 'teste@felipe.com', '827ccb0eea8a706c4c34a16891f84e7b', 0, '2012-10-26 12:29:00', '0000-00-00 00:00:00', 1),
(6, '2d88070a231833eb833757b363c3c91d', 1, 'asdfasdf', 'albert@mints.ws', 'a95c530a7af5f492a74499e70578d150', 0, '2012-10-26 13:38:12', '0000-00-00 00:00:00', 1),
(7, '96ec2e5022d860deedd5c9c7a4bf7222', 2, 'teste', 'teste@teste.com.br', '81dc9bdb52d04dc20036dbd8313ed055', 0, '2012-11-21 23:07:06', '0000-00-00 00:00:00', 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
