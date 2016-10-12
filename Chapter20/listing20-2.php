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

function GetCallDetailRecords($subscriber) {

  /*
    This data would normally come from a database
    using the data in $subscriber as a predicate
  */
  $records = array();
  $records[] = new CallDetailRecord(
                 '20070509T21:48:00-07:00',
                 '3600',
                 '123-123-1234',
                 '123-123-1235'
               );
  $records[] = new CallDetailRecord(
                 '20070509T22:58:00-07:00',
                 '3600',
                 '123-123-1234',
                 '123-123-1236'
               );

  return $records;
}

$server = new SoapServer('PhoneCompany.wsdl');
$server->addFunction('GetCallDetailRecords');
$server->handle();