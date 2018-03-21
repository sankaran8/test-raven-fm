<?php

class Http
{
	public static $emissary = 'http://emissary:8080';

 	public static function response(array $data)
 	{
 		$ch = curl_init(self::$emissary);
		# Setup request to send json via POST.
		$payload = json_encode($data);
		print_r($payload);
		curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST"); 
		curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);
		curl_setopt($ch, CURLOPT_HTTPHEADER, [
			'Content-Type:application/json',
			'Content-Length: ' . strlen($payload),                             
		]);
		# Return response instead of printing.
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ch, CURLOPT_VERBOSE, true);
		# Send request.
		$result = curl_exec($ch);
		curl_close($ch);
		# Print response.

		return $result;
 	}

 }
