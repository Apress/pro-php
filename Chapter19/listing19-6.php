<?php
$client = new SoapClient('demo.wsdl');
$response = $client->Demo('abcdefg');
echo $response;