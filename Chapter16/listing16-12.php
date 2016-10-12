public function jsonAction() {
  $this->getHelper('ViewRenderer')->setNoRender();

  //Simulate a JSON input value
  $jsonInput = '[0,1,2,3]';

  //Decode JSON to a PHP array
  $phpArray = Zend_Json::decode($jsonInput);

  //Do a PHP operation
  shuffle($phpArray);

  //Encode the data for output
  $jsonOutput = Zend_Json::encode($phpArray);

  //Get the response object and set content type HTTP header
  $response = $this->getResponse();
  $response->setHeader('Content-Type', 'application/json');

  //Make sure the JSON is the only output data
  $response->clearBody();
  //Set the response body to the JSON code
  $response->setBody($jsonOutput);
}