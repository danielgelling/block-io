<?php

class BlockIO
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
		Http::get('', []);
	}
}
