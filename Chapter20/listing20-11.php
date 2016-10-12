<?php

class Photo {
  function AddPhoto($photo) {
    $fileData = base64_decode($photo);
    return md5($fileData);
  }
}

$server = new SoapServer('photo.wsdl');
$server->setClass("Photo");
$server->handle();