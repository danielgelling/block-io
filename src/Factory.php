<?php

namespace BlockIO;

class Factory
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

	/**
	*
	* Address methods
	*
	**/

	public function get_balance()
	{
		return $this->connection->get('get_balance');
	}

	public function get_new_address($params = [])
	{
		return $this->connection->get('get_new_address', $params);
	}

	public function get_my_addresses()
	{
		return $this->connection->get('get_my_addresses');
	}

	public function get_address_balance($params = [])
	{
		return $this->connection->get('get_address_balance', $params);
	}

	public function get_address_by_label($params)
	{
		return $this->connection->get('get_address_by_label', $params);
	}

	/**
	*
	* Withdrawal methods
	*
	**/

	public function withdraw($params)
	{
		return $this->connection->get('withdraw', $params);
	}

	public function withdraw_from_addresses($params)
	{
		return $this->connection->get('withdraw_from_addresses', $params);
	}

	public function withdraw_from_labels($params)
	{
		return $this->connection->get('withdraw_from_labels', $params);
	}

	public function get_network_fee_estimate($params)
	{
		return $this->connection->get('get_network_fee_estimate', $params);
	}

	/**
	*
	* Archive methods
	*
	**/

	public function archive_addresses($params)
	{
		return $this->connection->get('archive_addresses', $params);
	}

	public function unarchive_addresses($params)
	{
		return $this->connection->get('unarchive_addresses', $params);
	}

	public function get_my_archived_addresses($params)
	{
		return $this->connection->get('get_my_archived_addresses', $params);
	}

	/**
	*
	* Current price methods
	*
	**/

	public function get_current_price($params = [])
	{
		return $this->connection->get('get_current_price', $params);
	}

	/**
	*
	* BlockIO Green address methods
	*
	**/

	public function is_green_address($params)
	{
		return $this->connection->get('is_green_address', $params);
	}

	public function is_green_transaction($params)
	{
		return $this->connection->get('is_green_transaction', $params);
	}

	/**
	*
	* Transaction methods
	*
	**/

	public function get_transactions($params)
	{
		return $this->connection->get('get_transactions', $params);
	}

	/**
	*
	* Webhook methods
	*
	**/

	public function create_notification($params)
	{
		return $this->connection->get('get_transactions', $params);
	}



}
