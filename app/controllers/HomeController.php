<?php

use Guzzle\Cache\DoctrineCacheAdapter;
use Guzzle\Http\Client;
use Guzzle\Plugin\Cache\CachePlugin;
use Guzzle\Plugin\Cache\DefaultCacheStorage;
use Doctrine\Common\Cache\FilesystemCache;

class HomeController extends BaseController {

	/**
	 * @var Client
	 */
	private $guzzle;

	public function __construct(Client $guzzle){

		$this->guzzle = $guzzle;
	}

	public function yasalio()
	{
		if (!Cache::has('releases')){
			$response = $this->guzzle->get('https://github.com/laravel/framework/releases')->send();
			Cache::put('releases', $response->getBody(true), 2);
		}

		if (preg_match('/v5/', Cache::get('releases'))){
			die('SI');
		}
		die('NO');
	}

}
