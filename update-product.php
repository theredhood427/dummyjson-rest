<?php
require_once "vendor/autoload.php";
  
use GuzzleHttp\Client;
  
$client = new Client([
    // Base URI is used with relative requests
    'base_uri' => 'https://dummyjson.com/',
]);
  
$options = [
	‘json’ => [
		‘key’ => ‘value’
	]
];
$response = $client->put('http://httpbin.org/put', $options);

  
$body = $response->getBody();
$arr_body = json_decode($body);
print_r($arr_body);