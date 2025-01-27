<?php 

namespace src;

use MF\Init\Bootstrap;

class Routes extends Bootstrap {

	public function initRoutes()
	{
		$routes[] = array(
			'route' => '/',
			'controller' => 'LoginController',
			'action' => 'login'
		);

		$routes[] = array(
			'route' => '/logout',
			'controller' => 'LoginController',
			'action' => 'logout'
		);

		$routes[] = array(
			'route' => '/categorias',
			'controller' => 'CadastrosController',
			'action' => 'categorias'
		);

		$routes[] = array(
			'route' => '/cad_categorias',
			'controller' => 'CadastrosController',
			'action' => 'cadastrarCategorias'
		);

		$routes[] = array(
			'route' => '/movimentos',
			'controller' => 'CadastrosController',
			'action' => 'movimentos'
		);

		$routes[] = array(
			'route' => '/cad_movimentos',
			'controller' => 'CadastrosController',
			'action' => 'cadastrarMovimentos'
		);

		$routes[] = array(
			'route' => '/investimentos',
			'controller' => 'CadastrosController',
			'action' => 'investimentos'
		);

		$routes[] = array(
			'route' => '/cad_investimentos',
			'controller' => 'CadastrosController',
			'action' => 'cadastrarInvestimentos'
		);

		$routes[] = array(
			'route' => '/home',
			'controller' => 'HomeController',
			'action' => 'home'
		);

		$routes[] = array(
			'route' => '/movimentos_mensais',
			'controller' => 'CadastrosController',
			'action' => 'movimentosMensais'
		);

		$routes[] = array(
			'route' => '/cad_movimentos_mensais',
			'controller' => 'CadastrosController',
			'action' => 'cadastrarMovimentosMensais'
		);

		$routes[] = array(
			'route' => '/objetivos',
			'controller' => 'CadastrosController',
			'action' => 'objetivos'
		);

		$routes[] = array(
			'route' => '/cad_objetivos',
			'controller' => 'CadastrosController',
			'action' => 'cadastrarObjetivos'
		);

		$routes[] = array(
			'route' => '/orcamento',
			'controller' => 'CadastrosController',
			'action' => 'orcamento'
		);

		$routes[] = array(
			'route' => '/cad_orcamento',
			'controller' => 'CadastrosController',
			'action' => 'cadastrarOrcamento'
		);

		$routes[] = array(
			'route' => '/importar_orcamento',
			'controller' => 'CadastrosController',
			'action' => 'importarOrcamento'
		);

		$routes[] = array(
			'route' => '/indicadores_index',
			'controller' => 'ConsultasController',
			'action' => 'indicadores'
		);

		$routes[] = array(
			'route' => '/contas_investimentos_index',
			'controller' => 'ConsultasController',
			'action' => 'investimentos'
		);

		$routes[] = array(
			'route' => '/orcamento_index',
			'controller' => 'ConsultasController',
			'action' => 'orcamento'
		);

		$this->setRoutes($routes);
	}
}