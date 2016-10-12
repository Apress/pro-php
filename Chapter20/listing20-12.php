<?php

$client = new SoapClient('photo.wsdl', array('trace'=>true));

$fileData = base64_encode(file_get_contents('test.png'));
echo "Input: ";
echo md5_file('test.png');

echo " Output: ";
echo $client->AddPhoto($fileData) ."\n";