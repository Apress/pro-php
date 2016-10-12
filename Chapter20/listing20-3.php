$client = new SoapClient('PhoneCompany.wsdl', array('trace'=>true));

var_dump($client->__getTypes());

try {
  $response = $client->GetCallDetailRecords('A-121-332');
  var_dump($response);
} catch (SoapFault $sf) {
  var_dump($sf);
  print($client->__getLastRequest());
  print($client->__getLastResponse());
}