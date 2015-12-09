<?php

namespace BlockIO;

class Http
{
	public function __construct($apiKey, $pin, $version)
	{
		$this->apiKey = $apiKey;
		$this->pin = $pin;
		$this->version = $version;
	}

	public function get($url, $params = [])
	{
		$url = 'https://block.io/api/v' . 
				$this->version . '/' . $url . '?api_key=' . 
				$this->apiKey . '&pin=' . $this->pin;

		$curl = curl_init();

		foreach($params as $param => $value)
		{
			if(is_array($value))
				$value = implode(',', $value);

			$url .= '&' . $param . '=' . $value;
		}

		curl_setopt_array($curl, array(
			CURLOPT_RETURNTRANSFER => 1,
			CURLOPT_URL => $url,
		));

		$response = curl_exec($curl);
		curl_close($curl);

		return json_decode($response);
	}
}
