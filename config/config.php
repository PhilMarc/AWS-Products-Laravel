<?php

return [
	/*
	* Your access key.  
	*/
	'AWS_API_KEY' => env('AWS_API_KEY', ''),

	/*
	* Your secret key.
	*/
	'AWS_API_SECRET_KEY' => env('AWS_API_SECRET_KEY', ''),

	/*
	* Your affiliate associate tag.
	*/
	'AWS_ASSOCIATE_TAG' => env('AWS_ASSOCIATE_TAG', ''),

	/*
	* Preferred locale
	* Example: de, com, co.uk, ca, fr, co.jp, it, cn, es, in, com.br, com.mx, com.au
	*/
	'ENDPOINT' => env('AWS_ENDPOINT', 'com'),

	/*
	*/
	'REQUEST' => env('AWS_REQUEST', '\ApaiIO\Request\Rest\Request'),

	/*
	*/
	'RESPONSE' => env('AWS_RESPONSE', '')
];
