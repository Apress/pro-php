<?php
$client = new SoapClient('demo.wsdl', array('trace'=>true));
$response = $client->Demo('abcdefg');

print($client->__getLastRequest());
print($client->__getLastResponse());

echo $response;