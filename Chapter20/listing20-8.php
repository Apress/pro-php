<?php

class Service {
  function Demo($param1) {
    session_start();
    if(!array_key_exists('counter', $_SESSION)) {
      $_SESSION['counter'] = 1;
    }
    return $_SESSION['counter']++;
  }
}

ini_set('soap.wsdl_cache_enabled', '0');
$server = new SoapServer('demo.wsdl');
$server->setClass("Service");
$server->handle();