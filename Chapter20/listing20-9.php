class Service {

  private $counter=1;

  function Demo($param1) {
    return $this->counter++;
  }
}

ini_set('soap.wsdl_cache_enabled', '0');
$server = new SoapServer('demo.wsdl');
$server->setClass("Service");
$server->setPersistence(SOAP_PERSISTENCE_SESSION);
$server->handle();