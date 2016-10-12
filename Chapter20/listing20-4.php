<?php

class CallDetailRecord {
  public $StartTime, $Duration, $Caller, $Callee;

  public function __construct($startTime, $duration, $caller, $callee) {
    $this->StartTime = $startTime;
    $this->Duration = $duration;
    $this->Caller = $caller;
    $this->Callee = $callee;
  }
}

$classmap = array('CallDetailRecord'=>'CallDetailRecord');
$client = new SoapClient(
            'PhoneCompany.wsdl',
            array(
             'trace'=>true,
             'classmap'=>$classmap
            )
          );
$response = $client->GetCallDetailRecords('A-121-332');

var_dump($response);
