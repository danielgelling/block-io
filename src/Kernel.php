<?php

namespace BlockIO;

class Kernel
{
	private $apiKey;
	private $pin;
	private $version;

	public function __construct($apiKey, $pin, $version)
	{
		$this->apiKey = $apiKey;
		$this->pin = $pin;
		$this->version = $version;
	}

	public function get_balance()
	{
		return Http::get('https://block.io/api/v2/get_balance/', ['api_key' => $this->apiKey]);
	}
}
