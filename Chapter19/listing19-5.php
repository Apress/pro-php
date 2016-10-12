<?php

function Demo($param1) {
  return 'Request received with param1 = '. $param1;
}

$server = new SoapServer('demo.wsdl');
$server->addFunction('Demo');
$server->handle();
