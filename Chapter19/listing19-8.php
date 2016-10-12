<?php
$wsdl = "http://webservices.amazon.com/AWSECommerceService/AWSECommerceService.wsdl";

$client = new SoapClient($wsdl);

$namedParameters = array(
  'AWSAccessKeyId' => 'YOUR_ACCESS_KEY',
  'Request' => array(
                 'Title' => 'Pro PHP',
                 'SearchIndex' => 'Books',
                 'ResponseGroup' => 'Small',
                 'Publisher' => 'Apress'
               )
);

$response = $client->ItemSearch($namedParameters);
var_dump($response);
