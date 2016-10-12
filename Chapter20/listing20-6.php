<?php

//Normal session calls, first call creates session
$client = new SoapClient('demo.wsdl');
echo $client->demo('a'); //1
echo $client->demo('a'); //2

//Get the session id from the client cookies
$session_id = $client->_cookies['PHPSESSID'][0];

/*
  Sometime later, like in another request,
  you might create a new SoapClient.
*/
$client2 = new SoapClient('demo.wsdl');

/*
  To resume the session, set the session
  id for client2 manually using __setCookie
*/
$client2->__setCookie('PHPSESSID', $session_id);

echo $client2->demo('a'); //3
echo $client2->demo('a'); //4

/*
  A new client without setting the session
  cookie will start a new session
*/
$client3 = new SoapClient('demo.wsdl');
echo $client3->demo('a'); //1