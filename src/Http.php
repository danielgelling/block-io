<?php

class Http
{
	public static function get($url, $parameters = [])
	{
		$curl = curl_init();

		foreach($parameters as $parameter => $value)
		{
			if(!isset($c))
				$url .= '&' . $parameter . '=' . $value;
			else
				$url .= '?' . $parameter . '=' . $value;

			$c = true;
		}

		curl_setopt_array($curl, array(
			CURLOPT_RETURNTRANSFER => 1,
			CURLOPT_URL => $url,
		));

		$response = curl_exec($curl);
		curl_close($curl);

		return $response;
	}
}
