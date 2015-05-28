<?php

use Guzzle\Cache\DoctrineCacheAdapter;
use Guzzle\Http\Client;

class HomeController extends BaseController
{

	/**
	 * @var Client
	 */
	private $guzzle;

	public function __construct(Client $guzzle)
	{

		$this->guzzle = $guzzle;
	}

	public function isOut()
	{
		if (!Cache::has('releases'))
		{
			$response = $this->guzzle->get('https://github.com/laravel/framework/releases')->send();
			Cache::put('releases', $response->getBody(true), 1);
		}

		if (preg_match('/v5.1', Cache::get('releases')))
		{
			return View::make('yes');
		}

		return View::make('no');
	}

	public function yes()
	{
		return View::make('yes');
	}

	public function no()
	{
		return View::make('no');
	}

}
