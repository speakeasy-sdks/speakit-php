<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace speakit\Petstore;

class SDKConfiguration
{
	public ?\GuzzleHttp\ClientInterface $defaultClient = null;
	public ?\GuzzleHttp\ClientInterface $securityClient = null;
	
	public string $serverUrl = '';
	public int $serverIndex = 0;
	public string $language = 'php';
	public string $openapiDocVersion = '1.0.0-alpha.10';
	public string $sdkVersion = '1.2.0';
	public string $genVersion = '2.37.0';

	public function getServerUrl(): string
	{
		
		if ($this->serverUrl !== '') {
			return $this->serverUrl;
		};
		return Petstore::SERVERS[$this->serverIndex];
	}
	
}