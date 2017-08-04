<?php
namespace Playground\Providers;

use Plenty\Plugin\RouteServiceProvider;
use Plenty\Plugin\Routing\Router;

/**
 * Class PlaygroundRouteServiceProvider
 * @package HelloWorld\Providers
 */
class PlaygroundRouteServiceProvider extends RouteServiceProvider
{
	/**
	 * @param Router $router
	 */
	public function map(Router $router)
	{
		$router->get('hello', 'Playground\Controllers\ContentController@sayHello');
	}

}
