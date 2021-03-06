<?php
/**
 * Routes configuration
 *
 * In this file, you set up routes to your controllers and their actions.
 * Routes are very important mechanism that allows you to freely connect
 * different URLs to chosen controllers and their actions (functions).
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.Config
 * @since         CakePHP(tm) v 0.2.9
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */
/**
 * Here, we are connecting '/' (base path) to controller called 'Pages',
 * its action called 'display', and we pass a param to select the view file
 * to use (in this case, /app/View/Pages/home.ctp)...
 */
        Router::connect('/Cadastrar', array('controller' => 'Usuarios', 'action' => 'add'));
        Router::connect('/NovoJogo', array('controller' => 'Jogos', 'action' => 'add'));
        Router::connect('/novojogo', array('controller' => 'Jogos', 'action' => 'add'));
        Router::connect('/novadev', array('controller' => 'Equipes', 'action' => 'add'));
        Router::connect('/novaDev', array('controller' => 'Equipes', 'action' => 'add'));
        Router::connect('/editarmeusjogos', array('controller' => 'Jogos', 'action' => 'editMeus'));
        Router::connect('/meusdownloads', array('controller' => 'Downloads', 'action' => 'index'));
        Router::connect('/meusjogos', array('controller' => 'Jogos', 'action' => 'meusJogos'));
        Router::connect('/usuarios/editar/:nome_amigavel', array('controller' => 'usuarios', 'action' => 'edit'),array('pass'=>array('nome_amigavel')));
        Router::connect('/Sair', array('controller' => 'Usuarios', 'action' => 'logout'));
        Router::connect('/Login', array('controller' => 'Usuarios', 'action' => 'login'));
        Router::connect('/jogos/visualizar/:nome_amigavel', array('controller' => 'Jogos', 'action' => 'view'),    array('pass' => array('nome_amigavel')));
        Router::connect('/desenvolvedoras/visualizar/:nome_amigavel', array('controller' => 'Equipes', 'action' => 'view'),    array('pass' => array('nome_amigavel')));
        Router::connect('/desenvolvedoras/editar/:nome_amigavel', array('controller' => 'Equipes', 'action' => 'edit'),    array('pass' => array('nome_amigavel')));
        Router::connect('/desenvolvedoras', array('controller' => 'Equipes', 'action' => 'index'));
        Router::connect('/jogos/generos/:genero', array('controller' => 'Jogos', 'action' => 'index'),    array('pass' => array('genero')));
        Router::connect('/jogos/editar/:nome_amigavel', array('controller' => 'Jogos', 'action' => 'edit'),    array('pass' => array('nome_amigavel')));
        Router::connect('/', array('controller' => 'Home', 'action' => 'inicio'));
        
        
/**
 * ...and connect the rest of 'Pages' controller's URLs.
 */
//	Router::connect('/pages/*', array('controller' => 'pages', 'action' => 'display'));

/**
 * Load all plugin routes. See the CakePlugin documentation on
 * how to customize the loading of plugin routes.
 */
	CakePlugin::routes();

/**
 * Load the CakePHP default routes. Only remove this if you do not want to use
 * the built-in default routes.
 */
	require CAKE . 'Config' . DS . 'routes.php';
