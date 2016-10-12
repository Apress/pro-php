<?php

function Demo($param1) {
  session_start();
  if(!array_key_exists('counter', $_SESSION)) {
    $_SESSION['counter'] = 1;
  }
  return $_SESSION['counter']++;
}

$server = new SoapServer('demo.wsdl');
$server->addFunction('Demo');
$server->handle();