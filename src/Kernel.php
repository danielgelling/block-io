<?php

namespace BlockIO;

class Kernel
{
	private $apiKey;
	private $pin;
	private $version;
	private $connection;

	public function __construct($apiKey, $pin, $version)
	{
		$this->apiKey = $apiKey;
		$this->pin = $pin;
		$this->version = $version;
		$this->connect();
	}

	private function connect()
	{
		$this->connection = new Http($this->apiKey, $this->pin, $this->version);
	}

	public function get_balance()
	{
		return $this->connection->get('https://block.io/api/v2/get_balance/', ['api_key' => $this->apiKey]);
	}
}
