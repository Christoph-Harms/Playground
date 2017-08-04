<?php
namespace Playground\Providers;

use Plenty\Plugin\ServiceProvider;

/**
 * Class PlaygroundServiceProvider
 * @package HelloWorld\Providers
 */
class PlaygroundServiceProvider extends ServiceProvider
{

	/**
	 * Register the service provider.
	 */
	public function register()
	{
		$this->getApplication()->register(PlaygroundRouteServiceProvider::class);
	}
}
